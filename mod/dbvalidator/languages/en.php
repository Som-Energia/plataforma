<?php
/**
 * English language file for database validator
 */

return array(

	'admin:administer_utilities:dbvalidate' => "Database cleaner",
	'dbvalidate:badusers:count' => "There are %s users without usernames",
	'dbvalidate:badentities:count' => "There are %s bad entities without owners",
	'dbvalidate:incomplete_entities:count' => "There are %s incomplete entities",

	'dbvalidate:title' => "Database utility",
	'dbvalidate:validate' => "Validate",
	'dbvalidate:repair' => "Repair",
	'dbvalidate:instructions' => "\"Validate\" checks for users without usernames, entities with bad owners, and incomplete entities. \"Repair\" fixes these problems. The users are assigned usernames of the form \"userxx\". Entities with bad owners are assigned to you and incomplete entities are removed.",

	'dbvalidate:users' => 'Users',
	'dbvalidate:entities' => 'Entities',
	'dbvalidate:GUID' => 'GUID: ',
	'dbvalidate:USERNAME' => 'USERNAME: ',

	'dbvalidate:badusernames' => "Users with no usernames",
	'dbvalidate:nobadusernames' => "No bad usernames.",
	'dbvalidate:fixbadusernames' => "Fixing users with no usernames",
	'dbvalidate:badowners' => "Entities with bad owners",
	'dbvalidate:nobadowners' => "No bad owners.",
	'dbvalidate:fixbadowners' => "Fixing entities with bad owners",
	'dbvalidate:newowner' => "You are now owner.",
	'dbvalidate:failowner' => "Failed to set owner.",
	'dbvalidate:done' => "Done!",
	'dbvalidate:type' => "Object type",
	'dbvalidate:incompleteentities' => 'Incomplete entities',
	'dbvalidate:noincompleteentities' => 'No incomplete entities.',
	'dbvalidate:fixincompleteentities' => 'Removing incomplete entities',
	'dbvalidate:removed' => 'Removed.'
);
