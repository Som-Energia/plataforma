<?php
/**
 * CRUD -- Page navigation for list of all CRUD objects
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
 *
 * @uses $vars['selected'] Name of the tab that has been selected
 * @uses $vars['crud'] Crud metadata object
 */

$crud = $vars['crud'];
$container_guid = elgg_get_page_owner_guid();
$msg_prefix = "$crud->module:$crud->crud_type:section";

$tabs = array('all' => array(
                'text' => elgg_echo($msg_prefix.':all'),
                'href' => $crud->crud_type.'/owner/'.$container_guid.'?filter=all',
                'priority' => 200,
        ));
$tab_var = $crud->variables[$crud->list_tabs];
$tab_options = $tab_var['options'];

$selected = $vars['selected'];
if (!$selected) {
	$selected = 'all';
}

$priority = 300;

foreach($tab_options as $tab_option) {
	$tabs[$tab_option] = array(
                'text' => elgg_echo("$msg_prefix:$tab_option"),
                'href' => $crud->crud_type.'/owner/'.$container_guid.'?filter='.$tab_option,
                'priority' => $priority,
        );
	$priority += 100;
}


foreach ($tabs as $name => $tab) {
	$tab['name'] = $name;

	if ($selected == $name) {
		$tab['selected'] = true;
	}

	elgg_register_menu_item('filter', $tab);
}

echo elgg_view_menu('filter', array('sort_by' => 'priority', 'class' => 'elgg-menu-hz'));
