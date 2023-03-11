<?php
/**
 * Block Pattern Class
 *
 * @author Jegstudio
 * @package zeever
 * @since 1.0.0
 */

namespace Zeever;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WP_Block_Pattern_Categories_Registry;

/**
 * Block Pattern Class
 *
 * @package zeever
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
			'zeever-basic' => array( 'label' => __( 'Zeever Basic Patterns', 'zeever' ) ),
		);

		if ( defined( 'GUTENVERSE' ) ) {
			$block_pattern_categories['zeever-gutenverse'] = array( 'label' => __( 'Zeever Gutenverse Patterns', 'zeever' ) );
		}

		$block_pattern_categories = apply_filters( 'zeever_block_pattern_categories', $block_pattern_categories );

		foreach ( $block_pattern_categories as $name => $properties ) {
			if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
				register_block_pattern_category( $name, $properties );
			}
		}

		$block_patterns = array(
			'404',
			'index-hero',
			'index-section',
			'services',
			'works',
			'about',
			'testimonials',
			'cta',
			'single-title',
			'page-title',
			'hero-title-archive',
			'hero-title-index',
			'hero-title-search',
		);

		if ( defined( 'GUTENVERSE' ) ) {
			$block_patterns[] = 'gutenverse-header';
			$block_patterns[] = 'gutenverse-footer';
			$block_patterns[] = 'gutenverse-footer-2';
			$block_patterns[] = 'gutenverse-about-title';
			$block_patterns[] = 'gutenverse-about-featured';
			$block_patterns[] = 'gutenverse-about';
			$block_patterns[] = 'gutenverse-best-solutions';
			$block_patterns[] = 'gutenverse-blog-title';
			$block_patterns[] = 'gutenverse-contact-title';
			$block_patterns[] = 'gutenverse-contact-detail';
			$block_patterns[] = 'gutenverse-faq';
			$block_patterns[] = 'gutenverse-gallery-projects';
			$block_patterns[] = 'gutenverse-gallery-projects-2';
			$block_patterns[] = 'gutenverse-hero';
			$block_patterns[] = 'gutenverse-our-skills';
			$block_patterns[] = 'gutenverse-projects-title';
			$block_patterns[] = 'gutenverse-services-title';
			$block_patterns[] = 'gutenverse-services-detail';
			$block_patterns[] = 'gutenverse-team';
			$block_patterns[] = 'gutenverse-single-title';
			$block_patterns[] = 'gutenverse-testimonials';
			$block_patterns[] = 'gutenverse-hero-404';
			$block_patterns[] = 'gutenverse-hero-archive';
			$block_patterns[] = 'gutenverse-hero-index';
			$block_patterns[] = 'gutenverse-hero-page';
			$block_patterns[] = 'gutenverse-hero-search';
			$block_patterns[] = 'gutenverse-home-featured';
			$block_patterns[] = 'gutenverse-home-projects';
			$block_patterns[] = 'gutenverse-home-services';
		}

		$block_patterns = apply_filters( 'zeever_block_patterns', $block_patterns );

		if ( function_exists( 'register_block_pattern' ) ) {
			foreach ( $block_patterns as $block_pattern ) {
				$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

				register_block_pattern(
					'zeever/' . $block_pattern,
					require $pattern_file
				);
			}
		}
	}
}
