<?php
/**
 * All plugin hook handlers are bundled here
 */

/**
 * Track Elgg actions
 *
 * @param string $hook        the name of the hook
 * @param string $type        the type of the hook
 * @param bool   $returnvalue current return value
 * @param array  $params      supplied params
 *
 * @return void
 */
function analytics_action_plugin_hook($hook, $type, $returnvalue, $params) {
	static $track_actions;
	
	if (!isset($track_actions)) {
		$track_actions = false;
		
		if (elgg_get_plugin_setting("trackActions", "analytics") == "yes") {
			$track_actions = true;
		}
	}
	
	if ($track_actions) {
		register_shutdown_function("analytics_track_action", $type);
	}
}
