<?php
	global $CONFIG;
	$destfile = $CONFIG->pluginspath.'dokuwiki/vendors/dokuwiki/'.$vars['page'];
	if (file_exists($destfile)) {
	       	if (strpos($destfile, ".png") === FALSE)
		{
 	       		include($destfile);
		} else {
			header("Content-type: image");
			echo file_get_contents($destfile);
		}
	}
?>
