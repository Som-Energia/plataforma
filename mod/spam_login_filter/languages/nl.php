<?php

return array(
	//Return messages
	'spam_login_filter:access_denied_domain_blacklist' => 'Toegang is geweigerd vanwege spam problemen (domein blacklist). Neem contact op met de site beheerder.',
	'spam_login_filter:access_denied_mail_blacklist' => 'Toegang is geweigerd vanwege spam problemen (e-mail blacklist). Neem contact op met de site beheerder.',
	'spam_login_filter:access_denied_ip_blacklist' => 'Toegang is geweigerd vanwege spam problemen (IP blacklist). Neem contact op met de site beheerder.',
	'spam_login_filter:access_denied_country_blacklist' => 'Toegang is geweigerd vanwege spam problemen (land blacklist). Neem contact op met de site beheerder.',
	'spam_login_filter:access_denied_region_blacklist' => 'Toegang is geweigerd vanwege spam problemen (regio blacklist). Neem contact op met de site beheerder.',

	//User menu
	'spam_login_filter:delete_and_report' => 'Verwijder en rapporteer als spammer',

	//Admin menu
	'admin:administer_utilities:manageip' => 'Beheer geblokkeerde IP\'s',
	'spam_login_filter:admin:ip_address' => 'IP adres',
	'spam_login_filter:admin:ip_date_created' => 'Aangemaakt',
	'spam_login_filter:admin:confirm_delete_ip' => 'Verwijder %s?',

	'spam_login_filter:messages:deleted_ip' => 'IP verwijderd.',
	'spam_login_filter:messages:deleted_ips' => 'IP\'s verwijderd.',
	'spam_login_filter:errors:could_not_delete_ip' => 'Kon het IP adres niet verwijderen.',
	'spam_login_filter:errors:could_not_delete_ips' => 'Kon niet alle IP adressen verwijderen.',
	'spam_login_filter:errors:unknown_ips' => 'IP niet gevonden.',
	'spam_login_filter:admin:no_ips' => 'De IP lijst is leeg.',

	//Report to stopforumspam
	'spam_login_filter:empty_ip_error' => 'IP adres van de gebruiker is leeg.',
	'spam_login_filter:empty_api_key_error' => 'Stopforumspam API key is leeg.',
	'spam_login_filter:unable_report' => 'Kan geen verbinding maken met Stopforumspam.com.',
	'spam_login_filter:user_deleted' => 'Gebruiker verwijderd.',
	'spam_login_filter:user_not_deleted' => 'De gebruiker kon niet worden verwijderd.',

	//Configuration form - Fassim settings
	'spam_login_filter:use_fassim' => 'Gebruik Fassim.com?',
	'spam_login_filter:fassim_api_key' => 'Fassim API key:',
	'spam_login_filter:fassim_check_email' => 'Controleer e-mail?',
	'spam_login_filter:fassim_check_ip' => 'Controleer IP?',
	'spam_login_filter:fassim_block_proxies' => 'Blokkeer anonieme proxies?',
	'spam_login_filter:fassim_block_top_spamming_isps' => 'Blokkeer top spammende ISP\'s?',
	'spam_login_filter:fassim_block_top_spamming_domains' => 'Blokkeer top spammende domeinen?',

	//Configuration form - Stopforumspam settings
	'spam_login_filter:use_stopforumspam' => 'Gebruik Stopforumspam.com?',
	'spam_login_filter:stopforumspam_api_key' => 'Stopforumspam.com API key (optioneel):',
	'spam_login_filter:notify_by_mail' => 'Verstuur een e-mail bij een geblokkeerde poging?',
	'spam_login_filter:notify_mail_address' => 'E-mail adres:',
	'spam_login_filter:notify_subject' => 'Spammer geblokkeerd',
	'spam_login_filter:notify_message' => 'Er is een spammer geblokkeerd tijdens de registratie.

E-mail: %s.

IP: %s.

Reden: %s.',

	//Configuration form - General settings
	'spam_login_filter:use_mail_domain_blacklist' => 'Gebruik e-mail domein blacklist?',
	'spam_login_filter:blacklisted_mail_domains' => 'Blacklisted e-mail domeinen (één per regel):',

	'spam_login_filter:use_mail_blacklist' => 'Gebruik e-mail blacklist?',
	'spam_login_filter:blacklisted_mails' => 'Blacklisted e-mail adressen (één per regel):',

	'spam_login_filter:custom_error_page' => 'Als een pagina wordt geblokkeerd, toon dan een eigen fout pagina?',
	'spam_login_filter:custom_error_page:no' => 'Nee, gebruik de standaard browser pagina',
	'spam_login_filter:custom_error_page:yes' => 'Ja, maak gebruik van een site pagina',

	//Configuration form - Titles
	'spam_login_filter:title_stopforumspam' => 'Stopforumspam',
	'spam_login_filter:title_fassim' => 'Fassim',
	'spam_login_filter:title_domain_blacklist' => 'Domein blacklist',
	'spam_login_filter:title_email_blacklist' => 'E-mail blacklist',
	'spam_login_filter:title_plugin_notifications' => 'Plugin notificaties',
	'spam_login_filter:title_ip_blacklist' => 'IP blacklist',
	'spam_login_filter:whitelist' => 'Whitelists',
	'spam_login_filter:events' => 'Events',

	// Whitelist
	'spam_login_filter:whitelist:ip' => 'Whitelist IP adressen:',
	'spam_login_filter:whitelist:ip:help' => '(Geef één IP adres op per regel. Deze IP adressen zullen niet worden geblokkeerd)',
	'spam_login_filter:whitelist:email' => 'Whitelist e-mail adressen:',
	'spam_login_filter:whitelist:email:help' => '(Geef één e-mail adres op per regel. Deze e-mail adressen zullen niet worden geblokkeerd)',
	'spam_login_filter:whitelist:email:domain' => 'Whitelist e-mail domeinen:',
	'spam_login_filter:whitelist:email:domain:help' => '(Geef één e-mail domein op per regel. Deze e-mail domeinen zullen niet worden geblokkeerd)',

	//Events
	'spam_login_filter:check_login' => 'Controleer voor spammers tijden het aanmelden?',
	'spam_login_filter:check_login:help' => '(Dit kan helpen om de spammers die nog niet waren opgenomen alsnog te blokkeren als ze terug komen)',

	// forbidden page
	'spam_login_filter:403' => 'Toegang geweigerd.',
	'spam_login_filter:403:description' => 'Het is niet toegestaan dat je deze pagina bekijkt. Als je meer informatie wilt waarom deze pagina is gekomen, neem dan contact op met de site beheerder en stuur ook je IP adres (%s) mee als referentie.',
);