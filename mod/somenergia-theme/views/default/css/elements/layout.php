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


/***** TOP NAVIGATION ******/
.elgg-page-topnav {
    border-bottom: 1px solid #8E8D93;
    color: #808080;
    font-size: 10px;
    height: 26px;
    line-height: 26px;
}

.elgg-page-topnav .elgg-inner {
    box-sizing: border-box;
    margin: auto;
    padding: 0 10px 0 15px;
    width: 990px;
}

.elgg-page-topnav .elgg-inner select {
    border: 1px solid #B8B9BD;
    border-radius: 3px;
    font-family: 'Roboto', sans-serif;
    font-size: inherit;
    font-weight: 300;
    height: 18px;
    margin-left: 5px;
}

.elgg-page-topnav .elgg-inner > div:first-of-type {
}

.elgg-page-topnav .elgg-inner > div:last-of-type {
    text-align: right;
    text-transform: uppercase;
}

.elgg-page-topnav .elgg-inner > div:last-of-type a:not(.social) {
    margin-right: 20px;
}

.elgg-page-topnav .elgg-inner > div:last-of-type a.social {
    background: url( '<?php echo elgg_get_site_url(); ?>mod/somenergia-theme/graphics/social.png' ) no-repeat;
    display: inline-block;
    height: 12px;
    margin: 0 5px -2px 0;
    overflow: hidden;
    text-indent: 100%;
    width: 12px;
}

.elgg-page-topnav .elgg-inner > div:last-of-type a.social[href*="facebook"] {
    background-position: left top;
}

.elgg-page-topnav .elgg-inner > div:last-of-type a.social[href*="twitter"] {
    background-position: -12px top;
}

.elgg-page-topnav .elgg-inner > div:last-of-type a.social[href*="youtube"] {
    background-position: -24px top;
}

.elgg-page-topnav .elgg-inner > div:last-of-type a.social[href*="rss"] {
    background-position: -36px top;
}

.elgg-page-topnav label {
    font-weight: normal;
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
	background: white;
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
