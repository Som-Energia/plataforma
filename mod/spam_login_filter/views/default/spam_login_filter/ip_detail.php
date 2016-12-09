<?php

namespace Spam\LoginFilter;

$spam_login_filter_ip = elgg_extract("spam_login_filter_ip", $vars);

if (!$spam_login_filter_ip) {
	return;
}

$created = elgg_view_friendly_time($spam_login_filter_ip->time_created);
$created_date = htmlspecialchars(date(elgg_echo("friendlytime:date_format"), $spam_login_filter_ip->time_created));

$delete = elgg_view("output/confirmlink", array(
	"confirm" => elgg_echo("spam_login_filter:admin:confirm_delete_ip", array($spam_login_filter_ip->ip_address)),
	"href" => "action/spam_login_filter/delete_ip/?spam_login_filter_ip_list[]=" . $spam_login_filter_ip->id,
	"text" => elgg_view_icon("delete"),
	"title" => elgg_echo("delete")
));

if ($setting = elgg_get_plugin_setting("tracker_url", PLUGIN_ID)) {
	$tracker_url = sprintf($setting, $spam_login_filter_ip->value);
	// Create tracker link
	$ip_with_tracker_link = elgg_view("output/url", array(
		"href" => $tracker_url,
		"text" => $spam_login_filter_ip->value,
		"target" => "_blank"
	));
} else {
	$ip_with_tracker_link = $spam_login_filter_ip->value;
}

echo "<tr>";
echo "<td>" . $ip_with_tracker_link . "</td>";
echo "<td>" . $created . "</td>";
echo "<td>" . $created_date . "</td>";
echo "<td class='center'>" . $delete . "</td>";
echo "</tr>";
