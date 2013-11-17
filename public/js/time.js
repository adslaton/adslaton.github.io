(function (w, jQuery) {
	var APP = {};

	APP.startTime = function() {
		var today = new Date(),
		h = today.getHours(),
		m = today.getMinutes(),
		s = today.getSeconds(),
		/* add a zero in front of numbers < 10 */
		m = APP.checkTime(m),
		s = APP.checkTime(s),
		timeElement = jQuery('#js-time'),
		ampm = 'am';
		t = setTimeout(function() { APP.startTime() }, 500);

		/* display non military time */
		if (h > 12) {
			h = h - 12;
			ampm = 'pm';
		}
		timeElement.html(h + ":" + m + ":" + s + ampm);
	};

	APP.checkTime = function(i) {
		if (i < 10) {
	  		i = '0' + i;
	  	}
		return i;
	};

	APP.startTime();
}(window, jQuery));