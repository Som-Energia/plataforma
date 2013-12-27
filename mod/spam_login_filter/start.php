<?php
/*******************************************************************************
 * spam_login_filter
 *
 * @author RayJ
 ******************************************************************************/

function spam_login_filter_init() {

	$action_path = elgg_get_plugins_path() . "spam_login_filter/actions/spam_login_filter";
	
	elgg_register_plugin_hook_handler("action", "register", "spam_login_filter_verify_action_hook", 999);
	
	elgg_register_plugin_hook_handler('cron', 'daily', 'spam_login_filter_cron');
    
    elgg_register_plugin_hook_handler('route', 'all', 'spam_login_filter_router');
    
    elgg_register_event_handler('login', 'user', 'spam_login_filter_login_event');
	
	elgg_register_action('spam_login_filter/delete_ip', "$action_path/delete_ip.php", 'admin');
	
	elgg_register_admin_menu_item('administer', 'manageip', 'administer_utilities');
	
	// Extend context menu with admin links
	if (elgg_is_admin_logged_in()) {
		if (elgg_is_active_plugin('tracker')) {
			elgg_register_plugin_hook_handler('register', 'menu:user_hover', 'spam_login_filter_hover_menu', 1000);
			elgg_register_action("spam_login_filter/delete", "$action_path/delete.php", "admin");
		}
        
        // run upgrades
        run_function_once('spam_login_filter_upgrade_1');
	}
	
	return true;
}

function spam_login_filter_verify_action_hook($hook, $entity_type, $returnvalue, $params) {
	//Check against stopforumspam and domain blacklist
	
	$email = get_input('email');
    $ip = spam_login_filter_get_ip();
	
	if (spam_login_filter_check_spammer($email, $ip)) {
		return true;
	}
	else {
		//Check if the ip exists
		$options = array(
			"type" => "object",
			"subtype" => "spam_login_filter_ip",
			"metadata_name_value_pairs" => array(
				"name" => "ip_address",
				"value" => $ip,
			),
			"count" => TRUE
		);
		
		$ia = elgg_set_ignore_access(true);
		
		$spam_login_filter_ip_list = elgg_get_entities_from_metadata($options);
				
		if ($spam_login_filter_ip_list == 0) {
			//Create the banned ip
			$ip_obj = new ElggObject();
			$ip_obj->subtype = 'spam_login_filter_ip';
			$ip_obj->access_id = ACCESS_PRIVATE;
			$ip_obj->ip_address = $ip;
			$ip_obj->owner_guid = elgg_get_site_entity()->guid;
			$ip_obj->container_guid = elgg_get_site_entity()->guid;
			$ip_obj->save();
		}
		
		elgg_set_ignore_access($ia);

		//return false;
		forward();
	}
}

function spam_login_filter_notify_admin($blockedEmail, $blockedIp, $reason) {
	if (elgg_get_plugin_setting('notify_by_mail', 'spam_login_filter') == "yes") {
		//Notify spam tentative to administrator

		$site = elgg_get_site_entity();
		if (($site) && (isset($site->email))) {
			$from = $site->email;
		} else {
			$from = 'noreply@' . get_site_domain($site->guid);
		}

		$message = sprintf(elgg_echo('spam_login_filter:notify_message'), $blockedEmail, $blockedIp, $reason);
        
        $to = elgg_get_plugin_setting('notify_mail_address', 'spam_login_filter');
        if (!is_email_address($to)) {
            return;
        }

		elgg_send_email($from, $to, elgg_echo('spam_login_filter:notify_subject'), $message);
	}
}

