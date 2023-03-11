<?php
/**
 * AploBlocks functions and definitions
 *
 */


if ( ! function_exists( 'aploblocks_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @return void
	 */
	function aploblocks_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}

endif;


add_action( 'after_setup_theme', 'aploblocks_support' );

if ( ! function_exists( 'aploblocks_theme_frontend_support' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @return void
	 */
	function aploblocks_theme_frontend_support() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'aploblocks-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'aploblocks-style' );

		if ( !defined('APLOBLOCKS_PLUGIN_VERSION') ) {
			// Register block-styles
			wp_register_style(
				'aploblocks-block-styles',
				get_template_directory_uri() . '/assets/css/block-styles.css',
				array(),
				$version_string
			);

			// Enqueue block styles
			wp_enqueue_style( 'aploblocks-block-styles' );	

			/* site js*/
			wp_enqueue_script('aplo_js',get_template_directory_uri() . '/assets/js/site.js',array(),$version_string );
		}
	}

endif;

add_action( 'wp_enqueue_scripts', 'aploblocks_theme_frontend_support' );


// Add the block filters that control additional styles to the editor
function aploblocks_theme_editor_support() {

	if ( !defined('APLOBLOCKS_PLUGIN_VERSION') ) {
		wp_enqueue_script(
			'aploblocks-filters',
			get_template_directory_uri() . '/assets/js/index.js',
			['wp-blocks','wp-i18n','wp-element','wp-editor'],
			$version_string
		);
		
		wp_localize_script( 'aplo-block-filters', 'themeDirURI', get_template_directory_uri() ) ;
		
		wp_enqueue_style( 'extensions-css', get_template_directory_uri() . '/assets/css/editor.css',array(),$version_string );

		wp_enqueue_style( 'block-styles-css', get_template_directory_uri() . '/assets/css/block-styles.css',array(),$version_string );

		wp_enqueue_script('aplo_js',get_template_directory_uri() . '/assets/js/site.js',array(),$version_string );

		wp_enqueue_script('aploblocks-block-variations',get_template_directory_uri() . '/include/register-block-variations.js',array( 'wp-blocks' ),$version_string);
	}
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css',array(),$version_string );
}
add_action('enqueue_block_editor_assets', 'aploblocks_theme_editor_support');

//TODO next
// add the filters js to editor
// add the site.js frontend/backend

// Register block styles
require get_template_directory() . '/include/register-block-styles.php';

// Setup block patterns
require get_template_directory() . '/include/register-block-patterns.php';