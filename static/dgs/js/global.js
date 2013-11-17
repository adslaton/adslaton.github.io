/*global jQuery*/

(function (w) {
	var DGS = DGS || {};
	/*Inspects the UA for mobile detection*/
	DGS.checkMobile = function () {
		DGS.isMobile = (/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(navigator.userAgent.toLowerCase()));
		if (DGS.isMobile) {
			/*Redirect to touch site until responsive site is properly implemented*/
			w.location.href = 'm.clientservices.html';
		}
	};
	DGS.checkMobile();
}(window));