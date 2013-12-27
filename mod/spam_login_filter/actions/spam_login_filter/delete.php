<?php
	
	$forward = REFERER;
	$deleted = false;

	// Get the user
	$guid = get_input('guid');
	$obj = get_entity($guid);

	$name = $obj->name;
	$username = $obj->username;
	$email = $obj->email;
	$ip_address = $obj->ip_address;
	$api_key = elgg_get_plugin_setting('stopforumspam_api_key', 'spam_login_filter');
	
	if (empty($ip_address)){
		register_error(elgg_echo('spam_login_filter:empty_ip_error'));
		forward($forward);
	}
	else {
		if(elgg_get_plugin_setting('use_ip_blacklist_cache', 'spam_login_filter') == "yes"){
			// Blacklist the IP
			//Check if the ip exists
			$options = array(
				"type" => "object",
				"subtype" => "spam_login_filter_ip",
				"metadata_name_value_pairs" => array(
					"name" => "ip_address",
					"value" => $ip_address,
				),
				"count" => TRUE
			);

			$ia = elgg_set_ignore_access(true);
			
			$spam_login_filter_ip_list = elgg_get_entities_from_metadata($options);
			
			if (!$spam_login_filter_ip_list) {
				//Create the banned ip
				$ip = new ElggObject();
				$ip->subtype = 'spam_login_filter_ip';
				$ip->access_id = ACCESS_PRIVATE;
				$ip->ip_address = $ip_address;
				$ip->owner_guid = elgg_get_site_entity()->guid;
				$ip->container_guid = elgg_get_site_entity()->guid;
				$ip->save();
			}
			
			elgg_set_ignore_access($ia);
		}
	}
	
	
	//Report to stopforumspam.com
	if(elgg_get_plugin_setting('use_stopforumspam', 'spam_login_filter') == "yes"){
		if (empty($api_key)){
			register_error(elgg_echo('spam_login_filter:empty_api_key_error'));
			forward($forward);
		}

		if (!empty($ip_address) && !empty($api_key)){
			//Report the spammer
			$url = 'http://www.stopforumspam.com/add.php?username='.$username.'&ip_addr='.$ip_address.'&email='.$email.'&api_key='.$api_key;
			$return = spam_login_filter_file_get_conditional_contents($url);
			
			if ($return == false)
			{
				register_error(elgg_echo('spam_login_filter:unable_report'));
				forward($forward);
			}
		}
	}

	if (($obj instanceof ElggUser) && ($obj->canEdit())) {
		if ($obj->delete()) {
			system_message(sprintf(elgg_echo('spam_login_filter:user_deleted'), $name));
			$deleted = true;
		} else {
			register_error(elgg_echo('spam_login_filter:user_not_deleted'));
		}
	} else {
		register_error(elgg_echo('spam_login_filter:user_not_deleted'));
	}

	// forward to user administration if on a user's page as it no longer exists
	if ($deleted) {
		$forward = "admin/";
	}

	forward($forward);
?>