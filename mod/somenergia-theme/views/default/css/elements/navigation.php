<?php
/**
 * Navigation
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>

/* ***************************************
	PAGINATION
*************************************** */
.elgg-pagination {
	margin: 10px 0;
	display: block;
	text-align: center;
}
.elgg-pagination li {
	display: inline;
	margin: 0 5px 0 0;
	text-align: center;
}
.elgg-pagination a, .elgg-pagination span {
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	padding: 3px 10px;
  background-color: #fff;
	border: 1px solid #28f;
	color: #28f;
}
.elgg-pagination a:hover {
	background-color: #28f;
  border-color: #05d;
	color: #fff;

	text-decoration: none;

	-webkit-box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.5);
	box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.5);
}
.elgg-pagination a:active {
  background-color: #05d;
  border-color: #03b;

	-webkit-box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.5);
	box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.5);
}
.elgg-pagination .elgg-state-disabled span {
	color: #ccc;
	border-color: #ccc;
}
.elgg-pagination .elgg-state-selected span {
	color: #222;
	border-color: #666;
}


/* ***************************************
	TABS
*************************************** */
.elgg-tabs {
	margin-bottom: 5px;
	border-bottom: 2px solid #ccc;
	display: table;
	width: 100%;
}
.elgg-tabs li {
	float: left;
	border: 2px solid #ccc;
	border-bottom: 0;
	background: #eee;
	margin: 0 0 0 5px;
	
	-webkit-border-radius: 5px 5px 0 0;
	-moz-border-radius: 5px 5px 0 0;
	border-radius: 5px 5px 0 0;
}
.elgg-tabs a {
	text-decoration: none;
	display: block;
	padding: 5px 15px;
	text-align: center;
	color: #666;
}
.elgg-tabs a:hover {
	color: #05d;
}
.elgg-tabs .elgg-state-selected {
  border-color: #ccc;
	background-color: #fff;
}
.elgg-tabs .elgg-state-selected a {
	position: relative;
	top: 2px;
	background-color: #fff;
	padding-top: 3px;
  padding-bottom: 7px;
  color: #222;
}


/* ***************************************
	BREADCRUMBS
*************************************** */
.elgg-breadcrumbs {
	font-weight: bold;
	color: #aaa;
}
.elgg-breadcrumbs > li {
	display: inline-block;
}
.elgg-breadcrumbs > li:after {
	content: "\003E";
	padding: 0 5px;
	font-weight: normal;
}
.elgg-breadcrumbs > li > a {
	display: inline-block;
	color: #888;
}
.elgg-breadcrumbs > li > a:hover {
	color: #666;
	text-decoration: underline;
}

.elgg-main .elgg-breadcrumbs {
	position: relative;
	top: 0;
	left: 0;
}


/* ***************************************
	TOPBAR MENU
*************************************** */
.elgg-menu-topbar {
	float: left;
}

.elgg-menu-topbar > li {
	float: left;
}

.elgg-menu-topbar > li > a {
  font-size: 13px;
  line-height: 1.5em;
	color: #ddd;
	margin: 0px 15px;
	text-shadow: 0px 1px 1px #000;
}

.elgg-menu-topbar > li > a:hover {
	color: #fff;
	text-decoration: none;
}

.elgg-menu-topbar-alt {
	float: right;
}

.elgg-menu-topbar .elgg-icon {
	vertical-align: middle;
	margin-top: -1px;
}

.elgg-menu-topbar > li > a.elgg-topbar-logo {
	margin-top: 0;
	padding-left: 5px;
	width: 38px;
	height: 20px;
}

.elgg-menu-topbar > li > a.elgg-topbar-avatar {
	width: 18px;
	height: 18px;
}


/* ***************************************
	SITE MENU
*************************************** */
.elgg-heading-menu {
    height: 36px;
}

.elgg-menu-site.elgg-menu-site-default {
    font-size: 15px;
    font-weight: 300;
    line-height: 36px;
    overflow: hidden;
}

