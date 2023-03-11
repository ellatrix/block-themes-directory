<?php
/**
 * Block styles.
 *
 * @package aploblocks
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */

function aploblocks_register_block_styles() {


	/******************************************************
	 * 
	 * Image Styles 
	 * 
	 ******************************************************/

	register_block_style('core/image',array('name'  => 'aplo-image-caption-top','label' => __( 'Caption Top', 'aploblocks' )));
	register_block_style('core/image',array('name'  => 'aplo-image-caption-bottom','label' => __( 'Caption Bottom', 'aploblocks' ), 'is_default' => true));
	
	/*********************************************************
	 * 
	 *  Gallery Styles
	 * 
	 *********************************************************/
	register_block_style('core/gallery',array('name'  => 'aplo-gallery-caption','label' => __( 'Caption', 'aploblocks' )));
		

	/******************************************************
	 * 
	 * Button Styles 
	 * 
	 ******************************************************/


	/******************************************************
	 * List Styles 
	 ******************************************************/
	register_block_style('core/list',array('name'  => 'aplo-list-underline','label' => __( 'Underlined list items', 'aploblocks' )));

	/******************************************************
	 * Group Styles 
	 ******************************************************/


	/******************************************************
	 * Column Styles 
	 ******************************************************/
	register_block_style('core/column',array('name'  => 'aplo-column-sticky','label' => __( 'Sticky column', 'aploblocks' )));

	/******************************************************
	 * Cover Styles 
	 ******************************************************/
	register_block_style('core/cover',array('name'  => 'aplo-cover-hover','label' => __( 'Hover 1', 'aploblocks' )));
	register_block_style('core/cover',array('name'  => 'aplo-cover-hover-two','label' => __( 'Hover 2', 'aploblocks' )));
	register_block_style('core/cover',array('name'  => 'aplo-cover-rounded','label' => __( 'Rounded', 'aploblocks' )));
	
	/******************************************************
	 * Navigation Styles 
	 ******************************************************/
	 register_block_style('core/navigation',array('name'  => 'aplo-navigation-underline-anim','label' => __( 'Link Underline hover anim', 'aploblocks' )));

	/******************************************************
	 * Text Styles 
	 ******************************************************/
	
	/******************************************************
	 * Media & Text Styles 
	 ******************************************************/
	register_block_style('core/media-text',array('name'  => 'aplo-border','label' => __( 'Border', 'aploblocks' )));
	register_block_style('core/media-text',array('name'  => 'aplo-fixed-content-400','label' => __( 'Fixed Content 400', 'aploblocks' )));
	//register_block_style('core/media-text', array('name' => 'text-over-media','label' => __('Text Over Media', 'your_theme_slug')));

	/*****************************************************
	* Featured Image
	******************************************************/

	/*****************************************************
	* Separator
	******************************************************/
	register_block_style('core/separator',array('name'  => 'aplo-separator','label' => __( 'Style 1', 'aploblocks' )));
	register_block_style('core/separator',array('name'  => 'aplo-separator-two','label' => __( 'Style 2', 'aploblocks' )));
	register_block_style('core/separator',array('name'  => 'aplo-separator-three','label' => __( 'Style 3', 'aploblocks' )));

	/*****************************************************
	* Quote
	******************************************************/


}
add_action( 'init', 'aploblocks_register_block_styles' );