<?php

/**
 * Sicily: Block Patterns
 *
 * @since Sicily 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Sicily 1.0
 *
 * @return void
 */
function sicily_register_block_patterns() {
	$block_pattern_categories = array(
		'theme'    => array( 'label' => __( 'Sicily Theme', 'sicily' ) ),
		'featured' => array( 'label' => __( 'Featured', 'sicily' ) ),
        'header'   => array( 'label' => __( 'Headers', 'sicily' ) ),
		'footer'   => array( 'label' => __( 'Footers', 'sicily' ) ),
		'posts'    => array( 'label' => __( 'Pages', 'sicily' ) ),
		'pages'    => array( 'label' => __( 'Pages', 'sicily' ) ),
		'widgets'  => array( 'label' => __( 'Widgets', 'sicily' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Sicily 1.0
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
	$block_pattern_categories = apply_filters( 'sicily_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
	    'footer-default',
        'footer-alternative-logo',

		'header-logo-only-with-background',
		'header-logo-title-with-background',
		
		'general-about',
		'general-call-to-action',
		'general-call-to-action-large',
		'general-call-to-action-three-columns',
		'general-hidden-404',
		'general-join-club',
		'general-membership-benefits',
		'general-membership-call-to-action',
		'general-call-to-action',
		'general-product-features',
		'general-video-header-details',
		'general-video-text',

        'query-styled-post-list',
		'query-post-list',

		'widget-calendar-panel',
		'widget-categories-panel',
		'widget-recent-comments-panel',
		'widget-recent-posts-panel',
		'widget-search-panel',
		'widget-social-media-panel',
		'widget-tag-cloud-panel',
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Sicily 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'sicily_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'sicily/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'sicily_register_block_patterns', 9 );
