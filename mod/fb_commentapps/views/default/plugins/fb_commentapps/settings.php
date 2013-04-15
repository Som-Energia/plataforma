<div>
	<?php
	echo'<p>Enter a Facebook Application ID:<br><em>You can get this from <a href="https://developers.facebook.com/apps" target="_blank">Facebook Developers - My Apps</a> page. If you do not have any apps created, you will need to create a new one.</em></p>';
	
	echo elgg_view('input/text', array(
	'name' => 'params[fbAppID]',
	'value' => $vars['entity']->fbAppID,
));

	?>
</div>

<div>
	<?php
	echo'<p>Enter the number of comments to show by default:<br><em>Default value: 2 minimum: 1</em></p>';
	
	echo elgg_view('input/text', array(
	'name' => 'params[fbNumPost]',
	'value' => $vars['entity']->fbNumPost,
));

	?>
</div>

<div>
	<?php
	echo'<p>Enter the width of the plugin in pixels:<br><em>Default value: 470px, minimum recommended width: 400px</em></p>';
	
	echo elgg_view('input/text', array(
	'name' => 'params[fbWidth]',
	'value' => $vars['entity']->fbWidth,
));

	?>
</div>

<div>
    <?php
    echo '<p>Enter the color scheme for the plugin:<em>Default: light</em></p>';

    echo elgg_view('input/dropdown', array(
        'name' => 'params[fbColor]',
		'options_values' => array(
						'light' => elgg_echo('Light'),
						'dark' => elgg_echo('Dark')),
        'value' => $vars['entity']->fbColor,
    ));
	
    ?>
</div>

<div>
	<?php
	echo '<p><small>This plugin is provided by <a href="http://www.colourscripts.com" target="_blank">ColourScript</a>. For more plugins, web applications or customisation needs, please contact us.</small></p>';
	?>
</div>	