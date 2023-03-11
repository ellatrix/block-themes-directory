<?php
/**
 * Allele: Block Patterns
 *
 * @package WordPress
 * @subpackage Allele
 * @since Allele 1.0.0
 */

/**
 * Site Info
 *
 * @since Allele 1.0.0
 *
 * @return string
 */

function allele_site_info() {
  return sprintf( '%1$s %2$s <a href="%3$s">%4$s</a>. %5$s',
    esc_html__( '&copy;', 'allele' ),
    esc_html( date_i18n( __( 'Y', 'allele' ) ) ),
    esc_url( home_url( '/' ) ),
    esc_html( get_bloginfo( 'name' ) ),
    esc_html__( 'All rights reserved.', 'allele' )
  );
}

/**
 * Theme Info
 *
 * @since Allele 1.0.0
 *
 * @return string
 */

function allele_theme_info() {
  return sprintf( '<a href="%1$s" target="_blank" rel="noreferrer noopener">%2$s</a> &sdot; %3$s <a href="%4$s" target="_blank" rel="noreferrer noopener">%5$s</a>',
		esc_url( 'https://designorbital.com/allele/' ),
    esc_html__( 'Allele Theme', 'allele' ),
    esc_html__( 'Powered by', 'allele' ),
    esc_url( __( 'https://wordpress.org/', 'allele' ) ),
		esc_html__( 'WordPress', 'allele' )
	);
}

/**
 * Registers block patterns and categories.
 *
 * @since Allele 1.0.0
 */
function allele_register_block_patterns() {
  // Block Pattern Categories
	$block_pattern_categories = array(
    'allele-general'      => array( 'label' => __( 'Allele General', 'allele' ) ),
    'allele-projects'     => array( 'label' => __( 'Allele Projects', 'allele' ) ),
    'allele-headers'      => array( 'label' => __( 'Allele Headers', 'allele' ) ),
		'allele-footers'      => array( 'label' => __( 'Allele Footers', 'allele' ) ),
    'allele-query'        => array( 'label' => __( 'Allele Query', 'allele' ) ),
    'allele-pages'        => array( 'label' => __( 'Allele Pages', 'allele' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Allele 1.0.0
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
	$block_pattern_categories = apply_filters( 'allele_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
    if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

  // Block Patterns
	$block_patterns = array(
		'header-default',
		'footer-default',
    'featured-post',
    'query-default',
    'featured-projects',
    'focus-box',
    'highlight-box',
    'highlight-box-3',
    'highlight-box-4',
    'promo-box',
    'promo-box-4',
    'page-about-us',
    'page-agency',
    'page-contact-us',
    'hidden-query',
    'hidden-404',
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Allele 1.0.0
   *
   * @param array $block_patterns List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'allele_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
    $pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'allele/' . $block_pattern,
      require $pattern_file // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
		);
	}
}
add_action( 'init', 'allele_register_block_patterns', 9 );
