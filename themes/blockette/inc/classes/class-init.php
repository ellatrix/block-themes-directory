<?php
/**
 * Initialize the theme
 *
 * @package blockette
 * @since 1.0.0
 */

namespace Blockette;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use Blockette\Block_Patterns;
use Blockette\Block_Styles;

/**
 * Init Class
 *
 * @package blockette
 */
class Init {

	/**
	 * Instance variable
	 *
	 * @var $instance
	 */
	private static $instance;

	/**
	 * Class instance.
	 *
	 * @return Init
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
	private function __construct() {

		add_action( 'after_setup_theme', array( $this, 'setup' ) );

		// Register block styles and patterns.
		add_action( 'init', array( $this, 'block_pattern_categories' ), 5 );
		add_action( 'init', array( $this, 'block_patterns' ), 10 );
		add_action( 'init', array( $this, 'block_styles' ), 10 );

		// Unregister blocks patterns (hook after 'register_block_patterns').
		add_action( 'init', array( $this, 'unregister_block_patterns' ), 20 );

		// Register block variation.
		add_action( 'enqueue_block_editor_assets', array( $this, 'block_scripts' ) );

		// Enqueue styles.
		add_action( 'wp_enqueue_scripts', array( $this, 'styles' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'scripts' ) );

		// Load editor styles.
		add_action( 'admin_init', array( $this, 'editor_styles' ) );

		// Additional WP filters.
		$this->filters();

		// Check if content is built with blocks, or classic editor.
		add_action( 'the_content', array( $this, 'maybe_classic_editor' ), 1 );

	}

	/**
	 * Check if content uses blocks or created with classic editor.
	 *
	 * @param string $content - the post content.
	 *
	 * @return $content
	 */
	public function maybe_classic_editor( $content ) {
		if ( ! has_blocks() ) {
			add_filter(
				'body_class',
				function ( $classes ) {
					return array_merge( $classes, array( 'maybe-classic-editor' ) );
				}
			);
		}
		return $content;
	}

	/**
	 * Add theme support for block styles and editor style.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function setup() {

		// Textdomain.
		load_theme_textdomain( 'blockette', get_parent_theme_file_path( 'languages' ) );

		add_theme_support( 'wp-block-styles' );
		// Styles applied to frontend and editor.
		add_editor_style( BLOCKETTE_URI . 'assets/css/style-shared.min.css' );

		/*
		* Load additional block styles.
		* See details on how to add more styles in the readme.txt.
		*/
		$styled_blocks = array( 'button', 'file', 'latest-comments', 'latest-posts', 'quote', 'search' );
		foreach ( $styled_blocks as $block_name ) {
			$args = array(
				'handle' => "blockette-$block_name",
				'src'    => BLOCKETTE_URI . 'assets/css/blocks/' . $block_name . '.min.css',
				'path'   => BLOCKETTE_DIR . 'assets/css/blocks/' . $block_name . '.min.css',
			);
			// Replace the "core" prefix if you are styling blocks from plugins.
			wp_enqueue_block_style( "core/$block_name", $args );
		}

	}

	/**
	 * Register Block Patterns.
	 */
	public function block_pattern_categories() {
		Block_Patterns::register_categories();
	}

	/**
	 * Register Block Patterns.
	 */
	public function block_patterns() {
		Block_Patterns::register_patterns();
	}

	/**
	 * Register Block Styles.
	 */
	public function block_styles() {
		new Block_Styles();
	}

	/**
	 * WP filters.
	 *
	 * @return void
	 */
	private function filters() {
		/**
		 * Show '(No title)' if a post has no title.
		 *
		 * @since 1.0.0
		 */
		add_filter(
			'the_title',
			function( $title ) {
				if ( ! is_admin() && empty( $title ) ) {
					$title = _x( '(No title)', 'Used if post or pages has no title', 'blockette' );
				}

				return $title;
			}
		);

		/**
		 * Replace the default [...] excerpt more with an elipsis.
		 *
		 * @since 1.0.0
		*/
		add_filter(
			'excerpt_more',
			function( $more ) {
				return '&hellip; ---';
			}
		);

	}

	/**
	 * Register a block variation.
	 * Type /full or use the block inserter to insert a full width group block.
	 *
	 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-variations/
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function block_scripts() {
		wp_enqueue_script(
			'blockette-block-variations',
			BLOCKETTE_URI . 'assets/js/block-variation.js',
			array( 'wp-blocks' ),
			BLOCKETTE_VERSION,
			true
		);
	}

	/**
	 * Enqueue styles.
	 *
	 * @return void
	 */
	public function styles() {

		wp_enqueue_style(
			'blockette-style',
			get_stylesheet_uri(),
			array(),
			BLOCKETTE_VERSION
		);

		// Shared (front and editor) styles.
		wp_enqueue_style(
			'blockette-shared-styles',
			get_theme_file_uri( 'assets/css/style-shared.min.css' ),
			array(),
			BLOCKETTE_VERSION
		);

		// Additional inline styles for font styles.
		wp_add_inline_style( 'blockette-style', $this->load_font_styles() );
	}

	/**
	 * Enqueue scripts.
	 *
	 * @return void
	 */
	public function scripts() {

		wp_enqueue_script(
			'blockette-custom-js',
			BLOCKETTE_URI . 'assets/js/index.js',
			array(),
			BLOCKETTE_VERSION,
			true
		);

	}

	/**
	 * Load Font Styles
	 *
	 * @return wptt_get_webfont_styles
	 */
	public function load_font_styles() {
		$font_families = array(
			'Outfit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600',
			'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600',
			'Inter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600',
		);

		$fonts_url = add_query_arg(
			array(
				'family'  => implode( '&family=', $font_families ),
				'display' => 'swap',
			),
			'https://fonts.googleapis.com/css2'
		);

		return wptt_get_webfont_styles( esc_url_raw( $fonts_url ), 'woff' );
	}

	/**
	 * Load Editor Styles
	 *
	 * @return void
	 */
	public function editor_styles() {
		wp_add_inline_style( 'wp-block-library', $this->load_font_styles() );
	}

	/**
	 * Unregister core block patterns and/or block pattern categories.
	 * Must be called after added patterns and pattern categories.
	 *
	 * @see https://developer.wordpress.org/reference/functions/unregister_block_pattern/
	 * @see https://developer.wordpress.org/reference/functions/unregister_block_pattern_category/
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function unregister_block_patterns() {
		// Remove core block patterns.
		// remove_theme_support( 'core-block-patterns' ); // remove core patterns.
		unregister_block_pattern( 'core/query-small-posts' );
		unregister_block_pattern( 'core/query-large-title-posts' );
		unregister_block_pattern( 'core/query-offset-posts' );
		unregister_block_pattern_category( 'header' );
	}
}
