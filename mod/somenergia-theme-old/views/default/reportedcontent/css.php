<?php
/**
 * Elgg reported content CSS
 *
 * Footer link CSS
 * 
 * @package ElggReportContent
 */

?>
/* Reported Content */
.elgg-icon-report-this {
	background: url(<?php echo elgg_get_site_url(); ?>mod/reportedcontent/graphics/icon_reportthis.gif) no-repeat left top;
}


.elgg-menu-item-report-this > a {
    color: #8A6D3B !important;    
    padding: 3px 10px 3px 10px !important;
    text-align: right;
}

.elgg-menu-item-report-this > a:hover {
    background-color: #f4e496;
}