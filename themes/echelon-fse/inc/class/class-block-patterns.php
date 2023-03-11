<?php
/**
 * Block Pattern Class
 *
 * @author Jegstudio
 * @package echelon-fse
 * @since 1.0.0
 */

namespace Echelon_FSE;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WP_Block_Pattern_Categories_Registry;

/**
 * Init Class
 *
 * @package echelon-fse
 */
class Block_Patterns {

	/**
	 * Instance variable
	 *
	 * @var $instance
	 */
	private static $instance;

	/**
	 * Class instance.
	 *
	 * @return BlockPatterns
	 */
	public static function instance() {
		if ( null === static::$instance ) {
			static::$instance = new static();
		}

		return static::$instance;
	}

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
			'echelon-fse-basic' => array( 'label' => __( 'Echelon FSE Basic Patterns', 'echelon-fse' ) ),
		);

		if ( defined( 'GUTENVERSE' ) ) {
			$block_pattern_categories['echelon-fse-gutenverse'] = array( 'label' => __( 'Echelon FSE Gutenverse Patterns', 'echelon-fse' ) );
		}

		$block_pattern_categories = apply_filters( 'echelon_fse_block_pattern_categories', $block_pattern_categories );

		foreach ( $block_pattern_categories as $name => $properties ) {
			if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
				register_block_pattern_category( $name, $properties );
			}
		}

		$block_patterns = array(
			'core-404-hero',
			'core-archive-hero',
			'core-footer',
			'core-front-page-about',
			'core-front-page-article',
			'core-front-page-cta',
			'core-front-page-feature',
			'core-front-page-fun-fact',
			'core-front-page-hero',
			'core-front-page-logo-clients',
			'core-front-page-service',
			'core-front-page-testimonials',
			'core-header',
			'core-index-hero',
			'core-page-hero',
			'core-search-hero',
			'core-single-post-hero',
		);

		if ( defined( 'GUTENVERSE' ) ) {
			$block_patterns[] = 'gutenverse-404-hero';
			$block_patterns[] = 'gutenverse-about-about';
			$block_patterns[] = 'gutenverse-about-cta';
			$block_patterns[] = 'gutenverse-about-faq';
			$block_patterns[] = 'gutenverse-about-fun-fact';
			$block_patterns[] = 'gutenverse-about-hero';
			$block_patterns[] = 'gutenverse-about-team';
			$block_patterns[] = 'gutenverse-about-vision-mission';
			$block_patterns[] = 'gutenverse-archive-hero';
			$block_patterns[] = 'gutenverse-blog-hero';
			$block_patterns[] = 'gutenverse-blog-post-block';
			$block_patterns[] = 'gutenverse-contact-contact-info';
			$block_patterns[] = 'gutenverse-contact-contact';
			$block_patterns[] = 'gutenverse-contact-hero';
			$block_patterns[] = 'gutenverse-faq-article';
			$block_patterns[] = 'gutenverse-faq-cta';
			$block_patterns[] = 'gutenverse-faq-faq';
			$block_patterns[] = 'gutenverse-faq-hero';
			$block_patterns[] = 'gutenverse-footer';
			$block_patterns[] = 'gutenverse-header';
			$block_patterns[] = 'gutenverse-home-about';
			$block_patterns[] = 'gutenverse-home-article';
			$block_patterns[] = 'gutenverse-home-cta';
			$block_patterns[] = 'gutenverse-home-feature';
			$block_patterns[] = 'gutenverse-home-fun-fact';
			$block_patterns[] = 'gutenverse-home-hero-2';
			$block_patterns[] = 'gutenverse-home-hero';
			$block_patterns[] = 'gutenverse-home-logo-slider';
			$block_patterns[] = 'gutenverse-home-progress-bar';
			$block_patterns[] = 'gutenverse-home-service';
			$block_patterns[] = 'gutenverse-home-testimonial';
			$block_patterns[] = 'gutenverse-index-hero';
			$block_patterns[] = 'gutenverse-page-hero';
			$block_patterns[] = 'gutenverse-search-hero';
			$block_patterns[] = 'gutenverse-service-appointment';
			$block_patterns[] = 'gutenverse-service-hero';
			$block_patterns[] = 'gutenverse-service-pricing';
			$block_patterns[] = 'gutenverse-service-service';
			$block_patterns[] = 'gutenverse-single-post-hero';
		}

		$block_patterns = apply_filters( 'echelon_fse_block_patterns', $block_patterns );

		if ( function_exists( 'register_block_pattern' ) ) {
			foreach ( $block_patterns as $block_pattern ) {
				$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

				register_block_pattern(
					'echelon-fse/' . $block_pattern,
					require $pattern_file
				);
			}
		}
	}
}
