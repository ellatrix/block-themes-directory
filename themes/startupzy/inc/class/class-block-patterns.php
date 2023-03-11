<?php
/**
 * Block Pattern Class
 *
 * @author Jegstudio
 * @package startupzy
 * @since 1.0.0
 */

namespace Startupzy;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WP_Block_Pattern_Categories_Registry;

/**
 * Block Pattern Class
 *
 * @package startupzy
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
			'startupzy-basic' => array( 'label' => __( 'Startupzy Basic Patterns', 'startupzy' ) ),
		);

		if ( defined( 'GUTENVERSE' ) ) {
			$block_pattern_categories['startupzy-gutenverse'] = array( 'label' => __( 'Startupzy Gutenverse Patterns', 'startupzy' ) );
		}

		$block_pattern_categories = apply_filters( 'startupzy_block_pattern_categories', $block_pattern_categories );

		foreach ( $block_pattern_categories as $name => $properties ) {
			if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
				register_block_pattern_category( $name, $properties );
			}
		}

		$block_patterns = array(
			'404',
			'home-pricing',
			'archive-hero-title',
			'index-hero-title',
			'search-hero-title',
			'post-title',
			'single-post-title',
			'section-1-hero',
			'section-2-about',
			'feature',
			'testimonial',
		);

		if ( defined( 'GUTENVERSE' ) ) {
			$block_patterns[] = 'gutenverse-header';
			$block_patterns[] = 'gutenverse-footer';
			$block_patterns[] = 'gutenverse-home-feature';
			$block_patterns[] = 'gutenverse-home-pricing';
			$block_patterns[] = 'gutenverse-home-service';
			$block_patterns[] = 'gutenverse-hero';
			$block_patterns[] = 'gutenverse-testimonial';
			$block_patterns[] = 'gutenverse-team';
			$block_patterns[] = 'gutenverse-cta';
			$block_patterns[] = 'gutenverse-about-title';
			$block_patterns[] = 'gutenverse-about';
			$block_patterns[] = 'gutenverse-blog-title';
			$block_patterns[] = 'gutenverse-contact-title';
			$block_patterns[] = 'gutenverse-service-title';
			$block_patterns[] = 'gutenverse-single-title';
			$block_patterns[] = 'gutenverse-faq-title';
			$block_patterns[] = 'gutenverse-faq';
			$block_patterns[] = 'gutenverse-404-hero';
			$block_patterns[] = 'gutenverse-archive-hero';
			$block_patterns[] = 'gutenverse-index-hero';
			$block_patterns[] = 'gutenverse-page-hero';
			$block_patterns[] = 'gutenverse-search-hero';
		}

		$block_patterns = apply_filters( 'startupzy_block_patterns', $block_patterns );

		if ( function_exists( 'register_block_pattern' ) ) {
			foreach ( $block_patterns as $block_pattern ) {
				$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

				register_block_pattern(
					'startupzy/' . $block_pattern,
					require $pattern_file
				);
			}
		}
	}
}
