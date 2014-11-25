/* ***************************************
	Modules
*************************************** */
.elgg-module {
	overflow: hidden;
	margin-bottom: 20px;
}


/* Aside */
.elgg-module-aside .elgg-head {
	border-bottom: 1px solid #ccc;
	
	margin-bottom: 10px;
	padding-bottom: 5px;
}


/* Info */
.elgg-module-info > .elgg-head {
	background: #eee;
  border: 1px solid #ccc;
	padding: 7px 15px;
	margin-bottom: 10px;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
.elgg-module-info > .elgg-head * {
	color: #222;
  padding: 0px;
}
.elgg-module-info > .elgg-body {
	padding: 0px 15px;
}


/* Popup */
.elgg-module-popup {
	background-color: white;
	border: 1px solid #888;
	
	z-index: 9999;
	margin-bottom: 0;
	padding: 10px 15px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	-webkit-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
}
.elgg-module-popup > .elgg-head {
	margin-bottom: 5px;
}
.elgg-module-popup > .elgg-head * {
  color: #28f;
}


/* Dropdown */
.elgg-module-dropdown {
	background-color: #fff;
	border: 5px solid #ccc;
	
	-webkit-border-radius: 3px 0 3px 3px;
	-moz-border-radius: 3px 0 3px 3px;
	border-radius: 3px 0 3px 3px;
	
	display: none;
	
	width: 230px;
	padding: 10px 15px;
	margin-right: 0px;
	z-index:100;
	
	-webkit-box-shadow: 0 3px 3px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0 3px 3px rgba(0, 0, 0, 0.5);
	box-shadow: 0 3px 3px rgba(0, 0, 0, 0.5);
	
	position:absolute;
	right: 0px;
	top: 100%;
}


/* Featured */
.elgg-module-featured {
  background-color: #fff;
	border: 1px solid #28d;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;

	-webkit-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
}
.elgg-module-featured > .elgg-head {
	padding: 7px 15px;
	background-color: #28d;
  border-bottom: 1px solid #06b;
}
.elgg-module-featured > .elgg-head * {
	color: #fff;
  padding: 0px;
	text-shadow: 0px 1px 1px #02b;
}
.elgg-module-featured > .elgg-body {
	padding: 10px 15px;
}


/* ***************************************
	Widgets
*************************************** */
.elgg-widgets {
	float: right;
	min-height: 30px;
}
.elgg-widget-add-control {
	text-align: right;
	margin: 0px 5px 15px 5px;
}
.elgg-widgets-add-panel {
	padding: 10px;
	margin: 0 5px 15px;
	background: #ddd;
	border: 2px solid #ccc;
}
<?php //@todo location-dependent style: make an extension of elgg-gallery ?>
.elgg-widgets-add-panel li {
	float: left;
	margin: 0px 10px 3px 0px;
	width: 180px;
	padding: 5px 15px;
	background-color: #ccc;
	border: 2px solid #bbb;
	font-weight: bold;
}
.elgg-widgets-add-panel li a {
	display: block;
}
.elgg-widgets-add-panel .elgg-state-available {
	color: #333;
	cursor: pointer;
}
.elgg-widgets-add-panel .elgg-state-available:hover {
	background-color: #bbb;
}
.elgg-widgets-add-panel .elgg-state-unavailable {
	color: #888;
}

.elgg-module-widget {
	background-color: #ddd;
	padding: 2px;
	margin: 0px 5px 15px 5px;
	position: relative;
}
.elgg-module-widget:hover {
	background-color: #ccc;
}
.elgg-module-widget > .elgg-head {
	background-color: #eee;
	height: 26px;
	overflow: hidden;
}
.elgg-module-widget > .elgg-head h3 {
	float: left;
	padding: 5px 45px 5px 20px;
	color: #666;
}
.elgg-module-widget.elgg-state-draggable .elgg-widget-handle {
	cursor: move;
}
a.elgg-widget-collapse-button {
	color: #bbb;
}
a.elgg-widget-collapse-button:hover,
a.elgg-widget-collapsed:hover {
	color: #888;
	text-decoration: none;
}
a.elgg-widget-collapse-button:before {
	content: "\25BC";
}
a.elgg-widget-collapsed:before {
	content: "\25BA";
}
.elgg-module-widget > .elgg-body {
	background-color: #fff;
	width: 100%;
	overflow: hidden;
	border-top: 2px solid #ddd;
}
.elgg-widget-edit {
	display: none;
	width: 92%;
	padding: 4%;
	border-bottom: 2px solid #ddd;
}
.elgg-widget-content {
	padding: 10px;
}
.elgg-widget-placeholder {
	border: 2px dashed #ddd;
	margin-bottom: 15px;
}
