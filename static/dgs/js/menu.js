/*global jQuery*/

jQuery(document).ready(function($) {
	var menuButton = $('#js-menu-button'),
		menu = $('#js-menu'),
		jobsContainer = $('#js-jobs'),
		jobDetails = $('#js-job');

	(function getMenu() {
		$.ajax({
			url: 'partials/menu.html',
			success: function (data) {
				menu.html(data);
			}
		});
	})();

	menuButton.click(function() {
		var self = $(this);
		if (menu.hasClass('show')) {
			menu.removeClass('show');
			self.html('SHOW MENU');
		} else {
			menu.addClass('show');
			self.html('HIDE MENU');
		}
	});
});