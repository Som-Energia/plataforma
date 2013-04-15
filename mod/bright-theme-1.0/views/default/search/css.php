<?php
/**
 * Elgg Search css
 * 
 */
?>

/**********************************
Search plugin
***********************************/
.elgg-search-header {
	bottom: 5px;
	position: absolute;
	right: 5px;
  z-index: 1;
}
.elgg-search input[type=submit] {
	display: none;
}
.elgg-search input[type=text] {
	width: 225px;
	height: 25px;

	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	border: 1px solid rgba(0, 0, 0, 0.25);
	color: #fff;
  font-size: 13px;
	font-weight: bold;
	padding: 3px 15px;
	background-color: rgba(0, 0, 0, 0.25);
}
.elgg-search input[type=text]:focus, .elgg-search input[type=text]:active {
	background-color: #fff;
	color: #05d;
}

.search-list li {
	padding: 5px 0 0;
}
.search-heading-category {
	margin-top: 20px;
	color: #666;
}

.search-highlight {
	background-color: #bbdaf7;
}
.search-highlight-color1 {
	background-color: #bbdaf7;
}
.search-highlight-color2 {
	background-color: #A0FFFF;
}
.search-highlight-color3 {
	background-color: #FDFFC3;
}
.search-highlight-color4 {
	background-color: #ccc;
}
.search-highlight-color5 {
	background-color: #4690d6;
}
