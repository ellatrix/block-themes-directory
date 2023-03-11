( function( api ) {

	// Extends our custom "fse-study-lite" section.
	api.sectionConstructor['fse-study-lite'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );