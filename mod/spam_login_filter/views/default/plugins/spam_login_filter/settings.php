<?php

	$plugin = elgg_extract("entity", $vars);

	$yesno_options = array(
		"yes" => elgg_echo("option:yes"),
		"no" => elgg_echo("option:no")
	);

	$onezero_options = array(
		1 => elgg_echo("option:yes"),
		0 => elgg_echo("option:no")
	);

	// Stop Forum Spam
	$title = elgg_echo("spam_login_filter:title_stopforumspam");
	
	$content = "<div class='mbs'>";
	$content .= elgg_echo("spam_login_filter:use_stopforumspam");
	$content .= elgg_view("input/dropdown", array("name" => "params[use_stopforumspam]", "options_values" => $yesno_options, "value" => $plugin->use_stopforumspam, "class" => "mls"));
	$content .= "</div>";
	
	$content .= "<div>";
	$content .= elgg_echo("spam_login_filter:stopforumspam_api_key");
	$content .= elgg_view("input/text", array("name" => "params[stopforumspam_api_key]", "value" => $plugin->stopforumspam_api_key));
	$content .= "</div>";
	
	echo elgg_view_module("inline", $title, $content);
	
	// Fassim
	$title = elgg_echo("spam_login_filter:title_fassim");
	
	$content = "<div class='mbs'>";
	$content .= elgg_echo("spam_login_filter:use_fassim");
	$content .= elgg_view("input/dropdown", array("name" => "params[use_fassim]", "options_values" => array_reverse($yesno_options), "value" => $plugin->use_fassim, "class" => "mls"));
	$content .= "</div>";
	
	$content .= "<div class='mbs'>";
	$content .= elgg_echo("spam_login_filter:fassim_api_key");
	$content .= elgg_view("input/text", array("name" => "params[fassim_api_key]", "value" => $plugin->fassim_api_key));
	$content .= "</div>";
	
	$content .= "<div>";
	$content .= elgg_echo("spam_login_filter:fassim_check_email");
	$content .= elgg_view("input/dropdown", array("name" => "params[fassim_check_email]", "options_values" => $onezero_options, "value" => $plugin->fassim_check_email, "class" => "mls"));
	$content .= "</div>";
	
	$content .= "<div>";
	$content .= elgg_echo("spam_login_filter:fassim_check_ip");
	$content .= elgg_view("input/dropdown", array("name" => "params[fassim_check_ip]", "options_values" => $onezero_options, "value" => $plugin->fassim_check_ip, "class" => "mls"));
	$content .= "</div>";
	
	$content .= "<div>";
	$content .= elgg_echo("spam_login_filter:fassim_block_proxies");
	$content .= elgg_view("input/dropdown", array("name" => "params[fassim_block_proxies]", "options_values" => $onezero_options, "value" => $plugin->fassim_block_proxies, "class" => "mls"));
	$content .= "</div>";
	
	$content .= "<div>";
	$content .= elgg_echo("spam_login_filter:fassim_block_top_spamming_isps");
	$content .= elgg_view("input/dropdown", array("name" => "params[fassim_block_top_spamming_isps]", "options_values" => $onezero_options, "value" => $plugin->fassim_block_top_spamming_isps, "class" => "mls"));
	$content .= "</div>";
	
	$content .= "<div class='mbs'>";
	$content .= elgg_echo("spam_login_filter:fassim_block_top_spamming_domains");
	$content .= elgg_view("input/dropdown", array("name" => "params[fassim_block_top_spamming_domains]", "options_values" => $onezero_options, "value" => $plugin->fassim_block_top_spamming_domains, "class" => "mls"));
	$content .= "</div>";
	
	$content .= "<div class='mbs'>";
	$content .= elgg_echo("spam_login_filter:fassim_blocked_country_list");
	$content .= elgg_view("input/text", array("name" => "params[fassim_blocked_country_list]", "value" => $plugin->fassim_blocked_country_list));
	$content .= "</div>";
	
	$content .= "<div class='mbs'>";
	$content .= elgg_echo("spam_login_filter:fassim_blocked_region_list");
	$content .= elgg_view("input/text", array("name" => "params[fassim_blocked_region_list]", "value" => $plugin->fassim_blocked_region_list));
	$content .= "</div>";
	
	echo elgg_view_module("inline", $title, $content);
	
	// Domain blacklist
	$title = elgg_echo("spam_login_filter:title_domain_blacklist");
	
	$content = "<div class='mbs'>";
	$content .= elgg_echo("spam_login_filter:use_mail_domain_blacklist");
	$content .= elgg_view("input/dropdown", array("name" => "params[use_mail_domain_blacklist]", "options_values" => array_reverse($yesno_options), "value" => $plugin->use_mail_domain_blacklist, "class" => "mls"));
	$content .= "</div>";
	
	$content .= "<div>";
	$content .= elgg_echo("spam_login_filter:blacklisted_mail_domains");
	$content .= elgg_view("input/plaintext", array("name" => "params[blacklisted_mail_domains]", "value" => $plugin->blacklisted_mail_domains));
	$content .= "</div>";
	
	echo elgg_view_module("inline", $title, $content);
	
	// Email blacklist
	$title = elgg_echo("spam_login_filter:title_email_blacklist");
	
	$content = "<div class='mbs'>";
	$content .= elgg_echo("spam_login_filter:use_mail_blacklist");
	$content .= elgg_view("input/dropdown", array("name" => "params[use_mail_blacklist]", "options_values" => array_reverse($yesno_options), "value" => $plugin->use_mail_blacklist, "class" => "mls"));
	$content .= "</div>";
	
	$content .= "<div>";
	$content .= elgg_echo("spam_login_filter:blacklisted_mails");
	$content .= elgg_view("input/plaintext", array("name" => "params[blacklisted_mails]", "value" => $plugin->blacklisted_mails));
	$content .= "</div>";
	
	echo elgg_view_module("inline", $title, $content);
	
	// Notify by mail
	$title = elgg_echo("spam_login_filter:title_plugin_notifications");
	
	$content = "<div class='mbs'>";
	$content .= elgg_echo("spam_login_filter:notify_by_mail");
	$content .= elgg_view("input/dropdown", array("name" => "params[notify_by_mail]", "options_values" => array_reverse($yesno_options), "value" => $plugin->notify_by_mail, "class" => "mls"));
	$content .= "</div>";
	
	$content .= "<div>";
	$content .= elgg_echo("spam_login_filter:notify_mail_address");
	$content .= elgg_view("input/text", array("name" => "params[notify_mail_address]", "value" => $plugin->notify_mail_address));
	$content .= "</div>";
	
	echo elgg_view_module("inline", $title, $content);
	
	// IP blacklist
	$title = elgg_echo("spam_login_filter:title_ip_blacklist");
	
	$content = "<div class='mbm'>";
	$content .= elgg_echo("spam_login_filter:protected_pages");
	$content .= elgg_view("input/plaintext", array("name" => "params[protected_pages]", "value" => $plugin->protected_pages));
    $content .= elgg_view("output/longtext", array("value" => elgg_echo("spam_login_filter:protected_pages:help"), "class" => "elgg-subtext"));
	$content .= "</div>";
	
	echo elgg_view_module("inline", $title, $content);
	
	// whitelist
	$title = elgg_echo("spam_login_filter:whitelist");
	
	$content = "<div class='mbs'>";
	$content .= elgg_echo("spam_login_filter:whitelist:ip");
    $content .= elgg_view("input/plaintext", array("name" => "params[whitelist_ip]", "value" => $plugin->whitelist_ip));
    $content .= elgg_view("output/longtext", array("value" => elgg_echo("spam_login_filter:whitelist:ip:help"), "class" => "elgg-subtext"));
    $content .= "</div>";
    
    $content .= "<div class='mbs'>";
	$content .= elgg_echo("spam_login_filter:whitelist:email:domain");
    $content .= elgg_view("input/plaintext", array("name" => "params[whitelist_email_domain]", "value" => $plugin->whitelist_email_domain));
    $content .= elgg_view("output/longtext", array("value" => elgg_echo("spam_login_filter:whitelist:email:domain:help"), "class" => "elgg-subtext"));
    $content .= "</div>";
    
    $content .= "<div class='mbs'>";
    $content .= elgg_echo("spam_login_filter:whitelist:email");
    $content .= elgg_view("input/plaintext", array("name" => "params[whitelist_email]", "value" => $plugin->whitelist_email));
    $content .= elgg_view("output/longtext", array("value" => elgg_echo("spam_login_filter:whitelist:email:help"), "class" => "elgg-subtext"));
    $content .= "</div>";
    
	echo elgg_view_module("inline", $title, $content);
    
	// events
    $title = elgg_echo("spam_login_filter:events");
    
    $content = "<div class='mbs'>";
    $content .= elgg_echo("spam_login_filter:check_login");
    $content .= elgg_view("input/dropdown", array("name" => "params[event_login]", "value" => $plugin->event_login, "options_values" => array_reverse($yesno_options), "class" => "mls"));
    $content .= elgg_view("output/longtext", array("value" => elgg_echo("spam_login_filter:check_login:help"), "class" => "elgg-subtext"));
    $content .= "</div>";
    
	$content .= "<div>";
	$content .= elgg_echo("spam_login_filter:label:user_metadata");
	$content .= elgg_view("input/plaintext", array("name" => "params[user_metadata]", "value" => $plugin->user_metadata));
	$content .= elgg_view("output/longtext", array("value" => elgg_echo("spam_login_filter:user_metadata:help"), "class" => "elgg-subtext"));
	$content .= "</div>";
	
	$content .= "<div>";
	$content .= elgg_echo("spam_login_filter:label:banned_metadata");
	$content .= elgg_view("input/plaintext", array("name" => "params[banned_metadata]", "value" => $plugin->banned_metadata));
	$content .= elgg_view("output/longtext", array("value" => elgg_echo("spam_login_filter:banned_metadata:help"), "class" => "elgg-subtext"));
	$content .= "</div>";
	
	echo elgg_view_module("inline", $title, $content);
	