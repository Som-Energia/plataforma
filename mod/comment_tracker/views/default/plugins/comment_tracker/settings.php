<?php
/**
 * Comment tracker plugin settings
 */

$email_content_type = $vars['entity']->email_content_type;
if (!$email_content_type) {
	$email_content_type = 'text';
}

?>

<p>
	<?php
		echo elgg_echo('comment_tracker:setting:notify_owner');
		echo elgg_view('input/dropdown', array(
			'name' => 'params[notify_owner]',
			'options_values' => array(
				'yes' => elgg_echo('option:yes'),
				'no' => elgg_echo('option:no')
			),
			'value' => $vars['entity']->notify_owner ? $vars['entity']->notify_owner : 'no'
		));
	?>
</p>

<p>
	<?php
	echo elgg_echo('comment_tracker:setting:show_entity_button') . ' ';
	echo elgg_view('input/select', array(
		'name' => 'params[show_entity_button]',
		'options_values' => array(
			'yes' => elgg_echo('option:yes'),
			'no' => elgg_echo('option:no')
		),
		'value' => $vars['entity']->show_entity_button ? $vars['entity']->show_entity_button : 'yes'
	));
	?>
</p>

<p>
	<?php
	echo elgg_echo('comment_tracker:setting:show_river_button') . ' ';
	echo elgg_view('input/select', array(
		'name' => 'params[show_river_button]',
		'options_values' => array(
			'yes' => elgg_echo('option:yes'),
			'no' => elgg_echo('option:no')
		),
		'value' => $vars['entity']->show_river_button ? $vars['entity']->show_river_button : 'no'
	));
	?>
</p>

<p>
	<?php
		echo elgg_echo('comment_tracker:setting:show_button') . ' ';
		echo elgg_view('input/select', array(
			'name' => 'params[show_button]',
			'options_values' => array(
				'yes' => elgg_echo('option:yes'),
				'no' => elgg_echo('option:no')
			),
			'value' => $vars['entity']->show_button ? $vars['entity']->show_button : 'no'
		));
	?>
</p>