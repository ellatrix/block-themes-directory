<?php

/**
 * Theme functions and definitions.
 * @author  	 DeoThemes
 * @copyright  (c) Copyright by DeoThemes
 * @link       https://deothemes.com
 * @package 	 Ona
 * @since 		 1.0
 */
if ( !defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}

if ( !function_exists( 'ona_fs' ) ) {
    // Create a helper function for easy SDK access.
    function ona_fs()
    {
        global  $ona_fs ;
        
        if ( !isset( $ona_fs ) ) {
            // Include Freemius SDK.
            require_once dirname( __FILE__ ) . '/freemius/start.php';
            $ona_fs = fs_dynamic_init( array(
                'id'              => '9271',
                'slug'            => 'ona',
                'premium_slug'    => 'ona-pro',
                'type'            => 'theme',
                'public_key'      => 'pk_561bffcf4255bd719dad9701963a8',
                'is_premium'      => false,
                'premium_suffix'  => 'Pro',
                'has_addons'      => false,
                'has_paid_plans'  => true,
                'has_affiliation' => 'selected',
                'menu'            => array(
                'slug'    => 'ona-theme',
                'contact' => false,
                'support' => false,
                'parent'  => array(
                'slug' => 'themes.php',
            ),
            ),
                'is_live'         => true,
            ) );
        }
        
        return $ona_fs;
    }
    
    // Init Freemius.
    ona_fs();
    // Signal that SDK was initiated.
    do_action( 'ona_fs_loaded' );
}

// Set the content width based on the theme's design and stylesheet.

if ( !isset( $content_width ) ) {
    $content_width = 1170;
    /* pixels */
}

// Constants
define( 'ONA_VERSION', '1.17.2' );
define( 'ONA_DIR', get_template_directory() );
define( 'ONA_URI', get_template_directory_uri() );
// Includes
require_once ONA_DIR . '/inc/admin/theme-admin.php';
require_once ONA_DIR . '/inc/patterns/block-patterns.php';
require_once ONA_DIR . '/inc/block-styles.php';
require_once ONA_DIR . '/inc/class-ona-theme-update.php';
/**
* TGMPA plugins activation.
*/
require_once ONA_DIR . '/inc/tgmpa/tgm-plugin-activation.php';
/*--------------------------------------------------------------
# Theme Supports
--------------------------------------------------------------*/

if ( !function_exists( 'ona_setup' ) ) {
    function ona_setup()
    {
        load_theme_textdomain( 'ona', get_template_directory() . '/languages' );
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 1170, 0 );
        add_theme_support( 'editor-styles' );
        add_theme_support( 'html5', array( 'comment-form', 'comment-list' ) );
        add_theme_support( 'responsive-embeds' );
        // Adding support for core block visual styles.
        add_theme_support( 'wp-block-styles' );
    }
    
    add_action( 'after_setup_theme', 'ona_setup' );
}

/*--------------------------------------------------------------
# Enqueue Styles
--------------------------------------------------------------*/

if ( !function_exists( 'ona_styles' ) ) {
    function ona_styles()
    {
        wp_register_style( 'ona-style', ONA_URI . '/assets/css/style.min.css' );
        wp_add_inline_style( 'ona-style', ona_get_font_face_styles() );
        $dependencies = apply_filters( 'ona_style_dependencies', array( 'ona-style' ) );
        wp_register_style(
            'ona-style-blocks',
            ONA_URI . '/assets/css/blocks.min.css',
            $dependencies,
            ONA_VERSION
        );
        wp_enqueue_style( 'ona-style' );
        wp_style_add_data( 'ona-style', 'rtl', 'replace' );
        wp_enqueue_style( 'ona-style-blocks' );
        wp_style_add_data( 'ona-style-blocks', 'rtl', 'replace' );
    }
    
    add_action( 'wp_enqueue_scripts', 'ona_styles' );
}

/*--------------------------------------------------------------
# Enqueue Editor Styles
--------------------------------------------------------------*/

if ( !function_exists( 'ona_editor_styles' ) ) {
    function ona_editor_styles()
    {
        // Add support for editor styles.
        add_theme_support( 'editor-styles' );
        add_editor_style( array( './assets/css/editor.min.css', './assets/css/blocks.min.css' ) );
        if ( defined( 'SBI_PLUGIN_DIR' ) ) {
            add_editor_style( array( '../../plugins/instagram-feed/css/sbi-styles.min.css' ) );
        }
        wp_add_inline_style( 'wp-block-library', ona_get_font_face_styles() );
    }
    
    add_action( 'admin_init', 'ona_editor_styles' );
}

/*--------------------------------------------------------------
# Enqueue Admin Scripts and Styles
--------------------------------------------------------------*/

