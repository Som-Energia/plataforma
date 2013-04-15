<?php


// lista de opciones
$listaMetodos = array(elgg_echo('notifications_tools:email')=>'email',
						elgg_echo('notifications_tools:site')=>'site',
						elgg_echo('notifications_tools:todos')=>'todos',
						elgg_echo('notifications_tools:ninguno')=>'ninguno',
						elgg_echo('notifications_tools:nocambiar')=>'nocambiar');

// Recupero los valores enviados en el formulario						
$metodo_personal = get_input('personal_batch_method');
//sino tomo la opcion por defecto del plugin
if ( $metodo_personal== '' ) {	
	$metodo_personal = elgg_get_plugin_setting('personal_notifications','notifications_tools');
}						

$metodo_friends = get_input('friends_batch_method');
//sino tomo la opcion por defecto del plugin
if ( ! isset($metodo_friends ) ){	
	$metodo_friends = elgg_get_plugin_setting('friends_notifications','notifications_tools');
}						

// Notificaciones personales
$body = elgg_echo('notifications_tools:personal_batch_method');
$body .= elgg_view('input/radio',
					array('name'=>'personal_batch_method',
						'value'=>$metodo_personal,
						'options'=>$listaMetodos));
					
// notificaciones de amigos					
$body .= "<br>";
$body .= elgg_echo('notifications_tools:friends_batch_method');
$body .= elgg_view('input/radio',
					array('name'=>'friends_batch_method',
						'value'=>$metodo_friends,
						'options'=>$listaMetodos));
					
echo $body;
?>


<div>
    <?php echo elgg_view('input/submit', array('value' => elgg_echo('notifications_tools:update'))); ?>
</div>