.elgg-menu-site > li:hover > ul {
	display: block;
}

.elgg-menu-site.elgg-menu-site-default > li {
    float: left;
    margin: 0 16px;
}

.elgg-menu-site.elgg-menu-site-default > li:first-of-type {
    margin-left: 0;
}

.elgg-menu-site.elgg-menu-site-default > li > a,
.elgg-menu-site a:hover {
    color: #808080;
}

.elgg-menu-site.elgg-menu-site-default > li.elgg-more > a:before {
    content: "\f107\0020";
    font-family: FontAwesome;
    font-size: 20px;
    position: relative;
    top: 2px;
}

.elgg-menu-site-more {
    background-color: white;
    display: none;
    margin-left: -15px;
    padding: 0 15px;
    position: relative;
    z-index: 99;
}


/* ***************************************
	TITLE
*************************************** */
.elgg-menu-title {
	float: right;
}

.elgg-menu-title > li {
	display: inline-block;
	margin-left: 5px;
}


/* ***************************************
	FILTER MENU
*************************************** */
.elgg-menu-filter {
	margin-bottom: 5px;
	border-bottom: 2px solid #ccc;
	display: table;
	width: 100%;
}
.elgg-menu-filter > li {
	float: left;
	border: 2px solid #ccc;
	border-bottom: 0;
	background-color: #eee;
	margin: 0 0 0 5px;
	
	-webkit-border-radius: 5px 5px 0 0;
	-moz-border-radius: 5px 5px 0 0;
	border-radius: 5px 5px 0 0;
}
.elgg-menu-filter > li > a {
	text-decoration: none;
	display: block;
	padding: 5px 15px;
	text-align: center;
	color: #666;
}
.elgg-menu-filter > li > a:hover {
	color: #05d;
}
.elgg-menu-filter > .elgg-state-selected {
  border-color: #ccc;
	background-color: #fff;
}
.elgg-menu-filter > .elgg-state-selected > a {
	position: relative;
	top: 2px;
	background-color: #fff;
	padding-top: 3px;
  padding-bottom: 7px;
  color: #222;
}


/* ***************************************
	PAGE MENU
*************************************** */
.elgg-menu-page {
	margin-bottom: 20px;
}

.elgg-menu-page a {
	display: block;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	background: #fff url(<?php echo elgg_get_site_url(); ?>mod/somenergia-theme/graphics/button.png) repeat-x left top;
  border: 1px solid #bbb;
	padding: 5px 15px;
	margin: 1px 0;
}
.elgg-menu-page a:hover,
.elgg-menu-page li.elgg-state-selected > a {
	background-color: #657A00;
  border-color: #4C5C00;
	color: #fff;
	text-decoration: none;
}
.elgg-menu-page a:active {
	background-image: url(<?php echo elgg_get_site_url(); ?>mod/somenergia-theme/graphics/button-active.png);
  background-position: left bottom;
}
.elgg-menu-page .elgg-child-menu {
	display: none;
	margin-left: 15px;
}
.elgg-menu-page .elgg-menu-closed:before, 
.elgg-menu-page .elgg-menu-opened:before {
	display: inline-block;
	padding-right: 5px;
}
.elgg-menu-page .elgg-menu-closed:before {
	content: "\002B";
}
.elgg-menu-page .elgg-menu-opened:before {
	content: "\002D";
}


/* ***************************************
	HOVER MENU
*************************************** */
.elgg-menu-hover {
	display: none;
	position: absolute;
	z-index: 10000;

	overflow: hidden;

	min-width: 170px;
	max-width: 250px;
	border: solid 1px;
	border-color: #888;
	background-color: #fff;
	
	-webkit-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
}
.elgg-menu-hover > li {
	border-bottom: 1px solid #bbb;
}
.elgg-menu-hover > li:last-child {
	border-bottom: none;
}
.elgg-menu-hover .elgg-heading-basic {
	display: block;
}
.elgg-menu-hover a {
	padding: 5px 15px;
}
.elgg-menu-hover a:hover {
	background: #ddd;
	text-decoration: none;
}
.elgg-menu-hover-admin a {
	color: #f00;
}
.elgg-menu-hover-admin a:hover {
	color: #fff;
	background-color: #f00;
}


