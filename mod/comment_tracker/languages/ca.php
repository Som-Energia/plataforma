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

	$catala = array(
		'comments' => "Comentaris",
		'comment:notification:settings' => 'Notificacions de comentaris',
		'comment:notification:settings:description' => "Avisa'm quan hi hagi comentaris en elements als que estic subscrit.",
		'comment:notification:settings:how' => "Selecciona el mètode de notificació",
		'comment:notification:settings:linktext' => 'Veure tots els elements als que estic subscrit',
		'comment:subscriptions' => 'Subscripcions',
		'comment:subscriptions:none' => 'No hi ha subscripcions actualment',
		'comment:subscribe:tooltip' => 'Subscriu-te per rebre notificacions quan hi hagi comentaris',
		'allow:comment:notification' => 'Vols activar les notificacions? ',
		'email:content:type' => 'Vols rebre els correus en format HTML? ',
		'text:email' => 'No',
		'html:email' => 'Sí',
		'comment:subscribe' => "Subscriure'm",
		'comment:unsubscribe' => 'Cancel·lar la subscripció',
        'comment:subscribe:long' => "Subscriure'm a les notificacions de comentaris",
		'comment:unsubscribe:long' => 'Cancel·lar la subscripció a les notificacions de comentaris',
        'comment_tracker:setting:autosubscribe' => "Auto-subscriure'm als continguts on hagi fet comentaris?",
		'show:subscribers' => 'Mostra subscriptors',
		'comment:subscribe:success' => "T'has subscrit correctament a aquest contingut o temàtica.",
		'comment:subscribe:failed' => "Ho sentim! No hem pogut subscriure't correctament a aquest contingut o temàtica.",
		'comment:subscribe:entity:not:access' => "Ho sentim! No hem pogut trobar aquest contingut o temàtica.",
		'comment:unsubscribe:success' => "S'ha cancel·lat correctament la teva subscripció a aquest contingut o temàtica.",
		'comment:unsubscribe:failed' => "Ho sentim! No has pogut cancel·lar la subscripció a aquest contingut o temàtica.",
		'comment:unsubscribe:not:valid:url' => 'Ho sentim! Aquesta url no és vàlida per cancel·lar la subscripció a aquest contingut o temàtica.',
		'comment:unsubscribe:entity:not:access' => "Ho sentim! No hem trobat el contingut o temàtica.",
        'comment_tracker:setting:show_button' => "Mostrar el botó de subscripció/cance·lació a sobre dels comentaris? ",
        'comment_tracker:item' => "element",
        
        'comment:notify:subject:groupforumtopic' => '%s afegit a la discussió %s en el grup %s',
        'comment:notify:subject:comment' => '%s ha comentat en el %s "%s"',
        'comment:notify:subject:comment:group' => '%s ha comentat en el %s "%s" en el grup %s',
        
        
        /* Legacy stuff - @TODO - see what's safe to delete */
		'comment:notify:subject' => 'Hi ha un nou comentari a %s',
		'comment:notify:group:subject' => 'Hi ha un nou contingut en el fil %s',
		'comment:notify:body:web' => 'Hola %s,
<br/>Hi ha una nova entrada a %s
<br/>%s ha escrit: %s
<br/>%s
<br/>
<font color="#888888" size="2">
Has rebut aquesta notificació perquè t\'hi has subscrit o hi has participat.<br/>Per canviar les preferències de notificació, fes clic aquí: %s<br/>
</font>
		',
			'comment:notify:group:body:web' => 'Hola %s,
<br/>Hi ha un nou comentari a %s
<br/>%s va escriure: %s
<br/>%s
<br/>
<font color="#888888" size="2">

Has rebut aquesta notificació perquè t\'hi has subscrit o hi has participat.<br/>Per canviar les preferències de notificació, fes clic aquí: %s<br/>
</font>
		',
		'comment:notify:body:email:text' => 'Hola %s,
Hi ha un nou comentari a %s

%s ha escrit: %s

%s 
%s

_________________________________________________________________________________
<font color="#888888" size="2">
Per favor, tingues en compte que és possible que hagis d\'inicar sessió per veure el contingut.Has rebut aquesta notificació perquè t\'hi has subscrit o hi has participat.

Per canviar les preferències de notificació, fes clic aquí: %s
</font>
		',
			'comment:notify:group:body:email:text' => 'Hola %s,

Hi ha un nou contingut en el fil %s

%s ha escrit: %s

%s 
%s

_________________________________________________________________________________
<font color="#888888" size="2">
Per favor, tingues en compte que és possible que hagis d\'inicar sessió per veure el contingut.

Has rebut aquesta notificació perquè t\'hi has subscrit o hi has participat.

Per canviar les preferències de notificació per aquests missatges, fes clic aquí: %s
</font>
		',
	
	'comment:notify:body:email:html' => '
<div>
	<div>Hola %s,</div>
	<div>Hi ha un nou comentari a %s</div>
	<div>%s ha escrit: %s</div>
	<div>%s</div>
	<div>&nbsp;</div>
	<div> </div></div>
	<div>%s</div>
	<div>&nbsp;</div>
	<div style="border-top:1px solid #CCCCCC;color:#888888;">
		<div>Per favor, tingues en compte que és possible que hagis d\'inicar sessió per veure el contingut.</div>
		<div>Has rebut aquesta notificació perquè t\'hi has subscrit o hi has participat.</div>
		<div>Per canviar les preferències de notificació per a aquests missatges, fes clic aquí: %s</div>
	</div>
</div>
		',
			'comment:notify:group:body:email:html' => '
<div>
	<div>Hi %s,</div>
	<div>Hi ha un nou contingut en el fil %s</div>
	<div>%s ha escrit: %s</div>
	<div>%s</div>
	<div>&nbsp;</div>
	<div> </div>
	<div>%s</div>
	<div style="border-top:1px solid #CCCCCC;color:#888888;">
		<div>Per favor, tingues en compte que és possible que hagis d\'iniciar sessió per veure el contingut.</div>
		<div>Has rebut aquesta notificació perquè t\'hi has subscrit o hi has participat.</div>
		<div>Per canviar les preferències de notificació per a aquests missatges, fes clic aquí: %s</div>
	</div>
</div>
		',
	);
					
add_translation("ca",$catala);
