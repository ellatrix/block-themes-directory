( function ($) {
        //Scroll to top
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.scroll-up').fadeIn();
            } else {
                $('.scroll-up').fadeOut();
            }
        });
        $('a[href="#totop"]').click(function() {
            $('html, body').animate({ scrollTop: 0 }, 'slow');
            return false;
        });

        /* Preloader */
        $(window).on('load', function() {
            var preloaderFadeOutTime = 500;
            function hidePreloader() {
              var preloader = $('#preloader');
              setTimeout(function() {
                preloader.fadeOut(preloaderFadeOutTime);
              }, 500);
            }
            hidePreloader();
        });

}) ( jQuery);