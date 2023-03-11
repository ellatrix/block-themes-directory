(function () {
    const kemetStickyHeader = () => {
        const stickyHeader = document.querySelector('.kmt-sticky-header');
        if (stickyHeader) {
            const headerContainer = stickyHeader.querySelector('.wp-block-template-part');
            const getOffset = (el) => {
                if (el instanceof HTMLElement) {
                    const rect = el.getBoundingClientRect();

                    return {
                        top: rect.top + window.pageYOffset,
                        left: rect.left + window.pageXOffset,
                    };
                }

                return {
                    top: null,
                    left: null,
                };
            }
            const height = stickyHeader.offsetHeight;
            let offsetTop = getOffset(stickyHeader).top;
            let top = 0;
            const hasAdminBar = document.body.classList.contains('admin-bar');
            if (hasAdminBar) {
                top = 32;
                offsetTop = offsetTop - 32;
            }

            if (window.scrollY > offsetTop) {
                headerContainer.style.top = top + "px";
                stickyHeader.style.minHeight = height + "px";
                headerContainer.classList.add("kmt-is-sticky");
            } else {
                headerContainer.style.top = null;
                stickyHeader.style.minHeight = null;
                headerContainer.classList.remove("kmt-is-sticky", "swing");
            }
        }
    }
    window.addEventListener("resize", kemetStickyHeader, false);
    window.addEventListener("scroll", kemetStickyHeader, false);
    window.addEventListener(
        "scroll",
        kemetStickyHeader,
        false
    );
    window.addEventListener("load", kemetStickyHeader, false);
})(window, document);