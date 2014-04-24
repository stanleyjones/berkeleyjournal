(function($) {
	'use strict';

	$('#menu-home a').click(function (ev) {
		ev.preventDefault();
		$(this).tab('show');
	});
	$('#menu-home a').first().click();

	$(document).on('click', '#menu-home li', cycle);

	function cycle (ev) {
		ev.preventDefault();
		// $('body').css({background: '#ffe'});
	}

}(jQuery));