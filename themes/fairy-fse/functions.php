<?php

/**
 * Fairy FSE functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Fairy FSE
 * @since Fairy FSE 1.0
 */


if (!function_exists('fairy_fse_support')) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Fairy FSE 1.0
	 *
	 * @return void
	 */
	function fairy_fse_support()
	{
		// Add support for block styles.
		add_theme_support('wp-block-styles');

		// Enqueue editor styles.
		add_editor_style('style.css');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary' => esc_html__('Primary', 'fairy-fse'),
			)
		);
	}

endif;

add_action('after_setup_theme', 'fairy_fse_support');

if (!function_exists('fairy_fse_styles')) :

	/**
	 * Enqueue styles.
	 *
	 * @since Fairy FSE 1.0
	 *
	 * @return void
	 */
	function fairy_fse_styles()
	{
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get('Version');

		$version_string = is_string($theme_version) ? $theme_version : false;
		wp_register_style(
			'fairy-fse-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style('fairy-fse-style');

	}

endif;

add_action('wp_enqueue_scripts', 'fairy_fse_styles');