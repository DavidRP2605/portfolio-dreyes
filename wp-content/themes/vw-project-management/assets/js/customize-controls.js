( function( api ) {

	// Extends our custom "vw-project-management" section.
	api.sectionConstructor['vw-project-management'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );