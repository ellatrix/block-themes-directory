<?php
/**
 * Block Pattern Class
 *
 * @author Jegstudio
 * @package accountra
 * @since 1.0.0
 */

namespace Accountra;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WP_Block_Pattern_Categories_Registry;

/**
 * Init Class
 *
 * @package accountra
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
			'accountra-basic' => array( 'label' => __( 'Accountra Basic Patterns', 'accountra' ) ),
		);

		if ( defined( 'GUTENVERSE' ) ) {
			$block_pattern_categories['accountra-gutenverse'] = array( 'label' => __( 'Accountra Gutenverse Patterns', 'accountra' ) );
		}

		$block_pattern_categories = apply_filters( 'accountra_block_pattern_categories', $block_pattern_categories );

		foreach ( $block_pattern_categories as $name => $properties ) {
			if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
				register_block_pattern_category( $name, $properties );
			}
		}

		$block_patterns = array(
			'core-404',
			'core-footer',
			'core-header',
			'core-home-about',
			'core-home-background-cases-studies',
			'core-home-cases-studies',
			'core-home-clients-feedback',
			'core-home-cta',
			'core-home-fun-fact',
			'core-home-hero',
			'core-home-service',
			'core-page-title',
			'core-single-post-title',
			'core-archive-hero-title',
			'core-index-hero-title',
			'core-search-hero-title',
		);

		if ( defined( 'GUTENVERSE' ) ) {
			$block_patterns[] = 'gutenverse-about-about';
			$block_patterns[] = 'gutenverse-about-cta';
			$block_patterns[] = 'gutenverse-about-team';
			$block_patterns[] = 'gutenverse-about-title';
			$block_patterns[] = 'gutenverse-about-work';
			$block_patterns[] = 'gutenverse-blog-title';
			$block_patterns[] = 'gutenverse-cases-blog';
			$block_patterns[] = 'gutenverse-cases-cases-studies';
			$block_patterns[] = 'gutenverse-cases-cta';
			$block_patterns[] = 'gutenverse-cases-title';
			$block_patterns[] = 'gutenverse-contact-title';
			$block_patterns[] = 'gutenverse-faq-cta';
			$block_patterns[] = 'gutenverse-faq-title';
			$block_patterns[] = 'gutenverse-footer';
			$block_patterns[] = 'gutenverse-header';
			$block_patterns[] = 'gutenverse-home-about';
			$block_patterns[] = 'gutenverse-home-blog';
			$block_patterns[] = 'gutenverse-home-case-studies';
			$block_patterns[] = 'gutenverse-home-clients-feedback';
			$block_patterns[] = 'gutenverse-home-cta';
			$block_patterns[] = 'gutenverse-home-hero';
			$block_patterns[] = 'gutenverse-pricing-clients-feedback';
			$block_patterns[] = 'gutenverse-pricing-faq';
			$block_patterns[] = 'gutenverse-pricing-title';
			$block_patterns[] = 'gutenverse-services-clients-feedback';
			$block_patterns[] = 'gutenverse-services-cta';
			$block_patterns[] = 'gutenverse-services-faq';
			$block_patterns[] = 'gutenverse-services-title';
			$block_patterns[] = 'gutenverse-services-work';
			$block_patterns[] = 'gutenverse-single-post-title';
			$block_patterns[] = 'gutenverse-404-hero';
			$block_patterns[] = 'gutenverse-archive-posts';
			$block_patterns[] = 'gutenverse-archive-title';
			$block_patterns[] = 'gutenverse-index-posts';
			$block_patterns[] = 'gutenverse-index-title';
			$block_patterns[] = 'gutenverse-page-posts';
			$block_patterns[] = 'gutenverse-page-title';
			$block_patterns[] = 'gutenverse-search-posts';
			$block_patterns[] = 'gutenverse-search-search';
			$block_patterns[] = 'gutenverse-search-title';
		}

		$block_patterns = apply_filters( 'accountra_block_patterns', $block_patterns );

		if ( function_exists( 'register_block_pattern' ) ) {
			foreach ( $block_patterns as $block_pattern ) {
				$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

				register_block_pattern(
					'accountra/' . $block_pattern,
					require $pattern_file
				);
			}
		}
	}
}
