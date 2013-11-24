/*global jQuery*/

var DGS = DGS || {};

DGS.hash = window.location.hash;

/*Set the user selection cookie*/
DGS.setCookie = function (name, data, expire) {
	'use strict';
	var cValue,
		cExpire = new Date();
	
	cExpire.setDate(cExpire.getDate() + expire);
	cValue = escape(data) + ';expires=' + cExpire.toUTCString();
	document.cookie = name + '=' + cValue;
};

/*Checks if the user selection cookie exists*/
DGS.isCookie = function (name) {
	'use strict';
	var exists = false,
		cookies = document.cookie.split(";"),
		i,
		x;

	if (name !== "") {
		for (i = 0; i < cookies.length; i += 1) {
			x = cookies[i].substr(0, cookies[i].indexOf("="));
			x = x.replace(/^\s+|\s+$/g, "");
			if (x === name) {
				exists = true;
				break;
			}
		}
	}

	return exists;
};

/*Gets the content of an existing cookie*/
DGS.getCookie = function (name) {
	'use strict';
	var cookies = document.cookie.split(";"),
		arrCookie = [],
		i,
		x,
		y;

	if (name !== "") {
		for (i = 0; i < cookies.length; i += 1) {
			x = cookies[i].substr(0, cookies[i].indexOf("="));
			y = cookies[i].substr(cookies[i].indexOf("=") + 1);
			x = x.replace(/^\s+|\s+$/g, "");
			if (x === name) {
				arrCookie = y.split(";");
				y = arrCookie[0];
				return unescape(y);
			}
		}
	}

	return "";
};

/*Inspects the UA for mobile detection*/
DGS.checkMobile = function () {
	DGS.isMobile = (/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(navigator.userAgent.toLowerCase()));
	DGS.displayFull = DGS.isCookie('fullsite');
	DGS.pathName = window.location.pathname || '';
	if (DGS.hash === '#full') {
		DGS.setCookie('fullsite', 'mobile ' + DGS.pathName, 1);
		DGS.displayFull = true;
	}
	if (DGS.isMobile && DGS.displayFull === false && DGS.pathName !== '') {
		DGS.pathArray = DGS.pathName.split('/');
		/*Redirect to touch site until responsive site is properly implemented*/
		window.location.href = 'm.' + DGS.pathArray[1];
	}
};
DGS.checkMobile();