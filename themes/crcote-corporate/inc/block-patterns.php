<?php
/**
 * Block Patterns
 *
 * @package Crcote
 * @since 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since 1.0
 *
 * @return void
 */

function crcote_register_block_patterns() {
	$block_pattern_categories = array(
		'crcote_hero'         => array( 'label' => __( 'Crcote: Hero', 'crcote-corporate' ) ),
		'crcote_cta'          => array( 'label' => __( 'Crcote: Call to Action', 'crcote-corporate' ) ),
		'crcote_features'     => array( 'label' => __( 'Crcote: Features', 'crcote-corporate' ) ),
		'crcote_portfolio'    => array( 'label' => __( 'Crcote: Gallery', 'crcote-corporate' ) ),
		'crcote_services'     => array( 'label' => __( 'Crcote: Services', 'crcote-corporate' ) ),
		'crcote_testimonials' => array( 'label' => __( 'Crcote: Testimonials', 'crcote-corporate' ) ),
		'crcote_team'         => array( 'label' => __( 'Crcote: Team', 'crcote-corporate' ) ),
		'crcote_page_layouts' => array( 'label' => __( 'Crcote: Full Page Layouts', 'crcote-corporate' ) ),
		'crcote_blog'         => array( 'label' => __( 'Crcote: Blog Posts', 'crcote-corporate' ) ),
		'crcote_global'         => array( 'label' => __( 'Crcote: Header and Footer', 'crcote-corporate' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since 1.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'crcote_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'crcote_register_block_patterns', 9 );
