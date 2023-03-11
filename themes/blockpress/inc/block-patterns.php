<?php
/**
 * Blockpress: Block Patterns
 *
 * @since Blockpress 0.8.0
 */

/**
 * Registers block patterns, categories, and type.
 *
 * @since Blockpress 0.8.0
 */
function blockpress_register_block_patterns() {

	if ( function_exists( 'register_block_pattern_category_type' ) ) {
		register_block_pattern_category_type( 'blockpress', array( 'label' => __( 'Blockpress', 'blockpress' ) ) );
	}

	$block_pattern_categories = array(
		'blockpress-footer'  => array(
			'label'         => __( 'Blockpress Footer', 'blockpress' ),
			'categoryTypes' => array( 'blockpress' ),
		),
		'blockpress-general' => array(
			'label'         => __( 'Blockpress General', 'blockpress' ),
			'categoryTypes' => array( 'blockpress' ),
		),
		'blockpress-header'  => array(
			'label'         => __( 'Blockpress Header', 'blockpress' ),
			'categoryTypes' => array( 'blockpress' ),
		),
		'blockpress-hero'  => array(
			'label'         => __( 'Blockpress Hero Headers', 'blockpress' ),
			'categoryTypes' => array( 'blockpress' ),
		),
		'blockpress-parts'    => array(
			'label'         => __( 'Blockpress Parts', 'blockpress' ),
			'categoryTypes' => array( 'blockpress' ),
		),
		'blockpress-page'    => array(
			'label'         => __( 'Blockpress Page', 'blockpress' ),
			'categoryTypes' => array( 'blockpress' ),
		),
		'blockpress-query'   => array(
			'label'         => __( 'Blockpress Query', 'blockpress' ),
			'categoryTypes' => array( 'blockpress' ),
		),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Blockpress 0.8.0
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
	$block_pattern_categories = apply_filters( 'blockpress_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}

	$block_patterns = array(
		'header/header-simple',
		'header/header-center',
		'header/header-search-icon',
		'header/header-button-search',
		'header/header-simple-dark',
		'header/header-two-menus',

		'footer/footer-simple',
		'footer/footer-simple-dark',
		'footer/footer-mega',
		'footer/footer-mega-dark',
		'footer/footer-stacked',
		'footer/footer-stacked-dark',
		'footer/footer-three-columns',
		'footer/footer-three-columns-dark',
		'footer/footer-mega-four',

		'query/query-grid',
		'query/query-shadowgrid',
		'query/query-list',
		'query/query-sticky-column',
		//'query/query-sticky-column-simple',
		'query/query-listbig',
		'query/query-creative-list',
		'query/query-listgrid',
		'query/query-simple-list',
		'query/query-grid-excerpt',
		'query/query-cover-grid',
		'query/query-cover-featured',
		'query/query-default',

		'hero/hero-front',
		'hero/hero-two-columns',

		'general/general-features',
		'general/general-banner-negative-top',
		'general/general-banner-footer',
		'general/general-user-feedback',
		'general/general-pricing-three-columns',
		'general/general-testimonials-boxes',
		'general/general-latest-query',
		'general/general-qa',
		'general/general-podcast',

		'parts/parts-related',
		'parts/parts-commentquery',

		'hidden/hidden-404',
		
		'page/page-front',
		'page/query-index',
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Blockpress 0.8.0
	 *
	 * @param $block_patterns array List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'blockpress_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		register_block_pattern(
			'blockpress/' . $block_pattern,
			require get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' )
		);
	}

}
add_action( 'init', 'blockpress_register_block_patterns', 9 );