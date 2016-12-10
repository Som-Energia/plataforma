/**
 * Toggle subscription for an entity via AJAX
 */
define(function(require) {
	var $ = require('jquery');
	var elgg = require('elgg');

	/**
	 * Toggle the subscriptions
	 *
	 * @param {Object} event
	 * @return void
	 */
	var toggle = function(event) {

		var guid = $(this).children(":first").attr('data-guid');
		var subscribe = 1;

		// change text on any other controllers for this item
		$('.comment-tracker-toggle').each( function() {
			if ($(this).children(':first').attr('data-guid') == guid) {
				// this is a controller, update the text
				var text = $(this).children(':first').text();

				if (text == elgg.echo('comment:unsubscribe')) {
					$(this).children(':first').text(elgg.echo('comment:subscribe'));
					subscribe = 0;
				}

				if (text == elgg.echo('comment:unsubscribe:long')) {
					$(this).children(':first').text(elgg.echo('comment:subscribe:long'));
					subscribe = 0;
				}

				if (text == elgg.echo('comment:subscribe')) {

					$(this).children(':first').text(elgg.echo('comment:unsubscribe'));
					subscribe = 1;
				}

				if (text == elgg.echo('comment:subscribe:long')) {
					$(this).children(':first').text(elgg.echo('comment:unsubscribe:long'));
					subscribe = 1;
				}
			}
		});

		elgg.action('comment_tracker/subscribe', {
			data: {
				guid: guid,
				subscribe: subscribe,
				user: elgg.get_logged_in_user_guid()
			}
		});

		event.preventDefault();
	};

	$(document).on('click', '.comment-tracker-toggle', toggle);

	return {
		toggle: toggle
	};
});
