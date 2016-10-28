<?php
/**
 * CRUD -- display content-based tags
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
 * Generally used in a sidebar. Does not work with groups currently.
 *
 * @uses $vars['subtypes']   Object subtype string or array of subtypes
 * @uses $vars['owner_guid'] The owner of the content being tagged
 * @uses $vars['limit']      The maxinum number of tags to display
 */

$owner_guid = elgg_extract('owner_guid', $vars, ELGG_ENTITIES_ANY_VALUE);
if (!$owner_guid) {
	$owner_guid = ELGG_ENTITIES_ANY_VALUE;
}

$owner_entity = get_entity($owner_guid);

$options = array(
	'type' => 'object',
	'subtype' => elgg_extract('subtypes', $vars, ELGG_ENTITIES_ANY_VALUE),
	'container_guid' => $owner_guid,
	'threshold' => 0,
	'limit' => elgg_extract('limit', $vars, 50),
	'tag_name' => 'tags',
);

$title = elgg_echo('tagcloud');
if (is_array($options['subtype']) && count($options['subtype']) > 1) {
	// we cannot provide links to tagged objects with multiple types
	$tag_data = elgg_get_tags($options);
	$cloud = elgg_view("output/tagcloud", array(
		'value' => $tag_data,
		'type' => $type,
	));
} else {
	$cloud = elgg_view_tagcloud($options);
}
if (!$cloud) {
	return true;
}

// add a link to all site tags
$cloud .= '<p class="small">';
$cloud .= elgg_view_icon('tag');
$cloud .= elgg_view('output/url', array(
	'href' => 'tags',
	'text' => elgg_echo('tagcloud:allsitetags'),
	'is_trusted' => true,
));
$cloud .= '</p>';


echo elgg_view_module('aside', $title, $cloud);
