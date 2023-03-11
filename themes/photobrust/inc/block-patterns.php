<?php
/**
 * Block Patterns
 *
 * @package PhotoBrust_Pro
 * @since 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since 1.0
 *
 * @return void
 */
function photobrust_register_block_patterns() {
	$block_pattern_categories = array(
		'photobrust' => array( 'label' => esc_html__( 'PhotoBrust', 'photobrust' ) ),
		'pages'     => array( 'label' => esc_html__( 'Pages', 'photobrust' ) ),
		/* 'footer'   => array( 'label' => esc_html__( 'Footers', 'photobrust' ) ),
		'header'   => array( 'label' => esc_html__( 'Headers', 'photobrust' ) ),
		'query'    => array( 'label' => esc_html__( 'Query', 'photobrust' ) ), */
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
	$block_pattern_categories = apply_filters( 'photobrust_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
	
	$block_patterns = array(
		'404-header',
		'hero-content',
		'archive-header',
		'blog-header',
		'featured-content',
		'footer-default',
		'footer-three-columns',
		'header-default',
		'header-transparent',
		'header-media',
		'hidden-404',
		'hidden-404-without-title',
		'post-header',
		'post-header-with-img-bg',
		'recent-blog-with-sidebar',
		'search-header',
		'stats-four-columns',
		'sidebar',
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'photobrust_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_parent_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'photobrust/' . $block_pattern,
			require $pattern_file
		); // register_block_pattern( string $pattern_name, array $pattern_properties ).
	}
}
add_action( 'init', 'photobrust_register_block_patterns', 9 );
