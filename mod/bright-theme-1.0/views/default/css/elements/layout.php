<?php
/**
 * Page Layout
 *
 * Contains CSS for the page shell and page layout
 *
 * Default layout: 990px wide, centered. Used in default page shell
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>

/* ***************************************
	PAGE LAYOUT
*************************************** */
/***** DEFAULT LAYOUT ******/
<?php // the width is on the page rather than topbar to handle small viewports ?>
.elgg-page-default {
	min-width: 990px;
}
.elgg-page-default .elgg-page-header > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	height: 150px;
}
.elgg-page-default .elgg-page-body > .elgg-inner {
	width: 990px;
	margin: 0 auto;
}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	width: 960px;
	margin: 0 auto;
	padding: 10px 15px;
}


/***** TOPBAR ******/
.elgg-page-topbar {
	background: #444 url(<?php echo elgg_get_site_url(); ?>mod/bright-theme-1.0/graphics/topbar.png) repeat-x bottom left;
	border-bottom: 1px solid #000;
	position: relative;
	z-index: 9000;
}
.elgg-page-topbar > .elgg-inner {
  padding: 8px 0px 6px 0px;
  width: 990px;
  margin: auto;
}


/***** PAGE MESSAGES ******/
.elgg-system-messages {
	position: fixed;
	top: 40px;
	right: 20px;
	max-width: 500px;
	z-index: 2000;
}
.elgg-system-messages li {
	margin-top: 10px;
}
.elgg-system-messages li p {
	margin: 0;
}


/***** PAGE HEADER ******/
.elgg-page-header {
	position: relative;
	background: #B4D900;
}
.elgg-page-header > .elgg-inner {
	position: relative;
}


/***** PAGE BODY LAYOUT ******/
.elgg-layout {
	min-height: 360px;
}
.elgg-layout-one-sidebar {
	background: transparent url(<?php echo elgg_get_site_url(); ?>mod/bright-theme-1.0/graphics/sidebar.png) repeat-y right top;
}
.elgg-layout-two-sidebar {
	background: transparent url(<?php echo elgg_get_site_url(); ?>mod/bright-theme-1.0/graphics/sidebar-double.png) repeat-y right top;
}
.elgg-layout-error {
	margin-top: 20px;
}
.elgg-sidebar {
	position: relative;
	padding: 20px 15px;
	float: right;
	width: 200px;
	margin: 0;
}
.elgg-sidebar-alt {
	position: relative;
	padding: 20px 15px;
	float: left;
	width: 150px;
	margin: 0;
}
.elgg-main {
	position: relative;
	min-height: 360px;
	padding: 15px;
}
.elgg-main > .elgg-head {
	margin-bottom: 10px;
}


/***** PAGE FOOTER ******/
.elgg-page-footer {
	position: relative;
}
.elgg-page-footer {
	background: #222 url(<?php echo elgg_get_site_url(); ?>mod/bright-theme-1.0/graphics/footer.png) repeat-x left top;
	border-top: 1px solid #333;
  min-height: 100px;
	color: #aaa;
	text-shadow: 0px 1px 1px #000;
}
.elgg-page-footer a {
	color: #888;
  text-decoration: none;
}
.elgg-page-footer a:hover {
	color: #eee;
}
