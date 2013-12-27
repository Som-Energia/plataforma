<?php

$plugin = $vars['entity'];

?>

<div>
	<label><?php echo elgg_echo('akismet:api_key'); ?>:</label>
	<?php echo elgg_view('input/text', array('name' => 'params[api_key]', 'value' => $plugin->api_key)); ?>
</div>
