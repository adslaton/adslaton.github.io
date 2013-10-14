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

	function getJobs(callback) {
		$.ajax({
			url: 'data/descriptions.json',
			success: callback
		});
	}

	if (typeof jobsContainer !== undefined) {
		function displayJobs(data) {
			var jobs = {},
				html = '',
				li = '',
				job;

			data = data || {};

			if (typeof data !== undefined) {
				jobs = data.jobs || {};
			}

			for (job in jobs) {
				if (jobs.hasOwnProperty(job)) {
					li = '<div>Title: ' + jobs[job].title + '</div>';
					li += '<div>Location: ' + jobs[job].location + '</div>';
					li += '<a href="/job.html#' + job + '"><div class="button bk-darkred center">full description</div></a>'; 
					html = html + '<li class="job">' + li;
				}
			}

			jobsContainer.html('<ul>' + html + '</ul>');
		}
		getJobs(displayJobs);
	}

	if (typeof jobDetails !== undefined) {
		function displayJob(data) {
			var jobId = location.hash.replace('#', ''),
				titleEl = $('#js-title'),
				summaryEl = $('#js-summary'),
				locationEl = $('#js-location'),
				detailsEl = $('#js-details'),
				qualificationsEl = $('#js-qualifications'),
				additionalEl = $('#js-additional'),
				disclaimerEl = $('#js-disclaimer'),
				benefitsEl = $('#js-benefits'),
				legalEl = $('#js-legal'),
				jobs = {},
				job = {},
				title = '',
				summary = '',
				locale = '',
				details = [],
				detailsHtml = '',
				qualifications = [],
				qualificationsHtml = '',
				additional = '',
				disclaimer = data.disclaimer || '',
				benefits = data.benefits || '',
				legal = data.legal || '',
				li,
				i;

			data = data || {};

			if (typeof data !== undefined) {
				jobs = data.jobs || {};
			}

			job = jobs[jobId] || {};
			title = job.title || '';
			summary = job.summary || '';
			locale = job.location || '';
			details = job.details || [];
			qualifications = job.qualifications || [];
			additional = job.additional || '';

			for (i = 0; i < details.length; i++) {
				li = '<li>' + details[i] + '</li>';
				detailsHtml += li;
			}

			for (i = 0; i < qualifications.length; i++) {
				li = '<li>' + qualifications[i] + '</li>';
				qualificationsHtml += li;
			}

			titleEl.html(title);
			summaryEl.html(summary);
			locationEl.html(locale);
			detailsEl.html(detailsHtml);
			qualificationsEl.html(qualificationsHtml);
			additionalEl.html(additional);
			disclaimerEl.html(disclaimer);
			benefitsEl.html(benefits);
			legalEl.html(legal);
		};
		getJobs(displayJob);
	}
});