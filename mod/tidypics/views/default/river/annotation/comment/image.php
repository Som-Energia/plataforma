<?php
/**
 * Post comment on image river view
 */

elgg_load_js('tidypics');
elgg_load_js('lightbox');
elgg_load_css('lightbox');

$object = $vars['item']->getObjectEntity();
$comment = $vars['item']->getAnnotation();

$attachments = '';
$river_comments_thumbnails = elgg_get_plugin_setting('river_comments_thumbnails', 'tidypics');
if ($river_comments_thumbnails == "show") {
	$preview_size = elgg_get_plugin_setting('river_thumbnails_size', 'tidypics');
	if(!$preview_size) {
		$preview_size = 'tiny';
	}
	$image = $vars['item']->getObjectEntity();
	$attachments = elgg_view_entity_icon($image, $preview_size, array(
		'href' => $image->getIconURL('master'),
		'img_class' => 'tidypics-photo',
		'link_class' => 'tidypics-lightbox',
	));
}

echo elgg_view('river/elements/layout', array(
	'item' => $vars['item'],
	'attachments' => $attachments,
	'message' => elgg_get_excerpt($comment->value),
));
