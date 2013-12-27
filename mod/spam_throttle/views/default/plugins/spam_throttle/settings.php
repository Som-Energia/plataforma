<?php

/*
 * 	This is the form to set the plugin settings
 */


// preamble & explanation
echo elgg_echo('spam_throttle:explanation') . "<br><br>";
echo elgg_echo('spam_throttle:consequence:explanation');
echo "<ul><li><b>" . elgg_echo('spam_throttle:nothing') . "</b> - " . elgg_echo('spam_throttle:nothing:explained') . "<br></li>";
echo "<li><b>" . elgg_echo('spam_throttle:suspend') . "</b> - " . elgg_echo('spam_throttle:suspend:explained') . "<br></li>";
echo "<li><b>" . elgg_echo('spam_throttle:ban') . "</b> - " . elgg_echo('spam_throttle:ban:explained') . "<br></li>";
echo "<li><b>" . elgg_echo('spam_throttle:delete') . "</b> - " . elgg_echo('spam_throttle:delete:explained') . "</li></ul><br>";

// globals
echo "<div style=\"padding: 8px; border: 2px solid #454545; margin: 15px 0;\">";
echo "<h2>" . elgg_echo('spam_throttle:settings:global') . "</h2><br>";
echo elgg_view('input/text', array('name' => 'settings[global_limit]', 'value' => elgg_get_plugin_setting('global_limit', 'spam_throttle'), 'js' => 'style="width: 50px"'));
echo " " . sprintf(elgg_echo('spam_throttle:helptext:limit'), elgg_echo('spam_throttle:new_content')) . "<br>";

echo elgg_view('input/text', array('name' => 'settings[global_time]', 'value' => elgg_get_plugin_setting('global_time', 'spam_throttle'), 'js' => 'style="width: 50px;"'));
echo " " . elgg_echo('spam_throttle:helptext:time') . "<br><br>";

// action to perform if threshold is broken
echo "<h2>" . sprintf(elgg_echo('spam_throttle:consequence:title'), elgg_echo('spam_throttle:global')) . "</h2><br>";
$value = elgg_get_plugin_setting('global_consequence', 'spam_throttle');
$selectopts = array();
$selectopts['name'] = "settings[consequence][global]";
$selectopts['value'] = !empty($value) ? $value : "suspend";
$selectopts['options_values'] = array('nothing' => elgg_echo('spam_throttle:nothing'), 'suspend' => elgg_echo('spam_throttle:suspend'), 'ban' => elgg_echo('spam_throttle:ban'), 'delete' => elgg_echo('spam_throttle:delete'));
echo elgg_view('input/dropdown', $selectopts);
echo "</div>";

// loop through all of our object subtypes

// first get a list of all of the subtypes - is there a better way than a direct query?
$subtypes = get_data("SELECT subtype FROM " . $CONFIG->dbprefix . "entity_subtypes WHERE type = 'object' AND subtype NOT IN('plugin','widget','reported_content')");

foreach($subtypes as $subtype){
	echo "<div style=\"padding: 8px; border: 2px solid #454545; margin: 15px 0;\">";
	echo "<h2>" . sprintf(elgg_echo('spam_throttle:settings:subtype'), elgg_echo($subtype->subtype)) . "</h2><br>";
	echo elgg_view('input/text', array('name' => 'settings['.$subtype->subtype.'_limit]', 'value' => elgg_get_plugin_setting($subtype->subtype.'_limit', 'spam_throttle'), 'js' => 'style="width: 50px"'));
	echo " " . sprintf(elgg_echo('spam_throttle:helptext:limit'), elgg_echo($subtype->subtype)) . "<br>";

	echo elgg_view('input/text', array('name' => 'settings['.$subtype->subtype.'_time]', 'value' => elgg_get_plugin_setting($subtype->subtype.'_time', 'spam_throttle'), 'js' => 'style="width: 50px;"'));
	echo " " . elgg_echo('spam_throttle:helptext:time') . "<br><br>";
	
	// action to perform if threshold is broken
	echo "<h2>" . sprintf(elgg_echo('spam_throttle:consequence:title'), elgg_echo($subtype->subtype)) . "</h2><br>";
	$value = elgg_get_plugin_setting($subtype->subtype.'_consequence', 'spam_throttle');
	$selectopts = array();
	$selectopts['name'] = "settings[consequence][$subtype->subtype]";
	$selectopts['value'] = !empty($value) ? $value : "suspend";
	$selectopts['options_values'] = array('nothing' => elgg_echo('spam_throttle:nothing'), 'suspend' => elgg_echo('spam_throttle:suspend'), 'ban' => elgg_echo('spam_throttle:ban'), 'delete' => elgg_echo('spam_throttle:delete'));
	echo elgg_view('input/dropdown', $selectopts);
	echo "</div>";
}

// comments
echo "<div style=\"padding: 8px; border: 2px solid #454545; margin: 15px 0;\">";
echo "<h2>" . elgg_echo('spam_throttle:settings:comment') . "</h2><br>";
echo elgg_view('input/text', array('name' => 'settings[annotation_generic_comment_limit]', 'value' => elgg_get_plugin_setting('annotation_generic_comment_limit', 'spam_throttle'), 'js' => 'style="width: 50px"'));
echo " " . sprintf(elgg_echo('spam_throttle:helptext:limit'), elgg_echo('spam_throttle:comment')) . "<br>";

echo elgg_view('input/text', array('name' => 'settings[annotation_generic_comment_time]', 'value' => elgg_get_plugin_setting('annotation_generic_comment_time', 'spam_throttle'), 'js' => 'style="width: 50px;"'));
echo " " . elgg_echo('spam_throttle:helptext:time') . "<br><br>";

// action to perform if threshold is broken
echo "<h2>" . sprintf(elgg_echo('spam_throttle:consequence:title'), elgg_echo('spam_throttle:comment')) . "</h2><br>";
$value = elgg_get_plugin_setting('annotation_generic_comment_consequence', 'spam_throttle');
$selectopts = array();
$selectopts['name'] = "settings[consequence][annotation_generic_comment]";
$selectopts['value'] = !empty($value) ? $value : "suspend";
$selectopts['options_values'] = array('nothing' => elgg_echo('spam_throttle:nothing'), 'suspend' => elgg_echo('spam_throttle:suspend'), 'ban' => elgg_echo('spam_throttle:ban'), 'delete' => elgg_echo('spam_throttle:delete'));
echo elgg_view('input/dropdown', $selectopts);
echo "</div>";


// length of time of a suspension
$value = elgg_get_plugin_setting('suspensiontime', 'spam_throttle');
echo "<h2>" . elgg_echo('spam_throttle:suspensiontime') . "</h2><br>";
echo elgg_view('input/text', array('name' => 'settings[suspensiontime]', 'value' => !empty($value) ? $value : 24, 'js' => 'style="width: 50px"'));
echo " " . elgg_echo('spam_throttle:helptext:suspensiontime') . "<br><br>";

// period for reporting, once in x hours to pre
$value = elgg_get_plugin_setting('reporttime', 'spam_throttle');
echo "<h2>" . elgg_echo('spam_throttle:reporttime') . "</h2><br>";
echo elgg_view('input/text', array('name' => 'settings[reporttime]', 'value' => !empty($value) ? $value : 24, 'js' => 'style="width: 50px"'));
echo " " . elgg_echo('spam_throttle:helptext:reporttime') . "<br><br>";


echo "<h2>" . elgg_echo('spam_throttle:exemptions') . "</h2><br>";
echo elgg_view('input/userpicker');
echo elgg_echo('spam_throttle:helptext:exemptions') . "<br><br>";
