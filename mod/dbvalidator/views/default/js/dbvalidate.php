<?php
/**
 * Database validator JavaScript
 */
?>

elgg.provide('elgg.dbvalidate');

elgg.dbvalidate.init = function() {
	$("#dbv-validate").click(elgg.dbvalidate.submit);
	$("#dbv-repair").click(elgg.dbvalidate.submit);
};

elgg.dbvalidate.submit = function(event) {

	$("#dbv-ajax-spinner").show();
	$("#dbv-results").html('');

	// actions in Elgg send back json so we use $.ajax
	$.ajax({
		type: "GET",
		url: $(this).attr('href'),
		dataType: "html",
		success: function(htmlData) {
			$("#dbv-ajax-spinner").hide();

			if (htmlData.length > 0) {
				$("#dbv-results").html(htmlData);
			}
		}
	});

	event.preventDefault();
};

elgg.register_hook_handler('init', 'system', elgg.dbvalidate.init);
