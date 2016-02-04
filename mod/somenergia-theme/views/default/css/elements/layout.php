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
    background-color: #EDEEF0;
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
        background: #5B5B5F;
	border-bottom: 1px solid #000;
	position: relative;
}
.elgg-page-topbar > .elgg-inner {
  padding: 8px 0px 6px 0px;
  width: 990px;
  margin: auto;
}


/***** TOP NAVIGATION ******/
.elgg-page-topnav {
    background-color: white;
    border-bottom: 1px solid #8E8D93;
    color: #808080;
    font-size: 12px;
    height: 26px;
    line-height: 26px;
    position: relative;
    z-index: 1;
}

.elgg-page-topnav a {
    color: #808080;
    text-decoration: none;
}

.elgg-page-topnav a:hover {
    color: #BAC92A;
}


.elgg-page-topnav .elgg-inner {
    box-sizing: border-box;
    margin: auto;
    padding: 0 10px 0 15px;
    width: 990px;
}

.elgg-page-topnav .elgg-inner .breadcrumbs,
.elgg-page-topnav .elgg-inner .breadcrumbs ul {
    border: 1px solid #B8B9BD;
    border-radius: 3px;
    display: inline-block;
    font-family: 'Roboto', sans-serif;
    font-size: inherit;
    font-weight: 300;
}

.elgg-page-topnav .elgg-inner .breadcrumbs {
    height: 18px;
    line-height: 18px;
    margin-left: 5px;
    padding: 0 8px;
    position: relative;
}

.elgg-page-topnav .elgg-inner .breadcrumbs:hover {

}

.elgg-page-topnav .elgg-inner .breadcrumbs ul {
    background-color: white;
    display: none;
    position: absolute;
    left: 0;
    min-width: 147px;
}

.elgg-page-topnav .elgg-inner .breadcrumbs:hover ul {
    display: block;
}

.elgg-page-topnav .elgg-inner .breadcrumbs ul li {
}

.elgg-page-topnav .elgg-inner .breadcrumbs ul li a {
    box-sizing: border-box;
    display: inline-block;
    height: 18px;
    line-height: 18px;
    padding: 0 8px;
    width: 100%;
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
    display: inline-block;
    font-size: 12px;
    height: 12px;
    line-height: 12px;
    margin: 0 5px -2px 0;
    overflow: hidden;
    width: 12px;
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
	z-index: 1;
}
.elgg-system-messages li {
	margin-top: 10px;
}
.elgg-system-messages li p {
	margin: 0;
}


/***** PAGE HEADER ******/
.elgg-page-header {
    background: white;
    box-shadow: 0 0 10px rgba( 0, 0, 0, 0.5 );
    position: relative;
    width: 100%;
}
.elgg-page-header .elgg-heading-site {
    box-sizing: border-box;
    height: 90px;
    margin: auto;
    padding: 0 15px;
    position: relative;
    width: 990px;
}

.elgg-page-header .elgg-heading-site .elgg-inner {
    position: relative;
}

.elgg-page-header img {
    margin-top: 19.5px;
    float: left;
}

.elgg-page-header .elgg-heading-description {
    margin-left: 105px;
    padding-top: 28px;
}

.elgg-page-header .elgg-heading-description h3 {
    margin-top: 5px;
}


/***** PAGE MENU ******/
.elgg-page-header .elgg-heading-menu {
    background-color: #F7F7F8;
}

.elgg-page-header .elgg-heading-menu .elgg-inner {
    box-sizing: border-box;
    margin: auto;
    padding: 0 15px;
    width: 990px;
}


/***** PAGE BODY LAYOUT ******/
.elgg-layout {
	min-height: 360px;
}
.elgg-layout-one-sidebar {
	background: transparent url(<?php echo elgg_get_site_url(); ?>mod/somenergia-theme/graphics/sidebar.png) repeat-y right top;
}
.elgg-layout-two-sidebar {
	background: transparent url(<?php echo elgg_get_site_url(); ?>mod/somenergia-theme/graphics/sidebar-double.png) repeat-y right top;
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
        background-color: #F7F7F8;
        min-height: 100px;
	color: #888;
}
.elgg-page-footer a {
	color: #888;
        text-decoration: none;
}
.elgg-page-footer a:hover {
	color: #5B5B5F;
}
