<?php
/**
         * Elgg dokuwiki plugin
         * 
         * @package
         * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
         * @author lorea
         * @copyright lorea
         * @link http://lorea.cc
         */

elgg_register_event_handler('init','system','dokuwiki_init');

function dokuwiki_init(){
	
	elgg_register_library('elgg:dokuwiki', elgg_get_plugins_path().'dokuwiki/lib/dokuwiki.php');
	
	elgg_register_entity_type('object','dokuwiki');
	elgg_register_plugin_hook_handler('entity:icon:url', 'object', 'dokuwiki_icon_hook');
	elgg_register_entity_url_handler('object', 'dokuwiki', 'dokuwiki_url');

	// add block link to
	elgg_register_plugin_hook_handler('register', 'menu:owner_block', 'dokuwiki_owner_block_menu');

	elgg_register_page_handler('dokuwiki','dokuwiki_page_handler');
	
	add_group_tool_option('dokuwiki',elgg_echo('groups:enabledokuwiki'),false);
	add_group_tool_option('dokuwiki_frontsidebar',elgg_echo('groups:enabledokuwiki_frontsidebar'),false);
	add_group_tool_option('dokuwiki_frontpage',elgg_echo('groups:enabledokuwiki_frontpage'),false);
	
	elgg_extend_view('groups/profile/summary','dokuwiki/grouppage');
	elgg_extend_view('groups/tool_latest','dokuwiki/sidebar');
	
	// Extending CSS
	elgg_extend_view('css/elgg', 'dokuwiki/css');
	
	// add a site navigation item
	$item = new ElggMenuItem('wiki', elgg_echo('dokuwiki:title'), 'dokuwiki/all');
	elgg_register_menu_item('site', $item);
	
	elgg_extend_view("page/elements/head", "dokuwiki/metatags");
}

	/**
	 * Dispatches dokuwiki pages.
	 * URLs take the form of
	 *  All wikis:       dokuwiki/all
	 *  Group wiki:      dokuwiki/<guid>
	 *
	 * @param array $page
	 * @return NULL
	 */
	function dokuwiki_page_handler($page) {
		
		elgg_load_library('elgg:dokuwiki');
		
		if ($page[0] === "all") {
			elgg_set_context("search");
			include(elgg_get_plugins_path().'dokuwiki/index.php');
			return;
		}
		
		elgg_set_context("dokuwiki");

		$dokuwiki_path = elgg_get_plugins_path().'dokuwiki/vendors/dokuwiki/';
		$doku = current_dokuwiki_entity();
		if (!$doku) // can fail if there is no user and wiki doesnt exist
			forward();
		$parsed_url = parse_url(elgg_get_site_url().'dokuwiki/');
		$url_base = $parsed_url['path'];
		if (is_numeric($page[0])) {
			$entity_guid = $page[0];
			$ent = get_entity($entity_guid);
			
			if (($ent && $ent instanceof ElggGroup) && $ent->dokuwiki_enable !== 'yes') {
				// wiki not activated for this group. bail out.
				forward();
			}
			if ($ent && (/*$ent instanceof ElggUser ||*/ $ent instanceof ElggGroup)) {
				elgg_set_page_owner_guid($entity_guid);
				$data_path = elgg_get_data_path().'wikis/'.$entity_guid;
			} else {
				// can't see the group
				forward();
			}
			$page = array_slice($page, 1); // pop first element
			define('DOKU_REL', $url_base.$entity_guid."/");
			define('DOKU_BASE', $url_base.$entity_guid."/");
			define('DOKU_URL', elgg_get_site_url().'dokuwiki/'.$entity_guid."/");

		}
		else {
			$data_path = elgg_get_data_path().'wiki';
			define('DOKU_REL', $url_base);
			define('DOKU_BASE', $url_base);
			define('DOKU_URL', elgg_get_site_url().'dokuwiki/');
		}
		define('DOKU_INC', $dokuwiki_path);
		define('DOKU_MEDIA', elgg_get_site_url().'mod/dokuwiki/vendors/dokuwiki/');
		define('DOKU_CONF', $dokuwiki_path."conf/");

		dokuwiki_create_datafolder($data_path);
		define('DOKU_ELGGDATA',$data_path);
		if (empty($page) || (count($page)==1 && $page[0] == 'acl')) {
			$page = array('doku.php');
		}
		else if ((count($page)==1 && $page[0] == 'usermanager')) {
			$page = array('doku.php');
		}
		else if ((count($page)==1 && $page[0] == 'plugin')) {
			$page = array('doku.php');
		}
		else if ((count($page)==1 && $page[0] == 'config')) {
			$page = array('doku.php');
		}
		else if ((count($page)==1 && $page[0] == 'revert')) {
			$page = array('doku.php');
		}
		else if ((count($page)==1 && $page[0] == 'popularity')) {
			$page = array('doku.php');
		}
		if (empty($page) || (count($page)==1 && !$page[0])) {
			$page = array('doku.php');
		}
		$_SERVER['PHP_AUTH_USER'] = elgg_get_logged_in_user_entity()->username;
		$_SERVER['PHP_AUTH_PW'] = elgg_get_logged_in_user_entity()->password;
		if (count($page) == 1) {
			$doku_body = elgg_view('dokuwiki/index',array('page'=>$page[0]));
			echo $doku_body;
		}
		else {
			// avoid inclusion over root
			$dest = realpath($dokuwiki_path.implode("/",$page));
			if (strpos($dest, $dokuwiki_path) == 0)
				$doku_body = elgg_view('dokuwiki/index',array('page'=>implode("/",$page)));
			echo $doku_body;
		}
		return;
	}

	/**
	 * Add a menu item to an ownerblock
	 */
	function dokuwiki_owner_block_menu($hook, $type, $return, $params) {
		if (elgg_instanceof($params['entity'], 'group') && $params['entity']->dokuwiki_enable != "no") {
			$url = "dokuwiki/{$params['entity']->guid}/";
			$item = new ElggMenuItem('dokuwiki', elgg_echo('dokuwiki:group'), $url);
			$return[] = $item;
		}
		return $return;
	}

	function dokuwiki_icon_hook($hook, $entity_type, $returnvalue, $params) {
		if ($hook == 'entity:icon:url' && $params['entity']->getSubtype() == 'dokuwiki') {
			$owner = get_entity($params['entity']->container_guid);
			if ($owner)
				return $owner->getIcon($params['size']);
		}
		return $returnvalue;
	}

	function dokuwiki_url($entity) {
		return elgg_get_site_url() . "dokuwiki/".$entity->container_guid;
	}

?>
