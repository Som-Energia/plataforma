<?php
/**
 * Embedded Video Plugin
 *
 * @author Cash Costello
 * @license GPL2
 */

register_elgg_event_handler('init', 'system', 'embedvideo_init');

function embedvideo_init() {
	global $CONFIG;

	include $CONFIG->pluginspath . 'embedvideo/lib/embedvideo.php';

	add_widget_type('embedvideo', elgg_echo('embedvideo:widget'), elgg_echo('embedvideo:description'), 'profile', true);

	extend_view('css','embedvideo/css');

	register_elgg_event_handler('all', 'all', 'embedvideo_log_listener');
}


function embedvideo_frontpage() {
	$url   = get_plugin_setting('front_url', 'embedvideo');
	$width = get_plugin_setting('front_width', 'embedvideo');

	if (!isset($width) || !is_numeric($width) || $width < 0) {
		$width = 400; // if bad width, set default to 400 (seems a reasonable width)
	}

	return videoembed_create_embed_object($url, 0, $width);
}


// head off the default log listener and only log new videos once
function embedvideo_log_listener($event, $object_type, $object) {

	static $catch_double;

	if ($event === 'update' && $object instanceof Loggable && $object->getClassName() === 'ElggWidget') {
		if ($object->handler == 'embedvideo') {
			// only log when url has been changed
			if (isset($object->url) && $object->url_hash != md5($object->url)) {
				if (!isset($catch_double)) {
					remove_from_river_by_object($object->guid);
					add_to_river('river/object/widget/embedvideo/update', 'embedvideo', get_loggedin_userid(), $object->guid);
				}

				$catch_double = true;
			}
		}
	}

	return true;
}
