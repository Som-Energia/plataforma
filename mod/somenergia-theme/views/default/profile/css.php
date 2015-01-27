<?php
/**
 * Elgg Profile CSS
 * 
 * @package Profile
 */
?>
/* ***************************************
	Profile
*************************************** */
.profile {
	float: left;
	margin-bottom: 15px;
}
.profile .elgg-inner {
	margin: 0 5px;
	border: 2px solid #ddd;
}
#profile-details {
	padding: 15px;
}


/*** ownerblock ***/
#profile-owner-block {
	width: 200px;
	float: left;
	background-color: #eee;
	padding: 15px;
  border-right: 2px solid #ddd;
}
#profile-owner-block .large {
	margin-bottom: 10px;
}
#profile-owner-block a.elgg-button-action {
	margin-bottom: 5px;
	display: table;
}
.profile-content-menu a {
	display: block;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	background: #fff url(<?php echo elgg_get_site_url(); ?>mod/bright-theme/graphics/button.png) repeat-x left top;
  border: 1px solid #bbb;
	padding: 5px 15px;
	margin: 1px 0;
}
.profile-content-menu a:hover {
	background-color: #28d;
  border-color: #06b;
	color: #fff;
	text-decoration: none;
}
.profile-content-menu a:active {
	background-image: url(<?php echo elgg_get_site_url(); ?>mod/bright-theme/graphics/button-active.png);
  background-position: left bottom;
}
.profile-admin-menu {
	display: none;
}
.profile-admin-menu-wrapper {
  margin-top: 10px;
	background-color: #fff;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
.profile-admin-menu-wrapper a {
	display: block;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	background-color: #fff;
	padding: 5px 15px;

  color: #f00;
}
.profile-admin-menu-wrapper a:hover {
	color: #000;
}


/*** profile details ***/
#profile-details .odd {
	background-color: #eee;
	
	margin: 0 0 5px;
	padding: 3px 10px;
}
#profile-details .even {
	background-color: transparent;
	
	margin: 0 0 5px;
	padding: 3px 10px;
}
.profile-aboutme-title {
	background-color: #eee;
	
	margin: 0;
	padding: 3px 10px;
}
.profile-aboutme-contents {
	padding: 3px 10px;
}
.profile-banned-user {
	border: 2px solid #f00;
	padding: 5px 10px;
}
