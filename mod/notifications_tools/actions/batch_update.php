<?php


$users = mysql_query("SELECT guid FROM {$CONFIG->dbprefix}users_entity
	WHERE username != ''");

// recorro todos los usuarios
while ($user = mysql_fetch_object($users)) {

	update_user_personal_notifications_settings($user->guid,get_input('personal_batch_method'));
	update_user_friends_notifications_settings($user->guid,get_input('friends_batch_method'));

	// actualizo las relaciones de notificacion entre un usuario y todos sus amigos
	$friends_method = get_input('friends_batch_method');
	if ( $friends_method != 'nocambiar'){
		$friends = get_user_friends($user->guid);

		foreach ($friends as $friend) {
			switch (get_input('friends_batch_method')) {
				case 'email':
					add_entity_relationship($user->guid, 'notifyemail', $friend->guid);
					remove_entity_relationships($user->guid, 'notifysite', false, 'user');
					break;
				case 'site':
					add_entity_relationship($user->guid, 'notifysite', $friend->guid);
					remove_entity_relationships($user->guid, 'notifyemail' , false, 'user');
					break;
				case 'todos':
					add_entity_relationship($user->guid, 'notifyemail', $friend->guid);
					add_entity_relationship($user->guid, 'notifysite', $friend->guid);
					break;
				case 'ninguno':
					remove_entity_relationships($user->guid, 'notifyemail' , false, 'user');
					remove_entity_relationships($user->guid, 'notifysite' , false, 'user');
				default: // metodo (nocambiar)
					break;
			}
		}
	}
}

system_message(elgg_echo("notifications_tools:done"));
forward("admin/batch_update&personal_batch_method=" . get_input('personal_batch_method') . "&friends_batch_method=" . get_input('friends_batch_method'));