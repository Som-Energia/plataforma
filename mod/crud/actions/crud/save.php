<?php
/**
 * CRUD -- Create and Update actions
 *
 * @package        Lorea
 * @subpackage     CRUD
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

elgg_load_library('elgg:crud');

$crud_type = get_input('crud');
$embed_guid = get_input('embed');
$crud = crud_get_handler($crud_type);

$msg_prefix = $crud->module.":$crud_type";

$variables = elgg_get_config($crud_type);
$input = array();
$embedded_variables = array();

foreach ($variables as $name => $field) {
	if (!is_array($field)) {
		$type = $field;
	} else {
		$type = $field['type'];
		if (!empty($field['embedded'])) {
			$embedded_variables[] = $name;
		}
	}

	$input[$name] = get_input($name);
	if ($name == 'title') {
		$input[$name] = strip_tags($input[$name]);
	}
	if ($type == 'tags') {
		$input[$name] = string_to_tag_array($input[$name]);
	}
	if ($type == 'date') {
		$input[$name] = strtotime($input[$name]." ".date_default_timezone_get());
	}
	if ($type == 'time') {
		$input[$name] = get_input($name . '_hour') * 60 + get_input($name . '_minute');
	}
}

// Get guids
$entity_guid = (int)get_input('guid');
$container_guid = (int)get_input('container_guid');
$parent_guid = (int)get_input('parent_guid');

elgg_make_sticky_form($crud_type);

/*if (!$input['title']) {
	register_error(elgg_echo($msg_prefix.':error:no_title'));
	forward(REFERER);
}*/

if ($entity_guid) {
	$entity = get_entity($entity_guid);
	if (!$entity || !$entity->canEdit()) {
		register_error(elgg_echo($msg_prefix.':error:no_save'));
		forward(REFERER);
	}
	$new_entity = false;
} else {
	$entity = new ElggObject();
	$entity->subtype = $crud_type;
	$new_entity = true;
}

$embedded_child = NULL;
if ($embed_guid && !$new_entity) {
	$embedded_child = get_entity($embed_guid);
	if ($embedded_child->parent_guid != $entity->guid) {
		register_error(elgg_echo($msg_prefix.':error:incoherency'));
		forward(REFERER);
	}
}

if (sizeof($input) > 0) {
	foreach ($input as $name => $value) {
		if (!empty($value) && in_array($name, $embedded_variables)) {
			// embedded variable
			if (!$embedded_child) {
				$embedded_child = new ElggObject();
				$embedded_child->subtype = $crud->children_type;
				$embedded_child->title = $input['title'];
			}
			$name = $variables[$name]['embedded'];
			$embedded_child->$name = $value;
		}
		else {
			// not embedded
			$entity->$name = $value;
		}
	}

}

// set parent if set
if (!empty($parent_guid)) {
	$entity->parent_guid = $parent_guid;
}

// need to add check to make sure user can write to container
$entity->container_guid = $container_guid;

if ($entity->save()) {
	if ($embedded_child) {
		$embedded_child->parent_guid = $entity->guid;
		$embedded_child->access_id = $entity->access_id;
		$embedded_child->container_guid = $container_guid;
		$embedded_child->save();
	}

	elgg_clear_sticky_form($crud_type);

	system_message(elgg_echo($msg_prefix.':saved'));

	if ($new_entity) {
		add_to_river('river/object/crud/create', 'create', elgg_get_logged_in_user_guid(), $entity->guid);
	}
	else {
		add_to_river('river/object/crud/create', 'edited', elgg_get_logged_in_user_guid(), $entity->guid);
	}

	forward($entity->getURL());
} else {
	register_error(elgg_echo($msg_prefix.':error:no_save'));
	forward(REFERER);
}
