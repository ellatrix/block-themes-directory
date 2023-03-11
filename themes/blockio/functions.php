<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package blockio
 */

/**
 * Enqueue the style.css file
 */
function blockio_styles(): void {

	// Slick Css
	wp_enqueue_style( 'slickCarouselCss', get_template_directory_uri() . '/assets/css/slick.css', [], '1.8.1', 'all' );

	// Slick Theme Css
	wp_enqueue_style( 'slickCarouselThemeCss', get_template_directory_uri() . '/assets/css/slick-theme.css', [], '1.8.1', 'all' );

    wp_enqueue_style('blockio-style',get_stylesheet_uri(),[],wp_get_theme()->get('Version'));

    // Add styles inline.
    wp_add_inline_style( 'blockio-style', blockio_font_face_styles() );

	// Slick Js
	wp_enqueue_script('slickJs', get_template_directory_uri() . '/assets/js/slick.min.js', ['jquery'], '1.8.1', true);

    // Main Js
    wp_enqueue_script('MainJs', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], wp_get_theme()->get('Version'), true);
}
add_action('wp_enqueue_scripts','blockio_styles');



if( ! function_exists('blockio_setup')) {
    function blockio_setup(): void {
        add_theme_support('wp-block-styles');
    }
}
add_action('after_setup_theme','blockio_setup');




function blockio_font_face_styles(): string {


    return "
	@font-face{
			font-family: 'Courgette', cursive;
			font-weight: 400;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Courgette/Courgette-Regular.ttf' ) . "');
		}
		
	@font-face{
			font-family: 'Lato', sans-serif;
			font-weight: 200 400 700;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Lato/Lato-Regular.ttf' ) . "');
		}
	
		@font-face{
			font-family: 'Montserrat', sans-serif;
			font-weight: 200 400 600;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Montserrat/Montserrat-VariableFont_wght.ttf' ) . "');
		}
		
		@font-face{
			font-family: 'Merriweather', serif;
			font-weight: 300 400 700;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Merriweather/Merriweather-Regular.ttf' ) . "');
		}
		
		@font-face{
			font-family: 'Open Sans, sans-serif;
			font-weight: 300 400 600;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Open_Sans/OpenSans-VariableFont_wdth,wght.ttf' ) . "');
		}
		";
}


// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';


