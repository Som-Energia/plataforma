<?php
/**
 * Tidypics ajax upload form body
 *
 * @uses $vars['entity']
 */

$album = $vars['entity'];

$ts = time();
$batch = time();
$tidypics_token = generate_action_token($ts);
$basic_uploader_url = current_page_url() . '/basic';

$maxfilesize = (float) elgg_get_plugin_setting('maxfilesize', 'tidypics');
if (!$maxfilesize) {
	$maxfilesize = 5;
}

?>

<p>
	<?php
		echo elgg_echo('tidypics:uploader:instructs', array($maxfilesize));
	?>
</p>

<div id="uploader">
	<input type="hidden" name="album_guid" value="<?php echo $album->getGUID(); ?>" />
	<input type="hidden" name="batch" value="<?php echo $batch; ?>" />
	<input type="hidden" name="tidypics_token" value="<?php echo $tidypics_token; ?>" />
	<input type="hidden" name="user_guid" value="<?php echo elgg_get_logged_in_user_guid(); ?>" />
	<input type="hidden" name="Elgg" value="<?php echo session_id(); ?>" />
	<p>
		<?php
			elgg_echo('tidypics:uploader:no_flash');
		?>
	</p>
</div>
