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

	$('.production-slider').slick({
		arrows: true,
		dots: false,
		slidesToShow: 4,
		slidesToScroll: 1,
		infinite: true,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					arrows: false,
					dots: true
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1,
					arrows: false,
					dots: true
				}
			}
		]
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






	// Big slider
	function bigSliderBeforeChange(event, slick, currentSlide, nextSlide) {
		if (!nextSlide) {
			nextSlide = 0;
		}

		// Set new link href ant text
		var nextSlideElem = $(this).find(`[data-slick-index=${nextSlide}]`);
		var buttonLink = nextSlideElem.data('slide-link');
		var buttonText = nextSlideElem.data('link-text');

		var slideLink = $(this).closest('.big-slider-wrapper').find('.more-link a');

		slideLink.attr('href', buttonLink);

		if (!!buttonText) {
			$(this).closest('.big-slider-wrapper').find('.js-link-text').html(buttonText);
		}

		// Highlight current nav item
		var sliderId = $(this).attr('id');
		var linkedTabsNavs = $(`[data-target-slider="#${sliderId}"]`);

		for (var i = 0; i < linkedTabsNavs.length; i++) {
			var navTarget = $(linkedTabsNavs[i]);

			if (navTarget.is('.tabs-nav')) {
				navTarget
					.find(`[data-slide=${nextSlide}]`).addClass('current')
					.siblings().removeClass('current');
			}

			if (navTarget.is('select')) {
				navTarget.val(nextSlide);
				jcf.refresh( $('.js-big-slider-nav') );
			}
		}

		// Update current index and total count widget
		var countWidget = $(this).closest('.big-slider-wrapper').find('.big-slider-total-slides')[0];

		$(countWidget).find('.current-index').text((nextSlide + 1));
		$(countWidget).find('.total-count').text(slick.slideCount);
	}

	$('.big-slider').on('beforeChange', bigSliderBeforeChange);
	$('.big-slider').on('init', bigSliderBeforeChange);

	$('.big-slider').slick({
		arrows: true,
		dots: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		infinite: true,
		centerMode: true,
		variableWidth: true,
		focusOnSelect: true,
		speed: 600,
		appendArrows: '.big-slider-wrapper .slider-arrows',
		responsive: [
			{
				breakpoint: 768,
				settings: {
					centerMode: false,
					arrows: false,
					dots: true,
					variableWidth: false
				}
			}
		]
	});

	$('[data-slide]').click(function(){
		var targetSlider = $( $(this).closest('[data-target-slider]').data('target-slider') );
		var targetSlide = $(this).data('slide');

		targetSlider.slick('slickGoTo', targetSlide);
	});

	$('.js-big-slider-nav').on('change', function(){
		var target = $( $(this).data('target-slider') )[0];
		$(target).slick('slickGoTo', this.value);
	});






	// Scroll to anchor
	$('a[href^="#"]:not([data-toggle])').click(function(){
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

	// Select Field
	jcf.setOptions('Select', {
		wrapNative: false,
		wrapNativeOnMobile: true,
		fakeDropInBody: false
	});

	jcf.replace( $('.select-field select') );

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


	// File Input
	var inputs = document.querySelectorAll( '.inputfile' );
	Array.prototype.forEach.call( inputs, function( input )
	{
		var label	 = input.nextElementSibling,
			labelVal = label.innerHTML;

		input.addEventListener( 'change', function( e )
		{
			var fileName = '';
			if( this.files && this.files.length > 1 ){
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			} else{
				fileName = e.target.value.split( '\\' ).pop();
			}

			if( fileName ){
				label.querySelector( '.selected-file-name' ).innerHTML = fileName;
				label.classList.add('selected');
			} else{
				label.innerHTML = labelVal;
				label.classList.remove('selected');
			}
		});
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