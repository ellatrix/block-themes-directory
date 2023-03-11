(function () {
	'use strict';

	if ('loading' === document.readyState) {
		// The DOM has not yet been loaded.
		document.addEventListener('DOMContentLoaded', initSingularPost);
	} else {
		// The DOM has already been loaded.
		initSingularPost();
	}

	// Initiate the singular post functionality when the DOM loads.
	function initSingularPost() {
		const tagsSection = document.querySelector( '.is-tags-section' );

		if ( null !== tagsSection ) {
            const hasPostTerms = tagsSection.querySelector( '.wp-block-post-terms' );

            // Check if tags are present.
            if ( ! hasPostTerms ) {
                tagsSection.classList.toggle('is-hidden');
            }
        }
	}
})();