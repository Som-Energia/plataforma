<?php

return array(
	//Return messages
	'spam_login_filter:access_denied_domain_blacklist' => "Accès refusé pour suspicion de spam (Domaine blacklisté). En cas d'erreur, contactez l'administrateur du site.",
	'spam_login_filter:access_denied_mail_blacklist' => "Accès refusé pour suspicion de spam (Email blacklisté). En cas d'erreur, contactez l'administrateur du site.",
	'spam_login_filter:access_denied_ip_blacklist' => "Accès refusé pour suspicion de spam (l'adresse IP blacklisté). En cas d'erreur, contactez l'administrateur du site.",
	'spam_login_filter:access_denied_country_blacklist' => "Accès refusé pour suspicion de spam (Pays blacklisté). En cas d'erreur, contactez l'administrateur du site.",
	'spam_login_filter:access_denied_region_blacklist' => "Accès refusé pour suspicion de spam (Région blacklisté). En cas d'erreur, contactez l'administrateur du site.",

	//User menu
	'spam_login_filter:delete_and_report' => "Supprimer et reporter comme spammeur.",

	//Admin menu
	'admin:administer_utilities:manageip' => "Gérer les IPs bloquées",
	'spam_login_filter:admin:ip_address' => 'Adresse IP',
	'spam_login_filter:admin:ip_date_created' => 'Créée',
	'spam_login_filter:admin:confirm_delete_ip' => "Supprimer l'IP %s ?",

	'spam_login_filter:messages:deleted_ip' => 'IP supprimée.',
	'spam_login_filter:messages:deleted_ips' => 'IPs supprimée.',
	'spam_login_filter:errors:could_not_delete_ip' => "Impossible de supprimer l'adresse IP.",
	'spam_login_filter:errors:could_not_delete_ips' => "Impossible de supprimer toutes les adresses IPs.",
	'spam_login_filter:errors:unknown_ips' => "L'IP n'a pas été trouvée.",
	'spam_login_filter:admin:no_ips' => "La liste des adresses IPs est vide.",

	//Report to stopforumspam
	'spam_login_filter:empty_ip_error' => "L'IP de l'utilisateur est vide.",
	'spam_login_filter:empty_api_key_error' => "La clée API pour Stopforumspam est vide.",
	'spam_login_filter:unable_report' => "Impossible de contacter Stopforumspam.com.",
	'spam_login_filter:user_deleted' => "Utilisateur supprimé.",
	'spam_login_filter:user_not_deleted' => "Impossible de suprimer l'utilisateur.",

	//Configuration form - Fassim settings
	'spam_login_filter:use_fassim' => "Utiliser Fassim.com?",
	'spam_login_filter:fassim_api_key' => "Clé API pour Fassim:",
	'spam_login_filter:fassim_check_email' => "Vérifier l'adresse email?",
	'spam_login_filter:fassim_check_ip' => "Vérifier l'adresse IP?",
	'spam_login_filter:fassim_block_proxies' => "Bloquer les proxies anonymes?",
	'spam_login_filter:fassim_block_top_spamming_isps' => "Bloquer les spammeurs des FAI principaux?",
	'spam_login_filter:fassim_block_top_spamming_domains' => "Bloquer les domaines des principaux spammeurs?",
	'spam_login_filter:fassim_blocked_country_list' => "Bloquer les pays suivants:",
	'spam_login_filter:fassim_blocked_region_list' => "Bloquer les régions suivantes:",

	//Configuration form - Stopforumspam settings
	'spam_login_filter:use_stopforumspam' => "Utiliser Stopforumspam.com?",
	'spam_login_filter:stopforumspam_api_key' => "Clé API pour Stopforumspam (optionel):",

	'spam_login_filter:notify_by_mail' => "Notifier les bloquages par email?",
	'spam_login_filter:notify_mail_address' => "Adresse email:",
	'spam_login_filter:notify_subject' => "Spammeur bloqué",
	'spam_login_filter:notify_message' => "Un spammeur a été bloqué pendant l'enregistrement.

Email: %s.

IP: %s.

Raison: %s.",

	//Configuration form - General settings
	'spam_login_filter:use_mail_domain_blacklist' => "Utiliser une liste noire de domaine?",
	'spam_login_filter:blacklisted_mail_domains' => "Liste noire de domaine email - un par ligne:",

	'spam_login_filter:use_mail_blacklist' => "Utiliser un domaine spécifique de liste noire email?",
	'spam_login_filter:blacklisted_mails' => "Liste noire d'emails - un par ligne:",

	//Configuration form - Titles
	'spam_login_filter:title_stopforumspam' => "Stopforumspam",
	'spam_login_filter:title_fassim' => "Fassim",
	'spam_login_filter:title_domain_blacklist' => "Liste noire de domaine",
	'spam_login_filter:title_email_blacklist' => "Liste noire d'email",
	'spam_login_filter:title_plugin_notifications' => "Notifications du plugin",
	'spam_login_filter:title_ip_blacklist' => "Liste noire d'IP",
	'spam_login_filter:whitelist' => "Liste blanche",
	'spam_login_filter:events' => "Évènements",
	'spam_login_filter:tracker' => "Trackeur",

	// Whitelist
	'spam_login_filter:whitelist:ip' => "Liste blanche IP:",
	'spam_login_filter:whitelist:ip:help' => "(Entrez une par ligne. L'accès des IPs listées ici ne sera jamais bloqué)",
	'spam_login_filter:whitelist:email' => "Liste blanche d'adresse mail:",
	'spam_login_filter:whitelist:email:help' => "(Entrez une par ligne. Les emails listés ici ne seront pas bloqués à l'enregistrement et au login)",
	'spam_login_filter:whitelist:email:domain' => "Liste blanche des domaines email:",
	'spam_login_filter:whitelist:email:domain:help' => "(Entrez une par ligne. Les emails avec le domaine listé ici ne seront pas bloqués à l'enregistrement et au login)",

	//Events
	'spam_login_filter:check_login' => "Vérifier les spammeurs à la connexion?",
	'spam_login_filter:check_login:help' => "(Ceci peut arrêter les spammeurs qui n'été pas dans la liste noire à l'enregistrement, mais qui sont revenus pour spammer par la suite)",
);