(function ($) {

    "use strict";
    /*------------------------------------------
        = BACK TO TOP BTN SETTING
    -------------------------------------------*/

    $("body").append("<a href='#' class='back-to-top'>&#8593;</a>");

    function toggleBackToTopBtn() {
        var amountScrolled = 1000;
        if ($(window).scrollTop() > amountScrolled) {
            $("a.back-to-top").fadeIn("slow");
        } else {
            $("a.back-to-top").fadeOut("slow");
        }
    }

    $(".back-to-top").on("click", function () {
        $("html,body").animate({
            scrollTop: 0
        }, 700);
        return false;
    })


    /*==========================================================================
     WHEN WINDOW SCROLL
     ==========================================================================*/
    $(window).on("scroll", function () {
        var scrollTop = $(window).scrollTop();
        if (scrollTop > 200) {
            $("#header").removeClass("bg-transparent").css("background-color", "#333333");
        } else {
            $("#header").addClass("bg-transparent");
        }

        toggleBackToTopBtn();
    });
    new WOW().init();
})(window.jQuery);
