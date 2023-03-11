<?php
/**
 * Gutenify Corporate: Block Patterns
 *
 * @since Gutenify Corporate 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Gutenify Corporate 1.0
 *
 * @return void
 */
function gutenify_corporate_register_block_patterns() {

	$patterns = array(
		'header-default' => array(
			'title'      => __( 'Default header', 'gutenify-corporate' ),
			'categories' => array( 'gutenify-corporate' ),
			'blockTypes' => array( 'core/template-part/header' ),
		),
		'header-two' => array(
			'title'      => __( 'Header Two ', 'gutenify-corporate' ),
			'categories' => array( 'gutenify-corporate' ),
			'blockTypes' => array( 'core/template-part/header' ),
		),
		'footer-default' => array(
			'title'      => __( 'Default footer', 'gutenify-corporate' ),
			'categories' => array( 'gutenify-corporate' ),
			'blockTypes' => array( 'core/template-part/footer' ),
		),
		'home-banner' => array(
			'title'      => __( 'Home Banner', 'gutenify-corporate' ),
			'categories' => array( 'gutenify-corporate-banner' ),
		),
		'call-to-action' => array(
			'title'      => __( 'Call To Action', 'gutenify-corporate' ),
			'categories' => array( 'gutenify-corporate' ),
		),
		'gallery' => array(
			'title'      => __( 'Gallery', 'gutenify-corporate' ),
			'categories' => array( 'gutenify-corporate' ),
		),
		'service-one' => array(
			'title'      => __( 'Service One', 'gutenify-corporate' ),
			'categories' => array( 'gutenify-corporate' ),
		),
		'service-two' => array(
			'title'      => __( 'Service Two', 'gutenify-corporate' ),
			'categories' => array( 'gutenify-corporate' ),
		),
		'case-studies' => array(
			'title'      => __( 'Cases Studies', 'gutenify-corporate' ),
			'categories' => array( 'gutenify-corporate' ),
		),
		'hero-section' => array(
			'title'      => __( 'Hero Section', 'gutenify-corporate' ),
			'categories' => array( 'gutenify-corporate' ),
		),
		'primary-sidebar' => array(
			'title'    => __( 'Primary Sidebar', 'gutenify-corporate' ),
			'categories' => array( 'gutenify-corporate' ),
		),
		'hidden-404' => array(
			'title'    => __( '404 content', 'gutenify-corporate' ),
			'categories' => array( 'gutenify-corporate' ),
		),
		'post-listing-single-column' => array(
			'title'    => __( 'Post Single Column', 'gutenify-corporate' ),
			//'inserter' => false,
			'categories' => array( 'gutenify-corporate' ),
		),
		'post-listing-two-column' => array(
			'title'    => __( 'Post Two Column', 'gutenify-corporate' ),
			//'inserter' => false,
			'categories' => array( 'gutenify-corporate' ),
		),
		'post-listing-three-column' => array(
			'title'    => __( 'Post Three Column', 'gutenify-corporate' ),
			//'inserter' => false,
			'categories' => array( 'gutenify-corporate' ),
		),
		'post-listing-four-column' => array(
			'title'    => __( 'Post Four Column', 'gutenify-corporate' ),
			//'inserter' => false,
			'categories' => array( 'gutenify-corporate' ),
		),
		'comment-section' => array(
			'title'    => __( 'Comment Section', 'gutenify-corporate' ),
			'categories' => array( 'gutenify-corporate' ),
		),
		'cover-with-post-title' => array(
			'title'    => __( 'Cover With Post Title', 'gutenify-corporate' ),
			'categories' => array( 'gutenify-corporate' ),
		),
		'cover-with-archive-title' => array(
			'title'    => __( 'Cover With Archive Title', 'gutenify-corporate' ),
			'categories' => array( 'gutenify-corporate' ),
		),
		'section-title' => array(
			'title'    => __( 'Section Title', 'gutenify-corporate' ),
			'categories' => array( 'gutenify-corporate' ),
		),
	);

	$block_pattern_categories = array(
		'gutenify-corporate' => array( 'label' => __( 'Gutenify Corporate', 'gutenify-corporate' ) )
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Gutenify Corporate 1.0
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
	$block_pattern_categories = apply_filters( 'gutenify_corporate_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'gutenify_corporate_register_block_patterns', 9 );
