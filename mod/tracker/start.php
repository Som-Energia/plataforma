<?php
/**
 * Elgg Tracker plugin
 * @license: GPL v 2.
 * @author slyhne
 * @copyright Zurf.dk
 * @link http://zurd.dk/elgg
 */

elgg_register_event_handler('init','system','tracker_init');

function tracker_init() {

	// For nice URLs
	elgg_register_page_handler('tracker', 'tracker_page_handler');

	// IP logging at create/login events
	elgg_register_event_handler('login', 'user', 'tracker_log_ip');
	elgg_register_event_handler('create', 'user', 'tracker_log_ip');


	// Show IP address on profile
	if (elgg_is_admin_logged_in()) {
		if (elgg_get_plugin_setting('tracker_display', 'tracker') == 'profile') {
			elgg_extend_view('profile/status', 'tracker/profile_ip');
		} else {
			// Extend avatar hover menu
			elgg_register_plugin_hook_handler('register', 'menu:user_hover', 'tracker_admin_hover_menu');
		}
	}


}	


// Function to save IP address on login
function tracker_log_ip($event, $object_type, $object) {
	if (($object) && ($object instanceof ElggUser)) {
		// Try to get IP address
		if (getenv('HTTP_CLIENT_IP')) {
			$ip_address = getenv('HTTP_CLIENT_IP');
		} elseif (getenv('HTTP_X_FORWARDED_FOR')) {
			$ip_address = getenv('HTTP_X_FORWARDED_FOR');
		} elseif (getenv('HTTP_X_FORWARDED')) {
			$ip_address = getenv('HTTP_X_FORWARDED');
		} elseif (getenv('HTTP_FORWARDED_FOR')) {
			$ip_address = getenv('HTTP_FORWARDED_FOR');
		} elseif (getenv('HTTP_FORWARDED')) {
			$ip_address = getenv('HTTP_FORWARDED');
		} else {
			$ip_address = $_SERVER['REMOTE_ADDR'];
		}

		if (!empty($ip_address)) {
			create_metadata($object->guid, 'ip_address', $ip_address, '', 0, ACCESS_PUBLIC);
		}
	}
}

function tracker_page_handler($page_elements, $handler) {

	admin_gatekeeper();

	// Get IP
	$ip = $page_elements[0];
	if (empty($ip)) {
		$ip = get_input('ip');
	}

	// Set title
	$title = sprintf(elgg_echo('tracker:title'), $ip);

	// Get the list of all IP's
	$content = elgg_list_entities_from_metadata(array(
							'metadata_name' => 'ip_address',
							'metadata_value' => $ip,
							'type' => 'user',
							'limit' => 25
							));	

	// Search box for the sidebar
	set_input( 'ip', $ip );
	$sidebar = elgg_view_module('aside',  elgg_echo("search"), elgg_view('tracker/search'));

	$body = elgg_view_layout('content', array(
						'filter' => '',
						'content' => $content,
						'title' => $title,
						'sidebar' => $sidebar,
						));

	echo elgg_view_page($title, $body);

}

// Add to the user hover admin menu
function tracker_admin_hover_menu($hook, $type, $return, $params) {
	$user = $params['entity'];
	// Get IP address
	$ip_address = $user->ip_address;

	$url = elgg_get_site_url() . "tracker/{$ip_address}";
	$text = elgg_echo('tracker:adminlink');
	$item = new ElggMenuItem('tracker', $text, $url);
	$item->setSection('admin');
	$return[] = $item;

	return $return;
}

elgg_register_event_handler('pagesetup', 'system', 'tracker_pagesetup');

