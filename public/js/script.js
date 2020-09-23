'use strict';
(function ($) {
    $(window).scroll(function () {
        if ($('.navigation').offset().top > 100) {
            $('.navigation').addClass('fixed-nav');
            $('.navigation').removeClass('fixed-nav-none');
        } else if ($('.navigation').offset().top > 0) {
            setTimeout(function () {
                $('.sticky-message').fadeOut('slow');
            }, 2000)
        } else {
            $('.navigation').removeClass('fixed-nav');
            $('.navigation').addClass('fixed-nav-none');
        }
    });
})(jQuery);