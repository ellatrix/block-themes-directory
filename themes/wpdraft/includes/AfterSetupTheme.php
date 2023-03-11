<?php
/**
 *
 * Add theme support.
 *
 * @package DraftTheme
 */

namespace DraftTheme;

/**
 * Add theme support.
 *  
 * @since 1.0.0
 */
class AfterSetupTheme {

	/**
	 * Register class with appropriate WordPress hooks
	 */
	public static function register() {
		$instance = new self();
		add_action( 'after_setup_theme', array( $instance, 'after_setup_theme' ) );
	}

	/**
	 * Enqueue styles.
	 *
	 * @return void
	 */
	public function after_setup_theme() {
		// Make theme available for translation.
		load_theme_textdomain( 'wpdraft', get_template_directory() . '/languages' );
		esc_html__( 'Translated String', 'wpdraft' );

		// Adding support for featured images.
		add_theme_support( 'post-thumbnails' );

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Adding support for full navigation menu functionality.
		add_theme_support( 'block-nav-menus' );
	}
}
