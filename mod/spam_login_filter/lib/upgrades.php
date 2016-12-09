<?php

namespace Spam\LoginFilter;
use ElggBatch;


function upgrade_20141130() {
	$upgrade_version = get_upgrade_version();

	if ($upgrade_version >= UPGRADE_VERSION) {
		return true;
	}
	
	$site = elgg_get_site_entity();
	$dbprefix = elgg_get_config('dbprefix');
	
	// move ip tracking from heavy object entities to lighter-weight annotations
	$options = array(
		"type" => "object",
		"subtype" => "spam_login_filter_ip",
		'limit' => false
	);

	$batch = new ElggBatch('elgg_get_entities', $options, null, 50, false);
	
	$week_ago = time() - 604800; // just delete anything over a week old
	foreach ($batch as $e) {
		// create a new record as an annotation and delete the entity
		if ($e->time_created > $week_ago) {
			$id = $site->annotate('spam_login_filter_ip', $e->ip_address, ACCESS_PUBLIC);
			
			if ($id) {
				$sql = "UPDATE {$dbprefix}annotations SET time_created = {$e->time_created} WHERE id = {$id}";
				update_data($sql);
			}
		}
		
		$e->delete();
	}

	set_upgrade_version(20141130);
}