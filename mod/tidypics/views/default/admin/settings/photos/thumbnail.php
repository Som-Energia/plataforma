<?php
/**
 * Tidypics thumbnail creation tool
 */

elgg_load_js('tidypics:resize_thumbnails');

$title = elgg_echo('tidypics:settings:thumbnail');
$body = '<p>' . elgg_echo('tidypics:thumbnail_tool_blurb') . '</p>';
$im_id = elgg_echo('tidypics:settings:im_id');
$input = elgg_view('input/text', array(
	'name' => 'image_id'
));
$submit = elgg_view('input/submit', array(
	'value' => elgg_echo('submit'),
	'id' => 'elgg-tidypics-im-test'
));

$body .=<<<HTML
	<p>
		<label>$im_id $input</label>
	</p>
	<p>
		$submit
		<div id="elgg-tidypics-im-results"></div>
	</p>
HTML;

echo elgg_view_module('inline', $title, $body);


$access_status = access_get_show_hidden_status();
access_show_hidden_entities(true);
$options = array(
	'type' => 'object',
	'subtype' => 'image',
	'count' => true
);
$count = elgg_get_entities($options);
access_show_hidden_entities($access_status);

$action = 'action/photos/admin/resize_thumbnails';

$success_count_string = elgg_echo('tidypics:resize_thumbnails:success_processed');
$error_count_invalid_image_string = elgg_echo('tidypics:resize_thumbnails:error_invalid_image_info');
$error_count_recreate_failed_string = elgg_echo('tidypics:resize_thumbnails:error_recreate_failed');

echo '<p class="mtm">';

$title2 = elgg_echo('tidypics:settings:resize_thumbnails_title');
$body2 = '<p>' . elgg_echo('tidypics:settings:resize_thumbnails_instructions') . '</p>';

$status_string = '<p>' . elgg_echo('tidypics:settings:resize_thumbnails_count', array($count)) . '</p>';

$action_link = '<p>' . elgg_view('output/url', array(
	'text' => elgg_echo('tidypics:settings:resize_thumbnails_start'),
	'href' => $action,
	'class' => 'elgg-button elgg-button-submit mtl',
	'is_action' => true,
	'is_trusted' => true,
	'id' => 'tidypics-resizethumbnails-run',
)) . "</p>";

$body2 .=<<<HTML
	<p>$status_string</p>
	<span id="tidypics-resizethumbnails-total" class="hidden">$count</span>
	<span id="tidypics-resizethumbnails-count" class="hidden">0</span>
	<span id="tidypics-resizethumbnails-action" class="hidden">$action</span>
	<div class="elgg-progressbar mvl"><span class="elgg-progressbar-counter" id="tidypics-resizethumbnails-counter">0%</span></div>
	<ul class="mvl">
		<li>$success_count_string <span id="tidypics-resizethumbnails-success-count">0</span></li>
		<li>$error_count_invalid_image_string <span id="tidypics-resizethumbnails-error-invalid-image-count">0</span></li>
		<li>$error_count_recreate_failed_string <span id="tidypics-resizethumbnails-error-recreate-failed-count">0</span></li>
	</ul>
	<div id="tidypics-resizethumbnails-spinner" class="elgg-ajax-loader hidden"></div>
	<ul class="mvl" id="tidypics-resizethumbnails-messages"></ul>
	$action_link
HTML;

echo elgg_view_module('inline', $title2, $body2);

?>

<script type="text/javascript">
	$(function() {
		$('#elgg-tidypics-im-test').click(function() {
			var image_id = $('input[name=image_id]').val();
			$("#elgg-tidypics-im-results").html('<div class="elgg-ajax-loader"></div>');
			elgg.action('photos/admin/create_thumbnails', {
				format: 'JSON',
				data: {guid: image_id},
				cache: false,
				success: function(result) {
					// error
					if (result.status < 0) {
						var html = '';
					} else {
						var html = '<img class="elgg-photo tidypics-photo" src="'
							+ result.output.thumbnail_src + '" alt="' + result.output.title
							+ '" />';
					}
					$("#elgg-tidypics-im-results").html(html);
				}
			});
		});
	});
</script>