<?php
/**
 * Assemblies -- General Assembly default view
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

elgg_load_library('elgg:assemblies');

$group = $vars['entity'];

// Grab variables
$periodicity = $group->assembly_periodicity;
$chat = $group->assembly_chat;
$streaming_url = $group->assembly_streaming;
$voip = $group->assembly_voip;
$assembly_location = $group->assembly_location;

// Grab next assembly and format title
$next_assembly = assemblies_get_next_assembly($group);
if ($next_assembly) {
	$title = $next_assembly->getTitleLink();;
	$next_assembly_url = elgg_view('output/url', array(
				'href' => "assembly/view/$next_assembly->guid",
				'text' => $title,
				));
}
// Show next assembly link
if ($next_assembly) {
	echo "<br/>";
	echo "<b>".elgg_echo('assemblies:next')."</b>";
	echo ": " . $next_assembly_url;
	echo "<br/>";
}
// Show general assembly settings
if ($assembly_location) {
	echo "<b>".elgg_echo('assemblies:assembly_location')."</b>";
	echo ": " . $assembly_location;
	echo "<br/>";
}
if ($periodicity) {
	echo "<b>".elgg_echo('assemblies:periodicity')."</b>";
	echo ": " . $periodicity;
	echo "<br/>";
}
if ($chat) {
	echo "<b>".elgg_echo('assemblies:chat')."</b>";
	echo ": " . $chat;
	echo "<br/>";
}
if ($streaming_url) {
	echo "<b>".elgg_echo('assemblies:streaming')."</b>";
	echo ": " . $streaming_url;
	echo "<br/>";
}
if ($voip) {
	echo "<b>".elgg_echo('assemblies:voip')."</b>";
	echo ": " . $voip;
}
