/* ***************************************
	MISC
*************************************** */
#login-dropdown {
	position: absolute;
	top:25px;
	right:0;
	z-index: 100;
}


/* ***************************************
	AVATAR UPLOADING & CROPPING
*************************************** */

#current-user-avatar {
	border-right:1px solid #ccc;
}
#avatar-croppingtool {
	border-top: 1px solid #ccc;
}
#user-avatar-cropper {
	float: left;
}
#user-avatar-preview {
	float: left;
	position: relative;
	overflow: hidden;
	width: 100px;
	height: 100px;
}


/* ***************************************
	FRIENDS COLLECTIONS
*************************************** */

#friends_collections_accordian li {
	color: #666;
}
#friends_collections_accordian li h2 {
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	/*background: none repeat scroll 0 0 #4690D6;*/

	background: #fff url(<?php echo elgg_get_site_url(); ?>mod/bright-theme-1.0/graphics/button.png) repeat-x left top;
  border: 1px solid #bbb;
	padding: 5px 15px;
	margin: 10px 0;

	color: #05d;
	cursor: pointer;
	font-size: 1.2em;
}
#friends_collections_accordian li h2:hover {
	background-color: #28d;
  border-color: #06b;
	color: #fff;
}
#friends_collections_accordian .friends_collections_controls {
	float: right;
	font-size: 70%;
}
#friends_collections_accordian .friends-picker-main-wrapper {
	/*background: none repeat scroll 0 0 white;*/
	display: none;
	padding: 0;
}
