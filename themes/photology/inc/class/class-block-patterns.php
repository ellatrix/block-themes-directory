<?php
/**
 * Block Pattern Class
 *
 * @author Jegstudio
 * @package photology
 * @since 1.0.0
 */

namespace Photology;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WP_Block_Pattern_Categories_Registry;

/**
 * Block Pattern Class
 *
 * @package photology
 */
class Block_Patterns {
	/**
	 * Class constructor.
	 */
	public function __construct() {
		$this->register_block_patterns();
	}

	/**
	 * Register Block Patterns
	 */
	private function register_block_patterns() {
		$block_pattern_categories = array(
			'photology-basic' => array( 'label' => __( 'Photology Basic Patterns', 'photology' ) ),
		);

		if ( defined( 'GUTENVERSE' ) ) {
			$block_pattern_categories['photology-gutenverse'] = array( 'label' => __( 'Photology Gutenverse Patterns', 'photology' ) );
		}

		$block_pattern_categories = apply_filters( 'photology_block_pattern_categories', $block_pattern_categories );

		foreach ( $block_pattern_categories as $name => $properties ) {
			if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
				register_block_pattern_category( $name, $properties );
			}
		}

		$block_patterns = array(
			'404',
			'post-title',
			'section-1-hero',
			'section-2-gallery',
			'section-3-hero',
			'section-4-gallery',
			'feature',
			'team',
			'testimonial',
			'footer',
			'hero-title-archive',
			'hero-title-index',
			'hero-title-search',
		);

		if ( defined( 'GUTENVERSE' ) ) {
			$block_patterns[] = 'gutenverse-header';
			$block_patterns[] = 'gutenverse-footer';
			$block_patterns[] = 'gutenverse-404-hero';
			$block_patterns[] = 'gutenverse-about-title';
			$block_patterns[] = 'gutenverse-about';
			$block_patterns[] = 'gutenverse-about-cta';
			$block_patterns[] = 'gutenverse-about-funfact';
			$block_patterns[] = 'gutenverse-about-team';
			$block_patterns[] = 'gutenverse-archive-hero';
			$block_patterns[] = 'gutenverse-blog-hero';
			$block_patterns[] = 'gutenverse-benefits';
			$block_patterns[] = 'gutenverse-contact-title';
			$block_patterns[] = 'gutenverse-contact-content';
			$block_patterns[] = 'gutenverse-hero';
			$block_patterns[] = 'gutenverse-front-page-services';
			$block_patterns[] = 'gutenverse-index-hero';
			$block_patterns[] = 'gutenverse-page-hero';
			$block_patterns[] = 'gutenverse-portfolio-grid-title';
			$block_patterns[] = 'gutenverse-portfolio-grid';
			$block_patterns[] = 'gutenverse-portfolio-masonry-title';
			$block_patterns[] = 'gutenverse-portfolio-masonry';
			$block_patterns[] = 'gutenverse-portfolio';
			$block_patterns[] = 'gutenverse-portfolio-2';
			$block_patterns[] = 'gutenverse-search-hero';
			$block_patterns[] = 'gutenverse-service-content';
			$block_patterns[] = 'gutenverse-service-testimonials';
			$block_patterns[] = 'gutenverse-service-title';
			$block_patterns[] = 'gutenverse-single-hero';
			$block_patterns[] = 'gutenverse-single-content';
			$block_patterns[] = 'gutenverse-single-portfolio-title';
			$block_patterns[] = 'gutenverse-single-portfolio';
			$block_patterns[] = 'gutenverse-team';
			$block_patterns[] = 'gutenverse-testimonials';
		}

		$block_patterns = apply_filters( 'photology_block_patterns', $block_patterns );

		if ( function_exists( 'register_block_pattern' ) ) {
			foreach ( $block_patterns as $block_pattern ) {
				$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

				register_block_pattern(
					'photology/' . $block_pattern,
					require $pattern_file
				);
			}
		}
	}
}
