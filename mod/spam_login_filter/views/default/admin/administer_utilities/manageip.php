<?php

	$limit = (int) get_input("limit", 25);
	$offset = (int) get_input("offset", 0);

	$options = array(
		"type" => "object",
		"subtype" => "spam_login_filter_ip",
		"limit" => $limit,
		"offset" => $offset,
		"count" => TRUE,
	);
		
	$spam_login_filter_ip_list = elgg_get_entities($options);

	if (!$count = elgg_get_entities($options)) {
		echo elgg_echo("spam_login_filter:admin:no_ips");
		return;
	}

	$options["count"]  = FALSE;

	$spam_login_filter_ip_list = elgg_get_entities($options);

	
	// setup pagination
	$pagination = elgg_view("navigation/pagination",array(
		"offset" => $offset,
		"count" => $count,
		"limit" => $limit,
	));

	echo $pagination;
	
	$form_body .= "<table class='elgg-table-alt'>";

	// set a nice table header
	$form_body .= "<tr>";
	$form_body .= "<th>" . elgg_echo("spam_login_filter:admin:ip_address") . "</th>";
	$form_body .= "<th colspan=2>" . elgg_echo("spam_login_filter:admin:ip_date_created") . "</th>";
	if (elgg_is_active_plugin("tracker")) {
		$form_body .= "<th>" . elgg_echo("tracker:moreinfo") . "</th>";
	}
	$form_body .= "<th class='center'>" . elgg_echo("delete") . "</th>";
	$form_body .= "</tr>";
	
	foreach ($spam_login_filter_ip_list as $spam_login_filter_ip) {
		$form_body .= elgg_view("spam_login_filter/ip_detail", array("spam_login_filter_ip" => $spam_login_filter_ip));
	}
	
	$form_body .= "</table>";

	echo elgg_view("input/form", array(
		"body" => $form_body,
		"name" => "spam_login_filter_delete_ip",
		"class" => "elgg-form-settings"
	));
	
	echo $pagination;
