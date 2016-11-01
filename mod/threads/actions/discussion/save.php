<?php
/**
 * Topic save action
 *
 * @override mod/groups/actions/discussion/save.php
 */

// Get variables
$title = htmlspecialchars(get_input('title', '', false), ENT_QUOTES, 'UTF-8');
$desc = get_input("description");
$status = get_input("status");
$access_id = (int) get_input("access_id");
$container_guid = (int) get_input('container_guid');
$guid = (int) get_input('topic_guid');
$tags = get_input("tags");

elgg_load_library('elgg:threads');
elgg_make_sticky_form('topic');

// validation of inputs
if (!$title || !$desc) {
	register_error(elgg_echo('discussion:error:missing'));
	forward(REFERER);
}

$container = get_entity($container_guid);
if (!$container || !$container->canWriteToContainer(0, 'object', 'groupforumtopic')) {
	register_error(elgg_echo('discussion:error:permissions'));
	forward(REFERER);
}

// check whether this is a new topic or an edit
$new_topic = true;
if ($guid > 0) {
	$new_topic = false;
}

$tags = explode(",", $tags);

$options = array(
		'title' => $title,
		'description' => $desc,
		'status' => $status,
		'access_id' => $access_id,
		'container_guid' => $container_guid,
		'tags' => $tags	);

$topic_guid = threads_create($guid, $options);
if (!$topic_guid) {
	register_error(elgg_echo('discussion:error:notsaved'));
	forward(REFERER);
}

// topic saved so clear sticky form
elgg_clear_sticky_form('topic');


// handle results differently for new topics and topic edits
if ($new_topic) {
	system_message(elgg_echo('discussion:topic:created'));
	add_to_river('river/object/groupforumtopic/create', 'create', elgg_get_logged_in_user_guid(), $topic_guid);
} else {
	system_message(elgg_echo('discussion:topic:updated'));
}

forward(get_entity($topic_guid)->getURL());
