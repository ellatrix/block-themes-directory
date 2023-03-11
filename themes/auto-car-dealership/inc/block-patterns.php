<?php
/**
 * Auto Car Dealership: Block Patterns
 *
 * @since Auto Car Dealership 1.0
 */

 /**
  * Get patterns content.
  *
  * @param string $file_name Filename.
  * @return string
  */
function auto_car_dealership_get_pattern_content( $file_name ) {
	ob_start();
	include get_theme_file_path( '/inc/patterns/' . $file_name . '.php' );
	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}

/**
 * Registers block patterns and categories.
 *
 * @since Auto Car Dealership 1.0
 *
 * @return void
 */
function auto_car_dealership_register_block_patterns() {

	$patterns = array(
		'header-default' => array(
			'title'      => __( 'Default header', 'auto-car-dealership' ),
			'categories' => array( 'auto-car-dealership-headers' ),
			'blockTypes' => array( 'core/template-part/header' ),
		),
		'footer-default' => array(
			'title'      => __( 'Default footer', 'auto-car-dealership' ),
			'categories' => array( 'auto-car-dealership-footers' ),
			'blockTypes' => array( 'core/template-part/footer' ),
		),
		'home-banner' => array(
			'title'      => __( 'Home Banner', 'auto-car-dealership' ),
			'categories' => array( 'auto-car-dealership-banner' ),
		),
		'services-one' => array(
			'title'      => __( 'Service One', 'auto-car-dealership' ),
			'categories' => array( 'auto-car-dealership-services' ),
		),
		'brand-section' => array(
			'title'      => __( 'Brand Section', 'auto-car-dealership' ),
			'categories' => array( 'auto-car-dealership-brand-section' ),
		),
		'featured-cars' => array(
			'title'      => __( 'Featured Cars', 'auto-car-dealership' ),
			'categories' => array( 'auto-car-dealership-featured-cars' ),
		),
		'blog-section' => array(
			'title'      => __( 'Blog Section', 'auto-car-dealership' ),
			'categories' => array( 'auto-car-dealership-blog-section' ),
		),
		'gallery-section' => array(
			'title'      => __( 'Gallery Section', 'auto-car-dealership' ),
			'categories' => array( 'auto-car-dealership-gallery-section' ),
		),
		'primary-sidebar' => array(
			'title'    => __( 'Primary Sidebar', 'auto-car-dealership' ),
			'categories' => array( 'auto-car-dealership-sidebars' ),
		),
		'hidden-404' => array(
			'title'    => __( '404 content', 'auto-car-dealership' ),
			'categories' => array( 'auto-car-dealership-pages' ),
		),
		'post-listing-single-column' => array(
			'title'    => __( 'Post Single Column', 'auto-car-dealership' ),
			'categories' => array( 'auto-car-dealership-query' ),
		),
		'post-listing-two-column' => array(
			'title'    => __( 'Post Two Column', 'auto-car-dealership' ),
			'categories' => array( 'auto-car-dealership-query' ),
		),
		'post-listing-three-column' => array(
			'title'    => __( 'Post Three Column', 'auto-car-dealership' ),
			'categories' => array( 'auto-car-dealership-query' ),
		),
		'post-listing-four-column' => array(
			'title'    => __( 'Post Four Column', 'auto-car-dealership' ),
			'categories' => array( 'auto-car-dealership-query' ),
		),
		'cover-with-post-title' => array(
			'title'    => __( 'Cover With Post Title', 'auto-car-dealership' ),
			'categories' => array( 'auto-car-dealership-banner-sections' ),
		),
		'theme-button' => array(
			'title'    => __( 'Theme Button', 'auto-car-dealership' ),
			'categories' => array( 'auto-car-dealership-theme-button' ),
		),
	);

	$block_pattern_categories = array(
		'auto-car-dealership-headers' => array( 'label' => __( 'Headers', 'auto-car-dealership' ) ),
		'auto-car-dealership-footers' => array( 'label' => __( 'Footers', 'auto-car-dealership' ) ),
		'auto-car-dealership-pages'   => array( 'label' => __( 'Pages', 'auto-car-dealership' ) ),
		'auto-car-dealership-query'   => array( 'label' => __( 'Query', 'auto-car-dealership' ) ),
		'auto-car-dealership-sidebars'   => array( 'label' => __( 'Sidebars', 'auto-car-dealership' ) ),
		'auto-car-dealership-banner'   => array( 'label' => __( 'Banner Sections', 'auto-car-dealership' ) ),
		'auto-car-dealership-services'   => array( 'label' => __( 'Services', 'auto-car-dealership' ) ),
		'auto-car-dealership-brand-section'   => array( 'label' => __( 'Brands Section', 'auto-car-dealership' ) ),
		'auto-car-dealership-featured-cars'   => array( 'label' => __( 'Featured Cars', 'auto-car-dealership' ) ),
		'auto-car-dealership-blog-section'   => array( 'label' => __( 'Blog Section', 'auto-car-dealership' ) ),
		'auto-car-dealership-gallery-section'   => array( 'label' => __( 'Gallery Section', 'auto-car-dealership' ) ),
		'auto-car-dealership-banner-sections'   => array( 'label' => __( 'Page Banner Section', 'auto-car-dealership' ) ),
		'auto-car-dealership-theme-button'   => array( 'label' => __( 'Theme Button', 'auto-car-dealership' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Auto Car Dealership 1.0
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
	$block_pattern_categories = apply_filters( 'auto_car_dealership_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Auto Car Dealership 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$patterns = apply_filters( 'auto_car_dealership_block_patterns', $patterns );

	foreach ( $patterns as $block_pattern => $pattern ) {
		$pattern['content'] = auto_car_dealership_get_pattern_content( $block_pattern );
		register_block_pattern(
			'auto-car-dealership/' . $block_pattern,
			$pattern
		);
	}
}
add_action( 'init', 'auto_car_dealership_register_block_patterns', 9 );
