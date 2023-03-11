<?php
/**
 * Register block styles.
 *
 * @since 1.0.0
 */
function astory_register_block_styles() {

	$block_styles = array(
		'core/button'          => array(
			'fill-base'    => __( 'Fill Base', 'astory' ),
			'outline-base' => __( 'Outline Base', 'astory' ),
		),
		'core/group'           => array(
			'boxshadow'       => __( 'Box Shadow', 'astory' ),
			'boxshadow-solid' => __( 'Box Shadow Solid', 'astory' ),
			'full-height'     => __( 'Full-height', 'astory' ),
		),
		'core/image'           => array(
			'boxshadow' => __( 'Box Shadow', 'astory' ),
		),
		'core/column'          => array(
			'boxshadow'      => __( 'Box Shadow', 'astory' ),
			'rounded-corner' => __( 'Rounded Corner with Box Shadow', 'astory' ),
		),
		'core/list'            => array(
			'no-disc' => __( 'No Disc', 'astory' ),
		),
		'core/media-text'      => array(
			'boxshadow-media' => __( 'Box Shadow', 'astory' ),
		),
		'core/navigation-link' => array(
			'fill'         => __( 'Fill', 'astory' ),
			'fill-base'    => __( 'Fill Base', 'astory' ),
			'outline'      => __( 'Outline', 'astory' ),
			'outline-base' => __( 'Outline Base', 'astory' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', 'astory_register_block_styles' );

/**
 * Registers block categories, and type.
 *
 * @since 1.0.0
 */
function astory_register_block_pattern_categories() {

	/* Functionality specific to the Block Pattern Explorer plugin. */
	if ( function_exists( 'register_block_pattern_category_type' ) ) {
		register_block_pattern_category_type( 'astory', array( 'label' => __( 'Astory', 'astory' ) ) );
	}

	$block_pattern_categories = array(
		'astory-footer'       => array(
			'label'         => __( 'Astory Footer', 'astory' ),
			'categoryTypes' => array( 'astory' ),
		),
		'astory-general'      => array(
			'label'         => __( 'Astory General', 'astory' ),
			'categoryTypes' => array( 'astory' ),
		),
		'astory-hero'         => array(
			'label'         => __( 'Astory Hero', 'astory' ),
			'categoryTypes' => array( 'astory' ),
		),
		'astory-cta'          => array(
			'label'         => __( 'Astory Call To Action', 'astory' ),
			'categoryTypes' => array( 'astory' ),
		),
		'astory-testimonials' => array(
			'label'         => __( 'Astory Testimonials', 'astory' ),
			'categoryTypes' => array( 'astory' ),
		),
		'astory-clients'      => array(
			'label'         => __( 'Astory Clients', 'astory' ),
			'categoryTypes' => array( 'astory' ),
		),
		'astory-price'        => array(
			'label'         => __( 'Astory Price', 'astory' ),
			'categoryTypes' => array( 'astory' ),
		),
		'astory-team-member'  => array(
			'label'         => __( 'Astory Team Member', 'astory' ),
			'categoryTypes' => array( 'astory' ),
		),
		'astory-header'       => array(
			'label'         => __( 'Astory Header', 'astory' ),
			'categoryTypes' => array( 'astory' ),
		),
		'astory-page'         => array(
			'label'         => __( 'Astory Page', 'astory' ),
			'categoryTypes' => array( 'astory' ),
		),
		'astory-query'        => array(
			'label'         => __( 'Astory Query', 'astory' ),
			'categoryTypes' => array( 'astory' ),
		),
	);

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}
add_action( 'init', 'astory_register_block_pattern_categories', 9 );
