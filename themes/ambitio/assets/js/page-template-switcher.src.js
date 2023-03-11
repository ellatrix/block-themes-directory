/**
 * Page Template Switcher
 * 
 * Updates body classes on Gutenberg Editor when page templates are changed.
 * 
 * @package Ambitio
 */

/**
 * WordPress dependencies
 */
 const { registerPlugin } = wp.plugins;
 const { Component } = wp.element;
 const { compose } = wp.compose;
 const { withSelect } = wp.data;
 
 /**
  * Page Template Switcher Editor Plugin
  */
 class pageTemplateBodyClass extends Component {
	 componentDidUpdate() {
		 const {
			 pageTemplate,
			 postType,
		 } = this.props;
 
		 // Return early if post type is not a static page.
		 if ( ! postType || 'page' !== postType.slug ) {
			 return null;
		 }
 
		 const fullWidthClass = 'ambitio-fullwidth-page';
		 const noTitleClass = 'ambitio-no-title-page';
 
		 if ( 'page-fullwidth' === pageTemplate ) {
			 document.body.classList.add( fullWidthClass );
			 document.body.classList.remove( noTitleClass );
		 } else if ( 'page-no-title' === pageTemplate || 'blank' === pageTemplate ) {
			 document.body.classList.add( noTitleClass );
			 document.body.classList.remove( fullWidthClass );
		 } else if ( 'page-no-title-fullwidth' === pageTemplate ) {
			 document.body.classList.add( fullWidthClass );
			 document.body.classList.add( noTitleClass );
		 } else {
			 document.body.classList.remove( fullWidthClass );
			 document.body.classList.remove( noTitleClass );
		 }
	 }
 
	 render() {
		 return null;
	 }
 }
 
 const plugin = compose(
	 withSelect( ( select ) => {
		 const { getEditedPostAttribute } = select( 'core/editor' );
		 const { getPostType } = select( 'core' );
 
		 return {
			 pageTemplate: getEditedPostAttribute( 'template' ),
			 postType: getPostType( getEditedPostAttribute( 'type' ) ),
		 };
	 } ),
 )( pageTemplateBodyClass );
 
 /**
  * Register plugin in Editor
  */
 registerPlugin( 'ambitio-page-template-switcher', {
	 render: plugin,
 } );
 