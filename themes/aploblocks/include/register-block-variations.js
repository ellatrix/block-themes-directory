wp.blocks.registerBlockVariation (
    'core/group', {
		name: 'aplo-sticky-group',
		title: 'Sticky Group',
		icon: 'tide',
		attributes: {
			namespace: 'aplo-sticky-group',
			className: 'aplo-sticky-group'
		},
		isActive: [ 'namespace' ],
		scope: ['inserter']
		
    }
  );

  wp.blocks.registerBlockVariation (
    'core/media-text', {
		name: 'aplo-overlay',
		title: 'Media and Text Overlay',
		icon: 'tide',
		attributes: {
			namespace: 'aplo-overlay',
			className: 'aplo-overlay',
			isStackedOnMobile: false,
			imageFill: true,
			align:'',
		},
		isActive: [ 'namespace' ],
		scope: ['inserter']
		
    }
  );