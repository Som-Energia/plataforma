<?php
/**
 * CRUD -- Create, Read, Update, Delete: a RESTful plugin for Elgg.
 *
 * @package        Lorea
 * @subpackage     CRUD
 * @homepage       http://lorea.org/plugin/crud
 * @copyright      2012-2013 Lorea Faeries <federation@lorea.org>
 * @license        COPYING, http://www.gnu.org/licenses/agpl
 *
 * Copyright 2012-2013 Lorea Faeries <federation@lorea.org>
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Affero General Public License
 * as published by the Free Software Foundation, either version 3 of
 * the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with this program. If not, see
 * <http://www.gnu.org/licenses/>.
 */

elgg_register_event_handler('init', 'system', 'crud_init');

/**
 * Format and return the URL for crud object.
 *
 * @param ElggObject $entity Assembly object
 * @return string URL of crud object.
 */
function crud_url_handler($entity) {
	if (!$entity->getOwnerEntity()) {
		// default to a standard view if no owner.
		return FALSE;
	}
	/*if (!$entity->testAssembly()) {
		return FALSE;
	}*/
	//$friendly_title = elgg_get_friendly_title($entity->title);

	return $entity->getSubtype()."/view/{$entity->guid}";
}


/**
 * CRUD page handler
 *
 * URLs take the form of
 *  List crud objects in group:   <crud_type>/owner/<guid>
 *  View crud object:             <crud_type>/view/<guid>
 *  Add crud object:              <crud_type>/add/<guid>
 *  Edit crud object:             <crud_type>/edit/<guid>
 *
 * @param array $page Array of url segments for routing
 * @return bool
 */
function crud_page_handler($page) {

	elgg_load_library('elgg:crud');

	if (!isset($page[0])) {
		$page[0] = 'all';
	}

	$page_url = current_page_url();
	$site_url = elgg_get_site_url();
	$current_url = str_replace($site_url, "", $page_url);
	$crud_type = current(explode('/', $current_url));
	$crud_handler = crud_get_handler($crud_type);
	$crud_module = $crud_handler->module;

	elgg_push_breadcrumb(elgg_echo($crud_module), '');

	switch ($page[0]) {
		case 'owner':
		case 'group':
			crud_handle_list_page($crud_handler, $page[1]);
			break;
		case 'add':
			crud_handle_edit_page($crud_handler, 'add', $page[1]);
			break;
		case 'edit':
			crud_handle_edit_page($crud_handler, 'edit', $page[1]);
			break;
		case 'view':
			crud_handle_view_page($crud_handler, $page[1]);
			break;
		case 'edit_general':
			crud_handle_edit_page($crud_handler, 'edit_general', $page[1]);
			break;
		default:
			return false;
	}
	return true;
}

/**
 * Register a crud class
 */
function crud_register_type($name, $variables, $class=NULL) {
	crud_register_subtype($name, $class);

	$object = crud_get_handler($name);

	$prev_variables = elgg_get_config($name);
	if (!empty($prev_variables)) {
		$variables = array_merge($prev_variables, $variables);
	}
	elgg_set_config($name, $variables);
	$object->variables = $variables;

	if (empty($prev_variables)) {
		// Register for search.
		elgg_register_entity_type('object', $name);

		// routing of urls
		elgg_register_page_handler($name, 'crud_page_handler');

		// override the default url to view a crud object
		elgg_register_entity_url_handler('object', $name, 'crud_url_handler');

		$action_path = elgg_get_plugins_path() . 'crud/actions/crud';
		elgg_register_action("$name/save", "$action_path/save.php");
		elgg_register_action("$name/delete", "$action_path/delete.php");

		// icon url override
 	        elgg_register_plugin_hook_handler('entity:icon:url', 'object', 'crud_icon_url_override');
	}
	return $object;
}

/**
 * Override the default entity icon for crud entities
 *
 * @return string Relative URL
 */
function crud_icon_url_override($hook, $type, $returnvalue, $params) {
        $entity = $params['entity'];
        if ($entity instanceof CrudObject) {
		$size = $params['size'];
		if (!$size)
			$icon = 'tiny';
		$icon = $entity->getCrudIcon($size);
        }
	return $icon;
}

/**
 * Get the crud handler for a given type
 */
function crud_get_handler($name) {
	global $CONFIG;
	if (isset($CONFIG->crud->handlers[$name])) {
		return $CONFIG->crud->handlers[$name];
	}
	return $CONFIG->crud->handlers[$name] = new CrudTemplate($name);
}

/**
 * Owner block handler
 */
function crud_owner_block_menu($hook, $type, $return, $params) {
	global $CONFIG;
	
	foreach($CONFIG->crud->handlers as $handler_name => $handler) {
		if (!$handler->owner_menu) {
			continue;
		}
		
		if ($handler->owner_menu != 'group' && elgg_instanceof($params['entity'], 'user')) {
			$url = "$handler_name/owner/{$params['entity']->username}";
			$item = new ElggMenuItem($handler_name, elgg_echo($handler_name), $url);
			$return[] = $item;
		} elseif ($handler->owner_menu != 'user') {
			if ($handler->module_check)
				$enable = "{$handler->module_check}_enable";
			else
				$enable = "{$handler->module}_enable";
			if ($params['entity']->$enable == "yes") {
				$owner_label = ($handler->owner_menu == 'group') ? 'owner' : 'group';
				$url = "$handler_name/$owner_label/{$params['entity']->guid}/all";
				$item = new ElggMenuItem($handler_name, elgg_echo("$handler_name:group"), $url);
				$return[] = $item;
			}
		}
	}

	return $return;
}

/**
 * Init crud plugin.
 */
function crud_init() {
	global $CONFIG;
	$CONFIG->crud = new stdClass();
	$CONFIG->crud->handlers = array();
	
	elgg_register_library('elgg:crud', elgg_get_plugins_path() . 'crud/lib/crud.php');
	// add to the main css
	elgg_extend_view('css/elgg', 'crud/css');

	// register actions
	$action_path = elgg_get_plugins_path() . 'crud/actions/crud';
	elgg_register_action('crud/save', "$action_path/save.php");
	elgg_register_action('crud/delete', "$action_path/delete.php");

	elgg_register_plugin_hook_handler('register', 'menu:owner_block', 'crud_owner_block_menu');

}

/**
 * Register a crud subtype class into elgg engine
 */
function crud_register_subtype($name, $class_name=NULL) {
	if (empty($class_name))
		$class_name = "CrudObject";
	if (get_subtype_id('object', $name)) {
		if (get_subtype_class('object', $name) != $class_name) {
			update_subtype('object', $name, $class_name);
		}
	} else {
		add_subtype('object', $name, $class_name);
	}
}

