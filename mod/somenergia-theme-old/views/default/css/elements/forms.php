<?php
/**
 * CSS form/input elements
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>

/* ***************************************
	Form Elements
*************************************** */
fieldset > div {
	margin-bottom: 15px;
}
fieldset > div:last-child {
	margin-bottom: 0;
}
.elgg-form-alt > fieldset > .elgg-foot {
	border-top: 1px solid #ccc;
	padding: 10px 0;
}

label {
	font-weight: bold;
	color: #222;
}

input,
textarea {
	font-family: "Trebuchet MS", Arial, Tahoma, Verdana, sans-serif;
  font-size: 1.1em;
	color: #666;
	border: 1px solid #ccc;
	padding: 5px;
	width: 100%;	
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

input:hover, 
textarea:hover {
	border-color: #aaa;
}

input:focus, 
textarea:focus {
	border-color: #28f;
	color:#222;

	-webkit-box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.5);
	box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.5);
}

textarea {
	height: 200px;
}


.elgg-longtext-control {
	float: right;
	margin-left: 14px;
	font-size: 80%;
	cursor: pointer;
}


.elgg-input-access {
	margin:5px 0 0 0;
}

input[type="checkbox"],
input[type="radio"] {
	margin:0 3px 0 0;
	padding:0;
	border:none;
	width:auto;
}
.elgg-input-radio,
.elgg-input-checkbox
.elgg-input-checkboxes.elgg-horizontal li,
.elgg-input-radios.elgg-horizontal li {
	display: inline;
	padding-right: 10px;
}

.elgg-form-login, .elgg-form-account {
	max-width: 450px;
}


