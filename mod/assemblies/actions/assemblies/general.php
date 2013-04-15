<?php
/**
 * Assemblies -- Create or edit a resource (CRUD Object)
 *
 * @package        Lorea
 * @subpackage     Assemblies
 *
 * Copyright 2012-2013 Lorea Faeries <federation@lorea.org>
 *
 * This file is part of the Assemblies plugin for Elgg.
 *
 * Assemblies is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * Assemblies is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with this program. If not, see
 * <http://www.gnu.org/licenses/>.
 */

$crud_type = get_input('crud');
$guid = get_input('guid');

$entity = get_entity($guid);
$crud = crud_get_handler($crud_type);

$msg_prefix = $crud->module.":general";

$variables = array('periodicity' => 'text',
		   'chat' => 'text',
		   'streaming' => 'text',
		   'voip' => 'text',
		   'location' => 'text');
$input = array();
foreach ($variables as $name => $type) {
	$input[$name] = get_input($name);
}

// Get guids
$group = (int)get_input('guid');

elgg_make_sticky_form('assemblies_general');

foreach($input as $name => $value) {
	$name = 'assembly_' . $name;
	$entity->$name = $value;
}

if ($entity->save()) {

	elgg_clear_sticky_form('assemblies_general');

	system_message(elgg_echo($msg_prefix.':saved'));

	/*if ($new_entity) {
		add_to_river('river/object/crud/create', 'create', elgg_get_logged_in_user_guid(), $entity->guid);
	}
	else {
		add_to_river('river/object/crud/create', 'edited', elgg_get_logged_in_user_guid(), $entity->guid);
	}*/

	forward('assembly/owner/'.$guid);
} else {
	register_error(elgg_echo($msg_prefix.':error:no_save'));
	forward(REFERER);
}
