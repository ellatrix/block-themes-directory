<?php
/**
 * Block Pattern Class
 *
 * @author Jegstudio
 * @package restance
 * @since 1.0.0
 */

namespace Restance;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WP_Block_Pattern_Categories_Registry;

/**
 * Init Class
 *
 * @package restance
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
			'restance-basic' => array( 'label' => __( 'Restance Basic Patterns', 'restance' ) ),
		);

		if ( defined( 'GUTENVERSE' ) ) {
			$block_pattern_categories['restance-gutenverse'] = array( 'label' => __( 'Restance Gutenverse Patterns', 'restance' ) );
		}

		$block_pattern_categories = apply_filters( 'restance_block_pattern_categories', $block_pattern_categories );

		foreach ( $block_pattern_categories as $name => $properties ) {
			if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
				register_block_pattern_category( $name, $properties );
			}
		}

		$block_patterns = array(
			'core-404-hero',
			'core-archive-hero',
			'core-footer',
			'core-footer-2',
			'core-header',
			'core-home-about',
			'core-home-benefits',
			'core-home-client-logo',
			'core-home-commitment',
			'core-home-featured',
			'core-home-hero',
			'core-home-cta',
			'core-home-blog',
			'core-home-testimonial',
			'core-index-hero',
			'core-page-hero',
			'core-search-hero',
			'core-single-post-hero',
		);

		if ( defined( 'GUTENVERSE' ) ) {
			$block_patterns[] = 'gutenverse-about-cta';
			$block_patterns[] = 'gutenverse-about-featured';
			$block_patterns[] = 'gutenverse-about-funfact';
			$block_patterns[] = 'gutenverse-about-hero';
			$block_patterns[] = 'gutenverse-about-team';
			$block_patterns[] = 'gutenverse-about-us';
			$block_patterns[] = 'gutenverse-contact-hero';
			$block_patterns[] = 'gutenverse-contact-us';
			$block_patterns[] = 'gutenverse-faq-benefits';
			$block_patterns[] = 'gutenverse-faq-blog';
			$block_patterns[] = 'gutenverse-faq-hero';
			$block_patterns[] = 'gutenverse-faq-payment-question';
			$block_patterns[] = 'gutenverse-faq-popular-question';
			$block_patterns[] = 'gutenverse-footer';
			$block_patterns[] = 'gutenverse-header';
			$block_patterns[] = 'gutenverse-home-about';
			$block_patterns[] = 'gutenverse-home-benefits';
			$block_patterns[] = 'gutenverse-home-blog';
			$block_patterns[] = 'gutenverse-home-cta';
			$block_patterns[] = 'gutenverse-home-featured-2';
			$block_patterns[] = 'gutenverse-home-featured';
			$block_patterns[] = 'gutenverse-home-hero';
			$block_patterns[] = 'gutenverse-home-logo-client';
			$block_patterns[] = 'gutenverse-home-testimonials';
			$block_patterns[] = 'gutenverse-news-featured';
			$block_patterns[] = 'gutenverse-news-hero';
			$block_patterns[] = 'gutenverse-property-detail-description';
			$block_patterns[] = 'gutenverse-property-detail-featured';
			$block_patterns[] = 'gutenverse-property-detail-hero';
			$block_patterns[] = 'gutenverse-property-list-featured-2';
			$block_patterns[] = 'gutenverse-property-list-featured';
			$block_patterns[] = 'gutenverse-property-list-hero';
			$block_patterns[] = 'gutenverse-services-benefits';
			$block_patterns[] = 'gutenverse-services-featured';
			$block_patterns[] = 'gutenverse-services-funfact';
			$block_patterns[] = 'gutenverse-services-hero';
			$block_patterns[] = 'gutenverse-services-testimonial';
			$block_patterns[] = 'gutenverse-single-post-content';
			$block_patterns[] = 'gutenverse-single-post-hero';
			$block_patterns[] = 'gutenverse-404-hero';
			$block_patterns[] = 'gutenverse-archive-hero';
			$block_patterns[] = 'gutenverse-footer-3';
			$block_patterns[] = 'gutenverse-index-hero';
			$block_patterns[] = 'gutenverse-page-hero';
			$block_patterns[] = 'gutenverse-search-hero';
		}

		$block_patterns = apply_filters( 'restance_block_patterns', $block_patterns );

		if ( function_exists( 'register_block_pattern' ) ) {
			foreach ( $block_patterns as $block_pattern ) {
				$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

				register_block_pattern(
					'restance/' . $block_pattern,
					require $pattern_file
				);
			}
		}
	}
}
