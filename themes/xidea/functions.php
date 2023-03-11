<?php
/**
 * Theme functions and definitions.
 * @author     Xidea
 * @copyright  (c) Copyright by Xidea Themes
 * @link       https://xideathemes.com
 * @package     Xidea Block Theme
 * @since         1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit();
}

// Definitions
define( 'XIDEA_VERSION', '1.0.0' );
define( 'XIDEA_DIR', get_template_directory() );
define( 'XIDEA_URI', get_template_directory_uri() );

/*--------------------------------------------------------------
# Theme Supports
--------------------------------------------------------------*/
if ( ! function_exists( 'xidea_setup' ) ) :
	function xidea_setup() {
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );

		register_nav_menus(
			array(
				'xidea-primary-menu' => esc_html__( 'Primary', 'xidea' ),
			)
		);

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		//Translations
		load_theme_textdomain( 'xidea', get_template_directory() . '/languages' );
	}

	add_action( 'after_setup_theme', 'xidea_setup' );
endif;

/*--------------------------------------------------------------
# Enqueue Styles
--------------------------------------------------------------*/
if ( ! function_exists( 'xidea_enqueue_styles' ) ) :

	function xidea_enqueue_styles() {

		wp_register_style( 'xidea-style', XIDEA_URI . '/assets/css/style.css', [], XIDEA_VERSION );
		wp_register_style( 'bootstrap', XIDEA_URI . '/assets/css/bootstrap.min.css', [], XIDEA_VERSION );
		wp_add_inline_style( 'xidea-style', xidea_get_custom_fonts() );

		wp_enqueue_style( 'xidea-style' );
		wp_enqueue_style( 'bootstrap' );

		wp_register_script( 'bootstrap-bundle', XIDEA_URI . '/assets/js/bootstrap.bundle.min.js', [ 'jquery' ], XIDEA_VERSION, true );
		wp_register_script( 'xidea-custom', XIDEA_URI . '/assets/js/custom.js', [ 'jquery' ], XIDEA_VERSION, true );

		wp_enqueue_script( 'bootstrap-bundle' );
		wp_enqueue_script( 'xidea-custom' );

	}

	add_action( 'wp_enqueue_scripts', 'xidea_enqueue_styles' );

endif;

/*--------------------------------------------------------------
# Enqueue Editor Styles
--------------------------------------------------------------*/
if ( ! function_exists( 'xidea_editor_styles' ) ) :

	function xidea_editor_styles() {
		wp_add_inline_style( 'wp-block-library', xidea_get_custom_fonts() );
		add_editor_style( array( './assets/css/style.css' ) );
		add_editor_style( array( './assets/css/bootstrap.min.css' ) );;
	}

	add_action( 'init', 'xidea_editor_styles' );
	add_action( 'pre_get_posts', 'xidea_editor_styles' );

endif;

/*--------------------------------------------------------------
# Custom Fonts
--------------------------------------------------------------*/
if ( ! function_exists( 'xidea_get_custom_fonts' ) ) :
	/**
	 * Get font face styles.
	 *
	 * @return string
	 */
	function xidea_get_custom_fonts() {
		return "
		@font-face{
			font-family: 'Nunito Sans';
			font-weight: 700;
			font-style: normal;
			font-stretch: normal;
			src: url('" . get_theme_file_uri( 'assets/fonts/NunitoSans-Regular.ttf' ) . "') format('ttf');
		}
		";
	}
endif;
