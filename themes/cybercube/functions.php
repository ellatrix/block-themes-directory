<?php
/**
 * cybercube functions and code
 *
 * @package cybercube
 * @since 0.1
 *
 */
/**
 * Define constants
 */
define( 'CYBERCUBE_PARENT_DIR', get_template_directory() );
define( 'CYBERCUBE_PARENT_URI', get_template_directory_uri() );
define( 'CYBERCUBE_PARENT_INC_DIR', CYBERCUBE_PARENT_DIR . '/core' );
define( 'CYBERCUBE_PARENT_INC_URI', CYBERCUBE_PARENT_URI . '/core' );

// Enqueue theme CSS
function cybercube_styles() {
	
		wp_enqueue_style( 'all-min-css', get_template_directory_uri() . '/assets/css/all.min.css' );
		wp_enqueue_style( 'cybercube-main-css', get_template_directory_uri() . '/assets/css/main.css' );
		
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script('cybercube-stickyheader-js', get_template_directory_uri() . '/assets/sticky/sticky-script.js');
		wp_enqueue_style('cybercube-stickyheader-css', get_template_directory_uri() . '/assets/sticky/style.css');
		// Include google webfont locally //
	require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );
	
	$font_families = array(
		'Poppins:wght@300;400;500;600;700;800;900'
	);

	$fonts_url = add_query_arg( array(
		'family' => implode( '&family=', $font_families ),
		'display' => 'swap',
		'subset' => 'latin,latin-ext',
	), 'https://fonts.googleapis.com/css2' );
	
	$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
	
	// Load the webfont.
	wp_enqueue_style(
		'Poppins',
		$contents,
		array(),
		'1.0'
	);
		
}
add_action( 'wp_enqueue_scripts', 'cybercube_styles' );



if ( ! function_exists( 'cybercube_setup' ) ) {
	
	function cybercube_setup() {
		
		// Alignwide and alignfull classes in the block editor.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );
		
		add_theme_support( 'wp-block-styles' );
		
		remove_theme_support( 'core-block-patterns' );
    }
		
}
add_action( 'after_setup_theme', 'cybercube_setup' );

/* Block Patterns */
require get_template_directory() . '/core/register-patterns.php';

/* Block style */
require get_template_directory() . '/core/register-block.php';

if ( is_admin() ) {
	require_once('core/admin/admin-themes.php');
}