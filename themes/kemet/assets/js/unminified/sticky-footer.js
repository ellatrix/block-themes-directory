/**
 * Sticky Footer
 */
(function () {
    function parallaxFooter() {
        const stickyFooter = document.querySelector('.kmt-sticky-footer');

        if (stickyFooter) {
            document.body.classList.add('sticky-footer');
            if (stickyFooter.previousSibling) {
                stickyFooter.previousSibling.previousElementSibling.classList.add('kmt-content');
            }
            const content = document.querySelector("main"),
                stickFooter = stickyFooter.querySelector('.wp-block-template-part');
            setTimeout(function () {
                content.style.marginBottom = stickFooter.offsetHeight + "px";
            }, 1);
        }
    }

    window.addEventListener("resize", parallaxFooter());
    parallaxFooter();
})();