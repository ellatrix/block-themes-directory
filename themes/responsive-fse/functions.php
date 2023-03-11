<?php
/**
 * Functions and hooks for the Responsive theme.
 *
 * @package Responsive_FSE
 * @author         CyberChimps
 * @copyright      Copyright (c) 2021, CyberChimps
 * @license        license.txt
 * @since 1.0.0
 */

// Require Gutenberg to be installed as a plugin with the FSE experiment enabled.
require_once 'includes/class-requiregutenberg.php';

/**
 * Add theme-supports.
 */
add_action(
	'after_setup_theme',
	function() {

		// Make theme available for translation.
		load_theme_textdomain( 'responsive-fse', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Alignwide and alignfull classes in the block editor.
		add_theme_support( 'align-wide' );

		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Adding support for custom units.
		add_theme_support( 'custom-units' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );
		add_theme_support( 'experimental-custom-spacing' );
		add_theme_support( 'widgets-block-editor' );

		// Experimental support for adding blocks inside nav menus.
		add_theme_support( 'block-nav-menus' );

		// Support a custom color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Dark', 'responsive-fse' ),
					'slug'  => 'dark',
					'color' => '#000000',
				),
				array(
					'name'  => __( 'Light', 'responsive-fse' ),
					'slug'  => 'light',
					'color' => '#f5f7f9',
				),
				array(
					'name'  => __( 'White', 'responsive-fse' ),
					'slug'  => 'white',
					'color' => '#fff',
				),
				array(
					'name'  => __( 'Primary', 'responsive-fse' ),
					'slug'  => 'primary',
					'color' => '#0066cc',
				),
				array(
					'name'  => __( 'Secondary', 'responsive-fse' ),
					'slug'  => 'secondary',
					'color' => '#10659c',
				),
			)
		);

		add_theme_support( 'custom-units', '%', 'px', 'em', 'rem', 'vh', 'vw' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Adding support for featured images.
		add_theme_support( 'post-thumbnails' );

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			)
		);
		add_theme_support( 'title-tag' );

	}
);

add_filter(
	'comment_form_defaults',
	function( $fields ) {
		$fields['submit_button'] = '<input name="%1$s" type="submit" id="%2$s" class="%3$s wp-block-button__link" value="%4$s" />';
		$fields['submit_field']  = '<p class="form-submit wp-block-button">%1$s %2$s</p>';

		return $fields;
	}
);

/**
 * Show '(no title)' in frontend if post has no title to make it selectable
 */
add_filter(
	'the_title',
	function( $title ) {
		if ( ! is_admin() && empty( $title ) ) {
			$title = __( '(no title)', 'responsive-fse' );
		}

		return $title;
	}
);

// Add global styles.
require_once 'includes/class-responsive-fse-styles.php';

// Add scripts.
require_once 'includes/class-responsive-fse-scripts.php';


/**
 * Block styles.
 */
if ( function_exists( 'register_block_style' ) ) {
	require_once get_template_directory() . '/includes/responsive-fse-block-styles.php';
}
/**
 * Block patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	require_once get_template_directory() . '/includes/responsive-fse-block-patterns.php';
}
add_action( 'after_setup_theme', 'responsive_fse_default_content_width', 0 );
/**
 * Sets default content width.
 *
 * @return void
 */
function responsive_fse_default_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound.
	$GLOBALS['content_width'] = apply_filters( 'responsive_fse_content_width', 1140 );
}
/**
 * Add an Appearance sub-menu link to Additional CSS.
 */
function responsive_fse_additional_css_menu_link() {
	add_submenu_page(
		'themes.php',
		esc_html__( 'Additional CSS', 'responsive-fse' ),
		esc_html__( 'Additional CSS', 'responsive-fse' ),
		'edit_theme_options',
		admin_url( 'customize.php?autofocus[section]=custom_css' )
	);
}
add_action( 'admin_menu', 'responsive_fse_additional_css_menu_link' );
