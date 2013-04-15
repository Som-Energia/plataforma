<?php

/*******************************************************************************
*  Title: Facebook Comments Box Social Plugin for Elgg 1.8
*  Version: 1.1 @ Feb 12, 2012
*  Author: Aung Aung
*  Website: http://www.colourscript.com
********************************************************************************/
     register_elgg_event_handler('init','system','fb_commentbox_init');
    
	function fb_commentbox_init()
    {
       elgg_extend_view('page/elements/comments', 'fb_commentapps/fbcommentbox');
	   elgg_extend_view('page/elements/head', 'fb_commentapps/fbmeta');
    }
 
?>