<?php
/**
 * Block Pattern Class
 *
 * @author Jegstudio
 * @package vorfolio
 * @since 1.0.0
 */

namespace Vorfolio;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WP_Block_Pattern_Categories_Registry;

/**
 * Init Class
 *
 * @package vorfolio
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
			'vorfolio-basic' => array( 'label' => __( 'Vorfolio Basic Patterns', 'vorfolio' ) ),
		);

		if ( defined( 'GUTENVERSE' ) ) {
			$block_pattern_categories['vorfolio-gutenverse'] = array( 'label' => __( 'Vorfolio Gutenverse Patterns', 'vorfolio' ) );
		}

		$block_pattern_categories = apply_filters( 'vorfolio_block_pattern_categories', $block_pattern_categories );

		foreach ( $block_pattern_categories as $name => $properties ) {
			if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
				register_block_pattern_category( $name, $properties );
			}
		}

		$block_patterns = array(
			'core-home-hero',
			'core-home-experience',
			'core-home-projects',
			'core-home-about',
			'core-home-cta',
			'core-home-services',
			'core-home-testimonials',
			'core-home-blog',
			'core-home-client-logo',
			'core-404-hero',
			'core-archive-hero',
			'core-index-hero',
			'core-page-hero',
			'core-search-hero',
			'core-single-post-hero',
			'core-footer',
			'core-header',
		);

		if ( defined( 'GUTENVERSE' ) ) {
			$block_patterns[] = 'gutenverse-404-hero';
			$block_patterns[] = 'gutenverse-about-about-me';
			$block_patterns[] = 'gutenverse-about-cta';
			$block_patterns[] = 'gutenverse-about-experience';
			$block_patterns[] = 'gutenverse-about-hero';
			$block_patterns[] = 'gutenverse-about-team';
			$block_patterns[] = 'gutenverse-about-testimonials';
			$block_patterns[] = 'gutenverse-archive-hero';
			$block_patterns[] = 'gutenverse-blog-blog';
			$block_patterns[] = 'gutenverse-blog-hero';
			$block_patterns[] = 'gutenverse-contact-form-section';
			$block_patterns[] = 'gutenverse-contact-hero';
			$block_patterns[] = 'gutenverse-faq-cta';
			$block_patterns[] = 'gutenverse-faq-faq';
			$block_patterns[] = 'gutenverse-faq-hero';
			$block_patterns[] = 'gutenverse-faq-testimonials';
			$block_patterns[] = 'gutenverse-footer';
			$block_patterns[] = 'gutenverse-header';
			$block_patterns[] = 'gutenverse-home-about';
			$block_patterns[] = 'gutenverse-home-blog';
			$block_patterns[] = 'gutenverse-home-client-logo';
			$block_patterns[] = 'gutenverse-home-cta';
			$block_patterns[] = 'gutenverse-home-experience';
			$block_patterns[] = 'gutenverse-home-hero';
			$block_patterns[] = 'gutenverse-home-projects';
			$block_patterns[] = 'gutenverse-home-services';
			$block_patterns[] = 'gutenverse-home-testimonials';
			$block_patterns[] = 'gutenverse-index-hero';
			$block_patterns[] = 'gutenverse-page-hero';
			$block_patterns[] = 'gutenverse-pricing-faq';
			$block_patterns[] = 'gutenverse-pricing-cta';
			$block_patterns[] = 'gutenverse-pricing-hero';
			$block_patterns[] = 'gutenverse-pricing-pricing';
			$block_patterns[] = 'gutenverse-project-details-cta';
			$block_patterns[] = 'gutenverse-project-details-hero';
			$block_patterns[] = 'gutenverse-project-details-project-details';
			$block_patterns[] = 'gutenverse-project-details-projects-2';
			$block_patterns[] = 'gutenverse-projects-experience';
			$block_patterns[] = 'gutenverse-projects-faq';
			$block_patterns[] = 'gutenverse-projects-hero';
			$block_patterns[] = 'gutenverse-projects-projects';
			$block_patterns[] = 'gutenverse-search-hero';
			$block_patterns[] = 'gutenverse-services-cta';
			$block_patterns[] = 'gutenverse-services-hero';
			$block_patterns[] = 'gutenverse-services-pricing';
			$block_patterns[] = 'gutenverse-services-projects';
			$block_patterns[] = 'gutenverse-services-services';
			$block_patterns[] = 'gutenverse-single-post-content';
			$block_patterns[] = 'gutenverse-single-post-hero';
			$block_patterns[] = 'gutenverse-team-blog';
			$block_patterns[] = 'gutenverse-team-experience';
			$block_patterns[] = 'gutenverse-team-hero';
			$block_patterns[] = 'gutenverse-team-team';
		}

		$block_patterns = apply_filters( 'vorfolio_block_patterns', $block_patterns );

		if ( function_exists( 'register_block_pattern' ) ) {
			foreach ( $block_patterns as $block_pattern ) {
				$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

				register_block_pattern(
					'vorfolio/' . $block_pattern,
					require $pattern_file
				);
			}
		}
	}
}
