<?php
/**
 * The theme version.
 *
 * @since 1.0.0
 *
 * @var string $value PHP version x.x.x or x.x.x.x format.
 */

define( 'GESSO_VERSION', wp_get_theme()->get( 'Version' ) );

// Include the webfont loader file.
require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );

/**
 * Define fonts.
 *
 * @return string
 */
function gesso_google_fonts_url() {

	// Allow child themes to disable to the default.
	$dequeue_fonts = apply_filters( 'gesso_dequeue_google_fonts', false );

	if ( $dequeue_fonts ) {
		return '';
	}

	// Make a single request for all Google Fonts.
	return wptt_get_webfont_url(
		'https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap'
	);
}

/**
 * Add theme support for block styles and editor style.
 *
 * @since 1.0.0
 *
 * @return void
 */
function gesso_setup() {
	add_theme_support( 'wp-block-styles' );
	add_editor_style( './assets/css/style-shared.min.css' );

	// Enqueue editor styles and fonts.
	add_editor_style( array( gesso_google_fonts_url() ) );
}
add_action( 'after_setup_theme', 'gesso_setup' );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function gesso_styles() {
	wp_enqueue_style(
		'gesso-style',
		get_stylesheet_uri(),
		[],
		GESSO_VERSION
	);
	wp_enqueue_style(
		'gesso-shared-styles',
		get_theme_file_uri( 'assets/css/style-shared.min.css' ),
		[],
		GESSO_VERSION
	);
	wp_enqueue_style(
		'gesso-shared-styles',
		get_theme_file_uri( 'assets/css/forms-and-buttons.css' ),
		[],
		GESSO_VERSION
	);

	wp_enqueue_style( 'gesso-fonts', gesso_google_fonts_url(), array(), GESSO_VERSION );
}
add_action( 'wp_enqueue_scripts', 'gesso_styles' );

// TGM Plugin Activation.
require_once get_theme_file_path( 'inc/class-tgm-plugin-activation.php' );

add_action( 'tgmpa_register', 'gesso_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 */
function gesso_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		array(
			'name'         => 'Styles Library',
			'slug'         => 'ea-styles-library',
			'source'       => 'https://downloads.wordpress.org/plugin/styles-library.2.0.1.zip',
			'required'     => false,
			'external_url' => 'https://wordpress.org/plugins/styles-library/',
		),

		array(
			'name'         => 'Missing Menu Items',
			'slug'         => 'ea-missing-menu-items',
			'source'       => 'https://downloads.wordpress.org/plugin/missing-menu-items.1.2.1.zip',
			'required'     => false,
			'external_url' => 'https://wordpress.org/plugins/missing-menu-items/',
		),
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 */
	$config = array(
		'id'           => 'gesso-by-block-styles', // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}
