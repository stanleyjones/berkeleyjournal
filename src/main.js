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

	var scrolled, resized;
	$(window).scroll(function () { scrolled = true; });

	var headerHeight = $('.site-header').outerHeight();
	var pagesWithBigHeader = $('body#front-page, body#page');
	setInterval(function () {
		if (scrolled) {
			if ($(document).scrollTop() > headerHeight + 100) {
				pagesWithBigHeader.addClass('min');
				pagesWithBigHeader.find('#wrap').css({paddingTop: headerHeight});
			} else {
				pagesWithBigHeader.removeClass('min');
				pagesWithBigHeader.find('#wrap').css({paddingTop: headerHeight});
			}
			scrolled = false;
		}
	}, 500);

	// Home

	$('#front-page #menu-home a').each(function () {
		var title = $(this).attr('title');
		if (!title) { return; }
		$(this).attr('data-target', '#' + title);
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
	$('.credibility-footnote, .return-link').click(function (ev) {
		var scrollTarget = $(ev.currentTarget).attr('href');
		var targetOffset = $(scrollTarget).offset().top;
		$('html, body').animate({scrollTop: targetOffset - $('.site-header').outerHeight()});
		ev.preventDefault();
	});

	// Archive Pages

	if ($('#category-forum').length) { $('#wrap').addClass('forum'); }
	if ($('.category-blog').length) { $('#wrap').addClass('blog'); }
	if ($('#page-template-default').length) { $('#wrap').addClass('magazine'); }

}(jQuery));