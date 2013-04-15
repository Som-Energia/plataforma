<?php
/**
* Elgg send a message action page
* 
* @package ElggMessages
*/

$spanish = array(
	/**
	* Menu items and titles
	*/

	'messages' => "Mensajes",
	'messages:back' => "regresar a mensajes",
	'messages:user' => "Bandeja de entrada de %s",
	'messages:posttitle' => "Mensajes de %s: %s",
	'messages:inbox' => "Bandeja de entrada",
	'messages:send' => "Enviar",
	'messages:sent' => "Enviado",
	'messages:message' => "Mensaje",
	'messages:title' => "Asunto",
	'messages:to' => "Para",
	'messages:from' => "De",
	'messages:fly' => "Enviar",
	'messages:replying' => "Mensaje en respuesta a",
	'messages:inbox' => "Bandeja de entrada",
	'messages:sendmessage' => "Enviar un mensaje",
	'messages:compose' => "Redactar",
	'messages:add' => "Redactar",
	'messages:sentmessages' => "Mensajes enviados",
	'messages:recent' => "Mensajes recientes",
	'messages:original' => "Mensaje original",
	'messages:yours' => "Su mensaje",
	'messages:answer' => "Responder",
	'messages:toggle' => 'Invertir todos',
	'messages:markread' => 'Marcar como le&iacute;do',
	'messages:recipient' => 'Elegir un destinatario&hellip;',
	'messages:to_user' => 'Para: %s',

	'messages:new' => 'Nuevo mensaje',

	'notification:method:site' => 'Mensajes',

	'messages:error' => 'Ha ocurrido un error al guardar el mensaje, por favor intente nuevamente.',

	'item:object:messages' => 'Mensajes',

	/**
	* Status messages
	*/
	'messages:posted' => "Mensaje enviado correctamente.",
	'messages:success:delete:single' => 'Mensaje eliminado',
	'messages:success:delete' => 'Mensajes eliminados',
	'messages:success:read' => 'Mensajes marcados como le&iacute;dos',
	'messages:error:messages_not_selected' => 'No hay mensajes seleccionados',
	'messages:error:delete:single' => 'No se puede eliminar el mensaje',

	/**
	* Email messages
	*/
	'messages:email:subject' => 'Tienes un nuevo mensaje!',
	'messages:email:body' => "Tienes un nuevo mensaje de %s. Dice:


	%s


	Para ver sus mensajes, haga click aqu&iacute;:

	%s

	Para enviar un mensaje a %s, haga click aqu&iacute;:

	%s

	Por favor no responda a este mail.",

	/**
	* Error messages
	*/
	'messages:blank' => "Debe ingresar texto en el cuerpo del mensaje para poder guardarlo.",
	'messages:notfound' => "Lo sentimos, no se pudo encontrar el mensaje especificado.",
	'messages:notdeleted' => "Lo sentimos, no se pudo eliminar el mensaje.",
	'messages:nopermission' => "No posee los permisos necesarios para modificar el mensaje.",
	'messages:nomessages' => "No hay mensajes.",
	'messages:user:nonexist' => "No se pudo encontrar al destinatario en la base de datos de usuarios.",
	'messages:user:blank' => "No se ha seleccionado a un destinatario.",

	'messages:deleted_sender' => 'Usuario eliminado',

);
		
add_translation("es", $spanish);