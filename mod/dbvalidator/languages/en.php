<?php
/**
 * English language file for database validator
 */

$english = array(

	'admin:administer_utilities:dbvalidate' => "Database cleaner",

	'dbvalidate:title' => "Database utility",
	'dbvalidate:validate' => "Validate",
	'dbvalidate:repair' => "Repair",
	'dbvalidate:instructions' => "Validate checks for users without usernames, entities with bad owners, and incomplete entities. Repair fixes these problems. The users are assigned usernames of the form \"userxx\". Entities with bad owners are assigned to you and incomplete entities are removed. Please backup your database before using the repair option.",
	'dbvalidate:badusernames' => "Users with no usernames",
	'dbvalidate:nobadusernames' => "No bad usernames",
	'dbvalidate:fixbadusernames' => "Fixing users with no usernames",
	'dbvalidate:badowners' => "Entities with bad owners",
	'dbvalidate:nobadowners' => "No bad owners",
	'dbvalidate:fixbadowners' => "Fixing entities with bad owners",
	'dbvalidate:newowner' => "you are now owner",
	'dbvalidate:failowner' => "failed to set owner",
	'dbvalidate:done' => "Done!",
	'dbvalidate:type' => "Object type",
	'dbvalidate:incompleteentities' => 'Incomplete entities',
	'dbvalidate:noincompleteentities' => 'No incomplete entities',
	'dbvalidate:fixincompleteentities' => 'Removing incomplete entities',
	'dbvalidate:removed' => 'Removed',

);

add_translation("en", $english);
