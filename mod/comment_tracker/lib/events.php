<?php

/**
 * Subscribe owners to their own content
 *
 * By default content owners receive personal notifications based on the
 * notification settings provided by Elgg core. Comment tracker provides
 * a site-wide setting that allows it to be used as alternate subscription
 * method. If the setting is enabled, this handler takes care of subscribing
 * the owner to receive the notifications through comment tracker.
 *
 * @param string     $event  'create'
 * @param string     $type   'object'
 * @param ElggObject $object The object being created
 */
function comment_tracker_subscribe_owner_automatically($event, $type, $object) {
	$notify_owner = elgg_get_plugin_setting('notify_owner', 'comment_tracker');

	if ($notify_owner !== 'yes') {
		// The setting is not enabled
		return true;
	}

	if (!in_array($object->getSubtype(), comment_tracker_get_entity_subtypes())) {
		// Comment tracker does not currently support this content type
		return true;
	}

	$owner = $object->getOwnerEntity();

	comment_tracker_subscribe($owner->guid, $object->guid);
}


/**
 * auto subscribe user on content they commented on
 * 
 * @param type $event
 * @param type $type
 * @param type $comment
 */
function comment_tracker_autosubscribe($event, $type, $comment) {
	if (!$comment instanceof ElggComment) {
		return true;
	}
	
	$user = $comment->getOwnerEntity();
	$entity = $comment->getContainerEntity();
	$autosubscribe = elgg_get_plugin_user_setting('comment_tracker_autosubscribe', $user->guid, 'comment_tracker');
	
	if ($autosubscribe == 'no') {
		//user has disabled autosubscribe
		return true;
	}
	
	if (comment_tracker_is_unsubscribed($user, $entity)) {
		// user has specifically unsubscribed
		return true;
	}
	
	// all conditions have been met, subscribe the user to the comment container
	comment_tracker_subscribe($user->guid, $entity->guid);
}
