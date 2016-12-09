<?php

return array(
	//Return messages
	'spam_login_filter:access_denied_domain_blacklist' => "Acesso negado devido a problemas com spam (Domínio em lista negra). Contate o administrador do site.",
	'spam_login_filter:access_denied_mail_blacklist' => "Acesso negado devido a problemas com spam (Email em lista negra). Contate o administrador do site.",
	'spam_login_filter:access_denied_ip_blacklist' => "Acesso negado devido a problemas com spam (IP em lista negra). Contate o administrador do site.",
	'spam_login_filter:access_denied_country_blacklist' => "Acesso negado devido a problemas com spam (País em lista negra). Contate o administrador do site.",
	'spam_login_filter:access_denied_region_blacklist' => "Acesso negado devido a problemas com spam (Região em lista negra). Contate o administrador do site.",

	//User menu
	'spam_login_filter:delete_and_report' => "Apagar e denunciar como spammer",

	//Admin menu
	'admin:administer_utilities:manageip' => "Gerenciar IPs bloqueados",
	'spam_login_filter:admin:ip_date_created' => 'Criado %s',
	'spam_login_filter:admin:delete_ip' => 'Excluir',
	'spam_login_filter:admin:confirm_delete_ip' => 'Excluir %s?',

	'spam_login_filter:messages:deleted_ip' => 'IP excluído.',
	'spam_login_filter:messages:deleted_ips' => 'IPs excluídos.',
	'spam_login_filter:errors:could_not_delete_ip' => 'Não foi possível excluir o IP.',
	'spam_login_filter:errors:could_not_delete_ips' => 'Não foi possível excluir todos os IPs selecionados.',
	'spam_login_filter:errors:unknown_ips' => 'IP não encontrado.',
	'spam_login_filter:admin:no_ips' => 'A lista de IPs está vazia.',

	//Report to stopforumspam
	'spam_login_filter:empty_ip_error' => "IP do usuário está em branco.",
	'spam_login_filter:empty_api_key_error' => "API do Stopforumspam está em branco.",
	'spam_login_filter:unable_report' => "Erro ao contatar Stopforumspam.com.",
	'spam_login_filter:user_deleted' => "Usuário removido.",
	'spam_login_filter:user_not_deleted' => "Erro ao remover usuário.",

	//Configuration form - Fassim settings
	'spam_login_filter:use_fassim' => "Usar Fassim.com?",
	'spam_login_filter:fassim_api_key' => "Fassim API Key:",
	'spam_login_filter:fassim_check_email' => "Validar email?",
	'spam_login_filter:fassim_check_ip' => "Validar IP?",
	'spam_login_filter:fassim_block_proxies' => "Bloquear proxys anônimos?",
	'spam_login_filter:fassim_block_top_spamming_isps' => "Bloquear ISPs com muito spam?",
	'spam_login_filter:fassim_block_top_spamming_domains' => "Bloquear domínios com muito spam?",

	//Configuration form - Stopforumspam settings
	'spam_login_filter:use_stopforumspam' => "Usar Stopforumspam.com?",
	'spam_login_filter:stopforumspam_api_key' => "Stopforumspam API Key:",

	'spam_login_filter:notify_by_mail' => "Notificar tentativas bloqueadas por email?",
	'spam_login_filter:notify_mail_address' => "Endereço de email:",
	'spam_login_filter:notify_subject' => "Spammer bloqueado",
	'spam_login_filter:notify_message' => "Um spammer foi bloqueado durante o registro no site.

Email: %s.

IP: %s.

Motivo: %s.",

	//Configuration form - General settings
	'spam_login_filter:use_mail_domain_blacklist' => "Usar lista negra de domínios?",
	'spam_login_filter:blacklisted_mail_domains' => "Domínios em lista negra - Um por linha:",

	'spam_login_filter:use_mail_blacklist' => "Usar lista negra de emails?",
	'spam_login_filter:blacklisted_mails' => "Emails em lista negra - Um por linha:",

	//Configuration form - Titles
	'spam_login_filter:title_stopforumspam' => "Stopforumspam",
	'spam_login_filter:title_fassim' => "Fassim",
	'spam_login_filter:title_domain_blacklist' => "Lista negra de domínios",
	'spam_login_filter:title_email_blacklist' => "Lista negra de emails",
	'spam_login_filter:title_plugin_notifications' => "Notificações do plugin",
	'spam_login_filter:title_ip_blacklist' => "Lista negra de ips",
	'spam_login_filter:whitelist' => "Lista branca",
	'spam_login_filter:events' => "Eventos",

	// Whitelist
	'spam_login_filter:whitelist:ip' => "Lista branca de endereços IP:",
	'spam_login_filter:whitelist:ip:help' => "(Digite um IP por linha. IPs informados aqui não terão seu acesso ao site negado)",
	'spam_login_filter:whitelist:email' => "Lista branca de endereços de email:",
	'spam_login_filter:whitelist:email:help' => "(Digite um email por linha. Emails informados aqui não terão seu acesso negado ao se registrar ou autenticar no site)",
	'spam_login_filter:whitelist:email:domain' => "Lista branca de domínios de email:",
	'spam_login_filter:whitelist:email:domain:help' => "(Digite um domínio por linha. Emails que usam os dominíos informados aqui não terão seu acesso negado ao se registrar ou autenticar no site)",

	//Events
	'spam_login_filter:check_login' => "Verificar por spammers durante o login?",
	'spam_login_filter:check_login:help' => "(Isto pode ajudar a identificar spammers que não estavam na lista negra ao se registrarem, mas que voltam depois para fazer seu trabalho sujo)",
);