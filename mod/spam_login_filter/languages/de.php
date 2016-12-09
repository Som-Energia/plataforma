<?php

return array(
	//Return messages
	'spam_login_filter:access_denied_domain_blacklist' => "Zugriff aufgrund Spam verweigert (Deine Domain ist auf der Sperrliste). Bitte kontaktiere den Administrator, sollte dies ungerechtfertigt sein.",
	'spam_login_filter:access_denied_mail_blacklist' => "Zugriff aufgrund Spam verweigert (Deine Email-Adresse ist auf der Sperrliste). Bitte kontaktiere den Administrator, sollte dies ungerechtfertigt sein.",
	'spam_login_filter:access_denied_ip_blacklist' => "Zugriff aufgrund Spam verweigert (Deine IP ist auf der Sperrliste). Bitte kontaktiere den Administrator, sollte dies ungerechtfertigt sein.",
	'spam_login_filter:access_denied_country_blacklist' => "Zugriff aufgrund Spam verweigert (Dein Land ist auf der Sperrliste). Bitte kontaktiere den Administrator, sollte dies ungerechtfertigt sein.",
	'spam_login_filter:access_denied_region_blacklist' => "Zugriff aufgrund Spam verweigert (Deine Region ist auf der Sperrliste). Bitte kontaktiere den Administrator, sollte dies ungerechtfertigt sein.",

	//User menu
	'spam_login_filter:delete_and_report' => "Löschen und als Spammer melden",

	//Admin menu
	'admin:administer_utilities:manageip' => "Geblockte IPs verwalten",
	'spam_login_filter:admin:ip_address' => 'IP-Adresse',
	'spam_login_filter:admin:ip_date_created' => 'Erstellt',
	'spam_login_filter:admin:confirm_delete_ip' => 'Löschen von %s?',

	'spam_login_filter:messages:deleted_ip' => 'Die IP wurde gelöscht.',
	'spam_login_filter:messages:deleted_ips' => 'Die IPs wurden gelöscht.',
	'spam_login_filter:errors:could_not_delete_ip' => 'Das Löschen der IP ist fehlgeschlagen.',
	'spam_login_filter:errors:could_not_delete_ips' => 'Es konnten nicht alle selektierten IPs gelöscht werden.',
	'spam_login_filter:errors:unknown_ips' => 'Die IP konnte nicht gefunden werden.',
	'spam_login_filter:admin:no_ips' => 'Die IP-Liste ist leer.',

	//Report to stopforumspam
	'spam_login_filter:empty_ip_error' => "Die IP-Adresse des Benutzers ist nicht verfügbar.",
	'spam_login_filter:empty_api_key_error' => "Stopforumspam API-Schlüssel ist nicht verfügbar.",
	'spam_login_filter:unable_report' => "Es konnte kein Kontakt mit Stopforumspam.com hergestellt werden.",
	'spam_login_filter:user_deleted' => "Der Benutzer wurde gelöscht.",
	'spam_login_filter:user_not_deleted' => "Beim Löschen des Benutzers ist ein Fehler aufgetreten.",

	//Configuration form - Fassim settings
	'spam_login_filter:use_fassim' => "Fassim.com verwenden?",
	'spam_login_filter:fassim_api_key' => "Fassim API-Schlüssel:",
	'spam_login_filter:fassim_check_email' => "Email-Adresse prüfen?",
	'spam_login_filter:fassim_check_ip' => "IP-Adresse prüfen?",
	'spam_login_filter:fassim_block_proxies' => "Accountregistrierung für anonyme Proxies blockieren?",
	'spam_login_filter:fassim_block_top_spamming_isps' => "Accountregistrierung für die am meisten Spam versendenden ISPs blockieren?",
	'spam_login_filter:fassim_block_top_spamming_domains' => "Accountregistrierung für die am meisten Spam versendenden Domains blockieren?",
	'spam_login_filter:fassim_blocked_country_list' => "Accountregistrierung aus folgenden Ländern blockieren:",
	'spam_login_filter:fassim_blocked_country_list:help' => "(Gebe einfach die entsprechenden Länderkürzel ein - bei mehreren Ländern die Kürzel durch Kommas getrennt, z.B. US,LV,HK. Für eine vollständige Liste der derzeit unterstützten Kürzel folge dem Link <a href='http://www.fassim.com/country-codes/' target='_blank'>Länderkürzel</a>)",
	'spam_login_filter:fassim_blocked_region_list' => "Accountregistrierung aus folgenden Regionen blockieren (derzeit beschränkt auf Regionen innerhalb Kanadas oder den USA):",

	'spam_login_filter:fassim_blocked_region_list:help' => "(Gebe einfach die entsprechenden Regionalkürzel ein - bei mehreren Regionen durch Kommas getrennt, z.B. US-GA,CA-NS. Für eine vollständige Liste der derzeit unterstützten Kürzel folge dem Link <a href='http://www.fassim.com/region-codes/' target='_blank'>Regionalkürzel</a>)",

	//Configuration form - Stopforumspam settings
	'spam_login_filter:use_stopforumspam' => "Stopforumspam.com verwenden?",
	'spam_login_filter:stopforumspam_api_key' => "Stopforumspam API-Schlüssel (optional):",

	'spam_login_filter:notify_by_mail' => "Bei geblockten Accountregistrierungen eine Email-Benachrichtigung versenden?",
	'spam_login_filter:notify_mail_address' => "Email-Adresse an die die Benachrichtigungen geschickt werden:",
	'spam_login_filter:notify_subject' => "Ein Spammer wurde geblockt",
	'spam_login_filter:notify_message' => "Ein Spammer wurde beim Versuch, einen Account zu registrieren, geblockt.

Email-Adresse: %s.

IP-Adresse: %s.

Grund für die Blockierung: %s.",

	//Configuration form - General settings
	'spam_login_filter:use_mail_domain_blacklist' => "Email-Sperrliste verwenden?",
	'spam_login_filter:blacklisted_mail_domains' => "Gesperrte Email-Domains - eine pro Zeile:",

	'spam_login_filter:use_mail_blacklist' => "Einzelne Email-Adressen blockieren?",
	'spam_login_filter:blacklisted_mails' => "Gesperrte Email-Adressen - eine pro Zeile:",

	'spam_login_filter:protected_pages' => "Zugriff auf folgende Seiten von IPs blockieren, die auf der IP-Sperrliste sind (lokal auf dem Server gecacht):",

	'spam_login_filter:protected_pages:help' => "(Gebe die relativen URLs der Seiten an, auf die der Zugriff blockiert werden soll - eine Seite pro Zeile. Um beispielsweise den Zugriff auf die Registrierungsseite zu blockieren, gebe in einer Zeile 'register' ein. In der lokal gecachten Sperrliste enthaltete IPs können zwar noch auf Deiner Community-Seite navigieren, aber bei Aufruf einer der zu blockierenden Seiten bekommen sie nur die Fehlermeldung '403 Error - Access denied' zu sehen)",

	'spam_login_filter:tracker:help' => "(URL der Trace-Webseite. Verwende '%s', um zu kennzeichnen, wo die IP-Adresse in die URL eingefügt werden soll. Falls das IP Tracker-Plugin verwendet wird, wird stattdessen die in den Einstellungen dieses Plugins angegebene Trace-Webseite verwendet)",

	'spam_login_filter:custom_error_page' => "Eigene Fehlerseite im Falle eines geblockten Zugriffs auf eine zu schützende Seite?",
	'spam_login_filter:custom_error_page:no' => "Nein, Fehlerseite des Browsers",
	'spam_login_filter:custom_error_page:yes' => "Ja, eigene Fehlerseite",

	//Configuration form - Titles
	'spam_login_filter:title_stopforumspam' => "Stopforumspam",
	'spam_login_filter:title_fassim' => "Fassim",
	'spam_login_filter:title_domain_blacklist' => "Domain-Sperrliste",
	'spam_login_filter:title_email_blacklist' => "Email-Sperrliste",
	'spam_login_filter:title_plugin_notifications' => "Email-Benachrichtigungen",
	'spam_login_filter:title_ip_blacklist' => "IP-Sperrliste",
	'spam_login_filter:whitelist' => "Ausnahmelisten (Whitelists)",
	'spam_login_filter:events' => "Ereignisse",
	'spam_login_filter:tracker' => "Tracker",

	// Whitelist
	'spam_login_filter:whitelist:ip' => "Von Sperrungen ausgenommene IP-Adressen:",
	'spam_login_filter:whitelist:ip:help' => "(Gebe eine IP pro Zeile ein. Die hier aufgeführten IPAdressen werden in keinem Fall blockiert. Verwende * als Platzhalten, um IP-Bereiche anzugeben (z.B. 192.168.0.* oder 192.168.*.*)",
	'spam_login_filter:whitelist:email' => "Von Sperrungen ausgenommene Email-Adressen:",
	'spam_login_filter:whitelist:email:help' => "(Gebe eine Email-Adresse pro Zeile ein. Den hier aufgeführten Email-Adressen wird die Registrierung eines Accounts bzw. die Anmeldung an der Seite in keinem Fall verweigert)",
	'spam_login_filter:whitelist:email:domain' => "Von Sperrungen ausgenommene Email-Domains:",
	'spam_login_filter:whitelist:email:domain:help' => "(Gebe eine Domain pro Zeile ein. Email-Adressen, die zu einer der hier aufgeführten Domains gehören, wird die Registrierung eines Accounts bzw. die Anmeldung an der Seite in keinem Fall verweigert)",

	//Events
	'spam_login_filter:check_login' => "Bei der Anmeldung zur Seite erneut auf mögliche Spam-Aktivitäten prüfen?",
	'spam_login_filter:check_login:help' => "(Eine erneute Überprüfung kann helfen, diejenigen Spammer zu identifizieren, die zum Zeitpunkt der Accountregistrierung noch nicht auffällig waren aber nun zu einem späteren Zeitpunkt zu Deiner Seite zurückkehren, um möglicherweise Unfug zu treiben)",
	'spam_login_filter:label:user_metadata' => "Einträge in folgenden Profilfeldern prüfen (gebe hier die entsprechenden Metadata-Namen der Profilfelder ein - einen pro Zeile):",
	'spam_login_filter:user_metadata:help' => "(Bitte gebe hier nicht die sprachabhängigen Bezeichner der Profilfelder an, sondern die sprachunabhängigen Metadata-Namen der Felder, beispielsweise 'description' für das 'Über mich'-Profilfeld)",
	'spam_login_filter:label:banned_metadata' => "Anmeldung zur Seite blockieren, wenn ein Profilfeld folgende Strings enthält:",
	'spam_login_filter:banned_metadata:help' => "(Es wird geprüft, ob die Einträge die hier angegebenen Zeichenfolgen enthalten - und nicht nur, ob die angegebenen Begriffe in den Einträgen für sich allein stehend vorkommen! Wenn Du beispielsweise ein Profilfeld mit dem Metadata-Namen 'company' als zu prüfend angegeben hast und hier die Zeichenfolge 'inter' als unzulässig eingibst, würden alle Benutzer von der Anmeldung zur Seite gesperrt, die in diesem Profilfeld 'arck interactive' eingegeben hätten. Gibt deshalb die nicht erlaubten Begriffe bzw. Zeichenfolgen sehr genau an)",

	// forbidden page
	'spam_login_filter:403' => "Zugriff verweigert.",
	'spam_login_filter:403:description' => "Der Zugriff auf diese Seite wurde Dir verweigert. Wenn Du den Grund dafür wissen möchtest, setze Dich bitte mit dem Administrator mit Angabe Deiner IP-Adresse in Verbindung."
);