<?php

namespace Spam\LoginFilter;
use ElggUser;

$deleted = false;

// Get the user
$guid = get_input('guid');
$obj = get_entity($guid);

if (!elgg_instanceof($obj, 'user')) {
	forward(REFERER);
}

$name = $obj->name;
$username = $obj->username;
$email = $obj->email;
$ip_address = $obj->ip_address;
$api_key = get_sfs_api_key();

if (empty($ip_address)) {
	register_error(elgg_echo('spam_login_filter:empty_ip_error'));
	forward(REFERER);
} else {
	if (elgg_get_plugin_setting('use_ip_blacklist_cache', PLUGIN_ID) == "yes") {
		// Blacklist the IP
		//Check if the ip exists
		$options = array(
			'guid' => elgg_get_site_entity()->guid,
			'annotation_name' => 'spam_login_filter_ip',
			'annotation_value' => $ip_address
		);

		$spam_login_filter_ip_list = elgg_get_annotations($options);

		if (!$spam_login_filter_ip_list) {
			//Create the banned ip
			elgg_get_site_entity()->annotate('spam_login_filter_ip', $ip_address, ACCESS_PUBLIC);
		}
	}
}

//Report to stopforumspam.com
if (elgg_get_plugin_setting('use_stopforumspam', PLUGIN_ID) == "yes") {
	if (empty($api_key)){
		register_error(elgg_echo('spam_login_filter:empty_api_key_error'));
		forward(REFERER);
	}

	if (!empty($ip_address) && !empty($api_key)) {
		//Report the spammer
		$url = 'http://www.stopforumspam.com/add.php?username='.$username.'&ip_addr='.$ip_address.'&email='.$email.'&api_key='.$api_key;
		$return = call_url($url);

		if ($return == false) {
			register_error(elgg_echo('spam_login_filter:unable_report'));
			forward(REFERER);
		}
	}
}

if (($obj instanceof ElggUser) && ($obj->canEdit())) {
	if ($obj->delete()) {
		system_message(elgg_echo('spam_login_filter:user_deleted', array($name)));
		$deleted = true;
	} else {
		register_error(elgg_echo('spam_login_filter:user_not_deleted'));
	}
} else {
	register_error(elgg_echo('spam_login_filter:user_not_deleted'));
}

// forward to user administration if on a user's page as it no longer exists
$forward = REFERER;
if ($deleted) {
	$forward = "admin/";
}

forward($forward);
