<?php
define( 'APPROACH_TEMPLATE_DIR', get_template_directory() );
define( 'APPROACH_TEMPLATE_DIR_URI', get_template_directory_uri() );

if ( ! function_exists( 'approach_support' ) ) {
	function approach_support()  {


		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Adding support for featured images.
		add_theme_support( 'post-thumbnails' );

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
        // Enqueue editor styles.
	    add_editor_style( 'style.css' );
		register_nav_menus(array(
            'primary' => esc_html__('Primary Menu', 'approach')
        ));
	}
}
add_action( 'after_setup_theme', 'approach_support' );


/**
 * Enqueue scripts and styles.
 */
function approach_scripts_styles() {


	// Register and Enqueue Stylesheet.
	wp_enqueue_style( 'approach-stylesheet', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

}
add_action( 'wp_enqueue_scripts', 'approach_scripts_styles' );


/**
 * Block patterns.
 */
require APPROACH_TEMPLATE_DIR . '/inc/block-patterns.php';
require APPROACH_TEMPLATE_DIR . '/inc/block-styles.php';

// Theme About Page
require get_template_directory() . '/inc/about.php';
/**
 * Enqueue block styles and scripts for Gutenberg Editor.
 */
function approach_block_scripts() {

	// Enqueue Editor Styling.
	wp_enqueue_style( 'approach-editor-styles', get_theme_file_uri( '/assets/css/editor-styles.css' ), array(), wp_get_theme()->get( 'Version' ), 'all' );
}
add_action( 'enqueue_block_editor_assets', 'approach_block_scripts' );


/**
* Enqueue theme fonts.
*/
function approach_theme_fonts() {
	$fonts_url = approach_get_fonts_url();

	// Load Fonts if necessary.
	if ( $fonts_url ) {
		require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );
		wp_enqueue_style( 'approach-theme-fonts', wptt_get_webfont_url( $fonts_url ), array(), '20201110' );
	}
}
add_action( 'wp_enqueue_scripts', 'approach_theme_fonts', 1 );
add_action( 'enqueue_block_editor_assets', 'approach_theme_fonts', 1 );


/**
 * Retrieve webfont URL to load fonts locally.
 */
function approach_get_fonts_url() {
	$font_families = array(
		'Barlow:400,400italic,700,700italic',
		'Inter:400,400italic,700,700italic',
		'Roboto:400,400italic,700,700italic',
		
	);

	$query_args = array(
		'family'  => urlencode( implode( '|', $font_families ) ),
		'subset'  => urlencode( 'latin,latin-ext' ),
		'display' => urlencode( 'swap' ),
	);

	return apply_filters( 'approach_get_fonts_url', add_query_arg( $query_args, 'https://fonts.googleapis.com/css' ) );
}

/**
 * Change excerpt length for default posts
 *
 * @param int $length Length of excerpt in number of words.
 * @return int
 */
function approach_excerpt_length( $length ) {
	if ( is_admin() ) {
		return $length;
	}

	return apply_filters( 'approach_excerpt_length', 20 );
}
add_filter( 'excerpt_length', 'approach_excerpt_length' );

function approach_pattern_content( $content ) {
	switch ( $content ) {

		case 'slider-banner':
			return esc_url( get_theme_file_uri( 'assets/images/slider-banner.jpg' ) );
			break;						
		default:
			return '';
			break;

	}
}


// Notice for welcome message
function approach_admin_plugin_notice_warn() {
	$theme_name = wp_get_theme();
    if ( get_option( 'dismissed-approach_comanion_plugin', false ) ) {
       return;
    }
    if ( function_exists('approach_companion_activate')) {
        return;
    }?>

    <div class="updated notice is-dismissible approach-theme-notice">

        <div class="approach-theme-content">
            <h3><?php printf( esc_html__('Thank for installing the %1$s theme.', 'approach'), esc_html($theme_name)); ?></h3>

          	<p><?php esc_html_e( 'This theme have some features to build a beautiful website. You can get access:', 'approach' ); ?>
                <ul style="padding: revert; list-style-type:square;">
                    <li><?php esc_html_e( 'Block patterns', 'approach' ); ?></li>
                    <li><?php esc_html_e( 'Templates', 'approach' ); ?></li>
                    <li><?php esc_html_e( 'and much more.', 'approach' ); ?></li>
                </ul>
            </p>
         	<p style="font-size:14px";><a href="<?php echo esc_url( 'https://help.webriti.com/category/themes/approach-fse/' ); ?>" target="_blank" class="button-primary"><?php esc_html_e( 'Theme instructions', 'approach' ); ?></a></p>
        </div>

    </div>
    
    <script type="text/javascript">
        jQuery(function($) {
        // Hook into the "notice-my-class" class we added to the notice, so
        // Only listen to YOUR notices being dismissed
        $( document ).on( 'click', '.approach-theme-notice .notice-dismiss', function () {
            // Read the "data-notice" information to track which notice
            // is being dismissed and send it via AJAX
            var type = $( this ).closest( '.approach-theme-notice' ).data( 'notice' );
            // Make an AJAX call
            // Since WP 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
            $.ajax( ajaxurl,
              {
                type: 'POST',
                data: {
                  action: 'dismissed_notice_handler',
                  type: type,
                }
              } );
          } );
      });
    </script>
<?php

}
add_action( 'admin_notices', 'approach_admin_plugin_notice_warn' );
add_action( 'wp_ajax_dismissed_notice_handler', 'approach_ajax_notice_handler');

function approach_ajax_notice_handler() {
    // Store it in the options table
    update_option( 'dismissed-approach_comanion_plugin', TRUE );
}