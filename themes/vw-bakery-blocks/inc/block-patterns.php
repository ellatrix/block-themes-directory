<?php
/**
 * VW Bakery Blocks: Block Patterns
 *
 * @since VW Bakery Blocks 1.0
 */

 /**
  * Get patterns content.
  *
  * @param string $file_name Filename.
  * @return string
  */
function vw_bakery_blocks_get_pattern_content( $file_name ) {
	ob_start();
	include get_theme_file_path( '/inc/patterns/' . $file_name . '.php' );
	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}

/**
 * Registers block patterns and categories.
 *
 * @since VW Bakery Blocks 1.0
 *
 * @return void
 */
function vw_bakery_blocks_register_block_patterns() {

	$patterns = array(
		'header-default' => array(
			'title'      => __( 'Default header', 'vw-bakery-blocks' ),
			'categories' => array( 'vw-bakery-blocks-headers' ),
			'blockTypes' => array( 'core/template-part/header' ),
		),
		'footer-default' => array(
			'title'      => __( 'Default footer', 'vw-bakery-blocks' ),
			'categories' => array( 'vw-bakery-blocks-footers' ),
			'blockTypes' => array( 'core/template-part/footer' ),
		),
		'home-banner' => array(
			'title'      => __( 'Home Banner', 'vw-bakery-blocks' ),
			'categories' => array( 'vw-bakery-blocks-banner' ),
		),
		'contact-section' => array(
			'title'      => __( 'Contact Section', 'vw-bakery-blocks' ),
			'categories' => array( 'vw-bakery-blocks-contact-section' ),
		),
		'services-one' => array(
			'title'      => __( 'Service One', 'vw-bakery-blocks' ),
			'categories' => array( 'vw-bakery-blocks-services-one' ),
		),
		'primary-sidebar' => array(
			'title'    => __( 'Primary Sidebar', 'vw-bakery-blocks' ),
			'categories' => array( 'vw-bakery-blocks-sidebars' ),
		),
		'hidden-404' => array(
			'title'    => __( '404 content', 'vw-bakery-blocks' ),
			'categories' => array( 'vw-bakery-blocks-pages' ),
		),
		'post-listing-single-column' => array(
			'title'    => __( 'Post Single Column', 'vw-bakery-blocks' ),
			//'inserter' => false,
			'categories' => array( 'vw-bakery-blocks-query' ),
		),
		'post-listing-two-column' => array(
			'title'    => __( 'Post Two Column', 'vw-bakery-blocks' ),
			//'inserter' => false,
			'categories' => array( 'vw-bakery-blocks-query' ),
		),
		'post-listing-three-column' => array(
			'title'    => __( 'Post Three Column', 'vw-bakery-blocks' ),
			//'inserter' => false,
			'categories' => array( 'vw-bakery-blocks-query' ),
		),
		'post-listing-four-column' => array(
			'title'    => __( 'Post Four Column', 'vw-bakery-blocks' ),
			//'inserter' => false,
			'categories' => array( 'vw-bakery-blocks-query' ),
		),
		'cover-with-post-title' => array(
			'title'    => __( 'Cover With Post Title', 'vw-bakery-blocks' ),
			'categories' => array( 'vw-bakery-blocks-cover-with-post-title' ),
		),
		'theme-button' => array(
			'title'    => __( 'Theme Button', 'vw-bakery-blocks' ),
			'categories' => array( 'vw-bakery-blocks-theme-button' ),
		),
	);

	$block_pattern_categories = array(
		'vw-bakery-blocks-footers' => array( 'label' => __( 'Footers', 'vw-bakery-blocks' ) ),
		'vw-bakery-blocks-headers' => array( 'label' => __( 'Headers', 'vw-bakery-blocks' ) ),
		'vw-bakery-blocks-pages'   => array( 'label' => __( 'Pages', 'vw-bakery-blocks' ) ),
		'vw-bakery-blocks-query'   => array( 'label' => __( 'Query', 'vw-bakery-blocks' ) ),
		'vw-bakery-blocks-sidebars'   => array( 'label' => __( 'Sidebars', 'vw-bakery-blocks' ) ),
		'vw-bakery-blocks-banner'   => array( 'label' => __( 'Banner Sections', 'vw-bakery-blocks' ) ),
		'vw-bakery-blocks-services-one'   => array( 'label' => __( 'Services', 'vw-bakery-blocks' ) ),
		'vw-bakery-blocks-contact-section'   => array( 'label' => __( 'Contact Section', 'vw-bakery-blocks' ) ),
		'vw-bakery-blocks-cover-with-post-title'   => array( 'label' => __( 'Cover With Post Title', 'vw-bakery-blocks' ) ),
		'vw-bakery-blocks-theme-button'   => array( 'label' => __( 'Theme Buttons', 'vw-bakery-blocks' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since VW Bakery Blocks 1.0
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
	$block_pattern_categories = apply_filters( 'vw_bakery_blocks_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	/**
	 * Filters the theme block patterns.
	 *
	 * @since VW Bakery Blocks 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$patterns = apply_filters( 'vw_bakery_blocks_block_patterns', $patterns );

	foreach ( $patterns as $block_pattern => $pattern ) {
		$pattern['content'] = vw_bakery_blocks_get_pattern_content( $block_pattern );
		register_block_pattern(
			'vw-bakery-blocks/' . $block_pattern,
			$pattern
		);
	}
}
add_action( 'init', 'vw_bakery_blocks_register_block_patterns', 9 );
