jQuery(document).ready(function($) {
	var tabs = $('#js-tabs > li');

	tabs.on('click', function() {
		var tab = $('#js-' + this.id);
		tab.siblings().removeClass('active');
		tab.addClass('active')
		$(this).siblings().removeClass('show');
		$(this).addClass('show');
	});
});