function spam_login_filter_check_spammer($register_email, $register_ip, $checkemail = true) {
	$spammer = false;
	
	if ($checkemail) {
		$email_whitelisted = spam_login_filter_is_email_whitelisted($register_email);
	}
	else {
		$email_whitelisted = true;
	}
    $ip_whitelisted = spam_login_filter_is_ip_whitelisted($register_ip);
    
    if ($email_whitelisted && $ip_whitelisted) {
        // short circuit
        return true;
    }
	
	//Mail domain blacklist
	if (elgg_get_plugin_setting('use_mail_domain_blacklist', 'spam_login_filter') == "yes" && !$email_whitelisted) {
		$blacklistedMailDomains = preg_split('/\\s+/', spam_login_filter_custom_strip_tags(elgg_get_plugin_setting('blacklisted_mail_domains', 'spam_login_filter')), -1, PREG_SPLIT_NO_EMPTY);
		$mailDomain = explode("@", $register_email);
		
		foreach ($blacklistedMailDomains as $domain) {
			if ($mailDomain[1] == $domain) {
				register_error(elgg_echo('spam_login_filter:access_denied_domain_blacklist'));
				spam_login_filter_notify_admin($register_email, $register_ip, "Internal domain blacklist");
				$spammer = true;
				break;
			}
		}
	}
	
	if (!$spammer) {
		//Mail blacklist
		if (elgg_get_plugin_setting('use_mail_blacklist', 'spam_login_filter') == "yes" && !$email_whitelisted) {
			$blacklistedMails = preg_split('/\\s+/', spam_login_filter_custom_strip_tags(elgg_get_plugin_setting('blacklisted_mails', 'spam_login_filter')), -1, PREG_SPLIT_NO_EMPTY);
			
			foreach ($blacklistedMails as $blacklistedMail) {
				if ($blacklistedMail == $register_email) {
					register_error(elgg_echo('spam_login_filter:access_denied_mail_blacklist'));
					spam_login_filter_notify_admin($register_email, $register_ip, "Internal e-mail blacklist");
					$spammer = true;
					break;
				}
			}
		}
	}
	
	if (!$spammer) {
		//StopForumSpam
		if (elgg_get_plugin_setting('use_stopforumspam', 'spam_login_filter') == "yes") {

			//check the e-mail adress
			$url = "http://www.stopforumspam.com/api?email=".$register_email."&f=serial";
			
			$return = spam_login_filter_file_get_conditional_contents($url);
			
			if ($return != false) {
				$data = unserialize($return);
				$email_frequency = $data['email']['frequency'];
					if($email_frequency != '0' && !$email_whitelisted){
						register_error(elgg_echo('spam_login_filter:access_denied_mail_blacklist'));
						spam_login_filter_notify_admin($register_email, $register_ip, "Stopforumspam e-mail blacklist");
						$spammer = true;
					}
			}

			if (!$spammer && !$ip_whitelisted) {
			//e-mail not found in the database, now check the ip
				$url = "http://www.stopforumspam.com/api?ip=".$register_ip."&f=serial";
				
				$return = spam_login_filter_file_get_conditional_contents($url);
				
				if ($return != false) {
					$data = unserialize($return);
					$ip_frequency = $data['ip']['frequency'];
						if($ip_frequency != '0'){
							register_error(elgg_echo('spam_login_filter:access_denied_ip_blacklist'));
							spam_login_filter_notify_admin($register_email, $register_ip, "Stopforumspam IP blacklist");
							$spammer = true;
						}
				}
			}
			
		}
	}
	
	if (!$spammer) {
		//Fassim
		if (elgg_get_plugin_setting('use_fassim', 'spam_login_filter') == "yes") {
			$fassim_api_key = elgg_get_plugin_setting('fassim_api_key', 'spam_login_filter');
			$fassim_check_email = elgg_get_plugin_setting('fassim_check_email', 'spam_login_filter');
			$fassim_check_ip = elgg_get_plugin_setting('fassim_check_ip', 'spam_login_filter');
			$fassim_block_proxies = elgg_get_plugin_setting('fassim_block_proxies', 'spam_login_filter');
			$fassim_block_top_spamming_isps = elgg_get_plugin_setting('fassim_block_top_spamming_isps', 'spam_login_filter');
			$fassim_block_top_spamming_domains = elgg_get_plugin_setting('fassim_block_top_spamming_domains', 'spam_login_filter');
			$fassim_blocked_country_list = elgg_get_plugin_setting('fassim_blocked_country_list', 'spam_login_filter');
			$fassim_blocked_region_list = elgg_get_plugin_setting('fassim_blocked_region_list', 'spam_login_filter');
			
			if (!empty($fassim_api_key) && preg_match('/^[0-9a-z]{8}(-[0-9a-z]{4}){3}-[0-9a-z]{12}$/i', $fassim_api_key)) {

				$url = 'http://api.fassim.com/regcheck.php?apikey='.$fassim_api_key.'&email='.$register_email."&ip=".$register_ip.'&proxy='.$fassim_block_proxies.'&topisp='.$fassim_block_top_spamming_isps.'&topdm='.$fassim_block_top_spamming_domains.'&cc='.$fassim_blocked_country_list.'&region='.$fassim_blocked_region_list.'&hostForumVersion=ELGG';
			
				$return = spam_login_filter_file_get_conditional_contents($url);
				
				if ($return != false) {
					$results = json_decode($return);
					
					if ($results != NULL){
						if ( $fassim_check_email == 1 && isset($results->email_status) && $results->email_status == true ) {
                            if (!$email_whitelisted) {
                                register_error(elgg_echo('spam_login_filter:access_denied_mail_blacklist'));
                                spam_login_filter_notify_admin($register_email, $register_ip, "Fassim e-mail blacklist");
                                $spammer = true;
                            }
						}
						
						if ( $fassim_check_ip == 1 && isset($results->ip_status) && $results->ip_status == true ) {
                            if (!$ip_whitelisted) {
                                register_error(elgg_echo('spam_login_filter:access_denied_ip_blacklist'));
                                spam_login_filter_notify_admin($register_email, $register_ip, "Fassim IP blacklist");
                                $spammer = true;
                            }
						}
						
						if ( $fassim_block_proxies == 1 && isset($results->proxy) && $results->proxy == true ) {
							register_error(elgg_echo('spam_login_filter:access_denied_ip_blacklist'));
							spam_login_filter_notify_admin($register_email, $register_ip, "Fassim proxy blacklist");
							$spammer = true;
						}
						
						if ( $fassim_block_top_spamming_isps == 1 && isset($results->top_isp) && $results->top_isp == true ) {
							register_error(elgg_echo('spam_login_filter:access_denied_ip_blacklist'));
							spam_login_filter_notify_admin($register_email, $register_ip, "Fassim top ISP blacklist");
							$spammer = true;
						}
						
						if ( $fassim_block_top_spamming_domains == 1 && isset($results->top_domain) && $results->top_domain == true ) {
							register_error(elgg_echo('spam_login_filter:access_denied_domain_blacklist'));
							spam_login_filter_notify_admin($register_email, $register_ip, "Fassim top domains blacklist");
							$spammer = true;
						}
						
						if ( !empty($fassim_blocked_country_list) && isset($results->country_match) && $results->country_match == true ) {
							register_error(elgg_echo('spam_login_filter:access_denied_country_blacklist'));
							spam_login_filter_notify_admin($register_email, $register_ip, "Fassim country blacklist");
							$spammer = true;
						}
						
						if ( !empty($fassim_blocked_region_list) && isset($results->region) && $results->region == true ) {
							register_error(elgg_echo('spam_login_filter:access_denied_region_blacklist'));
							spam_login_filter_notify_admin($register_email, $register_ip, "Fassim region blacklist");
							$spammer = true;
						}
					}
				}
			}
		}
	}
	
	return !$spammer;
}

