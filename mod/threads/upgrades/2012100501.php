<?php
/**
 * Move text of first annotation to group forum topic object and delete annotation
 *
 * First determine if the upgrade is needed and then if needed, batch the update
 */

global $MIGRATED;

$topics = elgg_get_entities(array(
	'type' => 'object',
	'subtypes' => array('groupforumpost'),
	'limit' => 1,
));

// if not topics, no upgrade required
if (!$topics) {
	error_log("Threads upgrade not needed");
	return;
}

/**
 * Condense first annotation into object
 *
 * @param ElggObject $topic
 */
function threads_groupforumtopic_2012100501($topic) {
	require_once(elgg_get_plugins_path() . 'upgrade-tools/lib/upgrade_tools.php');
	$first_post = current($topic->getEntitiesFromRelationship('group_discussion_top_level_post', false, 1));
	global $MIGRATED;
	$MIGRATED += 1;
	if ($topic->migrated == 1) {
		return true;
	}
	if ($MIGRATED %100 == 0)
		error_log("topic $topic->guid $first_post->guid");
	if ($first_post) {
		$annotations = $first_post->getAnnotations('group_topic_post');
		$description = "";
		foreach($annotations as $annotation) {
			if ($annotation->value) {
				$description = $annotation->value;
			}
		}
		$topic->description = $description;
		$topic->migrated = 1;
		$topic->save();
		// delete the first post, we dont need it any more
		$first_post->delete();

		// update river
		$options = array('object_guid' => $topic->guid);
		$items = elgg_get_river($options);
		foreach($items as $item) {
			if ($item->action_type == 'create') {
				upgrade_update_river($item->id, 'river/object/groupforumtopic/create', $topic->guid, 0);
			}
		}
	}

	return true;
}

function threads_groupforumpost_2012100501($post) {
	require_once(elgg_get_plugins_path() . 'upgrade-tools/lib/upgrade_tools.php');
	global $MIGRATED;
	$MIGRATED += 1;
	if ($MIGRATED %100 == 0)
		error_log("post $post->guid");
	// get content from annotations and copy into description
	$annotations = $post->getAnnotations('group_topic_post');
	foreach($annotations as $annotation) {
		if ($annotation->value) {
			$post->description = $annotation->value;
		}
		$annotation->delete();
	}

	// fix relationships
	$topic = current($post->getEntitiesFromRelationship('group_discussion_top_level_post', true));
	if ($topic) {
		// top level post
		$topic->removeRelationship($post->guid, 'group_discussion_top_level_post');
		$parent = $topic;

	}
	else {
		// reply
		$topic = current($post->getEntitiesFromRelationship('group_discussion_topic_link', true));
		$parent = current($post->getEntitiesFromRelationship('group_discussion_reply_post', true));
		if ($topic)
			$topic->removeRelationship($post->guid, 'group_discussion_topic_link');
		if ($parent)
			$parent->removeRelationship($post->guid, 'group_discussion_reply_post');
	}
	if ($parent) {
		$post->addRelationship($parent->guid, 'parent');
	}
	if ($topic) {
		$post->addRelationship($topic->guid, 'top');
	}
	$post->save();
	upgrade_change_subtype($post, 'topicreply');

	// update river
	$options = array('object_guid' => $post->guid);
	$items = elgg_get_river($options);
	foreach($items as $item) {
		upgrade_update_river($item->id, 'river/forum/create', $topic->guid, $post->guid);
	}

	return true;
}

function threads_group_option_2012100501($group) {
        if ($group->threaded_forums_enable) {
                $group->forum_enable = $group->threaded_forums_enable;
                $group->deleteMetadata('threaded_forums_enable');
        }
}


/*
 * Run upgrade. First topics, then replies.
 */
foreach(array('groupforumtopic', 'groupforumpost') as $type) {
	$MIGRATED = 0;
	$options = array(
		'type' => 'object',
		'subtype' => $type,
		'limit' => 0,
	);
	$previous_access = elgg_set_ignore_access(true);
	if ($type == 'groupforumpost')
		$batch = new ElggBatch('elgg_get_entities', $options, "threads_{$type}_2012100501", 10, false);
	else
		$batch = new ElggBatch('elgg_get_entities', $options, "threads_{$type}_2012100501", 10);
	elgg_set_ignore_access($previous_access);

	if ($batch->callbackResult) {
		error_log("Elgg Threads upgrade $type (201210050) succeeded");
	} else {
		error_log("Elgg Threads upgrade $type (201210050) failed");
	}
}


/* Ser group option */
$options = array(
        'type' => 'group',
        'limit' => 0,
);

$previous_access = elgg_set_ignore_access(true);
$batch = new ElggBatch('elgg_get_entities', $options, "threads_group_option_2012100501", 100);
elgg_set_ignore_access($previous_access);

if ($batch->callbackResult) {
        error_log("Threads group option upgrade (201210050) succeeded");
} else {
        error_log("Threads group option upgrade (201210050) failed");
}


