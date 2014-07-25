(function($) {
	'use strict';

	// Header

	$('img.svg').each(function () {
		var img = $(this);
		$.get(img.attr('src'), function (data) {
			var svg = jQuery(data).find('svg');
			svg.attr({'id': img.attr('id'), 'class': img.attr('class')});
			img.replaceWith(svg);
		}, 'xml');
	});
	$(window).scroll(function () {
		$('body#front-page').toggleClass('min', $(document).scrollTop() > 100);
	});
	$(window).resize(function () {
		$('#wrap, #sidebar').css({ paddingTop: $('.site-header').outerHeight() });
	});
	$(window).resize();

	// Home

	$('#front-page #menu-home a').each(function () {
		$(this).attr('data-target', '#' + $(this).attr('title'));
		$(this).click(function (ev) {
			$(this).tab('show');
			$('#wrap').attr('class', $(this).attr('title'));
			ev.preventDefault();
		});
	});
	$('#menu-home a').first().click();

	$('#latest .post-thumbnail').css('background-image', function () {
		return 'url("' + $(this).find('img').attr('src') + '")';
	});

	// Single Pages

	$('#single .site-header').addClass('fixed');
	$('#single .single-banner').css('background-image', function () {
		return 'url("' + $(this).data('src') + '")';
	});

	// Archive Pages

	if ($('#category-forum').length) { $('#wrap').addClass('forum'); }
	if ($('.category-blog').length) { $('#wrap').addClass('blog'); }
	if ($('#page-template-default').length) { $('#wrap').addClass('magazine'); }

}(jQuery));