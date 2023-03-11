<?php
/**
 * Block Patterns Class
 *
 * @package blockette
 * @since 1.0.0
 */

namespace Blockette;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Pattern Class
 *
 * @package blockette
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
	 * Register Block Pattern Categories
	 *
	 * @return void
	 */
	public static function register_categories() {

		$categories = array(
			'blockette-featured' => array( 'label' => __( 'Blockette featured', 'blockette' ) ),
			'blockette-duotones' => array( 'label' => __( 'Blockette duotones', 'blockette' ) ),
			'blockette-hero'     => array( 'label' => __( 'Blockette heros', 'blockette' ) ),
			'blockette-shop'     => array( 'label' => __( 'Blockette shop', 'blockette' ) ),
			'blockette-sections' => array( 'label' => __( 'Blockette sections', 'blockette' ) ),
			'blockette-header'   => array( 'label' => __( 'Blockette header', 'blockette' ) ),
			'blockette-footer'   => array( 'label' => __( 'Blockette footer', 'blockette' ) ),
			'blockette-query'    => array( 'label' => __( 'Blockette query', 'blockette' ) ),
		);
		foreach ( $categories as $cat_slug => $properties ) {
			if ( ! \WP_Block_Patterns_Registry::get_instance()->is_registered( $cat_slug ) ) {
				register_block_pattern_category( $cat_slug, $properties );
			}
		}

	}

	/**
	 * Register patterns if WooCommerce is active.
	 *
	 * @return void
	 */
	public static function register_patterns() {

		if ( defined( 'WC_PLUGIN_FILE' ) ) {

			$block_patterns = array(
				'woocommerce-featured-categories',
			);
			// Register block patterns.
			foreach ( $block_patterns as $block_pattern ) {
				$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

				register_block_pattern(
					'blockette/' . $block_pattern,
					require $pattern_file
				);
			}
		}
	}

	/**
	 * Display the search term in the heading on the search page.
	 * Todo: Remove when the query title block is updated to work for the search page.
	 *
	 * @since 1.0.0
	 *
	 * @return string|boolean Search page title
	 */
	public static function search_title() {
		$return = false;
		if ( isset( $_GET['s'] ) ) { // phpcs:ignore WordPress.Security.NonceVerification
			$search_term = sanitize_text_field( wp_unslash( $_GET['s'] ) ); // phpcs:ignore WordPress.Security.NonceVerification
			/* translators: %s: Search term. */
			$return = isset( $search_term ) ? sprintf( esc_html__( 'Search results for "%s"', 'blockette' ), esc_html( $search_term ) ) : __( 'Search results', 'blockette' );
		}
		return $return;
	}

	/**
	 * Display a link to the privacy policy page, if one is published.
	 *
	 * @since 1.0.0
	 *
	 * @return string|boolean Link to the privacy policy page, if one is published.
	 */
	public static function privacy() {
		$return = get_the_privacy_policy_link() ? get_the_privacy_policy_link() : false;
		return $return;
	}

}
