( function( api ) {
	// Extends our custom "carnival-lite" section.
	api.sectionConstructor['carnival-lite'] = api.Section.extend( {
		// No events for this type of section.
		attachEvents: function () {},
		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );
} )( wp.customize );