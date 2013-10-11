jQuery(document).ready(function($) {
	var menuButton = $('#js-menu-button'),
		menu = $('#js-menu');

	function getMenu() {
		$.ajax({
			url: 'partials/menu.html',
			success: function (data) {
				menu.html(data);
			}
		});
	};
	getMenu();

	menuButton.on('click', function() {
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