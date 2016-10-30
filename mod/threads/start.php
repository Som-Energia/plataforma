<?php
/**
 * Elgg threaded discussions plugin
 *
 * @package ElggThreads
 */

elgg_register_event_handler('init', 'system', 'threads_init');

/**
 * Initialize the threads plugin
 */
function threads_init() {

	elgg_register_library('elgg:discussion', elgg_get_plugins_path() . 'threads/lib/discussion.php');
	elgg_register_library('elgg:threads', elgg_get_plugins_path() . 'threads/lib/threads.php');

	elgg_register_page_handler('discussion', 'threads_page_handler');
	elgg_register_page_handler('threaded_forums', 'threads_page_handler');

	//elgg_register_entity_url_handler('object', 'groupforumtopic', 'threads_override_topic_url');

	// commenting not allowed on discussion topics (use a different annotation)
	//elgg_register_plugin_hook_handler('permissions_check:comment', 'object', 'threads_comment_override');
	
	$action_base = elgg_get_plugins_path() . 'threads/actions/discussion';
	elgg_register_action('discussion/save', "$action_base/save.php");
	elgg_register_action('discussion/reply/save', "$action_base/reply/save.php");
	elgg_register_action('discussion/reply/delete', "$action_base/reply/delete.php");

	// add links to reply, edit or delete replies.
	elgg_register_plugin_hook_handler('register', 'menu:reply', 'threads_reply_menu_setup');

	// add link to owner block
	//elgg_register_plugin_hook_handler('register', 'menu:owner_block', 'threads_owner_block_menu');

	/* Group module registers topics for search.
	elgg_register_entity_type('object', 'groupforumtopic');*/

	// because replies are not comments, need of our menu item
	//elgg_register_plugin_hook_handler('register', 'menu:river', 'threads_add_to_river_menu');

	/* Theese sentences are performed into groups module.
	add_group_tool_option('forum', elgg_echo('groups:enableforum'), true);
	elgg_extend_view('groups/tool_latest', 'discussion/group_module');*/

	// notifications
	/*register_notification_object('object', 'groupforumtopic', elgg_echo('groupforumtopic:new'));
	elgg_register_plugin_hook_handler('object:notifications', 'object', 'group_object_notifications_intercept');
	elgg_register_plugin_hook_handler('notify:entity:message', 'object', 'groupforumtopic_notify_message');*/
	
	// add link to reply topics
	elgg_register_plugin_hook_handler('register', 'menu:river', 'threads_add_to_river_menu');
	
	elgg_extend_view('css/elgg', 'discussion/css');
	
	$threads_js = elgg_get_simplecache_url('js', 'threads');
	elgg_register_js('elgg.threads', $threads_js);
	
	$parsequery_js = 'mod/threads/vendors/jquery-plugins/parsequery.js';
	elgg_register_js('jquery.plugins.parsequery', $parsequery_js);

	// activity streams support
	elgg_register_plugin_hook_handler('activitystreams:parent', 'entity', 'threads_activitystreams_parent');
	elgg_register_plugin_hook_handler('activitystreams:object', 'river', 'threads_activitystreams_object');

	elgg_register_event_handler('upgrade', 'system', 'threads_run_upgrades');
}

function threads_run_upgrades($event, $type, $details) {
	if (include_once(elgg_get_plugins_path() . 'upgrade-tools/lib/upgrade_tools.php')) {
		upgrade_module_run('threads');
	}
}

function threads_activitystreams_object($hook, $type, $return, $params) {
	$item = $params['item'];
	$object = $item->getObjectEntity();
	if (in_array($item->view, array('river/annotation/group_topic_post/reply'))) {
		//$comment = elgg_get_annotation_from_id($item->annotation_id);
		$entity = get_entity($item->annotation_id);
		if ($entity)
			return $entity;
		
	}
	return $return;
}

function threads_activitystreams_parent($hook, $type, $return, $params) {
        $object = $params['entity'];
	if ($object && $object->getSubtype() == 'topicreply') {
		elgg_load_library('elgg:threads');
		$parent = threads_parent($object->guid);
		if ($parent) {
			return $parent;
		}
	}
	return $return;
}

/**
 * Discussion page handler
 *
 * URLs take the form of
 *  All topics in site:    discussion/all
 *  List topics in forum:  discussion/owner/<guid>
 *  View discussion topic: discussion/view/<guid>
 *  Add discussion topic:  discussion/add/<guid>
 *  Edit discussion topic: discussion/edit/<guid>
 *  Redirect old urls:     threaded_forums/<guid> -> discussion/owner/<guid>
 *
 * @param array $page Array of url segments for routing
 */
function threads_page_handler($page, $handler) {

	// Old urls
	if ($handler == 'threaded_forums') {
		forward('discussion/owner/' . $page[0]);
	}

	elgg_load_library('elgg:groups');
	elgg_load_library('elgg:discussion');

	elgg_push_breadcrumb(elgg_echo('discussion'), 'discussion/all');

	switch ($page[0]) {
		case 'all':
			discussion_handle_all_page();
			break;
		case 'owner':
			discussion_handle_list_page($page[1]);
			break;
		case 'add':
			discussion_handle_edit_page('add', $page[1]);
			break;
		case 'edit':
			discussion_handle_edit_page('edit', $page[1]);
			break;
		case 'view':
			discussion_handle_view_page($page[1]);
			break;
	}
}

/**
 * Override the discussion topic url
 *
 * @param ElggObject $entity Discussion topic
 * @return string
 */
function threads_override_topic_url($entity) {
	return 'discussion/view/' . $entity->guid;
}

