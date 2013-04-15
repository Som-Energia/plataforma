<?php
/**
 * Elgg Tracker plugin
 * @license: GPL v 2.
 * @author slyhne
 * @copyright Zurf.dk
 * @link http://zurd.dk/elgg
 */

if (!$vars['entity']->tracker_display) {
	$vars['entity']->tracker_display = "profile";
}
    
	if (!$vars['entity']->tracker_url) {
	$vars['entity']->tracker_url = 'http://en.utrace.de/?query=%s';
} 

?>

<hr />
<p><label>
    <?php
        echo elgg_echo('tracker:display');
	echo elgg_view('input/dropdown', array(
                        'name' => 'params[tracker_display]',
                        'options_values' => array(
                                'profile' => elgg_echo('tracker:display:profile'),
                                'adminmenu' => elgg_echo('tracker:display:adminmenu'),
                        ),
                        'value' => $vars['entity']->tracker_display
                ));
    ?>
</label></p>
<br><br>
<p><label>
    <?php
      echo elgg_echo('tracker:url');
      echo "<br><small><small>" . elgg_echo('tracker:url:help') . "</small></small>";
   
      echo elgg_view('input/text', array('name' => "params[tracker_url]", 'value' => $vars['entity']->tracker_url));
    ?>
</label></p>
