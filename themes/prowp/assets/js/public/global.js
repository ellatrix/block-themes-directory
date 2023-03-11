(function () {
	'use strict';

	if ('loading' === document.readyState) {
		// The DOM has not yet been loaded.
		document.addEventListener('DOMContentLoaded', initGlobal);
	} else {
		// The DOM has already been loaded.
		initGlobal();
	}

	// Initiate global functionality when the DOM loads.
	function initGlobal() {
        fixColumnsBlockSpaces();
        fixTemplatePartContainerSpaces();
	}

    // Fix empty spaces in Columns block
    function fixColumnsBlockSpaces() {
        identifyEmptyContentBlock( '.wp-block-column' );
    }

    // Fix empty spaces in Template Part Container
    function fixTemplatePartContainerSpaces() {
        identifyEmptyContentBlock( '.wp-block-template-part > .wp-block-group' );

        // Detect Firefox.
        if ( navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
            const templateParts = document.querySelectorAll( '.wp-block-template-part' );

            if ( ! templateParts.length ) {
                return;
            }

            for ( let i = 0; i < templateParts.length; i++ ) {
                if ( templateParts[i].querySelector('.empty') ) {
                    templateParts[i].classList.add('empty');
                }
            }
        }
    }

    // Hide elements with empty content.
    function identifyEmptyContentBlock( selector ) {
        const elements = document.querySelectorAll(selector);

        if ( ! elements.length ) {
            return;
        }

        for ( let i = 0; i < elements.length; i++ ) {
            let hasContent = elements[i].innerHTML.trim();

            if ( hasContent ) {
                continue;
            }

            elements[i].classList.add( 'empty' );
        }
    }
})();