<?php
/**
 * Enqueue script and style assets.
 *
 * @package DraftTheme
 */

namespace DraftTheme;

/**
 * Enqueue script and style assets.
 *
 * @since 1.0.0
 */
class EnqueueAssets {

	/**
	 * Register class with appropriate WordPress hooks
	 */
	public static function register() {
		$instance = new self();
		add_action( 'wp_enqueue_scripts', array( $instance, 'enqueue_frontend_assets' ) );
		add_action( 'enqueue_block_editor_assets', array( $instance, 'enqueue_editor_assets' ), 1 );
	}

	/**
	 * Enqueue frontend scripts and styles.
	 *
	 * @return void
	 */
	public function enqueue_frontend_assets() {
		// Enqueue theme stylesheet.
		wp_enqueue_style(
			DRAFT_THEME_SLUG . '-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}

	/**
	 * Enqueue backend scripts and styles.
	 *
	 * @return void
	 */
	public function enqueue_editor_assets() {
		// Enqueue theme stylesheet.
		wp_enqueue_style(
			DRAFT_THEME_SLUG . '-style',
			get_template_directory_uri() . '/style-editor.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
}
