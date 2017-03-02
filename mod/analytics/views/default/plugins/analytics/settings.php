<?php
/**
* Analytics settings configuration.
*
* @package analytics
* @author ColdTrick IT Solutions
* @copyright ColdTrick IT Solutions 2009
* @link http://www.coldtrick.com/
*/

$plugin = elgg_extract("entity", $vars);

$domain = $plugin->analyticsDomain;

$host = $_SERVER["HTTP_HOST"];
$hostArray = explode(".", $host);
$host = "";
for ($i = 1; $i < count($hostArray); $i++) {
	$host .= "." . $hostArray[$i];
}

$sample = false;
if ($domain != $host) {
	$sample = true;
}

$noyes_options = array(
	"no" => elgg_echo("option:no"),
	"yes" => elgg_echo("option:yes")
);

// Google Analytics
$google = "<div class='mbs'>" . elgg_echo("analytics:settings:google:description") . "</div>";

$google .= "<div class='mbs'>";
$google .= elgg_echo("analytics:settings:trackid");
$google .= elgg_view("input/text", array("name" => "params[analyticsSiteID]", "value" => $plugin->analyticsSiteID, "maxlength" => "15"));
$google .= "</div>";

$google .= "<div class='mbs'>";
$google .= elgg_echo("analytics:settings:domain");
$google .= elgg_view("input/text", array("name" => "params[analyticsDomain]", "value" => $domain, "id" => "analyticsDomain"));
	
if ($sample) {
	$google .= "<div class='elgg-subtext'>" . elgg_echo("analytics:settings:domain:sample", array($host)) . "</div>";
}
$google .= "</div>";

$google .= "<div class='mbs'>";
$google .= elgg_echo("analytics:settings:track_actions");
$google .= elgg_view("input/dropdown", array("name" => "params[trackActions]", "options_values" => $noyes_options, "value" => $plugin->trackEvents, "class" => "mls"));
$google .= "<br />";

$google .= elgg_echo("analytics:settings:track_events");
$google .= elgg_view("input/dropdown", array("name" => "params[trackEvents]", "options_values" => $noyes_options, "value" => $plugin->trackActions, "class" => "mls"));
$google .= "<div>" . elgg_echo("analytics:settings:track_events:warning") . "</div>";
$google .= "</div>";

$google .= "<div class='mbs'>";
$google .= elgg_echo("analytics:settings:flag_administrators");
$google .= elgg_view("input/dropdown", array("name" => "params[flagAdmins]", "options_values" => $noyes_options, "value" => $plugin->flagAdmins, "class" => "mls"));
$google .= "</div>";

$google .= "<div class='mbs'>";
$google .= elgg_echo("analytics:settings:anonymize_ip");
$google .= elgg_view("input/dropdown", array("name" => "params[anonymizeIp]", "options_values" => $noyes_options, "value" => $plugin->anonymizeIp, "class" => "mls"));
$google .= "</div>";

echo elgg_view_module("inline", elgg_echo("analytics:settings:google"), $google);

// Piwik
$piwik = "<div class='mbs'>" . elgg_echo("analytics:settings:piwik:description") . "</div>";

$piwik .= "<div class='mbs'>";
$piwik .= elgg_echo("analytics:settings:piwik:url");
$piwik .= elgg_view("input/url", array("name" => "params[piwik_url]", "value" => $plugin->piwik_url));
$piwik .= "<div class='elgg-subtext'>" . elgg_echo("analytics:settings:piwik:url:description") . "</div>";
$piwik .= "</div>";

$piwik .= "<div class='mbs'>";
$piwik .= elgg_echo("analytics:settings:piwik:site_id");
$piwik .= elgg_view("input/text", array("name" => "params[piwik_site_id]", "value" => $plugin->piwik_site_id));
$piwik .= "</div>";

echo elgg_view_module("inline", elgg_echo("analytics:settings:piwik"), $piwik);
	