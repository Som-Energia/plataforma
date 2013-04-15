<?php
/**
 * Assemblies -- Group module view for assemblies
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

$group = elgg_get_page_owner_entity();

if ($group->assemblies_enable != "yes") {
	return true;
}

$assembly = assemblies_get_next_assembly($group);

$all_link = "";

if (!empty($assembly)) {
	$all_link .= elgg_view('output/url', array(
		'href' => "assembly/view/$assembly->guid",
		'text' => elgg_echo('assemblies:link:view'),
		'title' => elgg_echo('assemblies:link:view:tooltip'),
		'is_trusted' => true,
	));

	if ($assembly->canEdit()) {
		$all_link .= " ".elgg_view('output/url', array(
			'href' => "assembly/edit/$assembly->guid",
			'text' => elgg_echo('assemblies:link:edit'),
			'title' => elgg_echo('assemblies:link:edit:tooltip'),
			'is_trusted' => true,
		));
	}
}
$all_link .= " ".elgg_view('output/url', array(
	'href' => "assembly/owner/$group->guid",
	'text' => elgg_echo('link:view:all'),
	'title' => elgg_echo('assemblies:link:view:all:tooltip'),
	'is_trusted' => true,
));


$info = elgg_view("assemblies/group_module_box", array_merge($vars, array(
	'next_assembly' => $assembly,
	'box' => 'info',
	'entity' => $group,
	'class' => 'elgg-col elgg-col-1of5',
)));

$agenda = elgg_view("assemblies/group_module_box", array_merge($vars, array(
	'next_assembly' => $assembly,
	'box' => 'agenda',
	'entity' => $group,
	'class' => 'elgg-col elgg-col-3of5',
)));

$minutes = elgg_view("assemblies/group_module_box", array_merge($vars, array(
	'box' => 'minutes',
	'entity' => $group,
	'class' => 'elgg-col elgg-col-1of5',
)));

$content = $info . $agenda . $minutes;

$new_link = elgg_view('output/url', array(
        'href' => "assembly/add/$group->guid",
        'text' => ucfirst(elgg_echo('agenda_point:add')),
));

echo elgg_view('groups/profile/module', array(
	'title' => elgg_echo('assemblies:group'),
	'content' => $content,
	'all_link' => $all_link,
	#'add_link' => $new_link,
));
