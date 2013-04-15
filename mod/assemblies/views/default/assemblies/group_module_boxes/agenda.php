<?php
/**
 * Assemblies -- Agenda group module
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

echo "<b>".elgg_echo("assemblies:agenda")."</b>";

$group = elgg_get_page_owner_entity();

// Get next assembly
$assembly = $vars['next_assembly'];
if (!empty($assembly)) {
	$children = $assembly->getChildren();
	echo "<ul>";
	foreach ($children as $child) {
		echo "<li>".$child->getTitleLink()."</li>";
	}
	echo "</ul>";

	echo "<hr /><p>".elgg_view('output/url', array(
		'href' => "decision/add/$assembly->guid",
		'text' => ucfirst(elgg_echo('decision:add'))."</p>",
	));


} else {
	echo "<p>".elgg_echo("assemblies:none")."</p>";
}

