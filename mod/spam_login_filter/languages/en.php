<?php

	$english = array(
		//Return messages
		'spam_login_filter:access_denied_domain_blacklist' => "Access denied due to spam issues (Domain blacklisted). Please contact the site administrator.",
		'spam_login_filter:access_denied_mail_blacklist' => "Access denied due to spam issues (E-Mail blacklisted). Please contact the site administrator.",
		'spam_login_filter:access_denied_ip_blacklist' => "Access denied due to spam issues (IP blacklisted). Please contact the site administrator.",
		'spam_login_filter:access_denied_country_blacklist' => "Access denied due to spam issues (Country blacklisted). Please contact the site administrator.",
		'spam_login_filter:access_denied_region_blacklist' => "Access denied due to spam issues (Region blacklisted). Please contact the site administrator.",
		
		//User menu
		'spam_login_filter:delete_and_report' => "Delete and report as spammer",
		
		//Admin menu
		'admin:administer_utilities:manageip' => "Manage blocked IPs",
		'spam_login_filter:admin:ip_address' => 'IP Address',
		'spam_login_filter:admin:ip_date_created' => 'Created',
		'spam_login_filter:admin:confirm_delete_ip' => 'Delete %s?',
		
		'spam_login_filter:messages:deleted_ip' => 'IP Deleted.',
		'spam_login_filter:messages:deleted_ips' => 'IPs Deleted.',
		'spam_login_filter:errors:could_not_delete_ip' => 'Could not delete IP.',
		'spam_login_filter:errors:could_not_delete_ips' => 'Could not delete all checked IPs.',
		'spam_login_filter:errors:unknown_ips' => 'IP not found.',
		'spam_login_filter:admin:no_ips' => 'The IP list is empty.',

		//Report to stopforumspam
		'spam_login_filter:empty_ip_error' => "User's IP address is empty.",
		'spam_login_filter:empty_api_key_error' => "stopforumspam API key is empty.",
		'spam_login_filter:unable_report' => "Unable to contact stopforumspam.com.",
		'spam_login_filter:user_deleted' => "User deleted.",
		'spam_login_filter:user_not_deleted' => "Unable to delete user.",
		
		//Configuration form - Fassim settings
		'spam_login_filter:use_fassim' => "Use fassim.com",
		'spam_login_filter:fassim_api_key' => "Fassim API Key",
		'spam_login_filter:fassim_check_email' => "Check email?",
		'spam_login_filter:fassim_check_ip' => "Check IP?",
		'spam_login_filter:fassim_block_proxies' => "Block anonymous proxies?",
		'spam_login_filter:fassim_block_top_spamming_isps' => "Block top spamming ISP's?",
		'spam_login_filter:fassim_block_top_spamming_domains' => "Block top spamming domains?",
		'spam_login_filter:fassim_blocked_country_list' => "You now can type in the country code(s) you want to block from registering to your forum. Just type in the country abbreviation, for multiple separate by comma (e.g. US,LV,HK). For a list that we currently keep up to date and block, click <a href='http://www.fassim.com/country-codes/' target='_blank'>Country Codes</a> to get the codes.",
		'spam_login_filter:fassim_blocked_region_list' => "If for some reason you want to block a specific region from registering from your site, you can type in the region code(s) you want to block from registering to your forum. Just type in the region abbreviation, for multiple separate by comma (e.g. US-GA,CA-NS). For a list that we currently keep up to date and block, click <a href='http://www.fassim.com/region-codes/' target='_blank'>Region Codes</a> to get the codes.",
		
		//Configuration form - Stopforumspam settings
		'spam_login_filter:use_stopforumspam' => "Use stopforumspam.com",
		'spam_login_filter:stopforumspam_api_key' => "stopforumspam API Key (Optional)",

		'spam_login_filter:notify_by_mail' => "Notify blocked tentatives by e-mail",
		'spam_login_filter:notify_mail_address' => "E-Mail Address",
		'spam_login_filter:notify_subject' => "Spammer blocked",
		'spam_login_filter:notify_message' => "A spammer was blocked during registration.
			
E-Mail: %s.
			
IP: %s.

Reason: %s.",

		//Configuration form - General settings
		'spam_login_filter:use_mail_domain_blacklist' => "Use mail domain blacklist",
		'spam_login_filter:blacklisted_mail_domains' => "Blacklisted mail domains - One per line",
		
		'spam_login_filter:use_mail_blacklist' => "Use especific mail blacklist",
		'spam_login_filter:blacklisted_mails' => "Blacklisted mails - One per line",
		
		'spam_login_filter:protected_pages' => "Use IP blacklist cache to protect specific pages",
		
		'spam_login_filter:protected_pages:help' => "Enter one path per line.
            eg. To protect the registration page enter 'register' on a line
            Blacklisted IPs can navigate to the site, but will see the error '403 error - Access denied' in protected pages.",
		
		//Configuration form - Titles
		'spam_login_filter:title_stopforumspam' => "Stopforumspam",
		'spam_login_filter:title_fassim' => "Fassim",
		'spam_login_filter:title_domain_blacklist' => "Domain Blacklist",
		'spam_login_filter:title_email_blacklist' => "Email Blacklist",
		'spam_login_filter:title_plugin_notifications' => "Plugin Notifications",
		'spam_login_filter:title_ip_blacklist' => "IP Blacklist",
        'spam_login_filter:whitelist' => "Whitelists",
        'spam_login_filter:events' => "Events",
        
        
        // Whitelist
        'spam_login_filter:whitelist:ip' => "Whitelist IP addresses",
        'spam_login_filter:whitelist:ip:help' => "Enter one IP per line.  IP addresses listed here will not be denied access.",
        'spam_login_filter:whitelist:email' => "Whitelist email addresses",
        'spam_login_filter:whitelist:email:help' => "Enter one email per line.  Email addresses listed here will not be denied at registration/login.",
        'spam_login_filter:whitelist:email:domain' => "Whitelist email domains",
        'spam_login_filter:whitelist:email:domain:help' => "Enter one domain per line.  Email addresses with domains listed here will not be denied at registration/login.",
        
        //Events
        'spam_login_filter:check_login' => "Check for spammers on login?",
        'spam_login_filter:check_login:help' => "This can help catch spammers who weren't in the database at the time of registration, but come back to do their dirty work",
		'spam_login_filter:label:user_metadata' => "User Metadata",
		'spam_login_filter:user_metadata:help' => "Check metadata for banned values - enter one metadata name per line",
		'spam_login_filter:label:banned_metadata' => "Block login if metadata contains:",
		'spam_login_filter:banned_metadata:help' => "This uses a 'contains' check, so be specific.  eg. if you list 'company' as a checked metadata above, and list 'inter' here, it will block anybody who has 'arck interactive' listed as a value for company",
			
	);
	add_translation("en",$english);
