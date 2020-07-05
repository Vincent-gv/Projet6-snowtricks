'use strict';
(function ($) {

    $(window).scroll(function () {
        if ($('.navigation').offset().top > 100) {
            $('.navigation').addClass('fixed-nav');
            $('.navigation').removeClass('fixed-nav-none');

        }
        else if ($('.navigation').offset().top > 0) {
            $('.sticky-message').delay(1000).fadeOut(500);

        }
        else {
            $('.navigation').removeClass('fixed-nav');
            $('.navigation').addClass('fixed-nav-none');
        }
    });

    // Zoombox Overlay
    $('a.zoombox').zoombox();


})(jQuery);