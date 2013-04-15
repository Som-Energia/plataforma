<?php

elgg_register_event_handler('init', 'system', 'notifications_tools_init');


function notifications_tools_init() {
	// añado las entradas al menu de administracion
	elgg_register_event_handler('pagesetup', 'system', 'notifications_tools_setup_menu');

	// intercepto el evento de creacion de nuevas cuentas
	elgg_register_event_handler('create','user','set_notification_method');

	$action_base = elgg_get_plugins_path() . 'notifications_tools/actions';
	elgg_register_action('batch_update', $action_base . '/batch_update.php','admin');
}

function set_notification_method($event, $object_type, $object) {	
	
	$personalNotifications = elgg_get_plugin_setting('personal_notifications','notifications_tools');
	update_user_personal_notifications_settings($object->getGUID(),$personalNotifications);

	$friendsNotifications = elgg_get_plugin_setting('friends_notifications','notifications_tools');
	update_user_friends_notifications_settings($object->getGUID(), $friendsNotifications);	
}


function notifications_tools_setup_menu() {
	if (elgg_in_context('admin')) {
		//TODO no me deja haver un elemento sin padre, no crea el link
		//elgg_register_admin_menu_item('nada', 'update', 'nada');
		return elgg_register_menu_item('page', array(
		'name' => 'update',
		'href' =>  "admin/batch_update",
		'text' => elgg_echo("admin:batch_update"),
		'context' => 'admin',
		'section' => 'notificaciones'
		));
	}
}


function update_user_personal_notifications_settings($guid,$metodos) {

	switch ($metodos) {
		case 'email':
			set_user_notification_setting($guid, 'site', false);
			set_user_notification_setting($guid, 'email', true);
			break;
		case 'site':
			set_user_notification_setting($guid, 'site', true);
			set_user_notification_setting($guid, 'email', false);
			break;
		case 'todos':
			set_user_notification_setting($guid, 'site', true);
			set_user_notification_setting($guid, 'email', true);
			break;
		case 'ninguno':
			set_user_notification_setting($guid, 'site', false);
			set_user_notification_setting($guid, 'email', false);
		default: // (metodo = nocambiar)
		break;
	}		
}

function update_user_friends_notifications_settings($guid,$metodos) {
		$new_user = get_entity($guid);
		switch ($metodos) {
			case 'email':
				$new_user->collections_notifications_preferences_email= -1;
				$new_user->collections_notifications_preferences_site= 0;
				break;
			case 'site':
				$new_user->collections_notifications_preferences_email= 0;
				$new_user->collections_notifications_preferences_site= -1;
				break;
			case 'todos':
				$new_user->collections_notifications_preferences_email= -1;
				$new_user->collections_notifications_preferences_site= -1;
				break;
			case 'ninguno':
				$new_user->collections_notifications_preferences_email= 0;
				$new_user->collections_notifications_preferences_site= 0;
				break;
			default:// (metodo = nocambiar)
			break;
		}
		$new_user->save();
}


?>
