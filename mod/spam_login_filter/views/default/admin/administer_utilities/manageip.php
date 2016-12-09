<?php

$limit = (int) max(1, get_input("limit", 25));
$offset = (int) max(0, get_input("offset", 0));

$site = elgg_get_site_entity();

$options = array(
	'guid' => $site->guid,
	'annotation_names' => array('spam_login_filter_ip'),
	'offset' => $offset,
	'limit' => $limit,
	'count' => true
);


if (!$count = elgg_get_annotations($options)) {
	echo elgg_echo("spam_login_filter:admin:no_ips");
	return;
}

$options["count"]  = false;

$spam_login_filter_ip_list = elgg_get_annotations($options);

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
