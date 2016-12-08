<?php
/**
 * Discussion topic reply form body
 *
 * @uses $vars['entity'] The entity to reply/edit
 * @uses $vars['reply'] If it is an edition or a reply
 * @uses $vars['inline'] Display a shortened form?
 */

if (isset($vars['entity']) && elgg_is_logged_in()) {

	echo elgg_view('input/hidden', array(
		'name' => 'entity_guid',
		'value' => $vars['entity']->getGUID(),
	));

	$inline = elgg_extract('inline', $vars, false);

	$reply = elgg_extract('reply', $vars);
	
	echo elgg_view('input/hidden', array(
		'name' => 'reply',
		'value' => $reply,
	));
	
	$value = '';

	if (!$reply) {
		$value = $vars['entity']->description;
	}

	if ($inline) {
		echo elgg_view('input/text', array('name' => 'group_topic_post', 'value' => $value));
		echo elgg_view('input/submit', array('value' => elgg_echo('reply')));
	} else {
?>
	<div>
		<label>
		<?php
			if (!$reply) {
				echo elgg_echo('edit');
			} else {
				echo elgg_echo("reply");
			}
		?>
		</label>
		<?php echo elgg_view('input/longtext', array('name' => 'group_topic_post', 'value' => $value)); ?>
	</div>
	<div class="elgg-foot">
<?php
	if (!$reply) {
		echo elgg_view('input/submit', array('value' => elgg_echo('save')));
	} else {
		echo elgg_view('input/submit', array('value' => elgg_echo('reply')));
	}
?>
	</div>
<?php
	}
}
