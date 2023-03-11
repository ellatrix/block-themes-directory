"use strict";

(function () {

	const wp = (typeof window.wp !== 'undefined') ? window.wp : null;

	if (wp) {
		// Unregister block styles.
		wp.domReady(() => {
			wp.blocks.unregisterBlockStyle('core/quote', 'large');
			wp.blocks.unregisterBlockStyle('core/quote', 'plain');
		});
	}

})();