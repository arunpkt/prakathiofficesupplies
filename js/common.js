"use strict";
var lastScroll = 0;

//check for browser os
var isMobile = false;
var isiPhoneiPad = false;
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    isMobile = true;
}

if (/iPhone|iPad|iPod/i.test(navigator.userAgent)) {
    isiPhoneiPad = true;
}

jQuery(document).ready(function () {
    //stellarParallax();
    /* ===================================
     sticky nav Start
     ====================================== */
    jQuery(document).scroll(function () {
        // var headerHeight = jQuery('nav').outerHeight();
        // var scrollTop = jQuery(document).scrollTop();
        // if (scrollTop >= headerHeight) {
        //     jQuery('header').addClass('sticky');
        // } else if (scrollTop <= headerHeight) {
        //     jQuery('header').removeClass('sticky');
        // }
    });
    /* Scroll top */
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 600) {
            jQuery('.upar').fadeIn();
        } else {
            jQuery('.upar').fadeOut();
        }
    });
    jQuery('.upar').click(function () {
        jQuery('body,html').animate({
            scrollTop: 0
        }, 1000);
        return false;
    });

    /*==============================================================
      wow animation - on scroll
    ==============================================================*/
    var wow = new WOW({
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 0,
        mobile: false,
        live: true
    });
    jQuery(document).ready(function () {
        wow.init();
    });

});

//Toggle search terms
function toggle(id) {
    jQuery("#" + id).toggle();
}
jQuery(window).on('load', function () {
    if (jQuery('.brands_slider').length) {
        var brandsSlider = jQuery('.brands_slider');

        brandsSlider.owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            nav: false,
            dots: false,
            autoWidth: true,
            items: 8,
            margin: 0
        });

        if (jQuery('.brands_prev').length) {
            var prev = jQuery('.brands_prev');
            prev.on('click', function () {
                brandsSlider.trigger('prev.owl.carousel');
            });
        }

        if (jQuery('.brands_next').length) {
            var next = jQuery('.brands_next');
            next.on('click', function () {
                brandsSlider.trigger('next.owl.carousel');
            });
        }
    }
});