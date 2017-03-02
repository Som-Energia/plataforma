<?php
/**
 * List owned groups
 *
 * @package ElggGroupOperators
 */

global $CONFIG;

$page_owner = elgg_get_page_owner_entity();

if ($page_owner->guid == elgg_get_logged_in_user_guid()) {
	$title = elgg_echo('groups:owned');
} else {
	$title = elgg_echo('groups:owned:user', array($page_owner->name));
}
elgg_push_breadcrumb($title);

elgg_register_title_button('groups');

$groups_i_own_params = array(
	'type' => 'group',
	'owner_guid' => $page_owner->guid,
);

$groups_i_operate_params = array(
	'type' => 'group',
	'relationship' => 'operator',
	'relationship_guid' => $page_owner->guid,
);

$groups_i_own_count = elgg_get_entities($groups_i_own_params + array(
	'count' => true,
));

$groups_i_operate_count = elgg_get_entities_from_relationship($groups_i_operate_params + array(
	'count' => true,
));

$offset = max((int)get_input('offset'), 0);
$entities = elgg_get_entities($groups_i_own_params + array(
	'offset' => $offset,
	'limit' => 10,
));

if (10 - count($entities) > 0) {
	$entities = array_merge(
		$entities,
		elgg_get_entities_from_relationship($groups_i_operate_params + array(
			'offset' => max($offset - $groups_i_own_count, 0),
			'limit' => 10 - count($entities),
		))
	);
}
$content = elgg_view_entity_list($entities, array(
	'full_view' => false,
	'count' => $groups_i_own_count + $groups_i_operate_count,
	'offset' => $offset,
	'limit' => 10,
));

if (!$content) {
	$content = elgg_echo('groups:none');
}

$params = array(
	'content' => $content,
	'title' => $title,
	'filter' => '',
);
$body = elgg_view_layout('content', $params);

echo elgg_view_page($title, $body);
