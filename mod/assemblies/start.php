<?php
/**
 * Assemblies -- Essentials for group decision making
 *
 * @package        Lorea
 * @subpackage     Assemblies
 * @homepage       http://lorea.org/plugin/assemblies
 * @copyright      2011-2013 Lorea Faeries <federation@lorea.org>
 * @license        COPYING, http://www.gnu.org/licenses/agpl
 *
 * Copyright 2011-2013 Lorea Faeries <federation@lorea.org>
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

elgg_register_event_handler('init', 'system', 'assemblies_init');

/**
 * Init assemblies plugin.
 */
function assemblies_init() {
	
	if (!elgg_is_active_plugin('crud')) {
		return;
	}

	elgg_register_library('elgg:assemblies', elgg_get_plugins_path() . 'assemblies/lib/assemblies.php');

	// add to the main css
	elgg_extend_view('css/elgg', 'assemblies/css');

	// notifications
	register_notification_object('object', 'assembly', elgg_echo('assemblies:newpost'));
	elgg_register_plugin_hook_handler('notify:entity:message', 'object', 'assemblies_notify_message');

	// handler for link to assembly menu item
	elgg_register_plugin_hook_handler('crud:decision:view_buttons', 'view_buttons', 'assemblies_decision_view_buttons');

	// Add group option
	add_group_tool_option('assemblies', elgg_echo('assemblies:enableassemblies'), false);
	#elgg_extend_view('groups/tool_latest', 'assemblies/group_module');
	elgg_extend_view('groups/profile/summary','assemblies/group_module');

	// add a assemblies widget
	elgg_register_widget_type('assembly', elgg_echo('assemblies'), elgg_echo('assemblies:widget:description'));

	// register actions
	$action_path = elgg_get_plugins_path() . 'assemblies/actions/assemblies';
	elgg_register_action("assemblies/link", "$action_path/link.php");
	//elgg_register_action('assemblies/save', "$action_path/save.php");
	//elgg_register_action('assemblies/delete', "$action_path/delete.php");

	// entity menu
	elgg_register_plugin_hook_handler('register', 'menu:entity', 'assemblies_entity_menu_setup');

	// ecml
	elgg_register_plugin_hook_handler('get_views', 'ecml', 'assemblies_ecml_views_hook');

	// specific actions
	$action_path = elgg_get_plugins_path() . 'assemblies/actions/assemblies';
	elgg_register_action("assemblies/general", "$action_path/general.php");
	// data types
	$variables = array(
		'title' => array(
			'type' => 'text',
			'default_value' => elgg_echo('assemblies:general_assembly'),
		),
		'category' => array(
			'type' => 'tags',
			'default_value' => 'informativos, debate',
		),
		#'description' => 'longtext',
		'date' => 'date',
		'time' => 'time',
		'location' => 'text',
		#'tags' => 'tags',
		'access_id' => 'access',
	);
	
	$crud = crud_register_type('assembly', $variables, 'ElggAssembly');
	$crud->children_type = 'decision';
	$crud->children_categories = 'category';
	$crud->module = 'assemblies';
	$crud->list_order = 'date';
	$crud->list_order_direction = 'DESC';
	$crud->owner_menu = 'group';
	$crud->title_extend = 'date';
	$crud->list_tabs = 'date';
	
	$variables = array(
		'title' => 'text',
		'description' => 'longtext',
		'proposal' => array(
			'type' => 'longtext',
			'embedded' => 'description',
		),
		#'date' => 'date',
		'status' => array(
			'type' => 'crud/select',
			'default_value' => 'new',
			'options' => array('draft', 'new', 'accepted', 'discarded', 'delayed'),
		),
		'category' => array(
			'type' => 'crud/parentselect',
			'property' => 'category',
		),
		'mode' => array(
			'type' => 'crud/select',
			'default_value' => 'conjunctural',
			'options' => array('permanent', 'conjunctural'),
		),
		'tags' => 'tags',
		'access_id' => 'access',
	);
	
	if (elgg_is_active_plugin('crud')) {
		$crud = crud_register_type('decision', $variables);
		#$crud->children_type = 'agenda_point';
		$crud->module = 'assemblies';
		$crud->embed = 'firstchild';
		$crud->icon_var = 'status';
		$crud->list_tabs = 'status';
	}

}

/**
 * Add particular assembly links/info to entity menu
 */
function assemblies_entity_menu_setup($hook, $type, $return, $params) {
	if (elgg_in_context('widgets')) {
		return $return;
	}

	$entity = $params['entity'];
	$handler = elgg_extract('handler', $params, false);
	if ($handler != 'assembly') {
		return $return;
	}

	return $return;
}

/**
 * Set the notification message body
 * 
 * @param string $hook    Hook name
 * @param string $type    Hook type
 * @param string $message The current message body
 * @param array  $params  Parameters about the assembly posted
 * @return string
 */
function assembly_notify_message($hook, $type, $message, $params) {
	$entity = $params['entity'];
	$to_entity = $params['to_entity'];
	$method = $params['method'];
	if (elgg_instanceof($entity, 'object', 'assembly')) {
		$descr = $entity->excerpt;
		$title = $entity->title;
		$owner = $entity->getOwnerEntity();
		return elgg_echo('assembly:notification', array(
			$owner->name,
			$title,
			$descr,
			$entity->getURL()
		));
	}
	return null;
}

/**
 * Register assemblies with ECML.
 */
function assemblies_ecml_views_hook($hook, $entity_type, $return_value, $params) {
	$return_value['object/assembly'] = elgg_echo('assemblies:assemblies');

	return $return_value;
}

/**
 * Show button to link decision to next assembly
 */
function assemblies_decision_view_buttons($hook, $type, $return, $params) {
    $entity = $params['entity'];
    $group = $entity->getContainerEntity();
    if (empty($entity->parent_guid) && $group->assemblies_enable == "yes") {
        elgg_register_menu_item('title', array(
                                'name' => 'link',
                                'href' => "action/assemblies/link?guid=$entity->guid",
                                'text' => elgg_echo("assemblies:decision:link"),
                                'is_action' => true,
                                'link_class' => 'elgg-button elgg-button-action',
                        ));
    }
}

