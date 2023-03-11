<?php
/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

// Theme Setup
if ( ! function_exists( 'skt_patterns_support' ) ) :
function skt_patterns_support() {
	// Add support for block styles.
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'core-block-patterns' );
	// Enqueue editor styles.
		add_editor_style( 'editor-style.css' );
}
endif;

add_action( 'after_setup_theme', 'skt_patterns_support' );


// Load Styles/Scripts
if ( ! function_exists( 'skt_patterns_styles' ) ) :
function skt_patterns_styles() {
		
		// Register theme stylesheet.
		wp_register_style('skt-patterns-style', get_template_directory_uri() . '/style.css', array());
		// Enqueue theme stylesheet.
		wp_enqueue_style( 'skt-patterns-style' );
		// Enqueue jquery.
		wp_enqueue_script('jquery');
		// Enqueue fontawesome js.
		wp_enqueue_script('font-awesome','https://use.fontawesome.com/c4d7d70cd9.js', array('jquery'), true);
	}
	
endif;

add_action( 'wp_enqueue_scripts', 'skt_patterns_styles' );

//Enqueuing fonts css
function skt_patterns_load_fonts() {
    $skt_patterns_site_font_family = get_option( 'skt_patterns_site_font_family' );
	$skt_patterns_headings_font_family = get_option( 'skt_patterns_headings_font_family' );
	    
    if ( $skt_patterns_site_font_family != 'Default' ) {
        wp_register_style( 'skt_patterns_site_font_family', 'https://fonts.bunny.net/css?family=' . $skt_patterns_site_font_family );
        wp_enqueue_style( 'skt_patterns_site_font_family' );
    }
	
	if ( $skt_patterns_headings_font_family != 'Default' ) {
        wp_register_style( 'skt_patterns_headings_font_family', 'https://fonts.bunny.net/css?family=' . $skt_patterns_headings_font_family );
        wp_enqueue_style( 'skt_patterns_headings_font_family' );
    }
}
add_action( 'wp_enqueue_scripts', 'skt_patterns_load_fonts' );

// Add block patterns
require get_template_directory() . '/includes/block-patterns.php';

/**
 * Set the default image if none exists.
 */
function skt_patterns_fallback_post_thumbnail_html( $html, $post_id, $post_thumbnail_id ) {
    if ( empty( $html ) ) {
        $html = '<img src="'.get_template_directory_uri().'/assets/images/default-header-img.jpg" alt="'.get_the_title( $post_id ).'" class="skt-patterns-default-header-image">';
    }

    return $html;
}
add_filter( 'post_thumbnail_html', 'skt_patterns_fallback_post_thumbnail_html', 5, 3 );

/**
 * Show notice on theme activation
 */
if ( is_admin() && isset($_GET['activated'] ) && $pagenow == "themes.php" ) {
	add_action( 'admin_notices', 'skt_patterns_activation_notice' );
}
function skt_patterns_activation_notice(){
    ?>
    <div class="notice notice-info is-dismissible"> 
        <div class="skt-patterns-notice-container">
        	<div class="skt-patterns-notice-img"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/icon-patterns.png' ); ?>" alt="<?php esc_attr_e('SKT Patterns Theme', 'skt-patterns');?>" ></div>
            <div class="skt-patterns-notice-content">
            <div class="skt-patterns-notice-heading"><?php echo esc_html__('Thank you for installing SKT Patterns Theme!', 'skt-patterns'); ?></div>
            <p class="largefont"><?php echo esc_html__('Install the both required plugins to import complete site Demo.', 'skt-patterns'); ?></p>
            </div>
            <div class="skt-patterns-clear"></div>
        </div>
    </div>
    <?php
}

function skt_patterns_wp_admin_style($hook) {
	 	if ( 'themes.php' != $hook ) {
			return;
		}
		wp_enqueue_style( 'skt-patterns-admin-style', get_template_directory_uri() . '/css/skt-patterns-admin-style.css' );
}
add_action( 'admin_enqueue_scripts', 'skt_patterns_wp_admin_style' );

/**
 * Dashboard info
 */
require_once( trailingslashit( get_template_directory() ) . 'lib/dashboard.php' );

if ( !function_exists( 'skt_patterns_is_extra_activated' ) ) {
	/**
	 * Query SKT Patterns extra activation
	 */
	function skt_patterns_is_extra_activated() {
		return defined( 'SKT_PATTERNS_EXTRA_CURRENT_VERSION' ) ? true : false;
	}

}
/**
 * Register TGM Plugin Activation
 */
if ( is_admin() ) {

	require_once( trailingslashit( get_template_directory() ) . 'lib/skt-patterns-plugin-install.php' );
}

/**
 * Import Demo Data
 */

function skt_patterns_import_files() {
	return array(
		array(
			'import_file_name'             => 'Import SKT Patterns Demo',
			'import_file_url'            => 'https://www.demosktthemes.com/free/skt-patterns/demo-content/demo-content.xml',
		),
	);
}
add_filter( 'theme-demo-import/import_files', 'skt_patterns_import_files' );

function skt_patterns_import_content_intro_text( $default_text ) {
	$default_text .= '<div class="import-intro-text">Kindly click on below button to setup pages and navigation.</div>';

	return $default_text;
}
add_filter( 'theme-demo-import/plugin_intro_text', 'skt_patterns_import_content_intro_text' );

/**
 * Add Option On Theme Activation
 */
 
if ( is_admin() && isset($_GET['activated'] ) && $pagenow == "themes.php" ) {
	add_action( 'after_setup_theme', 'skt_patterns_insert_import_option' );
}

function skt_patterns_insert_import_option(){
	add_option( 'skt_patterns_data' , '' );
}

/**
 * After Import 
 */

function skt_patterns_after_import_setup() {
	update_option( 'skt_patterns_data', 'imported' );
}
add_action( 'theme-demo-import/after_import', 'skt_patterns_after_import_setup' );

