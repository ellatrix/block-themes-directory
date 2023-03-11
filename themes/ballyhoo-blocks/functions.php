<?php
/**
 * ballyhoo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ballyhoo
 */

if ( ! defined( 'ballyhoo_blocks_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'ballyhoo_blocks_VERSION', '1.0.5' );
}

if ( ! function_exists( 'ballyhoo_blocks_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ballyhoo_blocks_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ballyhoo, use a find and replace
		 * to change 'ballyhoo-blocks' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ballyhoo-blocks', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'ballyhoo-blocks' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
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

		// Add support for responsive embeds
		add_theme_support('responsive-embeds');

		// Add support for "align-wide" option
		add_theme_support('align-wide');

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'ballyhoo_blocks_custom_background_args',
				array(
					'default-color' => 'ffffff',
					// 'default-image' => get_template_directory_uri(), '/imgs/book.jpg',
					'width' => 1400,
					'height' => 500,
					'flex-height' => false,
					'flex-width' => false,
					'uploads' => true,
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 100,
				'width'       => 100,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
		add_theme_support( 'wp-block-styles' );
		add_theme_support('custom-header');
	}
endif;
add_action( 'after_setup_theme', 'ballyhoo_blocks_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ballyhoo_blocks_content_width() {
	$GLOBALS['ballyhoo_blocks_content_width'] = apply_filters( 'ballyhoo_blocks_content_width', 640 );
}
add_action( 'after_setup_theme', 'ballyhoo_blocks_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function ballyhoo_blocks_scripts() {
	wp_enqueue_style( 'ballyhoo-blocks-style', get_stylesheet_uri(), array(), ballyhoo_blocks_VERSION );
	wp_style_add_data( 'ballyhoo-blocks-style-2', 'rtl', 'replace' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ballyhoo_blocks_scripts' );

function ballyhoo_blocks_slug_editor_styles() {
    wp_enqueue_style( 'ballyhoo-blocks-slug-editor-style', get_template_directory_uri() . '/editor-style.css' );
    wp_enqueue_style( 'ballyhoo-blocks-slug-editor-style-2', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700&display=swap');
    wp_enqueue_style( 'ballyhoo-blocks-slug-editor-style-3', get_template_directory_uri() . '/all.min.css' );
}
add_action( 'enqueue_block_editor_assets', 'ballyhoo_blocks_slug_editor_styles' );
// Put everything from here into the block-patterns.php file later
if (function_exists('register_block_pattern_category')) {
	register_block_pattern_category(
		'ballyhoo-blocks',
		array('label' => esc_html__('Ballyhoo Blocks', 'ballyhoo-blocks'))
	);
}
if(function_exists('register_block_pattern')) {
	// Website header
	register_block_pattern(
		'ballyhoo-blocks/website-header',
		array(
			'title' => esc_html__('Website Header', 'ballyhoo-blocks'),
			'categories' => array('ballyhoo-blocks','headers'),
			'viewportWidth' => 1400,
			'content' => '<!-- wp:group {"backgroundColor":"dark-grey","className":"site-branding"} --><div class="wp-block-group site-branding has-dark-grey-background-color has-background"><!-- wp:heading {"textAlign":"center","level":1,"textColor":"white","className":"site-title"} --><h1 class="has-text-align-center site-title has-white-color has-text-color">Your Website Title Here</h1><!-- /wp:heading --><!-- wp:heading {"textAlign":"center","align":"center","textColor":"white","className":"site-description"} --><h2 class="has-text-align-center site-description has-white-color has-text-color">Your Website Slogan Here</h2><!-- /wp:heading --></div><!-- /wp:group -->',
		)
	);
	// Promotional headings
	register_block_pattern(
		'ballyhoo-blocks/promotional-headings',
		array(
			'title' => esc_html__('Promotional headings', 'ballyhoo-blocks'),
			'categories' => array('ballyhoo-blocks'),
			'viewportWidth' => 1400,
			'content' => '<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"300","fontSize":"2em"}},"className":"light-heading"} --><h1 class="has-text-align-center light-heading" style="font-size:2em;font-style:normal;font-weight:300">Your first light heading</h1><!-- /wp:heading --><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"className":"light-heading"} --><h2 class="has-text-align-center light-heading" style="font-style:normal;font-weight:300">Your second light heading</h2><!-- /wp:heading -->',
		)
	);
	// Footer
	register_block_pattern(
		'ballyhoo-blocks/footer-pattern',
		array(
			'title' => esc_html__('Footer', 'ballyhoo-blocks'),
			'categories' => array('ballyhoo-blocks'),
			'viewportWidth' => 1400,
			'content' => '<!-- wp:group {"tagName":"footer",backgroundColor":"#111111"} --><div class="wp-block-group has-111111-background-color has-background"><!-- wp:paragraph {"textColor":"white"} --><p class="has-white-color has-text-color">© [Current Year] <a href="http://example.com" data-type="URL" data-id="http://example.com">[Your Website Name]</a> All Rights Reserved</p><!-- /wp:paragraph --></div><!-- /wp:group -->',
		)
	);
	// Fact File
	register_block_pattern(
		'ballyhoo-blocks/fact-file',
		array(
			'title' => esc_html__('Fact File', 'ballyhoo-blocks'),
			'categories' => array('ballyhoo-blocks','featured'),
			'viewportWidth' => 1400,
			'content' => '<!-- wp:group {"style":{"border":{"width":"3px","style":"solid"}},"borderColor":"dark-grey"} --><div class="wp-block-group has-border-color has-dark-grey-border-color" style="border-style:solid;border-width:3px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"2.25em"}}} --><h2 class="has-text-align-center" id="fact-file-title-1" style="font-size:2.25em">Fact File Title</h2><!-- /wp:heading --><!-- wp:columns --><div class="wp-block-columns"><!-- wp:column --><div class="wp-block-column"><!-- wp:image --><figure class="wp-block-image"><img src="'. get_template_directory_uri() .'" alt=""/></figure><!-- /wp:image --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:list --><ul><li>Add a fact here</li><li>And another one here</li></ul><!-- /wp:list --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
		)
	);
	// Website Header With Image
	register_block_pattern(
		'ballyhoo-blocks/website-header-with-image',
		array(
			'title' => esc_html__('Website Header With Image', 'ballyhoo-blocks'),
			'categories' => array('ballyhoo-blocks','featured','headers'),
			'viewportWidth' => 1400,
			'content' => '<!-- wp:cover {"url":"/assets/","id":11,"dimRatio":20,"minHeight":176,"isDark":false} --><div class="wp-block-cover is-light" style="min-height:176px"><span aria-hidden="true" class="has-background-dim-20 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-11" alt="" src="/assets/" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"2em"}},"textColor":"white","className":"has-text-shadow-outline"} --><h1 class="has-text-align-center has-text-shadow-outline has-white-color has-text-color" id="your-website-title-here" style="font-size:2em">Your Website Title Here</h1><!-- /wp:heading --><!-- wp:heading {"textAlign":"center","textColor":"white","className":"has-text-shadow-outline"} --><h2 class="has-text-align-center has-text-shadow-outline has-white-color has-text-color" id="your-website-slogan-here">Your Website Slogan Here</h2><!-- /wp:heading --></div></div><!-- /wp:cover -->',
		)
	);
}
function ballyhoo_blocks_add_font_awesome_icons() {
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/all.min.css');
}
add_action( 'wp_enqueue_scripts', 'ballyhoo_blocks_add_font_awesome_icons' );
function ballyhoo_blocks_add_google_fonts() {
	wp_enqueue_style( 'google_fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,400&display=swap');
}
add_action( 'wp_enqueue_scripts', 'ballyhoo_blocks_add_google_fonts' );
// Put everything from here into the block-styles.php file later
if (function_exists('register_block_style')) {
	// Register the individual stylesheets for each style
	function ballyhoo_blocks_register_block_styles() {
		wp_register_style( 'button-square', get_template_directory_uri() . '/block-stylesheets/button-square.css' );
		wp_register_style( 'button-square-outline', get_template_directory_uri() . '/block-stylesheets/button-square-outline.css' );
		wp_register_style( 'button-rounded-square', get_template_directory_uri() . '/block-stylesheets/button-rounded-square.css' );

		wp_register_style( 'code-dark', get_template_directory_uri() . '/block-stylesheets/code-dark.css' );
		wp_register_style( 'image-rounded-square', get_template_directory_uri() . '/block-stylesheets/image-rounded-square.css' );
		wp_register_style( 'pullquote-huge', get_template_directory_uri() . '/block-stylesheets/pullquote-huge.css' );

		wp_register_style( 'quote-huge', get_template_directory_uri() . '/block-stylesheets/quote-huge.css' );
		wp_register_style( 'quote-light', get_template_directory_uri() . '/block-stylesheets/quote-light.css' );
		wp_register_style( 'verse-dark', get_template_directory_uri() . '/block-stylesheets/verse-dark.css' );

		wp_register_style( 'verse-large', get_template_directory_uri() . '/block-stylesheets/verse-large.css' );
		wp_register_style( 'verse-large-dark', get_template_directory_uri() . '/block-stylesheets/verse-large-dark.css' );
		wp_register_style( 'site-logo-rounded-square', get_template_directory_uri() . '/block-stylesheets/site-logo-rounded-square.css' );
		// Button: Square
		register_block_style(
			'core/button',
			array(
				'name' => 'ballyhoo-blocks-button-square',
				'label' => esc_html__('Square', 'ballyhoo-blocks'),
				'style_handle' => 'button-square',
			),
		);
		// Button: Square Outline
		register_block_style(
			'core/button',
			array(
				'name' => 'ballyhoo-blocks-button-square-outline',
				'label' => esc_html__('Square Outline', 'ballyhoo-blocks'),
				'style_handle' => 'button-square-outline',
			),
		);
		// Button: Rounded Square
		register_block_style(
			'core/button',
			array(
				'name' => 'ballyhoo-blocks-button-rounded-square',
				'label' => esc_html__('Rounded Square', 'ballyhoo-blocks'),
				'style_handle' => 'button-rounded-square',
			),
		);
		// Code: Dark
		register_block_style(
			'core/code',
			array(
				'name' => 'ballyhoo-blocks-code-dark',
				'label' => esc_html__('Dark', 'ballyhoo-blocks'),
				'style_handle' => 'code-dark',
			),
		);
		// Image: Rounded Square
		register_block_style(
			'core/image',
			array(
				'name' => 'ballyhoo-blocks-image-rounded-square',
				'label' => esc_html__('Rounded Square', 'ballyhoo-blocks'),
				'style_handle' => 'image-rounded-square',
			),
		);
		// Pullquote: Huge
		register_block_style(
			'core/pullquote',
			array(
				'name' => 'ballyhoo-blocks-pullquote-huge',
				'label' => esc_html__('Huge', 'ballyhoo-blocks'),
				'style_handle' => 'pullquote-huge',
			),
		);
		// Quote: Huge
		register_block_style(
			'core/quote',
			array(
				'name' => 'ballyhoo-blocks-quote-huge',
				'label' => esc_html__('Huge', 'ballyhoo-blocks'),
				'style_handle' => 'quote-huge',
			),
		);
		// Quote: Light
		register_block_style(
			'core/quote',
			array(
				'name' => 'ballyhoo-blocks-quote-light',
				'label' => esc_html__('Light', 'ballyhoo-blocks'),
				'style_handle' => 'quote-light',
			),
		);
		// Site Logo: Rounded Square
		register_block_style(
			'core/site-logo',
			array(
				'name' => 'ballyhoo-blocks-site-logo-rounded-square',
				'label' => esc_html__('Round Square', 'ballyhoo-blocks'),
				'style_handle' => 'site-logo-rounded-square',
			),
		);
		// Verse: Dark
		register_block_style(
			'core/verse',
			array(
				'name' => 'ballyhoo-blocks-verse-dark',
				'label' => esc_html__('Dark', 'ballyhoo-blocks'),
				'style_handle' => 'verse-dark',
			),
		);
		// Verse: Large
		register_block_style(
			'core/verse',
			array(
				'name' => 'ballyhoo-blocks-verse-large',
				'label' => esc_html__('Large', 'ballyhoo-blocks'),
				'style_handle' => 'verse-large',
			),
		);
		// Verse: Large Dark
		register_block_style(
			'core/verse',
			array(
				'name' => 'ballyhoo-blocks-verse-large-dark',
				'label' => esc_html__('Large Dark', 'ballyhoo-blocks'),
				'style_handle' => 'verse-large-dark',
			),
		);
	}
	add_action('wp_enqueue_scripts','ballyhoo_blocks_scripts');
	add_action( 'init', 'ballyhoo_blocks_register_block_styles' );
}