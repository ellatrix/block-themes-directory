jQuery(document).ready(function($) {

/*------------------------------------------------
            DECLARATIONS
------------------------------------------------*/

    var scroll                  = $(window).scrollTop();  
    var scrollup                = $('#vision-fse-to-top');

/*------------------------------------------------
            BACK TO TOP
------------------------------------------------*/

    $(window).scroll(function(e) {
        e.preventDefault();
        if ($(this).scrollTop() > 1) {
            scrollup.css({bottom:"25px"});
        } 
        else {
            scrollup.css({bottom:"-100px"});
        }
    });

    scrollup.click(function() {
        $('html, body').animate({scrollTop: '0px'}, 800);
        return false;
    });

/*------------------------------------------------
                END JQUERY
------------------------------------------------*/

});