'use strict';
(function ($) {

    $(window).scroll(function () {
        if ($('.navigation').offset().top > 100) {
            $('.navigation').addClass('fixed-nav');
            $('.navigation').removeClass('fixed-nav-none');
        } else {
            $('.navigation').removeClass('fixed-nav');
            $('.navigation').addClass('fixed-nav-none');
        }
    });

    // Zoombox Overlay
    $('a.zoombox').zoombox();


})(jQuery);