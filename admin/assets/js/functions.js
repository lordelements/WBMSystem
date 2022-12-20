(function($) {
	"use strict";
	var $bgSection = $(".bg-section");
	var $bgPattern = $(".bg-pattern");
	var $colBg = $(".col-bg");
	$bgSection.each(function() {
		var bgSrc = $(this).children("img").attr("src");
		var bgUrl = 'url(' + bgSrc + ')';
		$(this).parent().css("backgroundImage", bgUrl);
		$(this).parent().addClass("bg-section");
		$(this).remove();
	});
	$bgPattern.each(function() {
		var bgSrc = $(this).children("img").attr("src");
		var bgUrl = 'url(' + bgSrc + ')';
		$(this).parent().css("backgroundImage", bgUrl);
		$(this).parent().addClass("bg-pattern");
		$(this).remove();
	});
	$colBg.each(function() {
		var bgSrc = $(this).children("img").attr("src");
		var bgUrl = 'url(' + bgSrc + ')';
		$(this).parent().css("backgroundImage", bgUrl);
		$(this).parent().addClass("col-bg");
		$(this).remove();
	});
	var $moduleIcon = $(".module-icon"),
		$moduleCancel = $(".module-cancel");
	$moduleIcon.on("click", function(e) {
		$(this).parent().siblings().removeClass('module-active');
		$(this).parent(".module").toggleClass("module-active");
		e.stopPropagation();
	});
	$moduleCancel.on("click", function(e) {
		$(".module").removeClass("module-active");
		e.stopPropagation();
	});
	$(".side-nav-icon").on("click", function() {
		if ($(this).parent().hasClass('module-active')) {
			$(".wrapper").addClass("hamburger-active");
			$(this).addClass("module-hamburger-close");
		} else {
			$(".wrapper").removeClass("hamburger-active");
			$(this).removeClass("module-hamburger-close");
		}
	});
	$(document).on("click", function(e) {
		if ($(e.target).is(".hamburger-panel,.hamburger-panel .list-links,.hamburger-panel .list-links a,.hamburger-panel .social-share,.hamburger-panel .social-share a i,.hamburger-panel .social-share a,.hamburger-panel .copywright") === false) {
			$(".wrapper").removeClass("page-transform");
			$(".module-side-nav").removeClass("module-active");
			e.stopPropagation();
		}
	});
	$(document).on("click", function(e) {
		if ($(e.target).is(".module, .module-content, .search-form input,.cart-control .btn,.cart-overview a.cancel,.cart-box") === false) {
			$module.removeClass("module-active");
			e.stopPropagation();
		}
	});
	var $dropToggle = $("ul.dropdown-menu [data-toggle=dropdown]"),
		$module = $(".module");
	$dropToggle.on("click", function(event) {
		event.preventDefault();
		event.stopPropagation();
		$(this).parent().siblings().removeClass("open");
		$(this).parent().toggleClass("open");
	});
	$module.on("click", function() {
		$(this).toggleClass("toggle-module");
	});
	$module.find("input.form-control", ".btn", ".module-cancel").on("click", function(e) {
		e.stopPropagation();
	});
	var $navAffix = $(".header-fixed .navbar-fixed-top");
	$navAffix.affix({
		offset: {
			top: 50
		}
	});
	$(".carousel").each(function() {
		var $Carousel = $(this);
		$Carousel.owlCarousel({
			loop: $Carousel.data('loop'),
			autoplay: $Carousel.data("autoplay"),
			margin: $Carousel.data('space'),
			nav: $Carousel.data('nav'),
			dots: $Carousel.data('dots'),
			center: $Carousel.data('center'),
			dotsSpeed: $Carousel.data('speed'),
			thumbs: $Carousel.data('thumbs'),
			thumbsPrerendered: $Carousel.data('thumbs'),
			responsive: {
				0: {
					items: 1,
				},
				600: {
					items: $Carousel.data('slide-rs'),
				},
				1000: {
					items: $Carousel.data('slide'),
				}
			}
		});
	});
	var $imgPopup = $(".img-popup");
	$imgPopup.magnificPopup({
		type: "image"
	});
	$('.img-gallery-item').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true
		}
	});
	$('.popup-video,.popup-gmaps').magnificPopup({
		disableOn: 700,
		mainClass: 'mfp-fade',
		removalDelay: 0,
		preloader: false,
		fixedContentPos: false,
		type: 'iframe',
		iframe: {
			markup: '<div class="mfp-iframe-scaler">' +
				'<div class="mfp-close"></div>' +
				'<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
				'</div>',
			patterns: {
				youtube: {
					index: 'youtube.com/',
					id: 'v=',
					src: '//www.youtube.com/embed/%id%?autoplay=1'
				}
			},
			srcAction: 'iframe_src',
		}
	});
	$('#switch-list').on("click", function(event) {
		event.preventDefault();
		$(this).addClass('active');
		$(this).siblings().removeClass("active");
		$(".properties").each(function() {
			$(this).addClass('properties-list');
			$(this).removeClass('properties-grid');
		});
	});
	$('#switch-grid').on("click", function(event) {
		event.preventDefault();
		$(this).addClass('active');
		$(this).siblings().removeClass("active");
		$(".properties").each(function() {
			$(this).addClass('properties-grid');
			$(this).removeClass('properties-list');
		});
	});
	var aScroll = $('a[data-scroll="scrollTo"]');
	aScroll.on('click', function(event) {
		var target = $($(this).attr('href'));
		if (target.length) {
			event.preventDefault();
			$('html, body').animate({
				scrollTop: target.offset().top - 100
			}, 1000);
			if ($(this).hasClass("menu-item")) {
				$(this).parent().addClass("active");
				$(this).parent().siblings().removeClass("active");
			}
		}
	});
	var $sliderRange = $(".slider-range"),
		$sliderAmount = $(".amount");
	$sliderRange.each(function() {
		$(this).slider({
			range: true,
			min: 0,
			max: 100000,
			values: [0, 100000],
			slide: function(event, ui) {
				$(this).closest('.filter').find($sliderAmount).val("₱" + ui.values[0] + " - ₱" + ui.values[1]);
			}
		});
		$(this).closest('.filter').find($sliderAmount).val("₱" + $sliderRange.slider("values", 0) + " - ₱" + $sliderRange.slider("values", 1));
	});


/*	var $sliderRange2 = $(".slider-range"),
		$sliderAmount2 = $(".amount2");
		$sliderRange2.each(function() {
		$(this).slider({
			range: true,
			min: 0,
			max: 1000,
			values: [0, 1000],
			slide: function(event, ui) {
				$(this).closest('.filter').find($sliderAmount2).val("" + ui.values[0] + " - " + ui.values[1]);
			}
		});
		$(this).closest('.filter').find($sliderAmount2).val("" + $sliderRange2.slider("values", 0) + " - " + $sliderRange2.slider("values", 1));
	});
*/





	if ($("#dZUpload").length > 0) {
		Dropzone.autoDiscover = false;
		$("#dZUpload").dropzone({
			url: "hn_SimpeFileUploader.ashx",
			addRemoveLinks: true,
			success: function(file, response) {
				var imgName = response;
				file.previewElement.classList.add("dz-success");
				console.log("Successfully uploaded :" + imgName);
			},
			error: function(file, response) {
				file.previewElement.classList.add("dz-error");
			}
		});
	}
	$('.delete--img').on("click", function() {
		$('.output--img').remove();
		event.preventDefault();
	});
	$('.less--options').on("click", function() {
		$('.option-hide').slideToggle('slow');
		$(this).toggleClass('active');
		event.preventDefault();
	});
}(jQuery));