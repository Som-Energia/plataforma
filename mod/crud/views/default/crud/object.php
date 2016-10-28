<?php
/**
 * CRUD -- Entity view
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
 * @uses $vars['entity']    The crud object
 * @uses $vars['full_view'] Whether to display the full view
 */

elgg_load_library('elgg:crud');

$full = elgg_extract('full_view', $vars, FALSE);
$entity = elgg_extract('entity', $vars, FALSE);

$object_subtype = $entity->getSubtype();

$expanded_text = get_input($object_subtype.'_expanded');
if ($expanded_text == 'yes') {
	$expanded = true;
}

$crud = $entity->getCrudTemplate();

$msg_prefix = $crud->getStringPrefix();
$child_subtype = $crud->children_type;

if (!$entity) {
	return TRUE;
}

// Show icon
if ($entity->getCrudIcon()) {
	$icon = elgg_view_entity_icon($entity, 'tiny');
}

// Owner link
$owner = get_entity($entity->owner_guid);
$owner_link = elgg_view('output/url', array(
	'href' => "crud/owner/$owner->username",
	'text' => $owner->name,
));

// Strapline (disabled for now) and tags
//$date = elgg_view_friendly_time($entity->time_status_changed);
//$strapline = elgg_echo("crud:strapline:$status", array($date, $owner_link));
$tags = elgg_view('output/tags', array('tags' => $entity->tags));

// Comments
$comments_count = $entity->countComments();
//only display if there are commments
if ($comments_count != 0) {
	$text = elgg_echo("comments") . " ($comments_count)";
	$comments_link = elgg_view('output/url', array(
		'href' => $entity->getURL() . '#crud-comments',
		'text' => $text,
	));
} else {
	$comments_link = '';
}

$subtitle = "$strapline $categories $comments_link";

// do not show the metadata and controls in widget view
if (elgg_in_context('widgets')) {
	$metadata = '';
}
else {
	$metadata = elgg_view_menu('entity', array(
		'entity' => $vars['entity'],
		'handler' => $object_subtype,
		'sort_by' => 'priority',
		'class' => 'elgg-menu-hz',
	));
}

// Show views
if ($full || $expanded) {
	$body = elgg_view($crud->crud_type . '/profile_extra', $vars);
	$body .= elgg_view('output/longtext', array('value' => $entity->description));

	$variables = elgg_view('crud/object_variables', array('entity' => $entity));

	if (!$expanded) {
		$title = false;
	}
	
	$subtext .= elgg_echo("$msg_prefix:owner", array($owner_link));
	$subtext .= $variables;

	$params = array(
		'entity' => $entity,
		'title' => $title,
		'metadata' => $metadata,
		'subtitle' => $subtext,
		'tags' => false,
	);
	$list_body = elgg_view('object/elements/summary', $params);

	$info = elgg_view_image_block($icon, $list_body);

	// Children
	if (!empty($child_subtype)) {
		$numchildren = $entity->getChildren(TRUE);;
		if ($crud->embed == 'firstchild' && $numchildren == 1) {
			$child = $entity->getEmbeddedChild();
			$title = elgg_echo("$msg_prefix:child");
			$content = elgg_view_entity($child, array('full_view'=>true));
		}
		else {
			$children = $entity->listChildren();

			$title = elgg_echo("$msg_prefix:children");
			if (!empty($children))
				$content .= $children;
			else
				$content .= elgg_echo("crud:$object_subtype:nochildren");
		}
		$children_content = '<div class="crud-children">';
		$children_content .= "<h3>$title</h3>";
		$children_content .= $content;
		$children_content .= '</div>';
	}


	echo <<<HTML
$info
$body
$children_content
HTML;

} else {
	// brief view
	$children_count = $entity->getChildren(TRUE);
	//only display if there are commments
	if ($children_count != 0) {
		$text = elgg_echo("$msg_prefix:children") . " ($children_count)";
		$children_link = elgg_view('output/url', array(
			'href' => $entity->getURL() . '#crud-children',
			'text' => $text,
		));
	} else {
		$children_link = '';
	}

	$subtitle = $children_link . "" . $subtitle; 
	$subtitle .= elgg_view($crud->crud_type . '/profile_extra', $vars);


	$excerpt = elgg_get_excerpt($entity->description);

	$params = array(
		'entity' => $entity,
		'metadata' => $metadata,
		'content' => $excerpt,
		'tags' => false,
	);


	// Format title
	$title_link = $entity->getTitleLink();

	$params['title'] = $title_link;

	// Format parent link
	if (elgg_get_context() == $crud->crud_type && $entity->parent_guid) {
		$parent = $entity->getParentEntity();
		if ($parent) {
			$parent_title = $parent->getTitleLink();
	
			$subtitle = elgg_echo("$crud->crud_type:childof", array($parent_title))."<br />".$subtitle;
		}
	}
	$params['subtitle'] = $subtitle;

	$params = $params + $vars;
	$list_body = elgg_view('object/elements/summary', $params);

	echo elgg_view_image_block($icon, $list_body);
}
