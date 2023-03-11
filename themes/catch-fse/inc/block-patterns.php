<?php
/**
 * Block Patterns
 *
 * @package Catch_FSE
 * @since 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since 1.0
 *
 * @return void
 */
function catch_fse_register_block_patterns() {
	$block_pattern_categories = array(
		'catch-fse' => array( 'label' => esc_html__( 'Catch FSE', 'catch-fse' ) ),
		'pages'    => array( 'label' => esc_html__( 'Pages', 'catch-fse' ) ),
		/* 'footer'   => array( 'label' => esc_html__( 'Footers', 'catch-fse' ) ),
		'header'   => array( 'label' => esc_html__( 'Headers', 'catch-fse' ) ),
		'query'    => array( 'label' => esc_html__( 'Query', 'catch-fse' ) ), */
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
	$block_pattern_categories = apply_filters( 'catch_fse_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
		'404-header',
		'about-us',
		'archive-header',
		'cta',
		'featured-content',
		'footer-default',
		'footer-three-columns',
		'header-default',
		'header-media',
		'header-with-buttons',
		'hidden-404',
		'post-header',
		'recent-blog-with-sidebar',
		'search-header',
		'sidebar',
		'quick-contact',
		'newsletter',
		'grid-blog-post',
		'header-with-cart',
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'catch_fse_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_parent_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'catch-fse/' . $block_pattern,
			require $pattern_file
		); // register_block_pattern( string $pattern_name, array $pattern_properties ).
	}
}
add_action( 'init', 'catch_fse_register_block_patterns', 9 );