/* ***************************************
	SITE FOOTER
*************************************** */
.elgg-menu-footer > li,
.elgg-menu-footer > li > a {
	display: inline-block;
	color: #aaa;
}

.elgg-menu-footer > li:after {
	content: "\007C";
	padding: 0 5px;
}

.elgg-menu-footer-default {
	float: right;
}

.elgg-menu-footer-alt {
	float: left;
}


/* ***************************************
	GENERAL MENU
*************************************** */
.elgg-menu-general > li,
.elgg-menu-general > li > a {
	display: inline-block;
	color: #999;
}

.elgg-menu-general > li:after {
	content: "\007C";
	padding: 0 5px;
}


/* ***************************************
	ENTITY AND ANNOTATION
*************************************** */
<?php // height depends on line height/font size ?>
.elgg-menu-entity, elgg-menu-annotation {
	float: right;
	margin-left: 15px;
	color: #888;
	line-height: 20px;
	height: 20px;
}
.elgg-menu-entity > li, .elgg-menu-annotation > li {
	margin-left: 15px;
}
.elgg-menu-entity > li > a, .elgg-menu-annotation > li > a {
	color: #888;
}
<?php // need to override .elgg-menu-hz ?>
.elgg-menu-entity > li > a, .elgg-menu-annotation > li > a {
	display: block;
}
.elgg-menu-entity > li > span, .elgg-menu-annotation > li > span {
	vertical-align: baseline;
}


/* ***************************************
	OWNER BLOCK
*************************************** */
.elgg-menu-owner-block li a {
	display: block;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	background: #fff url(<?php echo elgg_get_site_url(); ?>mod/somenergia-theme/graphics/button.png) repeat-x left top;
  border: 1px solid #bbb;
	padding: 5px 15px;
	margin: 1px 0;
}
.elgg-menu-owner-block li a:hover,
.elgg-menu-owner-block li.elgg-state-selected > a {
	background-color: #28d;
  border-color: #06b;
	color: #fff;
	text-decoration: none;
}
.elgg-menu-owner-block li a:active {
	background-image: url(<?php echo elgg_get_site_url(); ?>mod/somenergia-theme/graphics/button-active.png);
  background-position: left bottom;
}


/* ***************************************
	LONGTEXT
*************************************** */
.elgg-menu-longtext {
	float: right;
}


/* ***************************************
	RIVER
*************************************** */
.elgg-menu-river {
	float: right;
	margin-left: 15px;
	color: #888;
	line-height: 20px;
	height: 20px;
}
.elgg-menu-river > li {
	display: inline-block;
	margin-left: 5px;
}
.elgg-menu-river > li > a {
	color: #888;
}
<?php // need to override .elgg-menu-hz ?>
.elgg-menu-river > li > a {
	display: block;
}
.elgg-menu-river > li > span {
	vertical-align: baseline;
}


/* ***************************************
	SIDEBAR EXTRAS (rss, bookmark, etc)
*************************************** */
.elgg-menu-extras {
	margin-bottom: 15px;
}


/* ***************************************
	WIDGET MENU
*************************************** */
.elgg-menu-widget > li {
	position: absolute;
	top: 4px;
	display: inline-block;
	width: 18px;
	height: 18px;
	padding: 2px 2px 0 0;
}

.elgg-menu-widget > .elgg-menu-item-collapse {
	left: 5px;
}
.elgg-menu-widget > .elgg-menu-item-delete {
	right: 5px;
}
.elgg-menu-widget > .elgg-menu-item-settings {
	right: 25px;
}
