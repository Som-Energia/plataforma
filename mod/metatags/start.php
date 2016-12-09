<?php
	/**
	 * Elgg Metatags generator plugin
	 * This plugin make the metatags for content.
	 * 
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Gerard Kanters
	 * Website: https://www.centillien.com
	 */

	function metatagsgen_init() {

		elgg_extend_view('page/elements/head','metatagsgen/metatags');
		elgg_extend_view("object/blog", "metatagsgen/track_page_entity",400);
		if(elgg_is_active_plugin("market")){
			elgg_extend_view("object/market", "metatagsgen/track_page_entity");
		}
		if(elgg_is_active_plugin("anypage")){
			elgg_extend_view("object/anypage", "metatagsgen/track_page_entity");
		}
	
		//Static caching of icons
		$cloudflare = elgg_get_plugin_setting("cloudflare","metatags");
	        if($cloudflare == "yes") {
			elgg_register_plugin_hook_handler('entity:icon:url', 'user', 'user_icon_url_override');
			elgg_register_plugin_hook_handler('entity:icon:url', 'group', 'group_icon_url_override');
		}
		
		//Unregister systemlog since it is not very usefull	 
		elgg_unregister_event_handler('log', 'systemlog', 'system_log_default_logger');

}

function user_icon_url_override($hook, $type, $returnvalue, $params) {
     $user = $params['entity'];
     $size = $params['size'];

     if (isset($user->externalPhoto)) {
          // return thumbnail
          return $user->externalPhoto;
	} else {
          if (isset($user->icontime)) {
               return "avatar/view/$user->username/$size/$user->icontime.jpg";
          } else {
               return "_graphics/icons/user/default{$size}.gif";
          }
     }
}

function group_icon_url_override($hook, $type, $returnvalue, $params) {

	$group = $params['entity'];
	$size = $params['size'];

	$icontime = $group->icontime;
	if (null === $icontime) {
		$file = new ElggFile();
		$file->owner_guid = $group->owner_guid;
		$file->setFilename("groups/" . $group->guid . "large.jpg");
		$icontime = $file->exists() ? time() : 0;
		create_metadata($group->guid, 'icontime', $icontime, 'integer', $group->owner_guid, ACCESS_PUBLIC);
        }
	if ($icontime) {
		// return thumbnail
		return "groupicon/$group->guid/$size/$group->name.jpg";
	}

	return "mod/groups/graphics/default{$size}.gif";
}

elgg_register_event_handler('init','system','metatagsgen_init');
?>
