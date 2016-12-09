<?php

namespace Spam\LoginFilter;

/**
 * checks email/ip for spammer status
 * 
 * @param type $register_email
 * @param type $register_ip
 * @param type $checkemail
 * @return boolean
 */
function check_spammer($register_email, $register_ip, $checkemail = true) {

	if ($checkemail) {
		$email_whitelisted = is_email_whitelisted($register_email);
        if ($email_whitelisted) {
            return true; // not a spammer, no need for any further checks
        }
	}
    
	$ip_whitelisted = is_ip_whitelisted($register_ip);

	if ($ip_whitelisted) {
		// not a spammer, no need for any further checks
		return true;
	}
    
    // check ip cache
	$blacklisted = elgg_get_annotations(array(
		'guid' => elgg_get_site_entity()->guid,
		'annotation_names' => array('spam_login_filter_ip'),
		'annotation_values' => array($register_ip)
	));
    
    if ($blacklisted) {
        register_error(elgg_echo('spam_login_filter:access_denied_ip_blacklist'));
		notify_admin($register_email, $register_ip, "Internal IP blacklist");
		return false;
    }

	//Mail domain blacklist
	if (elgg_get_plugin_setting('use_mail_domain_blacklist', PLUGIN_ID) == "yes") {
		$blacklistedMailDomains = preg_split('/\\s+/', strip_spaces(strip_tags(elgg_get_plugin_setting('blacklisted_mail_domains', PLUGIN_ID))), -1, PREG_SPLIT_NO_EMPTY);
		$mailDomain = explode("@", $register_email);

		foreach ($blacklistedMailDomains as $domain) {
			if ($mailDomain[1] == $domain) {
				register_error(elgg_echo('spam_login_filter:access_denied_domain_blacklist'));
				notify_admin($register_email, $register_ip, "Internal domain blacklist");
				return false;
				break;
			}
		}
	}

	//Mail blacklist
	if (elgg_get_plugin_setting('use_mail_blacklist', PLUGIN_ID) == "yes") {
		$blacklistedMails = preg_split('/\\s+/', strip_spaces(strip_tags(elgg_get_plugin_setting('blacklisted_mails', PLUGIN_ID))), -1, PREG_SPLIT_NO_EMPTY);

		foreach ($blacklistedMails as $blacklistedMail) {
			if ($blacklistedMail == $register_email) {
				register_error(elgg_echo('spam_login_filter:access_denied_mail_blacklist'));
				notify_admin($register_email, $register_ip, "Internal e-mail blacklist");
				return false;
				break;
			}
		}
	}

	//StopForumSpam
	if (elgg_get_plugin_setting('use_stopforumspam', PLUGIN_ID) == "yes") {

		//check the e-mail adress
		$url = "http://www.stopforumspam.com/api?email=" . $register_email . "&f=json";

		$return = call_url($url);

		if ($return != false) {
			$data = json_decode($return);
			$email_frequency = $data->email->frequency;
			if ($email_frequency != '0') {
				register_error(elgg_echo('spam_login_filter:access_denied_mail_blacklist'));
				notify_admin($register_email, $register_ip, "Stopforumspam e-mail blacklist");
				return false;
			}
		}

    	//e-mail not found in the database, now check the ip
		$url = "http://www.stopforumspam.com/api?ip=" . $register_ip . "&f=json";

		$return = call_url($url);

		if ($return != false) {
			$data = json_decode($return);
			$ip_frequency = $data->ip->frequency;
			if ($ip_frequency != '0') {
				register_error(elgg_echo('spam_login_filter:access_denied_ip_blacklist'));
				notify_admin($register_email, $register_ip, "Stopforumspam IP blacklist");
                
                // cache this ip
                elgg_get_site_entity()->annotate('spam_login_filter_ip', $register_ip, ACCESS_PUBLIC);
				return false;
			}
		}
	}

    // passed all the tests
    return true;
}

function call_url($url) {
	$curl = curl_init($url);

	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($curl, CURLOPT_TIMEOUT, 10);

	$contents = curl_exec($curl);
	$info = curl_getinfo($curl);

	if ($info['http_code'] === 200) {
		return $contents;
	}

	return false;
}


