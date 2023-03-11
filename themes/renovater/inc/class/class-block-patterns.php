<?php
/**
 * Block Pattern Class
 *
 * @author Jegstudio
 * @package renovater
 * @since 1.0.0
 */

namespace Renovater;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WP_Block_Pattern_Categories_Registry;

/**
 * Block Pattern Class
 *
 * @package renovater
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
			'renovater-basic' => array( 'label' => __( 'Renovater Basic Patterns', 'renovater' ) ),
		);

		if ( defined( 'GUTENVERSE' ) ) {
			$block_pattern_categories['renovater-gutenverse'] = array( 'label' => __( 'Renovater Gutenverse Patterns', 'renovater' ) );
		}

		$block_pattern_categories = apply_filters( 'renovater_block_pattern_categories', $block_pattern_categories );

		foreach ( $block_pattern_categories as $name => $properties ) {
			if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
				register_block_pattern_category( $name, $properties );
			}
		}

		$block_patterns = array(
			'core-404',
			'core-footer',
			'core-header',
			'core-index-about',
			'core-index-call-to-action',
			'core-index-client-logo',
			'core-index-fun-fact',
			'core-index-hero',
			'core-index-services',
			'core-index-testimonials',
			'core-index-works',
			'core-page-title',
			'core-single-post-title',
			'core-archive-title',
			'core-search-title',
			'core-index-title',
		);

		if ( defined( 'GUTENVERSE' ) ) {
			$block_patterns[] = 'gutenverse-header';
			$block_patterns[] = 'gutenverse-footer';
			$block_patterns[] = 'gutenverse-about-us-about';
			$block_patterns[] = 'gutenverse-about-us-call-to-action';
			$block_patterns[] = 'gutenverse-about-us-fun-fact';
			$block_patterns[] = 'gutenverse-about-us-team';
			$block_patterns[] = 'gutenverse-about-us-title';
			$block_patterns[] = 'gutenverse-about-us-why-choose-us';
			$block_patterns[] = 'gutenverse-contact-us-hero-title';
			$block_patterns[] = 'gutenverse-contact-us-contact';
			$block_patterns[] = 'gutenverse-faq-call-to-action';
			$block_patterns[] = 'gutenverse-faq-questions';
			$block_patterns[] = 'gutenverse-faq-hero-title';
			$block_patterns[] = 'gutenverse-faq-pricing-plans';
			$block_patterns[] = 'gutenverse-home-about';
			$block_patterns[] = 'gutenverse-home-call-to-action';
			$block_patterns[] = 'gutenverse-home-client-logo';
			$block_patterns[] = 'gutenverse-home-faq';
			$block_patterns[] = 'gutenverse-home-services';
			$block_patterns[] = 'gutenverse-home-fun-fact';
			$block_patterns[] = 'gutenverse-home-hero';
			$block_patterns[] = 'gutenverse-home-testimonials';
			$block_patterns[] = 'gutenverse-home-work';
			$block_patterns[] = 'gutenverse-pricing-fun-fact';
			$block_patterns[] = 'gutenverse-pricing-hero-title';
			$block_patterns[] = 'gutenverse-pricing-pricing-plans';
			$block_patterns[] = 'gutenverse-pricing-testimonials';
			$block_patterns[] = 'gutenverse-services-client-logo';
			$block_patterns[] = 'gutenverse-services-fun-fact';
			$block_patterns[] = 'gutenverse-services-hero-title';
			$block_patterns[] = 'gutenverse-services-work-process';
			$block_patterns[] = 'gutenverse-404-section';
			$block_patterns[] = 'gutenverse-archive-posts';
			$block_patterns[] = 'gutenverse-archive-title';
			$block_patterns[] = 'gutenverse-index-posts-2';
			$block_patterns[] = 'gutenverse-index-posts';
			$block_patterns[] = 'gutenverse-index-title';
			$block_patterns[] = 'gutenverse-page-posts';
			$block_patterns[] = 'gutenverse-page-title';
			$block_patterns[] = 'gutenverse-search-content';
			$block_patterns[] = 'gutenverse-search-posts';
			$block_patterns[] = 'gutenverse-search-title';
			$block_patterns[] = 'gutenverse-single-post-posts';
			$block_patterns[] = 'gutenverse-single-post-title';
		}

		$block_patterns = apply_filters( 'renovater_block_patterns', $block_patterns );

		if ( function_exists( 'register_block_pattern' ) ) {
			foreach ( $block_patterns as $block_pattern ) {
				$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

				register_block_pattern(
					'renovater/' . $block_pattern,
					require $pattern_file
				);
			}
		}
	}
}
