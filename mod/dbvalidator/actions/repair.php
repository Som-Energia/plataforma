<?php
/**
 * Validate and repair an Elgg database
 *
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Cash Costello
 * @copyright Cash Costello 2010
 */

/*
 * Yes, these chunks of html creation could be moved to views.
 */

set_time_limit(0);

$users = dbvalidate_get_bad_users();

// repair bad users - give them new usernames
if ($users !== false && count($users) > 0) {
	$user_count = 1;
	echo elgg_echo('dbvalidate:fixbadusernames');
	echo "<ul>";
	foreach ($users as $user) {
		// create new username
		$new_username = 'user' . $user_count;
		$user_count = $user_count + 1;
		while (!dbvalidate_test_username_avail($new_username)) {
			$new_username = 'user' . $user_count;
			$user_count = $user_count + 1;
		}
		$entity = get_user($user->guid);
		$entity->username = $new_username;
		$entity->save();
		echo "<li>GUID: $entity->guid  USERNAME: $entity->username </li>";
	}
	echo "</ul>";
}

echo "<br />";


$bad_guids = dbvalidate_get_bad_entities();

// write html for bad entities - they get assigned to admin running this
if (count($bad_guids) > 0) {
	$new_guid = get_loggedin_userid();
	echo elgg_echo('dbvalidate:fixbadowners');
	echo "<ul>";
	foreach ($bad_guids as $guid) {
		$query = "UPDATE {$CONFIG->dbprefix}entities set owner_guid={$new_guid} WHERE guid={$guid}";
		$ret = update_data($query);
		echo "<li>";
		if ($ret) {
			echo "GUID: {$guid} - " . elgg_echo('dbvalidate:newowner');
		} else {
			echo "GUID: {$guid} - " . elgg_echo('dbvalidate:failowner');
		}
		echo "</li>";
	}
	echo "</ul>";
}

echo "<br />";

$incomplete_entities = dbvalidate_get_incomplete_entities();

// write html for incomplete entities - delete them
if ($incomplete_entities !== false && count($incomplete_entities) > 0) {
	echo elgg_echo('dbvalidate:fixincompleteentities');
	echo "<ul>";
	foreach ($incomplete_entities as $entity) {
		echo "<li>";
		echo "GUID: {$entity->guid}, " . elgg_echo('dbvalidate:type') . ": {$entity->type}";
		if ($subtype = get_subtype_from_id($entity->subtype)) {
			echo ":$subtype";
		}
		$query = "DELETE FROM {$CONFIG->dbprefix}entities WHERE guid = {$entity->guid} LIMIT 1";
		if (delete_data($query)) {
			echo ' ' . elgg_echo('dbvalidate:removed');
		}

		echo "</li>";
	}
	echo "</ul>";
}

echo "<br />";


echo elgg_echo('dbvalidate:done');

exit;