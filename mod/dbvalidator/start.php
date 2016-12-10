<?php
/**
 * Validate and repair an Elgg database
 *
 * @license MIT license http://opensource.org/licenses/MIT
 * @author Cash Costello
 * @copyright Cash Costello 2010-2014
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
	$db_prefix = elgg_get_config('dbprefix');
	
	$query = "SELECT * from {$db_prefix}users_entity WHERE username=''";
	$users = get_data($query);
	return $users;
}

/**
 * Count users without a username
 */
function dbvalidate_count_bad_users() {
	$db_prefix = elgg_get_config('dbprefix');
	
	$query = "SELECT COUNT(ue.guid) as count from {$db_prefix}users_entity ue WHERE username=''";
	$users = get_data($query);
	return $users[0]->count;
}

function dbvalidate_fix_bad_users() {
	$db_prefix = elgg_get_config('dbprefix');
	$query = "UPDATE {$db_prefix}users_entity ue SET ue.username = CONCAT('dbvfixeduser', ue.guid) WHERE ue.username = ''";
	update_data($query);
}

function dbvalidate_count_bad_entities() {

	$db_prefix = elgg_get_config('dbprefix');

	$query = "SELECT COUNT(e.guid) as count from {$db_prefix}entities e "
	. "LEFT JOIN {$db_prefix}entities o ON e.owner_guid = o.guid "
	. "WHERE (e.type='object' OR e.type='group') AND (o.guid IS NULL OR o.guid = 0)";
	
	$result = get_data($query);
	$num_entities = $result[0]->count;
	
	return $num_entities;
}

function dbvalidate_fix_bad_entities() {
	$db_prefix = elgg_get_config('dbprefix');
	
	$guid = elgg_get_logged_in_user_guid();
	
	$query = "UPDATE {$db_prefix}entities e LEFT JOIN {$db_prefix}entities o ON e.owner_guid = o.guid"
	. " SET e.owner_guid = {$guid}"
	. " WHERE (e.type = 'object' OR e.type='group') AND (o.guid IS NULL OR o.guid = 0)";
	
	update_data($query);
}

/**
 * Look for entities with an owner that cannot be loaded
 */
function dbvalidate_get_bad_entities() {
	global $ENTITY_CACHE;

	$access_status = access_get_show_hidden_status();
	access_show_hidden_entities(true);

	$db_prefix = elgg_get_config('dbprefix');

	_elgg_services()->db->disableQueryCache();

	$query = "SELECT COUNT(*) as total from {$db_prefix}entities WHERE type='object' OR type='group'";
	$result = get_data_row($query);
	$num_entities = $result->total;

	$bad_guids = array();

	// handle 1000 at time
	$count = 0;
	$step = 1000;
	while ($count < $num_entities) {
		// flush caches so that we don't have memory issues
		$ENTITY_CACHE = array();

		$query = "SELECT guid, owner_guid from {$db_prefix}entities WHERE type='object' OR type='group' LIMIT $count, $step";
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

	_elgg_services()->db->enableQueryCache();
	access_show_hidden_entities($access_status);

	return $bad_guids;
}


/**
 * Looks for entities without a corresponding entry in the correct type table.
 */
function dbvalidate_count_incomplete_entities() {

	$db_prefix = elgg_get_config('dbprefix');

	$types = array('user', 'site', 'group', 'object');

	$total = 0;
	
	foreach ($types as $type) {
		// thank you for consistent table naming
		$query = "SELECT count(e.guid) as count FROM {$db_prefix}entities e WHERE e.type='{$type}'
			AND NOT EXISTS (SELECT t.guid FROM {$db_prefix}{$type}s_entity t WHERE t.guid = e.guid)";

		if ($result = get_data($query)) {
			$total += $result[0]->count;
		}
	}

	return $total;
}


function dbvalidate_fix_incomplete_entities() {
	$db_prefix = elgg_get_config('dbprefix');

	$types = array('user', 'site', 'group', 'object');

	$total = 0;
	//1966915
	foreach ($types as $type) {
		// thank you for consistent table naming
		$query = "DELETE e.* FROM {$db_prefix}entities e WHERE e.type = '{$type}'"
		. " AND NOT EXISTS (SELECT t.guid as guid FROM {$db_prefix}{$type}s_entity t WHERE t.guid = e.guid)";

		delete_data($query);
	}

	return $total;
}


/**
 * Looks for entities without a corresponding entry in the correct type table.
 */
function dbvalidate_get_incomplete_entities() {
	$access_status = access_get_show_hidden_status();
	access_show_hidden_entities(true);

	$db_prefix = elgg_get_config('dbprefix');

	$types = array('user', 'site', 'group', 'object');
	$bad_guids = array();

	foreach ($types as $type) {
		// thank you for consistent table naming
		$query = "SELECT guid, type, subtype FROM {$db_prefix}entities WHERE type='{$type}'
			AND guid NOT IN (SELECT guid FROM {$db_prefix}{$type}s_entity)";

		if ($result = get_data($query)) {
			$bad_guids = array_merge($bad_guids, $result);
		}
	}

	access_show_hidden_entities($access_status);

	return $bad_guids;
}

/**
 * Get the object type or group as a string for a guid
 */
function dbvalidate_get_object_type($guid) {
	$db_prefix = elgg_get_config('dbprefix');
	
	$guid = (int)$guid;
	$query = "SELECT type, subtype FROM {$db_prefix}entities WHERE guid={$guid}";
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
