<?php

/**
 * Elgg custom index page
 * 
 */
elgg_push_context('front');

elgg_push_context('widgets');

$list_params = array(
    'type' => 'object',
    'limit' => 4,
    'full_view' => false,
    'view_type_toggle' => false,
    'pagination' => false,
);


//get the newest members who have an avatar
$newmembers = elgg_list_entities_from_metadata(array(
    'metadata_names' => 'icontime',
    'type' => 'user',
    'limit' => 5,
    'full_view' => false,
    'pagination' => false,
    'list_type' => 'gallery',
    'gallery_class' => 'elgg-gallery-users',
    'size' => 'small'));

$river = elgg_list_river(array(
      'pagination' => false,
      'limit' => 10,
    ));

//newest groups
unset($list_params['subtype']);
$list_params['type'] = 'group';
$groups = elgg_list_entities($list_params);

elgg_pop_context();

// lay out the content
$params = array(
    'members' => $newest_members,
    'activity' => $river,
    'groups' => $groups
);

$body = elgg_view_layout('somenergia_index', $params);

// no RSS feed with a "widget" front page
global $autofeed;
$autofeed = FALSE;

echo elgg_view_page('', $body);
