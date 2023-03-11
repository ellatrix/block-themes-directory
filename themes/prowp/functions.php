<?php
/**
 * ProWP functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage ProWP
 * @since ProWP 1.0
 */

if ( ! function_exists( 'prowp_support' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since ProWP 1.0
	 *
	 * @return void
	 */
	function prowp_support() {
		$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

		// Enqueue editor styles.
		$editor_styles = apply_filters(
			'prowp_editor_styles',
			array(
				"assets/css/base{$suffix}.css",
				"assets/css/editor{$suffix}.css",
			)
		);
		add_editor_style( $editor_styles );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );
	}
	endif;
add_action( 'after_setup_theme', 'prowp_support' );

if ( ! function_exists( 'prowp_styles' ) ) :
	/**
	 * Enqueue styles.
	 *
	 * @since ProWP 1.0
	 *
	 * @return void
	 */
	function prowp_styles() {
		$suffix                 = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
		$template_directory_uri = get_template_directory_uri();

		wp_register_style(
			'prowp-style',
			$template_directory_uri . "/assets/css/base{$suffix}.css",
			array(),
			'1.3.0'
		);

		wp_register_script(
			'prowp-global-script',
			$template_directory_uri . "/assets/js/public/global{$suffix}.js ",
			array(),
			'1.0.0',
			false
		);

		wp_register_script(
			'prowp-singular-post-script',
			$template_directory_uri . "/assets/js/public/singular-post{$suffix}.js",
			array(),
			'1.0.0',
			false
		);

		wp_register_script(
			'prowp-singular-page-script',
			$template_directory_uri . "/assets/js/public/singular-page{$suffix}.js",
			array(),
			'1.0.0',
			false
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'prowp-style' );

		// Enqueue script for website.
		wp_enqueue_script( 'prowp-global-script' );

		// Enqueue scripts needed for singular posts.
		if ( is_singular( 'post' ) ) {
			wp_enqueue_script( 'prowp-singular-post-script' );
		}

		// Enqueue scripts needed for singular pages.
		if ( is_singular( 'page' ) ) {
			wp_enqueue_script( 'prowp-singular-page-script' );
		}
	}
	endif;
add_action( 'wp_enqueue_scripts', 'prowp_styles' );

if ( ! function_exists( 'prowp_register_block_styles' ) ) :
	/**
	 * Register Block Styles.
	 */
	function prowp_register_block_styles() {
		// List: Unstyled.
		register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
			'core/list',
			array(
				'name'         => 'th-unstyled-list',
				'label'        => esc_html__( 'Unstyled', 'prowp' ),
				'inline_style' => '.is-style-th-unstyled-list { list-style: none; padding-inline-start: 0; }',
			)
		);

		// List: Highlighted marker.
		register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
			'core/list',
			array(
				'name'         => 'th-highlight-marker',
				'label'        => esc_html__( 'Highlighted marker', 'prowp' ),
				'inline_style' => '.is-style-th-highlight-marker {padding-inline-end: 1.5em;}.is-style-th-highlight-marker li + li {border-block-start: 1px dashed var(--wp--preset--color--tertiary);margin-block-start: 0.4em;padding-block-start: 0.45em;}.has-background .is-style-th-highlight-marker li + li {border-block-start-color: rgba(0,0,0,0.25);}.is-style-th-highlight-marker li {position: relative;z-index: 1;padding-inline: 0.5em;}.is-style-th-highlight-marker li::before {content: "";width: 1.175em;height: 1.15em;background-color: var(--wp--preset--color--contrast);position: absolute;margin-block-start: 0.15em;left: -1.25em;z-index: -1;}.has-background .is-style-th-highlight-marker li::before {background-color: rgba(0,0,0,0.2);}.is-style-th-highlight-marker li::marker {color: var(--wp--preset--color--base);font-size: 0.79em;font-weight: bold;}.has-background .is-style-th-highlight-marker li::marker {color: currentColor;}',
			)
		);

		// List: Inline with bordered items.
		register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
			'core/list',
			array(
				'name'         => 'th-inline-bordered',
				'label'        => esc_html__( 'Inline and bordered items', 'prowp' ),
				'inline_style' => '.is-style-th-inline-bordered {list-style: none;padding-inline: 0;display: flex;flex-wrap: wrap;gap: 0.5em;}.is-style-th-inline-bordered li {border: 1px solid;padding: 0.2em 0.8em;border-radius: 1em;}',
			)
		);

		// Image: Frame with shadow.
		register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
			'core/image',
			array(
				'name'         => 'th-frame-shadow',
				'label'        => esc_html__( 'Frame with shadow', 'prowp' ),
				'inline_style' => '.is-style-th-frame-shadow img { border: 3px solid var(--wp--preset--color--white); box-shadow: 3px 3px 0 0 var(--wp--preset--color--tertiary), -0.5px -0.5px 9px 0 var(--wp--preset--color--tertiary); }',
			)
		);

		// Image: Frame with shadow.
		register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
			'core/post-featured-image',
			array(
				'name'         => 'th-frame-shadow',
				'label'        => esc_html__( 'Frame with shadow', 'prowp' ),
				'inline_style' => '.is-style-th-frame-shadow img { border: 3px solid var(--wp--preset--color--white); box-shadow: 3px 3px 0 0 var(--wp--preset--color--tertiary), -0.5px -0.5px 9px 0 var(--wp--preset--color--tertiary); }',
			)
		);
	}
	endif;
add_action( 'init', 'prowp_register_block_styles' );

if ( ! function_exists( 'prowp_enqueue_block_editor_assets' ) ) :
	/**
	 * Register Block editor styles.
	 */
	function prowp_enqueue_block_editor_assets() {
		$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
		wp_enqueue_style( 'prowp-block-editor-styles', get_template_directory_uri() . "/assets/css/editor-core{$suffix}.css", array(), '1.2.0', 'all' );
	}
	endif;
add_action( 'enqueue_block_editor_assets', 'prowp_enqueue_block_editor_assets', 1, 1 );

if ( ! function_exists( 'prowp_register_block_pattern_categories' ) ) :
	/**
	 * Registers block categories.
	 *
	 * @since 1.0.0
	 */
	function prowp_register_block_pattern_categories() {
		$block_pattern_categories = array(
			'pages'  => array(
				'label' => esc_html__( 'Page Layouts', 'prowp' ),
			),
			'quotes' => array(
				'label' => esc_html__( 'Quotes', 'prowp' ),
			),
		);

		foreach ( $block_pattern_categories as $name => $properties ) {
			register_block_pattern_category( $name, $properties );
		}
	}
	endif;
add_action( 'init', 'prowp_register_block_pattern_categories', 9 );
