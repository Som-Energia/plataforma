<?php
/**
 * comment_tracker language extender
 * 
 * @package ElggCommentTracker
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @copyright Copyright (c) 2007-2011 Cubet Technologies. (http://cubettechnologies.com)
 * @version 1.0
 * @author Akhilesh @ Cubet Technologies
 */

	$spanish = array(
		'comments' => "Commentarios",
		'comment:notification:settings' => 'Notificaciones de comentarios',
		'comment:notification:settings:description' => 'Notificarme cuando haya comentarios en elementos en los que te hayas suscrito.',
		'comment:notification:settings:how' => 'Selecciona tu método de notificación',
		'comment:notification:settings:linktext' => 'Ver todos los elementos en los que estoy suscrito',
		'comment:subscriptions' => 'Suscripciones',
		'comment:subscriptions:none' => 'No hay suscripciones actualmente',
		'comment:subscribe:tooltip' => 'Suscríbete para recibir notificaciones cuando haya comentarios',
		'allow:comment:notification' => '¿Quieres habilitar las notificaciones? ',
		'email:content:type' => '¿Deseas recibir correos en formato HTML? ',
		'text:email' => 'No',
		'html:email' => 'Sí',
		'comment:subscribe' => 'Subscribirme',
		'comment:unsubscribe' => 'Cancelar suscripción',
        'comment:subscribe:long' => 'Suscribirme a las notificaciones de comentarios',
		'comment:unsubscribe:long' => 'Cancelar suscripción de las notificaciones de comentarios',
        'comment_tracker:setting:autosubscribe' => "¿Auto-suscribirme al contenido en el que haya comentado?",
		'show:subscribers' => 'Mostrar suscriptores.',
		'comment:subscribe:success' => 'Te has suscrito correctamente a este contenido o temática.',
		'comment:subscribe:failed' => "Lo sentimos! No hemos podido suscribirte a este contenido o temática.",
		'comment:subscribe:entity:not:access' => "Lo sentimos! No hemos encontrado el contenido o temática por alguna razón.",
		'comment:unsubscribe:success' => 'Se ha cancelado correctamente la suscripción a este contenido o temática.',
		'comment:unsubscribe:failed' => "Sorry! You couldn't unsubscribe from this post or topic.",
		'comment:unsubscribe:not:valid:url' => 'Lo sentimos! Esta no es una url correcta para cancelar la suscipción de este contenido o temática.',
		'comment:unsubscribe:entity:not:access' => "Lo sentimos! No hemos encontrado el contenido o temática.",
        'comment_tracker:setting:show_button' => "¿Mostrar el botón de suscripción/cancelación arriba del comentario? ",
        'comment_tracker:item' => "elemento",
        
        'comment:notify:subject:groupforumtopic' => '%s añadido a la discusión a%s en el grupo %s',
        'comment:notify:subject:comment' => '%s comentó en el %s "%s"',
        'comment:notify:subject:comment:group' => '%s comentó en el %s "%s" en el grupo %s',
        
        
        /* Legacy stuff - @TODO - see what's safe to delete */
		'comment:notify:subject' => 'Hay un nuevo comentario en %s',
		'comment:notify:group:subject' => 'Hay un nuevo contenido en el hilo %s',
		'comment:notify:body:web' => 'Hola %s,
<br/>Hay una nueva entrada en %s
<br/>%s ecribió: %s
<br/>%s
<br/>
<font color="#888888" size="2">
Has recibido esta notificación porque te has suscrito a la misma, o estás involucrado en ella.<br/>
Para cambiar las preferencias de notificación, haz clic aquí: %s<br/>
</font>
		',
			'comment:notify:group:body:web' => 'Hola %s,
<br/>Hay una nueva entrada en el hilo %s
<br/>%s escribió: %s
<br/>%s
<br/>
<font color="#888888" size="2">
Has recibido esta notificación porque te has suscrito a la misma, o estás involucrado en ella.<br/>
Para cambiar las preferencias de notificación, haz clic aquí: %s<br/>
</font>
		',
		'comment:notify:body:email:text' => 'Hola %s,

Hay un nuevo comentario en %s

%s escribió: %s

%s

%s

_________________________________________________________________________________
<font color="#888888" size="2">
Ten en cuenta que puedes tener que iniciar sesión antes de ver el mensaje o tema.

Has recibido esta notificación porque te has suscrito a la misma, o estás involucrado en ella.

Para cambiar las preferencias de notificación de este tipo de mensajes, haz clic aquí: %s
</font>
		',
			'comment:notify:group:body:email:text' => 'Hola %s,

Hay un nuevo contenido en el hilo %s

%s escribió: %s

%s

%s

_________________________________________________________________________________
<font color="#888888" size="2">
Ten en cuenta que puedes tener que iniciar sesión antes de ver el mensaje o tema.

Has recibido esta notificación porque te has suscrito a la misma, o estás involucrado en ella.

Para cambiar las preferencias de notificación de este tipo de mensajes, haz clic aquí: %s
</font>
		',
	
	'comment:notify:body:email:html' => '
<div>
	<div>Hola %s,</div>
	<div>Hay un nuevo comentario en %s</div>
	<div>%s escribió: %s</div>
	<div>%s</div>
	<div>&nbsp;</div>
	</div>
	<div>%s</div>
	<div>&nbsp;</div>
	<div style="border-top:1px solid #CCCCCC;color:#888888;">
		<div>Ten en cuenta que puedes tener que iniciar sesión antes de ver el mensaje o tema.</div>
		<div>Has recibido esta notificación porque te has suscrito a la misma, o estás involucrado en ella.</div>
		<div>Para cambiar las preferencias de notificación de este tipo de mensajes, haz clic aquí: %s</div>
	</div>
</div>
		',
			'comment:notify:group:body:email:html' => '
<div>
	<div>Hola %s,</div>
	<div>Hay un nuevo contenido en el hilo %s</div>
	<div>%s escribió: %s</div>
	<div>%s</div>
	<div>&nbsp;</div>
	<div>%s</div>
	<div style="border-top:1px solid #CCCCCC;color:#888888;">
		<div>Ten en cuenta que puedes tener que iniciar sesión antes de ver el mensaje o tema.</div>
		<div>Has recibido esta notificación porque te has suscrito a la misma, o estás involucrado en ella.</div>
		<div>Para cambiar las preferencias de notificación de este tipo de mensajes, haz clic aquí: %s</div>
	</div>
</div>
		',
	);
					
add_translation("es",$spanish);