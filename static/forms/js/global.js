jQuery(document).ready(function($) {
	var addButton = $('#js-addButton'),
		articles = $('#js-articles');

	function getArticle() {
		$.ajax({
			url: 'partials/article.html',
			success: function (data) {
				var html = articles.html();
				articles.html(html + data);
			}
		});
	};
	getArticle();

	addButton.on('click', function() {
		getArticle();
	});
});