/* ***************************************
	FRIENDS PICKER
*************************************** */
.friends-picker-main-wrapper {
	margin-bottom: 15px;
}
.friends-picker-container h3 {
	font-size:4em !important;
	text-align: left;
	margin:0px 0px 10px 0px !important;
	color:#999 !important;
	background: none !important;
	padding:0 !important;
}
.friends-picker .friends-picker-container .panel ul {
	text-align: left;
	margin: 0;
	padding:0;
}
.friends-picker-wrapper {
	margin: 0;
	padding:0;
	position: relative;
	width: 100%;
}
.friends-picker {
	position: relative;
	overflow: hidden;
	margin: 0;
	padding:0;
	width: 730px;
	height: auto;
	background-color: #ddd;
	
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}
.friendspicker-savebuttons {
	background: #fff;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	margin:0 10px 10px;
}
.friends-picker .friends-picker-container { /* long container used to house end-to-end panels. Width is calculated in JS  */
	position: relative;
	left: 0;
	top: 0;
	width: 100%;
	list-style-type: none;
}
.friends-picker .friends-picker-container .panel {
	float:left;
	height: 100%;
	position: relative;
	width: 730px;
	margin: 0;
	padding:0;
}
.friends-picker .friends-picker-container .panel .wrapper {
	margin: 0;
	padding:10px;
	min-height: 230px;
}
.friends-picker-navigation {
	margin: 10px 0px;
}
.friends-picker-navigation ul {
	list-style: none;
	padding-left: 0;
}
.friends-picker-navigation ul li {
	float: left;
	margin:0;
	background:white;
}
.friends-picker-navigation a {
	font-weight: bold;
	text-align: center;
	background-color: #fff;
	color: #888;
	text-decoration: none;
	display: block;
	padding: 0 5px;
  border: 1px solid #ccc;
  background-color: #fff;
  margin-right: 2px;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
.tabHasContent {
	color: #222 !important;
}
.friends-picker-navigation li a:hover {
	background-color: #888;
  border-color: #666;
	color: #fff !important;
}
.friends-picker-navigation li a.current {
	background-color: #28f;
  border-color: #05d;
	color: #fff !important;
}
.friends-picker-navigation-l, .friends-picker-navigation-r {
	position: absolute;
	top: 50px;
	text-indent: -9000em;
}
.friends-picker-navigation-l a, .friends-picker-navigation-r a {
	display: block;
	height: 40px;
	width: 40px;
}
.friends-picker-navigation-l {
	right: 50px;
	z-index:1;
}
.friends-picker-navigation-r {
	right: 0;
	z-index:1;
}
.friends-picker-navigation-l {
	background: url("<?php echo elgg_get_site_url(); ?>_graphics/friendspicker.png") no-repeat left top;
}
.friends-picker-navigation-r {
	background: url("<?php echo elgg_get_site_url(); ?>_graphics/friendspicker.png") no-repeat -60px top;
}
.friends-picker-navigation-l:hover {
	background: url("<?php echo elgg_get_site_url(); ?>_graphics/friendspicker.png") no-repeat left -44px;
}
.friends-picker-navigation-r:hover {
	background: url("<?php echo elgg_get_site_url(); ?>_graphics/friendspicker.png") no-repeat -60px -44px;
}
.friendspicker-savebuttons .elgg-button-submit,
.friendspicker-savebuttons .elgg-button-cancel {
	margin: 10px 0px 10px 10px;
}
.friendspicker-members-table {
	background: #ddd;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	margin:10px 0 0;
	padding:10px 10px 0;
}


/* ***************************************
	AUTOCOMPLETE
*************************************** */
<?php //autocomplete will expand to fullscreen without max-width ?>
.ui-autocomplete {
	position: absolute;
	cursor: default;
}
.elgg-autocomplete-item .elgg-body {
	max-width: 600px;
}
.ui-autocomplete {
	background-color: #fff;
	border: 1px solid #ccc;
	overflow: hidden;

	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
.ui-autocomplete .ui-menu-item {
	padding: 0px 5px;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
.ui-autocomplete .ui-menu-item:hover {
	background-color: #eee;
}
.ui-autocomplete a:hover {
	text-decoration: none;
}


/* ***************************************
	USER PICKER
*************************************** */
.elgg-user-picker-list li:first-child {
	border-top: 1px dotted #ccc;
	margin-top: 5px;
}
.elgg-user-picker-list > li {
	border-bottom: 1px dotted #ccc;
}


/* ***************************************
      DATE PICKER
**************************************** */
.ui-datepicker {
	display: none;

	margin-top: 3px;
	width: 215px;
	background-color: #fff;
	border: 1px solid #28d;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	overflow: hidden;

	-webkit-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
}
.ui-datepicker-inline {
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}

.ui-datepicker-header {
	position: relative;
	background: #28d;
	color: #fff;
	padding: 3px 5px;
	border-bottom: 1px solid #06b;
}
.ui-datepicker-header a {
	color: #fff;
}
.ui-datepicker-prev, .ui-datepicker-next {
  position: absolute;
  top: 3px;
	cursor: pointer;
}
.ui-datepicker-prev {
  left: 10px;
}
.ui-datepicker-next {
  right: 10px;
}
.ui-datepicker-title {
  line-height: 1.5em;
  margin: 0 30px;
  text-align: center;
	font-weight: bold;
}
.ui-datepicker-calendar {
	margin: 10px;
}
.ui-datepicker th {
	color: #05d;
	border: none;
  font-weight: bold;
  padding: 0px 6px 5px 6px;
  text-align: center;
}
.ui-datepicker td {
	padding: 1px;
}
.ui-datepicker td span, .ui-datepicker td a {
  display: block;
  padding: 2px;
  line-height: 1.2em;
  text-align: right;
  text-decoration: none;
}
.ui-datepicker-calendar .ui-state-default {
  border: 1px solid #ccc;
  color: #666;
  background: #eee;
}
.ui-datepicker-calendar .ui-state-hover {
  border: 1px solid #06b;
  color: #fff;
  background: #28d;
}
.ui-datepicker-calendar .ui-state-active,
.ui-datepicker-calendar .ui-state-active.ui-state-hover {
  font-weight: bold;
  border: 1px solid #05d;
  color: #05d;
  background: #eee;
}
