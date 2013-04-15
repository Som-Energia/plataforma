<?php
$videowidth = $vars['entity']->videowidth;
if (!$videowidth) {
	$videowidth = '284';
}

$front_url = $vars['entity']->front_url;

$front_width = $vars['entity']->front_width;
if (!$front_width) {
	$front_width = '400';
}
?>

<div style="margin-bottom: 20px;">  
    <div style="margin-bottom: 8px;"><h4>Widget Settings</h4></div>
	<?php

	echo elgg_echo('embedvideo:width');
	echo ': ';
	echo elgg_view('input/text', array(
	'internalname' => 'params[videowidth]',
	'value' => $videowidth,
	'class' => ' ',
	) );
	?>
</div>
<div>
    <div style="margin-bottom: 8px;"><h4>Front Page Settings</h4></div>
	<p><?php echo elgg_echo('embedvideo:url'); ?>: &nbsp;&nbsp;
		<input style="width: 80%;" onclick="this.select();" type="text" name="params[front_url]" value="<?php echo htmlentities($vars['entity']->front_url); ?>" class="input-text" /></p>
	<br/>
	<?php
	echo elgg_echo('embedvideo:width') . ': ';
	echo elgg_view('input/text', array(
										'internalname' => 'params[front_width]',
										'value' => $front_width,
										'class' => ' ',
										) );

	?>
</div>
