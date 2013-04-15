<?php

$listaMetodos = array(elgg_echo('notifications_tools:email')=>'email',
						elgg_echo('notifications_tools:site')=>'site',
						elgg_echo('notifications_tools:todos')=>'todos',
						elgg_echo('notifications_tools:ninguno')=>'ninguno',
						elgg_echo('notifications_tools:nocambiar')=>'nocambiar');
												
$body .="<br>";
$body .= elgg_echo('notifications_tools:personal_notifications');
$body .= elgg_view('input/radio',array('name'=>'params[personal_notifications]','value'=>$vars["entity"]->personal_notifications,'options'=>$listaMetodos));
						
$body .="<br>";
$body .= elgg_echo('notifications_tools:friends_notifications');
$body .= elgg_view('input/radio',array('name'=>'params[friends_notifications]','value'=>$vars["entity"]->friends_notifications,'options'=>$listaMetodos));

echo $body;

