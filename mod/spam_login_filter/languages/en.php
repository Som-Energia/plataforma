<?php

return array(
	//Return messages
	'spam_login_filter:access_denied_domain_blacklist' => "Access denied due to spam issues (Domain blacklisted). Please contact the site administrator.",
	'spam_login_filter:access_denied_mail_blacklist' => "Access denied due to spam issues (Email blacklisted). Please contact the site administrator.",
	'spam_login_filter:access_denied_ip_blacklist' => "Access denied due to spam issues (IP address blacklisted). Please contact the site administrator.",
	'spam_login_filter:access_denied_country_blacklist' => "Access denied due to spam issues (Country blacklisted). Please contact the site administrator.",
	'spam_login_filter:access_denied_region_blacklist' => "Access denied due to spam issues (Region blacklisted). Please contact the site administrator.",

	//User menu
	'spam_login_filter:delete_and_report' => "Delete and report as spammer",

	//Admin menu
	'admin:administer_utilities:manageip' => "Manage blocked IPs",
	'spam_login_filter:admin:ip_address' => 'IP address',
	'spam_login_filter:admin:ip_date_created' => 'Created',
	'spam_login_filter:admin:confirm_delete_ip' => 'Delete %s?',

	'spam_login_filter:messages:deleted_ip' => 'IP deleted.',
	'spam_login_filter:messages:deleted_ips' => 'IPs deleted.',
	'spam_login_filter:errors:could_not_delete_ip' => 'Could not delete IP.',
	'spam_login_filter:errors:could_not_delete_ips' => 'Could not delete all checked IPs.',
	'spam_login_filter:errors:unknown_ips' => 'IP not found.',
	'spam_login_filter:admin:no_ips' => 'The IP list is empty.',

	//Report to stopforumspam
	'spam_login_filter:empty_ip_error' => "User's IP address is empty.",
	'spam_login_filter:empty_api_key_error' => "Stopforumspam API key is empty.",
	'spam_login_filter:unable_report' => "Unable to contact Stopforumspam.com.",
	'spam_login_filter:user_deleted' => "User deleted.",
	'spam_login_filter:user_not_deleted' => "Unable to delete user.",

	//Configuration form - Stopforumspam settings
	'spam_login_filter:use_stopforumspam' => "Use Stopforumspam.com?",
	'spam_login_filter:stopforumspam_api_key' => "Stopforumspam API key (optional):",

	'spam_login_filter:notify_by_mail' => "Notify by email on blocked tentatives?",
	'spam_login_filter:notify_mail_address' => "Email address to send notifications to:",
	'spam_login_filter:notify_subject' => "Spammer blocked",
	'spam_login_filter:notify_message' => "A spammer was blocked during registration.

Email address: %s.

IP address: %s.

Reason: %s.",

	//Configuration form - General settings
	'spam_login_filter:use_mail_domain_blacklist' => "Use mail domain blacklist?",
	'spam_login_filter:blacklisted_mail_domains' => "Blacklisted mail domains - one per line:",

	'spam_login_filter:use_mail_blacklist' => "Use especific email addresses blacklist?",
	'spam_login_filter:blacklisted_mails' => "Blacklisted email addresses - one per line:",

	'spam_login_filter:protected_pages' => "Protect the following pages from access by IPs currently on IP blacklist (cached locally on the server):",

	'spam_login_filter:protected_pages:help' => "(Enter one path per line. E.g. to protect the registration page enter 'register' on a line. Blacklisted IPs can navigate on the site, but will see the error '403 error - Access denied' instead of the protected pages)",

	'spam_login_filter:tracker:help' => "(URL of trace website. Use '%s' to indicate where the IP should be. This URL will be overridden by the \"IP Tracker\" plugin if it's used)",

	'spam_login_filter:custom_error_page' => "In the event of a blocked page, show a custom error page?",
	'spam_login_filter:custom_error_page:no' => "No, use browser default",
	'spam_login_filter:custom_error_page:yes' => "Yes, use a site page",

	//Configuration form - Titles
	'spam_login_filter:title_stopforumspam' => "Stopforumspam",
	'spam_login_filter:title_fassim' => "Fassim",
	'spam_login_filter:title_domain_blacklist' => "Domain Blacklist",
	'spam_login_filter:title_email_blacklist' => "Email Blacklist",
	'spam_login_filter:title_plugin_notifications' => "Email notifications",
	'spam_login_filter:title_ip_blacklist' => "IP addresses Blacklist",
	'spam_login_filter:whitelist' => "Whitelists",
	'spam_login_filter:events' => "Events",
	'spam_login_filter:tracker' => "Tracker",

	// Whitelist
	'spam_login_filter:whitelist:ip' => "Whitelist IP addresses:",
	'spam_login_filter:whitelist:ip:help' => "(Enter one IP per line. IP addresses listed here will not be denied access. Use * as a wildcard to whitelist ranges, e.g. 192.168.0.* or 192.168.*.*)",
	'spam_login_filter:whitelist:email' => "Whitelist email addresses:",
	'spam_login_filter:whitelist:email:help' => "(Enter one email per line.  Email addresses listed here will not be denied at registration/login)",
	'spam_login_filter:whitelist:email:domain' => "Whitelist email domains:",
	'spam_login_filter:whitelist:email:domain:help' => "(Enter one domain per line.  Email addresses with domains listed here will not be denied at registration/login)",

	//Events
	'spam_login_filter:check_login' => "Check for spammers on login?",
	'spam_login_filter:check_login:help' => "(This can help catch spammers who weren't in the database at the time of registration, but come back to do their dirty work)",
	'spam_login_filter:label:user_metadata' => "Profile fields' content to check (enter the corresponding metadata name of the profile fields - one metadata name  per line):",
	'spam_login_filter:user_metadata:help' => "(Don't enter the language dependent Profile field labels but the corresponding metadata name here, e.g. 'description' for the 'Description' field)",
	'spam_login_filter:label:banned_metadata' => "Block login if one of the profile fields to be monitored contains one of the following strings (one term per line):",
	'spam_login_filter:banned_metadata:help' => "(The monitoring checks if these character strings are included but not if these strings occur as separate terms! So, be specific in what strings to include in the search, e.g. if you list 'company' as a checked metadata name above, and list 'inter' here, it will block anybody who has 'arck interactive' listed as a value for company)",

	// forbidden page
	'spam_login_filter:403' => "Access denied",
	'spam_login_filter:403:description' => "You're not allowed to view this page. If you want to know more, please contact the site administrator and provide your IP address (%s) as reference."
);