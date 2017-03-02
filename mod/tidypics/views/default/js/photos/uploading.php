<?php
/**
 * AJAX uploading
 */
$maxfilesize = (int) elgg_get_plugin_setting('maxfilesize', 'tidypics');
$max_files = 10;
?>

elgg.provide('elgg.tidypics.uploading');

elgg.tidypics.uploading.init = function() {

	var fields = ['Elgg', 'user_guid', 'album_guid', 'batch', 'tidypics_token'];
	var data = elgg.security.token;

	$(fields).each(function(i, name) {
		var value = $('input[name=' + name + ']').val();
		if (value) {
			data[name] = value;
		}
	});

	$("#uploader").plupload({
		// General settings
		runtimes : 'html5,html4',
		url : elgg.config.wwwroot + 'action/photos/image/ajax_upload',
		file_data_name : 'Image',

		dragdrop: true,
		sortable: true,
		multipart_params : data,
		max_file_size : '<?php echo $maxfilesize; ?>mb',

		filters : [
			{title : "<?php echo elgg_echo('tidypics:uploader:filetype'); ?>", extensions : "jpg,jpeg,gif,png"}
        ],

		// Views to activate
		views: {
			list: true,
			thumbs: true,
			active: 'thumbs'
		},

		init : {
			UploadComplete: function(up, files) {
				// Called when all files are either uploaded or failed
				elgg.action('photos/image/ajax_upload_complete', {
					data: {
						album_guid: data.album_guid,
						batch: data.batch
					},
					success: function(json) {
						var url = elgg.normalize_url('photos/edit/' + json.batch_guid)
						window.location.href = url;
					}
				});
			},

			FilesAdded: function(up, files) {
				var maxfiles = <?php echo $max_files;?>;
				if(up.files.length > maxfiles ) {
					alert("<?php echo elgg_echo('tidypics:exceedmax_number', array($max_files));?>");
				}
				if(up.files.length > maxfiles ) {
					up.splice(maxfiles);
				}
				if (up.files.length >= maxfiles) {
					up.disableBrowse(true);
				}
			},

			FilesRemoved: function(up, files) {
				var maxfiles = <?php echo $max_files;?>;
				if (up.files.length < maxfiles) {
					up.disableBrowse(false);
				}
			}
		}
	});
};

elgg.register_hook_handler('init', 'system', elgg.tidypics.uploading.init);