function spam_login_filter_file_get_conditional_contents($szURL)
{
	$pCurl = curl_init($szURL);
	
	curl_setopt($pCurl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($pCurl, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($pCurl, CURLOPT_TIMEOUT, 10);

	$szContents = curl_exec($pCurl);
	$aInfo = curl_getinfo($pCurl);
	
	if($aInfo['http_code'] === 200)
	{
		return $szContents;
	}
	
	return false;
}

function spam_login_filter_cron($hook, $entity_type, $returnvalue, $params){
	//Retrieve de the ips older than one week
	$time_to_seek = time() - 604800; //(7 * 24 * 60 * 60);

	$options = array(
		"type" => "object",
		"subtype" => "spam_login_filter_ip",
		"created_time_upper" => $time_to_seek,
		"limit" => false
	);
	
	$ia = elgg_set_ignore_access(true);
	
	$spam_login_filter_ip_list = elgg_get_entities($options);

	if ($spam_login_filter_ip_list) {
		foreach($spam_login_filter_ip_list as $ip_to_exclude){
			$ip_to_exclude->delete();
		}
	}
	elgg_set_ignore_access($ia);
}

/**
 * Add delete as spammer link to user hover menu
 */
function spam_login_filter_hover_menu($hook, $type, $return, $params) {
	$user = $params['entity'];
	
	if ($user->guid != elgg_get_logged_in_user_guid()) {

		$item = ElggMenuItem::factory(array(
			'name' => "spam_login_filter_delete",
			'href' => "action/spam_login_filter/delete?guid={$user->guid}",
			'text' => elgg_echo("spam_login_filter:delete_and_report"),
			'is_action' => true,
			'section' => 'admin',
		));
		$return[] = $item;
	}
	
	return $return;
}

function spam_login_filter_custom_strip_tags($content) {
	$searchSpaces = array(' ', '&nbsp;');
	$content = str_replace($searchSpaces, '', $content);
	$content = strip_tags($content);
	return $content;
}


function spam_login_filter_router($hook, $type, $return, $params) {
    
    // get uris to protect
    $protect_setting = elgg_get_plugin_setting('protected_pages', 'spam_login_filter');
    if (empty($protect_setting)) {
        return $return;
    }
    
    $protect = explode("\n", $protect_setting);
    $protect_uris = array_map('trim', $protect);
    
    // reconstruct URI
    if (is_array($return['segments'])) {
        $parts = array_merge(array($return['handler']), $return['segments']);
        $uri = implode('/', $parts);
    }
    else {
        $uri = $return['handler'];
    }
    
    if (!in_array($uri, $protect_uris)) {
        return $return;
    }
    
    if (spam_login_filter_is_ip_whitelisted()) {
        return $return;
    }
    
    $ip = spam_login_filter_get_ip();
    
    // we need to protect this page
    //Check if the ip exists
	$options = array(
		"type" => "object",
		"subtype" => "spam_login_filter_ip",
		"metadata_name_value_pairs" => array(
			"name" => "ip_address",
        	"value" => $ip,
		),
		"count" => TRUE
	);
	
	$ia = elgg_set_ignore_access(true);
	
	$spam_login_filter_ip_list = elgg_get_entities_from_metadata($options);
	
	elgg_set_ignore_access($ia);

	$deny = false;
	if ($spam_login_filter_ip_list > 0) {
		$deny = true;
    }
	
	if (!spam_login_filter_check_spammer('', $ip, false)) {
		$deny = true;
	}
	
	if ($deny) {
		ob_end_clean();
		header($_SERVER['SERVER_PROTOCOL'] . ' 403 Forbidden');
		echo "403 Forbidden";
		exit;
    }
}

function spam_login_filter_get_ip() {
    // note we need to look at these values first before REMOTE_ADDR
    // as cloud hosting routes through other servers giving false
    // or invalid internal ips
    //check ip from share internet
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $realip = $_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $realip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else {
        $realip = $_SERVER['REMOTE_ADDR'];
    }
    
    return $realip;
}


function spam_login_filter_is_ip_whitelisted($ip = false) {
    
    if (!$ip) {
        $ip = spam_login_filter_get_ip();
    }
    
    // check for whitelist first
    $whitelist = elgg_get_plugin_setting('whitelist_ip', 'spam_login_filter');
    $whitelist = explode("\n", $whitelist);
    $whitelist = array_map('trim', $whitelist);
    
    if (in_array($ip, $whitelist)) {
        return true; // we're whitelisted!
    }
    
    return false;
}


function spam_login_filter_is_email_whitelisted($email) {
    // check for domain whitelist first
    $whitelist = elgg_get_plugin_setting('whitelist_email_domain', 'spam_login_filter');
    $whitelist = explode("\n", $whitelist);
    $whitelist = array_map('trim', $whitelist);
    
    $parts = explode('@', $email);
    
    if (in_array($parts[1], $whitelist)) {
        return true; // we're whitelisted!
    }
    
    // check for specific email whitelist
    $whitelist = elgg_get_plugin_setting('whitelist_email', 'spam_login_filter');
    $whitelist = explode("\n", $whitelist);
    $whitelist = array_map('trim', $whitelist);
    
    if (in_array($email, $whitelist)) {
        return true; // we're whitelisted!
    }
    
    return false;
}


function spam_login_filter_login_event($event, $type, $user) {
    $check_login = elgg_get_plugin_setting('event_login', 'spam_login_filter');
    
    if ($check_login != 'no') { // do it by default
        if (!spam_login_filter_check_spammer($user->email, spam_login_filter_get_ip(), true)) {
            return false;
        }
    }
	
	// check user metadata for banned words/phrases
	$banned = spam_login_filter_get_banned_strings();
	$metadata = spam_login_filter_get_user_metadata();

	if ($banned && $metadata) {
		foreach ($metadata as $m) {
			foreach ($banned as $str) {
				if (strpos($user->$m, $str) !== false) {
					return false;
				}
			}
		}
	}
}


function spam_login_filter_get_banned_strings() {
	$string = elgg_get_plugin_setting('banned_metadata', 'spam_login_filter');
	if (!$string) {
		return array();
	}
	
    $array = explode("\n", $string);
    $array = array_map('trim', $array);
	
	return $array;
}

function spam_login_filter_get_user_metadata() {
	$string = elgg_get_plugin_setting('user_metadata', 'spam_login_filter');
	if (!$string) {
		return array();
	}
	
    $array = explode("\n", $string);
    $array = array_map('trim', $array);
	
	return $array;
}

function spam_login_filter_upgrade_1() {
    if (elgg_get_plugin_setting('use_ip_blacklist_cache', 'spam_login_filter') == 'yes') {
        // make register be protected
        elgg_set_plugin_setting('protected_pages', 'register', 'spam_login_filter');
        elgg_unset_plugin_setting('use_ip_blacklist_cache', 'spam_login_filter');
    }
}

elgg_register_event_handler('init', 'system', 'spam_login_filter_init');