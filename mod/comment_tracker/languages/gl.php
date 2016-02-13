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

	$galego = array(
		'comments' => "Comentarios",
		'comment:notification:settings' => 'Notificacións de comentarios',
		'comment:notification:settings:description' => 'Notificarme cando haxa comentarios en elementos aos que me subscribín',
		'comment:notification:settings:how' => 'Selecciona o teu método de notificación',
		'comment:notification:settings:linktext' => 'Ver todos os elementos aos que me subscribín',
		'comment:subscriptions' => 'Subscricións',
		'comment:subscriptions:none' => 'Actualmente non hai subscricións',
		'comment:subscribe:tooltip' => 'Subscríbete para recibir notificacións cando haxa comentarios sobre este contido',
		'allow:comment:notification' => 'Queres activar as notificacións? ',
		'email:content:type' => 'Desexas recibir correos en formato HTML? ',
		'text:email' => 'Non',
		'html:email' => 'Si',
		'comment:subscribe' => 'Subscribirme',
		'comment:unsubscribe' => 'Cancelar subscrición',
                'comment:subscribe:long' => 'Subscribirme ás notificacións de comentarios',
		'comment:unsubscribe:long' => 'Cancelar subscrición das notificacións de comentarios',
                'comment_tracker:setting:autosubscribe' => "Auto-subscribirme ao contido no que fixen comentarios?",
		'show:subscribers' => 'Amosar subscritores/as',
		'comment:subscribe:success' => 'Subscribícheste correctamente a este contido ou temática.',
		'comment:subscribe:failed' => "Sentímolo! Non podes subscribirte a este contido ou temática.",
		'comment:subscribe:entity:not:access' => "Sentímolo! Por algunha razón non puidemos atopar o contido ou temática.",
		'comment:unsubscribe:success' => 'Cancelaches correctamente a túa subscrición a este contido ou temática.',
		'comment:unsubscribe:failed' => "Sentímolo! Non puideches cancelar a túa subscrición a este contido ou temática.",
		'comment:unsubscribe:not:valid:url' => 'Sentímolo! Esta non é unha url válida para cancelar a subscrición a este contido ou temática.',
		'comment:unsubscribe:entity:not:access' => "Sentímolo! Non puidemos atopar o contido ou temática.",
                'comment_tracker:setting:show_button' => "Amosar o botón de subscrición/cancelación por riba da vista de comentarios?",
                'comment_tracker:item' => "elemento",
                'comment:notify:subject:groupforumtopic' => '%s engadiuse á discusión %s ao grupo %s',
                'comment:notify:subject:comment' => '%s comentou no %s "%s"',
                'comment:notify:subject:comment:group' => '%s comentou no %s "%s" no grupo %s',
                /* Legacy stuff - @TODO - see what's safe to delete */
		'comment:notify:subject' => 'Hai un novo comentario sobre %s',
		'comment:notify:group:subject' => 'Hai novo contido no fío %s',
		'comment:notify:body:web' => 'Ola %s,
                                        <br/>Hai un novo comentario sobre %s
                                        <br/>%s escribiu: %s
                                        <br/>%s
                                        <br/>
                                        <font color="#888888" size="2">
                                        Recibiches esta notificación porque te subscribiches a ela ou tés relación con ela.<br/>
                                        Para cambiar as túas preferencias de notificación, por favor fai clic aquí: %s<br/>
                                        </font>',
		'comment:notify:group:body:web' => 'Ola %s,
                                        <br/>Hai novo contido no fío %s
                                        <br/>%s escribiu: %s
                                        <br/>%s
                                        <br/>
                                        <font color="#888888" size="2">
                                        Recibiches esta notificación porque te subscribiches a ela ou tés relación con ela.<br/>
                                        Para cambiar as túas preferencias de notificación, por favor fai clic aquí: %s<br/>
                                        </font>',
		'comment:notify:body:email:text' => 'Ola %s,

hai un novo comentario sobre %s

%s escribiu: %s

%s

Saúdos,
%s

_________________________________________________________________________________
<font color="#888888" size="2">
Por favor, ten en conta que podes ter que iniciar sesión antes de ver o contido ou tema.

Recibiches esta notificación porque te subscribiches a ela ou tés relación con ela.

Para cambiar as túas preferencias de notificación de este tipo de mensaxes, por favor fai clic aquí: %s
</font>
		',
			'comment:notify:group:body:email:text' => 'Ola %s,

hai novo contido no fío %s

%s escribiu: %s

%s

Saúdos,
%s

_________________________________________________________________________________
<font color="#888888" size="2">Por favor, ten en conta que podes ter que iniciar sesión antes de ver o contido ou tema.

Recibiches esta notificación porque te subscribiches a ela ou tés relación con ela.

Para cambiar as túas preferencias de notificación deste tipo de mensaxes, por favor fai clic aquí: %s
</font>
		',

	'comment:notify:body:email:html' => '
<div>
	<div>Ola %s,</div>
	<div>Hai un novo comentario sobre %s</div>
	<div>%s escribiu: %s</div>
	<div>%s</div>
	<div>&nbsp;</div>
	<div>Saúdos,</div></div>
	<div>%s</div>
	<div>&nbsp;</div>
	<div style="border-top:1px solid #CCCCCC;color:#888888;">
		<div>Por favor, ten en conta que podes ter que iniciar sesión antes de ver o contido ou tema</div>
		<div>Recibiches esta notificación porque te subscribiches a ela ou tés relación con ela.</div>
		<div>Para cambiar as túas preferencias de notificación de este tipo de mensaxes, por favor fai clic aquí: %s</div>
	</div>
</div>
		',
			'comment:notify:group:body:email:html' => '
<div>
	<div>Ola %s,</div>
	<div>Hai un novo contido no fío %s</div>
	<div>%s escribiu: %s</div>
	<div>%s</div>
	<div>&nbsp;</div>
	<div>Saúdos,</div>
	<div>%s</div>
	<div style="border-top:1px solid #CCCCCC;color:#888888;">
		<div>Por favor, ten en conta que podes ter que iniciar sesión antes de ver o contido ou tema.</div>
		<div>Recibiches esta notificación porque te subscribiches a ela ou tés relación con ela.</div>
		<div>Para cambiar as túas preferencias de notificación de este tipo de mensaxes, por favor fai clic aquí: %s</div>
	</div>
</div>
		',
	);
	
add_translation("gl",$galego);
