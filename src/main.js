(function($) {
	'use strict';

	$('#front-page #menu-home a').each(function () {
		$(this).attr('data-target', '#' + $(this).attr('title'));
		$(this).click(function (ev) { ev.preventDefault(); $(this).tab('show'); });
	});
	$('#menu-home a').first().click();

	// Single Pages

	$('.single .site-logo').click(function (ev) {
		$('#sidebar').toggleClass('on-canvas');
	});
	$('#single .single-banner').css('background-image', function () {
		return 'url("' + $(this).data('src') + '")';
	});

}(jQuery));