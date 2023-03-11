"use strict";

(function () {

	const wp = (typeof window.wp !== 'undefined') ? window.wp : null;

	if (wp) {
		wp.blocks.registerBlockVariation('core/group', {
			name: 'full-width-group',
			title: 'Full width group',
			attributes: {
				align: 'full',
			},
		});
	}

})();