/**
 * 
 * @return array
 */
function get_banned_strings() {
	$string = elgg_get_plugin_setting('banned_metadata', PLUGIN_ID);
	if (!$string) {
		return array();
	}

	$array = explode("\n", $string);
	$array = array_map('trim', $array);

	return $array;
}


/**
 * 
 * @return string ip | null
 */
function get_ip() {
	// note we need to look at these values first before REMOTE_ADDR
	// as cloud hosting routes through other servers giving false
	// or invalid internal ips
	//check ip from share internet
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$realip = $_SERVER['HTTP_CLIENT_IP'];
	}
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$realip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$realip = $_SERVER['REMOTE_ADDR'];
	}

	return $realip;
}

function get_sfs_api_key() {
	static $sfs_api_key;
	if ($sfs_api_key) {
		return $sfs_api_key;
	}
	
	$sfs_api_key = elgg_get_plugin_setting('stopforumspam_api_key', PLUGIN_ID);
	
	return $sfs_api_key;
}


function get_metadata_names() {
	$string = elgg_get_plugin_setting('user_metadata', PLUGIN_ID);
	if (!$string) {
		return array();
	}

	$array = explode("\n", $string);
	$array = array_map('trim', $array);

	return $array;
}


function get_upgrade_version() {
	return elgg_get_plugin_setting('upgrade_version', PLUGIN_ID);
}

function set_upgrade_version($version) {
	return elgg_set_plugin_setting('upgrade_version', $version, PLUGIN_ID);
}


/**
 * 
 * @param type $ip
 * @return boolean
 */
function is_ip_whitelisted($ip = false) {

	if (!$ip) {
		$ip = get_ip();
	}

	// check for whitelist first
	$whitelist = elgg_get_plugin_setting('whitelist_ip', PLUGIN_ID);
	$whitelist = explode("\n", $whitelist);
	$whitelist = array_map('trim', $whitelist);

	foreach ($whitelist as $w) {
		$list_parts = explode('.', $w);
		$ip_parts = explode('.', $ip);

		$match = true;
		foreach ($list_parts as $key => $val) {
			if ($val != $ip_parts[$key] && $val != '*') {
				$match = false;
			}
		}

		if ($match) {
			return true;
		}
	}

	return false;
}


/**
 * 
 * @param type $email
 * @return boolean
 */
function is_email_whitelisted($email) {
	// check for domain whitelist first
	$whitelist = elgg_get_plugin_setting('whitelist_email_domain', PLUGIN_ID);
	$whitelist = explode("\n", $whitelist);
	$whitelist = array_map('trim', $whitelist);

	$parts = explode('@', $email);

	if (in_array($parts[1], $whitelist)) {
		return true; // we're whitelisted!
	}

	// check for specific email whitelist
	$whitelist = elgg_get_plugin_setting('whitelist_email', PLUGIN_ID);
	$whitelist = explode("\n", $whitelist);
	$whitelist = array_map('trim', $whitelist);

	if (in_array($email, $whitelist)) {
		return true; // we're whitelisted!
	}

	return false;
}


/**
 * Notify an admin about the reason for rejection
 * 
 * @param type $blockedEmail
 * @param type $blockedIp
 * @param type $reason
 * @return type
 */
function notify_admin($blockedEmail, $blockedIp, $reason) {
	if (elgg_get_plugin_setting('notify_by_mail', PLUGIN_ID) == "yes") {
		//Notify spam tentative to administrator

		$site = elgg_get_site_entity();
		if (($site) && (isset($site->email))) {
			$from = $site->email;
		} else {
			$from = 'noreply@' . $site->getDomain();
		}

		$message = elgg_echo('spam_login_filter:notify_message', array($blockedEmail, $blockedIp, $reason));

		$to = elgg_get_plugin_setting('notify_mail_address', PLUGIN_ID);
		if (!is_email_address($to)) {
			return;
		}

		elgg_send_email($from, $to, elgg_echo('spam_login_filter:notify_subject'), $message);
	}
}



function strip_spaces($content) {
	$searchSpaces = array(' ', '&nbsp;');
	$content = str_replace($searchSpaces, '', $content);
	return $content;
}