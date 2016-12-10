<?php

/**
 * Check whether user has subscribed
 *
 * @param ElggUser   $user   The user
 * @param ElggEntity $entity The target entity
 * @return bool
 */
function comment_tracker_is_subscribed($user, $entity) {
	if (!$user instanceof ElggUser) {
		return false;
	}

	if (!$entity instanceof ElggEntity) {
		return false;
	}

	$result = check_entity_relationship($user->guid, COMMENT_TRACKER_RELATIONSHIP, $entity->guid);

	$params = array(
		'user' => $user,
		'entity' => $entity,
	);

	// allow other plugins to affect the behaviour
	return elgg_trigger_plugin_hook('subscription_check', 'comment_tracker', $params, $result);
}

/**
 * Check whether user has explicitly unsubscribed
 *
 * @param ElggUser   $user   The user
 * @param ElggEntity $entity The target entity
 * @return bool
 */
function comment_tracker_is_unsubscribed($user, $entity) {
	if (!$user instanceof ElggUser) {
		return false;
	}

	if (!$entity instanceof ElggEntity) {
		return false;
	}

	$result = (bool)check_entity_relationship($user->guid, COMMENT_TRACKER_UNSUBSCRIBE_RELATIONSHIP, $entity->guid);

	$params = array(
		'user' => $user,
		'entity' => $entity,
	);

	// allow other plugins to affect the behaviour
	return elgg_trigger_plugin_hook('unsubscription_check', 'comment_tracker', $params, $result);
}

/**
 * Subscribe user to notifications
 *
 * @param int $user_guid   The user that it subscribing
 * @param int $entity_guid The entity being subscribed to
 * @return bool
 */
function comment_tracker_subscribe($user_guid, $entity_guid) {
	if (!elgg_is_logged_in()) {
		return false;
	}

	if (empty($entity_guid)) {
		return false;
	}

	if (empty($user_guid)) {
		$user_guid = elgg_get_logged_in_user_guid();
	}

	if (!check_entity_relationship($user_guid, COMMENT_TRACKER_RELATIONSHIP, $entity_guid)) {
		// Possible subscription block is not needed anymore
		remove_entity_relationship($user_guid, COMMENT_TRACKER_UNSUBSCRIBE_RELATIONSHIP, $entity_guid);

		return add_entity_relationship($user_guid, COMMENT_TRACKER_RELATIONSHIP, $entity_guid);
	}

	return false;
}

/**
 * Unsubscribe user from notifications
 *
 * @param int $user_guid   The user that unsubscribes
 * @param int $entity_guid The entity being unsubscribed from
 * @return bool
 */
function comment_tracker_unsubscribe($user_guid, $entity_guid) {
	if (!elgg_is_logged_in()) {
		return false;
	}

	if (empty($entity_guid)) {
		return false;
	}

	if (empty($user_guid)) {
		$user_guid = elgg_get_logged_in_user_guid();
	}

	if (check_entity_relationship($user_guid, COMMENT_TRACKER_RELATIONSHIP, $entity_guid)) {
		// Prevent automatic subscription
		add_entity_relationship($user_guid, COMMENT_TRACKER_UNSUBSCRIBE_RELATIONSHIP, $entity_guid);

		return remove_entity_relationship($user_guid, COMMENT_TRACKER_RELATIONSHIP, $entity_guid);
	}

	return false;
}

/**
 * Get object subtypes that can be subscribed to
 *
 * Pre-populates the list with some common plugin objects and allows
 * other plugins to add/remove subtypes vie plugin hook.
 *
 * @return array $subscription_subtypes
 */
function comment_tracker_get_entity_subtypes() {
	static $subscription_subtypes;

	if (!$subscription_subtypes) {
		$base_types = array(
			'blog',
			'bookmarks',
			'event_calendar',
			'discussion',
			'file',
			'groupforumtopic',
			'image', // tidypics
			'page',
			'page_top',
			'poll',
		);

		// other plugins can add allowed object subtypes in this hook
		$subscription_subtypes = elgg_trigger_plugin_hook('subscription_types', 'comment_tracker', array(), $base_types);
	}

	return $subscription_subtypes;
}
