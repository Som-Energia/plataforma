<?php 
/**
 * Elgg Twitter CSS
 * 
 * @package ElggTwitter
 */    
?>

#twitter_widget {
}
#twitter_widget ul {
	margin:0;
	padding:0;
}
#twitter_widget li {
	list-style-image:none;
	list-style-position:outside;
	list-style-type:none;
	margin:0;
  padding: 10px 0;
	overflow-x: hidden;
	border-bottom: 1px dashed #ccc;
}
#twitter_widget li span {
	background: transparent;	
	display: block;
  margin-bottom: 3px;
}
p.visit_twitter a {
	background: url(<?php echo elgg_get_site_url(); ?>mod/twitter/graphics/twitter16px.png) left no-repeat;
	padding: 0 0 0 20px;
}
.visit_twitter {
	margin: 10px 0px 5px 0px;
}
p.twitter_username .input-text {
	width: 200px;
}
#twitter_widget li > a {
	display: block;
}
#twitter_widget li span a {
	display: inline !important;
}
