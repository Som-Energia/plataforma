<?php
/**
 * Validate and repair an Elgg database
 *
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Cash Costello
 * @copyright Cash Costello 2010-2011
 */

elgg_register_event_handler('init', 'system', 'dbvalidate_init');

/**
 * Initialize plugin
 */
function dbvalidate_init() {

	elgg_register_admin_menu_item('administer', 'dbvalidate', 'administer_utilities');

	elgg_register_js('dbvalidate', 'js/dbvalidate.js', 'footer');

	$action_path = dirname(__FILE__) . '/actions';
	elgg_register_action('dbvalidate/validate', "$action_path/validate.php", 'admin');
	elgg_register_action('dbvalidate/repair', "$action_path/repair.php", 'admin');
}

/**
 * Look for users without a username
 */
function dbvalidate_get_bad_users() {
	global $CONFIG;
	
	$query = "SELECT * from {$CONFIG->dbprefix}users_entity WHERE username=''";
	$users = get_data($query);
	return $users;
}

/**
 * Look for entities with an owner that cannot be loaded
 */
function dbvalidate_get_bad_entities() {
	global $ENTITY_SHOW_HIDDEN_OVERRIDE;
	global $CONFIG;
	global $DB_QUERY_CACHE, $DB_PROFILE, $ENTITY_CACHE;

	$ENTITY_SHOW_HIDDEN_OVERRIDE = TRUE;
	$query = "SELECT COUNT(*) as total from {$CONFIG->dbprefix}entities WHERE type='object' OR type='group'";
	$result = get_data_row($query);
	$num_entities = $result->total;

	$bad_guids = array();

	// handle 1000 at time
	$count = 0;
	$step = 1000;
	while ($count < $num_entities) {
		// flush caches so that we don't have memory issues
		$DB_QUERY_CACHE = $DB_PROFILE = $ENTITY_CACHE = array();

		$query = "SELECT guid, owner_guid from {$CONFIG->dbprefix}entities WHERE type='object' OR type='group' LIMIT $count, $step";
		$guids = get_data($query);
		$count = $count += $step;

		// looking for 0 owner or an owner that cannot be loaded
		foreach ($guids as $guid) {
			if ($guid->owner_guid == 0) {
				$bad_guids[] = $guid->guid;
			} else if (!get_entity($guid->owner_guid)) {
				$bad_guids[] = $guid->guid;
			}
		}

	}

	return $bad_guids;
}

/**
 * Looks for entities without a corresponding entry in the correct type table.
 */
function dbvalidate_get_incomplete_entities() {
	global $CONFIG;

	$types = array('user', 'site', 'group', 'object');
	$bad_guids = array();

	foreach ($types as $type) {
		$ENTITY_SHOW_HIDDEN_OVERRIDE = TRUE;

		// thank you for consistent table naming
		$query = "SELECT guid, type, subtype FROM {$CONFIG->dbprefix}entities WHERE type='{$type}'
			AND guid NOT IN (SELECT guid FROM {$CONFIG->dbprefix}{$type}s_entity)";

		if ($result = get_data($query)) {
			$bad_guids = array_merge($bad_guids, $result);
		}
	}

	return $bad_guids;
}

/**
 * Get the object type or group as a string for a guid
 */
function dbvalidate_get_object_type($guid) {
	global $CONFIG;
	
	$guid = (int)$guid;
	$query = "SELECT type, subtype FROM {$CONFIG->dbprefix}entities WHERE guid={$guid}";
	$result = get_data_row($query);
	
	if ($result->type == 'group') {
		return "group";
	}

	$subtype = get_subtype_from_id($result->subtype);
	if ($subtype) {
		return $subtype;
	}

	return "unknown";
}

/**
 * Quick wrapper to give me true/false on existence of username
 */
function dbvalidate_test_username_avail($username) {
	if (get_user_by_username($username)) {
		return false;
	}

	return true;
}
