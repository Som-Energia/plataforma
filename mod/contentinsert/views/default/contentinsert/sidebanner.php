<!-- Get the Publisher and Slot ID for the Banner Size 336 x 280 -->

<?php

/* ***********************************************************************
 * @author : Tiby Wang
 * @link http://www.caijingzhi.com/
 * Under this agreement, No one has rights to sell this script further.
 * ***********************************************************************/

    $topbanner   = elgg_get_plugin_setting('topbanner',   'contentinsert');
    $sidebanner = elgg_get_plugin_setting('sidebanner', 'contentinsert');
	$footbanner = elgg_get_plugin_setting('footbanner', 'contentinsert');
?>



<?php if (strlen(trim($sidebanner)) >0) { ?>

<p align=center>

<?php echo $sidebanner; ?>

</p>

<?php } ?>

