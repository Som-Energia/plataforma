<?php
/**
 * Elgg Tracker plugin
 * @license: GPL v 2.
 * @author slyhne
 * @copyright Zurf.dk
 * @link http://zurd.dk/elgg
 */

// Only admins should see this
if (elgg_is_admin_logged_in()) {
	// Get GUID of the user who owns this profile
	$owner_guid = $vars['entity']->guid;
 
	// Get owner entity
	$owner = get_user($owner_guid);
 
	// Get IP address
	$ip_address = $owner->ip_address;
	if (empty($ip_address)) {
		// Display error text
		$ip_address = elgg_echo('tracker:none:recorded');
		$info = "<small>IP: {$ip_address}</small>";
	} else {
		// Get URL for IP information
		$tracker_url = sprintf(elgg_get_plugin_setting('tracker_url', 'tracker'), $ip_address);
		// Create tracker link
		$tracker_link = "<a href=\"$tracker_url\" target=\"_blank\" title=\"" . elgg_echo('tracker:moreinfo') . "\" />" . elgg_echo('tracker:info') . "</a>";
		$info = "<div class='even'><b>IP:</b> ";
		$info .= "<a href='". elgg_get_site_url() . "tracker/$ip_address'>$ip_address</a>";
		$info .= " | $tracker_link</div>";
	}

	// Display IP address
	echo $info;
}                          

