<?php
define( 'CATEGORICAL_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'CATEGORICAL_THEME_NAME', wp_get_theme()->get( 'Name' ) );
define( 'CATEGORICAL_TEMPLATE_DIR', get_template_directory() );
define( 'CATEGORICAL_TEMPLATE_DIR_URI', get_template_directory_uri() );

if ( ! function_exists( 'categorical_support' ) ) {
	function categorical_support()  {
		// Make theme available for translation.
		load_theme_textdomain( 'categorical', CATEGORICAL_TEMPLATE_DIR . '/languages' );

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );
	}
}
add_action( 'after_setup_theme', 'categorical_support' );


/**
 * Enqueue scripts and styles.
 */
function categorical_scripts_styles() {
	wp_enqueue_style( 'categorical-fonts', categorical_google_fonts(), array(), null );
	wp_enqueue_style( 'categorical-style', CATEGORICAL_TEMPLATE_DIR_URI . '/style.css', array(), CATEGORICAL_VERSION );
}
add_action( 'wp_enqueue_scripts', 'categorical_scripts_styles' );


/**
 * Enqueue editor styles.
 */
function categorical_editor_styles() {
	add_editor_style( array( CATEGORICAL_TEMPLATE_DIR_URI . '/style.css', categorical_google_fonts() ) );
}
add_action( 'admin_init', 'categorical_editor_styles' );


/**
 * Block styles.
 */
require CATEGORICAL_TEMPLATE_DIR . '/inc/styles.php';


/**
 * Block patterns.
 */
require CATEGORICAL_TEMPLATE_DIR . '/inc/patterns.php';


/**
 * Get Google fonts and save locally with WPTT Webfont Loader.
 */
function categorical_google_fonts() {
	$font_families = array(
		'Inter:wght@100;200;300;400;500;600;700;800;900',
		'Montserrat:wght@100;200;300;400;500;600;700;800;900',
		'Noto+Serif:wght@400;700',
		'Source+Serif+Pro:wght@200;300;400;600;700;900',
		'Roboto+Slab:wght@100;200;300;400;500;600;700;800;900'
	);

	$fonts_url = add_query_arg( array(
		'family' => implode( '&family=', $font_families ),
		'display' => 'swap',
	), 'https://fonts.googleapis.com/css2' );

	require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );

	return wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
}


/**
 * Display archives placeholder image if no post featured image.
 * Can be changed in child theme.json: settings.custom.featured-image.placeholder
 * Use either absolute URI or image in /theme-slug/assets/images/ directory.
 */
function categorical_featured_image_placeholder( $html ) {

	$global_styles = WP_Theme_JSON_Resolver::get_merged_data()->get_settings();

	$placeholder = ! empty( $global_styles['custom']['featured-image']['placeholder'] ) ? $global_styles['custom']['featured-image']['placeholder'] : false;

	if ( $placeholder && $html === '' && !is_single() ) {

		if ( substr( $placeholder, 0, 7 ) === "http://" || substr( $placeholder, 0, 8 ) === "https://" ) {
			$placeholder_url = esc_url( $placeholder );
		} else {
			$placeholder_url = esc_url( CATEGORICAL_TEMPLATE_DIR_URI . '/assets/images/' . $placeholder );
		}

		$html = '<img class="attachment-post-thumbnail wp-post-image placeholder featured-image" src="' . $placeholder_url . '" />';

		/**
		 * Filters the featured image placeholder HTML.
		 *
		 * @param string The image HTML.
		 */
		$html = apply_filters( 'categorical_featured_image_placeholder_html', $html );
	}

	return $html;

}
add_filter( 'post_thumbnail_html', 'categorical_featured_image_placeholder' );


/**
 * Make changes to placeholder image if found in a Cover
 * block that is set to use the post featured image.
 */
function categorical_cover_block( $block_content = '', $block = [] ) {
	if ( isset( $block['blockName'] ) && 'core/cover' === $block['blockName'] ) {
		$args = wp_parse_args( $block['attrs'] );

		if ( isset( $args['useFeaturedImage'] ) ) {

			$block_content = str_replace( '<img class="attachment-post-thumbnail wp-post-image placeholder featured-image" ', '<img class="wp-block-cover__image-background wp-post-image placeholder featured-image" alt="" loading="lazy" data-object-fit="cover" ', $block_content );

			/**
			 * Filters the Cover Block featured image placeholder HTML.
			 *
			 * @param string The image HTML.
			 */
			$block_content = apply_filters( 'categorical_cover_featured_image_placeholder_html', $block_content );

		}
	}

	return $block_content;
}
add_filter( 'render_block', 'categorical_cover_block', 10, 2 );


/**
 * Filter allowed CSS to allow min() property.
 * Will be removed when fixed in core.
 * See core ticket: https://core.trac.wordpress.org/ticket/55966
 */
function categorical_safe_css( $allow_css ) {
	$allow_css = 1;
	return $allow_css;
}
add_filter( 'safecss_filter_attr_allow_css', 'categorical_safe_css' );
