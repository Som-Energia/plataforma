<?php
	global $CONFIG;
	$destfile = $CONFIG->pluginspath.'dokuwiki/vendors/dokuwiki/'.$vars['page'];
	if (file_exists($destfile))
 	       include($destfile);
?>
