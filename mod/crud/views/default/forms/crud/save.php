<?php
/**
 * CRUD -- Edit CRUD form
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

$crud = $vars['crud'];
$crud_type = $crud->crud_type;
$entity = get_entity($vars['guid']);
$vars['entity'] = $entity;

$container_guid = $vars['container_guid'];
$parent_guid = $vars['parent_guid'];
$parent = get_entity($parent_guid);

$fields = elgg_get_config($crud_type);

if ($crud->embed && $entity) {
	$num_children = $entity->getChildren(TRUE);
	$embedded_child = $entity->getEmbeddedChild();
}

foreach ($fields as $name => $field) {
	
	$embedded = false;
	if (!is_array($field)) {
		$type = $field;
		$default_value = "";
		$field = array();
	} else {
		$type = elgg_extract('input_view', $field, elgg_extract('type', $field));
		$default_value = elgg_extract('default_value', $field, '');
		if (isset($field['embedded'])) {
			$embedded = $field['embedded'];
		}
		unset($field['input_view']);
		unset($field['output_view']);
		unset($field['default_value']);
	}

	// dont show control if parentselect type but no parent is defined.
	if ($type == 'crud/parentselect' && empty($parent)) {
		continue;
	}

	// dont show control for embedded children if there are more than 2
	if ($embedded && $num_children > 1) {
		continue;
	}
	
	echo '<div>';
	if ($type != 'hidden') {
		echo "<label>" . elgg_echo("$crud->module:$crud->crud_type:$name") . "</label>";
		if ($type != 'longtext') {
			echo '<br />';
		}
	}
	$value = $vars[$name];
	if ($embedded && $embedded_child) {
		$value = $embedded_child->$embedded;
	}
	echo elgg_view("input/$type", array_merge($field, array(
		'crud' => $crud,
		'name' => $name,
		'parent' => $parent,
		'value' => $value ? $value : $default_value,
	)));
	echo '</div>';
}

$action_buttons = '';
$delete_link = '';

if ($vars['guid']) {
	// add a delete button if editing
	$delete_url = "action/crud/delete?guid={$vars['guid']}";
	$delete_link = elgg_view('output/confirmlink', array(
		'href' => $delete_url,
		'text' => elgg_echo('delete'),
		'class' => 'elgg-button elgg-button-delete elgg-state-disabled float-alt'
	));
}

$save_button = elgg_view('input/submit', array(
	'value' => elgg_echo('save'),
	'name' => 'save',
));
$action_buttons = $save_button . $delete_link;

// hidden inputs
$container_guid_input = elgg_view('input/hidden', array('name' => 'container_guid', 'value' => $container_guid));
if (!empty($parent_guid)) {
	$parent_guid_input = elgg_view('input/hidden', array('name' => 'parent_guid', 'value' => $parent_guid));
}
$guid_input = elgg_view('input/hidden', array('name' => 'guid', 'value' => $vars['guid']));
$crud_input = elgg_view('input/hidden', array('name' => 'crud', 'value' => $crud_type));
if ($embedded_child) {
	$embed_input = elgg_view('input/hidden', array('name' => 'embed', 'value' => $embedded_child->guid));
}
		
echo <<<___HTML

<div class="elgg-foot">
	$guid_input
	$container_guid_input
	$parent_guid_input
	$crud_input
	$embed_input

	$action_buttons
</div>

___HTML;
