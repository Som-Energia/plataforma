<?php
/**
 * Assemblies -- Minutes module box
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

echo "<b>".elgg_echo("assemblies:minutes")."</b>";

$group = elgg_get_page_owner_entity();

// Get previous assemblies
$options = array('types' => 'object',
		 'subtypes' => 'assembly',
		 'limit' => 5,
		 'container_guid' => $group->guid,
		 'metadata_name_value_pairs' => array(
                                        array('name' => 'date',
                                                'value' => time(),
                                                'operand' => '<')
                                        ),
		 'order_by_metadata' => array('name' => 'date',
					      'direction' => 'DESC')
		);
$assemblies = elgg_get_entities_from_metadata($options);

if (count($assemblies)) {
	echo "<ul>";
	foreach ($assemblies as $assembly) {
		echo "<li>".elgg_view('output/url', array(
        		'href' => "assembly/view/$assembly->guid",
		        'text' => date("d.m.y", $assembly->date),
			))."</li>";
	}
	echo "</ul>";
} else {
	echo "<p>".elgg_echo("assemblies:none-previous")."</p>";
}