if ( !function_exists( 'ona_admin_scripts' ) ) {
    function ona_admin_scripts()
    {
        $screen = get_current_screen();
        wp_enqueue_style( 'ona-admin-styles', ONA_URI . '/assets/admin/css/admin-styles.css' );
        
        if ( $screen->id === 'appearance_page_ona-theme' ) {
            wp_enqueue_script(
                'ona-admin-scripts',
                ONA_URI . '/assets/admin/js/admin-scripts.js',
                array( 'jquery-core' ),
                false,
                true
            );
            wp_localize_script( 'ona-admin-scripts', 'ona_params', array(
                'ajaxurl'    => admin_url( 'admin-ajax.php' ),
                'wpnonce'    => wp_create_nonce( 'ona_ajax_nonce' ),
                'wizard_url' => esc_url( admin_url( 'themes.php?page=merlin' ) ),
                'processing' => esc_html__( 'Processing', 'ona' ),
                'finished'   => esc_html__( 'Finished', 'ona' ),
            ) );
        }
    
    }
    
    add_action( 'admin_enqueue_scripts', 'ona_admin_scripts' );
}

/*--------------------------------------------------------------
# Get Fonts
--------------------------------------------------------------*/
if ( !function_exists( 'ona_get_font_face_styles' ) ) {
    /**
     * Get font face styles.
     *
     * @return string
     */
    function ona_get_font_face_styles()
    {
        return "\n\n\t\t@font-face{\n\t\t\tfont-family: 'Bestermind';\n\t\t\tfont-weight: 400;\n\t\t\tfont-style: normal;\n\t\t\tfont-stretch: normal;\n\t\t\tfont-display: swap;\n\t\t\tsrc: url('" . get_theme_file_uri( 'assets/fonts/bestermind/BestermindRegular.woff' ) . "') format('woff');\n\t\t}\n\n\t\t";
    }

}
/*--------------------------------------------------------------
# Get Mailchimp Forms
--------------------------------------------------------------*/
if ( !function_exists( 'ona_get_mailchimp_forms' ) ) {
    /**
     * Get Mailchimp Forms.
     *
     * @param string $style
     * @return string
     */
    function ona_get_mailchimp_forms( $style = 'style-1' )
    {
        $form = '';
        
        if ( function_exists( 'mc4wp' ) ) {
            $forms = mc4wp_get_forms();
            $form_id = ( isset( $forms[0] ) ? $forms[0]->ID : 0 );
            switch ( $style ) {
                case 'style-1':
                    $form = '<!-- wp:group {"className":"ona-newsletter"} -->
					<div class="wp-block-group ona-newsletter"><!-- wp:mailchimp-for-wp/form {"id":' . absint( $form_id ) . '} /--></div>
					<!-- /wp:group -->';
                    break;
                case 'style-2':
                    $form = '<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"className":"ona-newsletter-style-2"} -->			
					<div id="newsletter" class="wp-block-group ona-newsletter-style-2">
					<!-- wp:mailchimp-for-wp/form {"id":' . absint( $form_id ) . ',"className":"is-style-ona-newsletter-style-2"} /-->
					</div><!-- /wp:group -->';
                    break;
                case 'style-3':
                    $form = '<!-- wp:group {"style":{"spacing":{"blockGap":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","className":"ona-newsletter"} -->
					<div id="newsletter" class="wp-block-group ona-newsletter has-background-color has-text-color has-link-color">
					<!-- wp:mailchimp-for-wp/form {"id":' . absint( $form_id ) . ',"className":"is-style-ona-newsletter"} /--></div>
					<!-- /wp:group -->';
                    break;
                default:
                    $form = '<!-- wp:group {"className":"ona-newsletter"} -->
					<div class="wp-block-group ona-newsletter"><!-- wp:mailchimp-for-wp/form {"id":' . absint( $form_id ) . '} /--></div>
					<!-- /wp:group -->';
                    break;
            }
        }
        
        return $form;
    }

}
/*--------------------------------------------------------------
# Get Contact Form 7 Forms
--------------------------------------------------------------*/
if ( !function_exists( 'ona_get_contact_form_7_forms' ) ) {
    /**
     * Get Contact Form 7 Forms.
     *
     * @return string
     */
    function ona_get_contact_form_7_forms()
    {
        if ( !class_exists( '\\WPCF7' ) ) {
            return;
        }
        $form = '';
        $wpcf7_posts = get_posts( array(
            'post_type' => 'wpcf7_contact_form',
            'showposts' => 999,
        ) );
        $forms = array();
        if ( !empty($wpcf7_posts) && !is_wp_error( $wpcf7_posts ) ) {
            foreach ( $wpcf7_posts as $post ) {
                $forms[$post->ID] = $post->post_title;
            }
        }
        
        if ( !empty($forms) ) {
            $form_id = key( $forms ) ?? 0;
            $form = '<!-- wp:contact-form-7/contact-form-selector {"id":' . absint( $form_id ) . ', "title":"' . $forms[$form_id] . '"} -->
			<div class="wp-block-contact-form-7-contact-form-selector">[contact-form-7 id="' . absint( $form_id ) . '" title="' . $forms[$form_id] . '"]</div>
			<!-- /wp:contact-form-7/contact-form-selector -->';
        }
        
        return $form;
    }

}