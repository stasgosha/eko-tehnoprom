$(document).ready(function(){

	// Mobile nav
	$('.menu-opener').bigSlide({
		side: 'left',
		easyClose: true,
		menuWidth: '260px'
	});

	// Sliders
	$('.cert-image-slider').slick({
		arrows: true,
		dots: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		infinite: true,
		asNavFor: '.cert-descr-slider',
		responsive: [
			{
				breakpoint: 768,
				settings: {
					arrows: false,
					dots: true
				}
			}
		]
	});

	$('.cert-descr-slider').slick({
		arrows: false,
		dots: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		infinite: true,
		asNavFor: '.cert-image-slider',
	});

	$('.partners-slider').slick({
		arrows: true,
		dots: false,
		slidesToShow: 5,
		slidesToScroll: 1,
		infinite: true,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 4
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 2,
					arrows: false,
					dots: true
				}
			}
		]
	});

	$('.partners-slider').on('setPosition', function () {
		$(this).find('.slick-slide').height('auto');
		var slickTrack = $(this).find('.slick-track');
		var slickTrackHeight = $(slickTrack).height();
		$(this).find('.slick-slide').css('height', slickTrackHeight + 'px');
	});

	$('.projects-slider').slick({
		arrows: false,
		dots: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		infinite: true,
	});

	$('.why-we-slider').slick({
		arrows: false,
		dots: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		infinite: true,
	});

	$('.why-we-slider').on('setPosition', function () {
		$(this).find('.slick-slide').height('auto');
		var slickTrack = $(this).find('.slick-track');
		var slickTrackHeight = $(slickTrack).height();
		$(this).find('.slick-slide').css('height', slickTrackHeight + 'px');
	});

	$('.scheme-of-work-slider').slick({
		arrows: false,
		dots: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		infinite: false,
	});

	$('.scheme-of-work-slider').on('setPosition', function () {
		$(this).find('.slick-slide').height('auto');
		var slickTrack = $(this).find('.slick-track');
		var slickTrackHeight = $(slickTrack).height();
		$(this).find('.slick-slide').css('height', slickTrackHeight + 'px');
	});

	$('.big-slider').slick({
		arrows: false,
		dots: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		infinite: true,
		centerMode: true,
		variableWidth: true,
		focusOnSelect: true,
		speed: 600
	});

	// Scroll to anchor
	$('a[href^="#"]').click(function(){
		 $('html, body').animate({
			scrollTop: $( $.attr(this, 'href') ).offset().top
		}, 500);
		return false;
	});

	// Accordions
	$('.accordion-component .cmp-header').click(function(){
		$(this).parent().toggleClass('opened');
		$(this).siblings('.cmp-content').stop().slideToggle(300);
	});

	// Tabs
	$("[data-tab]").click(function(e){
		e.preventDefault();
		var dest = $( $(this).data('tab') );
		dest.stop().fadeIn(500).siblings('.tab').hide(0);
		// dest.addClass('visible').siblings('.tab').removeClass('visible');
		$(this).addClass('current').siblings().removeClass('current');
	});

	$("[data-tab]:first-child").trigger('click');

	// Sticky Header
	var isSticky = false;

	$(window).scroll(function(){
		if( !isSticky && $(window).scrollTop() > 90 ){
			$('.header').addClass('sticky');
			isSticky = true;
		} else if(isSticky && $(window).scrollTop() <= 90){
			$('.header').removeClass('sticky');
			isSticky = false;
		}
	});

	// TODO: ↓↓↓ remove this script ↓↓↓
	// Current menu item highlithing
	$(function () {
		var location = window.location.href;
		var cur_url = location.split('/').pop();

		$('.top-nav li, .panel-nav li, .footer-nav li').each(function () {
			var link = $(this).find('a').attr('href');

			// console.log(link);

			if (cur_url == '') {
				cur_url = 'index.php';
			}

			if (cur_url == link)
			{
				$(this).addClass('current-menu-item');
				$(this).parents('li').addClass('current-menu-parent');
			}
		});
	});
});