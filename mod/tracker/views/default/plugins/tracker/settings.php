<?php
/**
 * Elgg Tracker plugin
 * @license: GPL v 2.
 * @author slyhne
 * @copyright tiger-inc.eu
 * @link http://tiger-inc.eu
 */

if (!$vars['entity']->tracker_display) {
	$vars['entity']->tracker_display = "profile";
}

if (!$vars['entity']->tracker_url) {
	$vars['entity']->tracker_url = 'http://en.utrace.de/?query=%s';
}

echo "<label>" . elgg_echo('tracker:display') . "</label>";
echo elgg_view('input/dropdown', array(
	'name' => 'params[tracker_display]',
	'options_values' => array(
		'profile' => elgg_echo('tracker:display:profile'),
		'adminmenu' => elgg_echo('tracker:display:adminmenu'),
		),
	'value' => $vars['entity']->tracker_display
));

echo "<br><br><label>" . elgg_echo('tracker:url') . "</label>";
echo elgg_view('input/text', array('name' => "params[tracker_url]", 'value' => $vars['entity']->tracker_url));
echo "<div class=\"elgg-subtext\">" . elgg_echo('tracker:url:help') . "</div><br>";