/**
 * We don't want people commenting on topics in the river
 */
function threads_comment_override($hook, $type, $return, $params) {
	if (elgg_instanceof($params['entity'], 'object', 'groupforumtopic')) {
		return false;
	}
}

/**
 * Add owner block link
 */
function threads_owner_block_menu($hook, $type, $return, $params) {
	if (elgg_instanceof($params['entity'], 'group')) {
		if ($params['entity']->forum_enable != "no") {
			$url = "discussion/owner/{$params['entity']->guid}";
			$item = new ElggMenuItem('discussion', elgg_echo('discussion:group'), $url);
			$return[] = $item;
		}
	}

	return $return;
}

/**
 * Add the reply button for the river
 */
function threads_add_to_river_menu($hook, $type, $return, $params) {
	if (elgg_is_logged_in() && !elgg_in_context('widgets')) {
		$item = $params['item'];
		$object = $item->getObjectEntity();
		$reply = get_entity($item->annotation_id);
		if (elgg_instanceof($object, 'object', 'groupforumtopic')) {
			if ($reply) {
				$group = $object->getContainerEntity();
				if (($group && $group->canWriteToContainer()) || elgg_is_admin_logged_in()) {
					$options = array(
						'name' => 'reply',
						'href' => "#groups-reply-$reply->guid",
						'text' => elgg_view_icon('speech-bubble'),
						'title' => elgg_echo('reply:this'),
						'rel' => 'toggle',
						'priority' => 50,
					);
					$return[] = ElggMenuItem::factory($options);
				}
			}
		}
	}

	return $return;
}

/**
 * Event handler for group forum posts
 *
 */
function threads_object_notifications($event, $object_type, $object) {

	static $flag;
	if (!isset($flag))
		$flag = 0;

	if (is_callable('object_notifications'))
		if ($object instanceof ElggObject) {
			if ($object->getSubtype() == 'groupforumtopic') {
				//if ($object->countAnnotations('group_topic_post') > 0) {
				if ($flag == 0) {
					$flag = 1;
					object_notifications($event, $object_type, $object);
				}
				//}
			}
		}
}

/**
 * Intercepts the notification on group topic creation and prevents a notification from going out
 * (because one will be sent on the annotation)
 *
 * @param unknown_type $hook
 * @param unknown_type $entity_type
 * @param unknown_type $returnvalue
 * @param unknown_type $params
 * @return unknown
 */
function threads_object_notifications_intercept($hook, $entity_type, $returnvalue, $params) {
	if (isset($params)) {
		if ($params['event'] == 'create' && $params['object'] instanceof ElggObject) {
			if ($params['object']->getSubtype() == 'groupforumtopic') {
				return true;
			}
		}
	}
	return null;
}

/**
 * Returns a more meaningful message
 *
 * @param unknown_type $hook
 * @param unknown_type $entity_type
 * @param unknown_type $returnvalue
 * @param unknown_type $params
 */
/*function groupforumtopic_notify_message($hook, $entity_type, $returnvalue, $params) {
	$entity = $params['entity'];
	$to_entity = $params['to_entity'];
	$method = $params['method'];
	if (($entity instanceof ElggEntity) && ($entity->getSubtype() == 'groupforumtopic')) {

		$descr = $entity->description;
		$title = $entity->title;
		$url = $entity->getURL();

		$msg = get_input('topicmessage');
		if (empty($msg))
			$msg = get_input('topic_post');
		if (!empty($msg))
			$msg = $msg . "\n\n"; else
			$msg = '';

		$owner = get_entity($entity->container_guid);
		if ($method == 'sms') {
			return elgg_echo("groupforumtopic:new") . ': ' . $url . " ({$owner->name}: {$title})";
		} else {
			return elgg_get_logged_in_user_entity()->name . ' ' . elgg_echo("groups:viagroups") . ': ' . $title . "\n\n" . $msg . "\n\n" . $entity->getURL();
		}
	}
	return null;
}*/

/**
 * A simple function to see who can edit a group discussion post
 * @param the comment $entity
 * @param user who owns the group $group_owner
 * @return boolean
 */
function threads_can_edit_discussion($entity, $group_owner) {

	//logged in user
	$user = elgg_get_logged_in_user_guid();

	if (($entity->owner_guid == $user) || $group_owner == $user || elgg_is_admin_logged_in()) {
		return true;
	} else {
		return false;
	}
}

/**
 * Add edit and delete links for forum replies
 */
function threads_reply_menu_setup($hook, $type, $return, $params) {
	if (elgg_in_context('widgets')) {
		return $return;
	}
	
	$entity = $params['entity'];

	if ($entity->type != 'object' || $entity->getSubtype() != 'topicreply') {
		return $return;
	}

	if ($entity->canEdit()) {
		$url = elgg_http_add_url_query_elements('action/discussion/reply/delete', array(
			'entity_guid' => $entity->guid,
		));

		$options = array(
			'name' => 'delete',
			'href' => $url,
			'text' => elgg_view_icon('delete'),
			'confirm' => elgg_echo('deleteconfirm'),
			'text_encode' => false,
			'priority' => 500
		);
		$return[] = ElggMenuItem::factory($options);

		$url = elgg_http_add_url_query_elements('', array(
			'box' => 'edit',
			'guid' => $entity->guid,
		));

		$options = array(
			'name' => 'edit',
			'href' => $url,
			'text' => elgg_echo('edit'),
			'text_encode' => false,
			'priority' => 100,
		);
		$return[] = ElggMenuItem::factory($options);
	}

	return $return;
}
