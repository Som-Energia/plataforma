<?php
/**
 * Validate an Elgg database
 *
 * @license MIT license http://opensource.org/licenses/MIT
 * @author Cash Costello
 * @copyright Cash Costello 2010-2014
 */

set_time_limit(0);

echo "<h3>" . elgg_echo('dbvalidate:users') . "</h3>";

$users = dbvalidate_count_bad_users();

// write html for bad users
if ($users) {
	echo "<ul>";
		echo "<li>";
		echo elgg_echo('dbvalidate:badusers:count', array($users));
		echo "</li>";
	echo "</ul>";
} else {
	echo elgg_echo('dbvalidate:nobadusernames');
	echo "<br />";
}

echo "<br />";

echo "<h3>" . elgg_echo('dbvalidate:entities') . "</h3>";


$incomplete_entities = dbvalidate_count_incomplete_entities();

// write html for incomplete entities
if ($incomplete_entities) {
	echo "<ul>";
		echo "<li>";
		echo elgg_echo('dbvalidate:incomplete_entities:count', array($incomplete_entities));
		echo "</li>";
	echo "</ul>";
} else {
	echo elgg_echo('dbvalidate:noincompleteentities');
	echo "<br />";
}

$entities = dbvalidate_count_bad_entities();

// write html for bad entities
if ($entities) {
	echo "<ul>";
		echo "<li>";
		echo elgg_echo('dbvalidate:badentities:count', array($entities));
		echo "</li>";
	echo "</ul>";
} else {
	echo elgg_echo('dbvalidate:nobadowners');
}

echo "<br />";


exit;
