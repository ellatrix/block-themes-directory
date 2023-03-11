<?php
/**
 * Block Pattern Class
 *
 * @author Jegstudio
 * @package hypebiz
 * @since 1.0.0
 */

namespace Hypebiz;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WP_Block_Pattern_Categories_Registry;

/**
 * Init Class
 *
 * @package hypebiz
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
			'hypebiz-basic' => array( 'label' => __( 'Hypebiz Basic Patterns', 'hypebiz' ) ),
		);

		if ( defined( 'GUTENVERSE' ) ) {
			$block_pattern_categories['hypebiz-gutenverse'] = array( 'label' => __( 'Hypebiz Gutenverse Patterns', 'hypebiz' ) );
		}

		$block_pattern_categories = apply_filters( 'hypebiz_block_pattern_categories', $block_pattern_categories );

		foreach ( $block_pattern_categories as $name => $properties ) {
			if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
				register_block_pattern_category( $name, $properties );
			}
		}

		$block_patterns = array(
			'core-footer',
			'core-header',
			'core-404-hero',
			'core-archive-hero',
			'core-home-hero',
			'core-home-section-1',
			'core-home-section-2',
			'core-home-section-3',
			'core-home-section-4',
			'core-home-section-5',
			'core-home-section-6',
			'core-home-section-7',
			'core-home-section-8',
			'core-home-section-9',
			'core-index-hero',
			'core-index-section-1',
			'core-page-hero',
			'core-search-hero',
			'core-single-hero',
		);

		if ( defined( 'GUTENVERSE' ) ) {
			$block_patterns[] = 'gutenverse-about-section-1';
			$block_patterns[] = 'gutenverse-about-section-2';
			$block_patterns[] = 'gutenverse-about-hero';
			$block_patterns[] = 'gutenverse-about-section-1';
			$block_patterns[] = 'gutenverse-about-section-2';
			$block_patterns[] = 'gutenverse-about-section-3';
			$block_patterns[] = 'gutenverse-about-section-4';
			$block_patterns[] = 'gutenverse-about-section-5';
			$block_patterns[] = 'gutenverse-about-section-6';
			$block_patterns[] = 'gutenverse-about-section-7';
			$block_patterns[] = 'gutenverse-about-section-8';
			$block_patterns[] = 'gutenverse-blog-hero';
			$block_patterns[] = 'gutenverse-blog-section-1';
			$block_patterns[] = 'gutenverse-blog-section-2';
			$block_patterns[] = 'gutenverse-contact-hero';
			$block_patterns[] = 'gutenverse-contact-section-1';
			$block_patterns[] = 'gutenverse-contact-section-2';
			$block_patterns[] = 'gutenverse-footer';
			$block_patterns[] = 'gutenverse-header';
			$block_patterns[] = 'gutenverse-home-hero';
			$block_patterns[] = 'gutenverse-home-section-1';
			$block_patterns[] = 'gutenverse-home-section-2';
			$block_patterns[] = 'gutenverse-home-section-3';
			$block_patterns[] = 'gutenverse-home-section-4';
			$block_patterns[] = 'gutenverse-home-section-5';
			$block_patterns[] = 'gutenverse-home-section-6';
			$block_patterns[] = 'gutenverse-home-section-7';
			$block_patterns[] = 'gutenverse-home-section-8';
			$block_patterns[] = 'gutenverse-home-section-9';
			$block_patterns[] = 'gutenverse-services-hero';
			$block_patterns[] = 'gutenverse-services-section-1';
			$block_patterns[] = 'gutenverse-services-section-2';
			$block_patterns[] = 'gutenverse-services-section-3';
			$block_patterns[] = 'gutenverse-services-section-4';
			$block_patterns[] = 'gutenverse-services-section-5';
			$block_patterns[] = 'gutenverse-services-section-6';
			$block_patterns[] = 'gutenverse-single-post-hero';
			$block_patterns[] = 'gutenverse-single-post-section-1';
			$block_patterns[] = 'gutenverse-single-post-section-2';
			$block_patterns[] = 'gutenverse-404-hero';
			$block_patterns[] = 'gutenverse-archive-hero';
			$block_patterns[] = 'gutenverse-archive-section-1';
			$block_patterns[] = 'gutenverse-index-hero';
			$block_patterns[] = 'gutenverse-index-section-1';
			$block_patterns[] = 'gutenverse-index-section-3';
			$block_patterns[] = 'gutenverse-page-hero';
			$block_patterns[] = 'gutenverse-page-section-1';
			$block_patterns[] = 'gutenverse-search-hero';
			$block_patterns[] = 'gutenverse-search-section-1';
			$block_patterns[] = 'gutenverse-search-section-2';
		}

		$block_patterns = apply_filters( 'hypebiz_block_patterns', $block_patterns );

		if ( function_exists( 'register_block_pattern' ) ) {
			foreach ( $block_patterns as $block_pattern ) {
				$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

				register_block_pattern(
					'hypebiz/' . $block_pattern,
					require $pattern_file
				);
			}
		}
	}
}
