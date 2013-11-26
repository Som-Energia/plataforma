<?php 

	// do we have the plugin configured correctly
	if (elgg_get_plugin_setting("analyticsSiteID", "analytics")) {
	
		$trackActions = elgg_get_plugin_setting("trackActions", "analytics");
		$trackEvents = elgg_get_plugin_setting("trackEvents", "analytics");
	
		// do we track actions/events
		if ($trackActions == "yes" || $trackEvents == "yes") {
?>
<script type="text/javascript" id="analytics_ajax_result">
	$('#analytics_ajax_result').ajaxSuccess(function(event, XMLHttpRequest, ajaxOptions){
		if(ajaxOptions.url != "<?php echo elgg_get_site_url(); ?>analytics/ajax_success"){
			
			$.get("<?php echo elgg_get_site_url(); ?>analytics/ajax_success", function(data){
				if(data){
					var temp = document.createElement("script");
					temp.setAttribute("type", "text/javascript");
					temp.innerHTML = data;
					
					$('#analytics_ajax_result').after(temp);
				}
			});
		}
	});

</script>
<?php 
		}
	}