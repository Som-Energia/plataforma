<?php
/**
 * CRUD -- select UI for parent object
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

$varname = $vars['name'];

$crud = $vars['crud'];
$parent = $vars['parent'];

$data = $crud->getVariableData($varname);
$property_name = $data['property'];
$values = $parent->$property_name;

$options_values = array();
foreach($values as $option) {
	//$options_values[$option] = elgg_echo("$crud->module:$crud->crud_type:$option"); 
	$options_values[$option] = $option; 
}
unset($vars['options']);
$vars['options_values'] = $options_values;

echo elgg_view('input/dropdown', $vars);
