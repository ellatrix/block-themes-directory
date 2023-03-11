(function () {
	'use strict';

	if ('loading' === document.readyState) {
		// The DOM has not yet been loaded.
		document.addEventListener('DOMContentLoaded', initSingularPage);
	} else {
		// The DOM has already been loaded.
		initSingularPage();
	}

	// Initiate the singular page functionality when the DOM loads.
	function initSingularPage() {
		// Detect Firefox.
        if ( navigator.userAgent.toLowerCase().indexOf('firefox') > -1){
            const hasPageContentTitle = document.querySelector('.wp-block-post-content .wp-block-post-title');

            if ( hasPageContentTitle ) {
                const page = document.querySelector('.wp-site-blocks');
                page.classList.add('has-page-content-title');
            }
        }
	}
})();