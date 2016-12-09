<?php
/**
 * Elgg Tracker plugin
 * @license: GPL v 2.
 * @author slyhne
 * @copyright tiger-inc.eu
 * @link http://tiger-inc.eu
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
		$info = "<div class='even'><b>IP:</b> ";

		// Create info link
		// Get URL for IP information
		$info_url = sprintf(elgg_get_plugin_setting('tracker_url', 'tracker'), $ip_address);
		$info .= "<a href='$info_url' target='_blank' title='" . elgg_echo('tracker:moreinfo') . "' />" . elgg_echo('tracker:info') . "</a>";

		// Create tracker link
		$info .= " | ";
		$info .= elgg_view('output/url', array(
			'text' => $ip_address,
			'href' => "tracker/$ip_address",
			'is_trusted' => true,
		));
		// Create log link
		if (elgg_is_active_plugin('logbrowser')) {
			$log_url = "admin/administer_utilities/logbrowser?search_username=&ip_address=$ip_address&timelower=&timeupper=";
			$info .= " | ";
			$info .= elgg_view('output/url', array(
				'text' => elgg_echo('logbrowser:explore'),
				'href' => $log_url,
				'is_trusted' => true,
			));
		}
		$info .= "</div>";
	}

	// Display IP address
	echo $info;
}
