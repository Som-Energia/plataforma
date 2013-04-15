<?php

$spanish = array( 
	/**
	 * Menu items and titles
	 */
	'messageboard:board' => "Muro",
	'messageboard:messageboard' => "muro",
	'messageboard:viewall' => "Ver todo",
	'messageboard:postit' => "Publicar",
	'messageboard:history:title' => "Historial",
	'messageboard:none' => "A&uacute;n no hay nada en este muro",
	'messageboard:num_display' => "Mensajes a mostra",
	'messageboard:desc' => "Esto es un muro en el cual pueden comentar otros usuarios y tu puedes comentar en el de otros a la vez.",

	'messageboard:user' => "Muro de %s",

	'messageboard:replyon' => 'responder',
	'messageboard:history' => "historial",

	'messageboard:owner' => 'muro de %s',
	'messageboard:owner_history' => '%s coment&oacute; en el muro de %s',

	/**
	 * Message board widget river
	 */
	'river:messageboard:user:default' => "%s coment&oacute; en el muro de %s",

	/**
	 * Status messages
	 */
	'messageboard:posted' => "Comentario en el muro agregado.",
	'messageboard:deleted' => "Comentario eliminado.",

	/**
	 * Email messages
	 */
	'messageboard:email:subject' => 'Tienes un nuevo mensaje en el muro!',
	'messageboard:email:body' => "Tienes un nuevo comentario en el muro de %s. Dice:

%s


Par ver los comentarios del muro, haz click aqu&iacute;:

	%s

Para ver el perfil de %s, haz click aqu&iacute;:

	%s

Por favor, no responda a este mail.",

	/**
	 * Error messages
	 */
	'messageboard:blank' => "Lo sentimos, debe ingresar contenido en el &aacute;rea de mensaje para poder grabar.",
	'messageboard:notfound' => "Lo sentimos, no se pudo encontrar el item especificado.",
	'messageboard:notdeleted' => "Lo sentimos, no se pudo eliminar el mensaje.",
	'messageboard:somethingwentwrong' => "Aseg&uacute;rese de haber escrito un mensaje.",

	'messageboard:failure' => "Ha ocurrido un error inesperado al intentar publicar el mensaje, por favor intente nuevamente",

);

add_translation('es', $spanish); 

?>