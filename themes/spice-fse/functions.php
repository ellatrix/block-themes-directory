<?php

define('SPICE_FSE_TEMPLATE_DIR_URI',get_template_directory_uri());
define('SPICE_FSE_TEMPLATE_DIR',get_template_directory());


if ( ! function_exists( 'spice_fse_support' ) ) :
	function spice_fse_support()  {

		load_theme_textdomain( 'spice-fse', SPICE_FSE_TEMPLATE_DIR . '/languages' );
		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );
		 // Add support for editor styles.
        add_theme_support( 'editor-styles' );
		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		//About Theme
        $spice_fse_theme = wp_get_theme(); // gets the current theme
        if ('Spice FSE' == $spice_fse_theme->name || 'Spice FSE Child' == $spice_fse_theme->name) {
            if (is_admin()) {
                require SPICE_FSE_TEMPLATE_DIR . '/admin/admin-init.php';
            }
        }
       
	}
	add_action( 'after_setup_theme', 'spice_fse_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function spice_fse_scripts() {
	// Enqueue theme stylesheet.
	wp_enqueue_style( 'spice-fse-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	  $suffix = ( defined('SCRIPT_DEBUG') && SCRIPT_DEBUG ) ? '' : '.min';

   wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome/css/font-awesome' . $suffix . '.css', array(), '');

   wp_enqueue_script('spice-fse-custom-js', get_template_directory_uri().'/inc/js/custom.js', array('jquery'), '', true);
}
add_action( 'wp_enqueue_scripts', 'spice_fse_scripts' );

function spice_fse_register_my_pattern_categories() {
  register_block_pattern_category(
    'spice-fse',
    array( 'label' => __( 'Spice FSE', 'spice-fse' ) )
);

}
add_action( 'init', 'spice_fse_register_my_pattern_categories' );


require_once SPICE_FSE_TEMPLATE_DIR . '/inc/class-tgm-plugin-activation.php';


add_action( 'tgmpa_register', 'spice_fse_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function spice_fse_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		 // This is an example of how to include a plugin from the WordPress Plugin Repository.
        array(
            'name'      => 'Contact Form 7',
            'slug'      => 'contact-form-7',
            'required'  => false,
        ),
        array(
            'name'      => 'Yoast SEO',
            'slug'      => 'wordpress-seo',
            'required'  => false,
        ),
        array(
            'name'      => 'Wp Google Maps',
            'slug'      => 'wp-google-maps',
            'required'  => false,
        ),
        array(
            'name'      => 'Spice Post Slider',
            'slug'      => 'spice-post-slider',
            'required'  => false,
        ),
        array(
            'name'      => 'Spice Social Share',
            'slug'      => 'spice-social-share',
            'required'  => false,
        ),
        array(
            'name'     => 'Spice Blocks',
            'slug'     => 'spice-blocks',
            'required'  => false,
        )

	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
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

function spice_fse_script_footer() { ?>
<div class="scroll-up custom right"><a href="#totop"><i class="fa fa-arrow-up"></i></a></div>
<?php } 
add_action('wp_footer', 'spice_fse_script_footer');

function spice_fse_script_header() {
    ?>
    <div id="preloader">
        <div class="hp-preloader-cube">
            <div class="hp-cube1 hp-cube"></div>
            <div class="hp-cube2 hp-cube"></div>
            <div class="hp-cube4 hp-cube"></div>
            <div class="hp-cube3 hp-cube"></div>
        </div>
    </div>
    <?php
}
add_action('wp_head', 'spice_fse_script_header');

// Notice to add required plugin
function spice_fse_admin_plugin_notice_warn() {
    $theme_name=wp_get_theme();
    if ( get_option( 'dismissed-spice_fse_comanion_plugin', false ) ) {
       return;
    }
    if ( class_exists('Spice_Blocks')) {
        return;
    }?>

    <div class="updated notice is-dismissible spice-fse-theme-notice">

        <div class="owc-header">
            <div class="spice-blocks-logo-theme">
                <img src="<?php echo SPICE_FSE_TEMPLATE_DIR_URI.'/assets/images/spice-blocks-logo.png'?>">
            </div>
        </div>

        <div class="spice-fse-theme-content">
            <h3><?php printf( esc_html__('Thank you for installing the %1$s theme.', 'spice-fse'), esc_html($theme_name)); ?></h3>

            <p><?php printf(esc_html_e( 'We highly recommend you to install and activate the', 'spice-fse' )); ?>
                <b><?php printf(esc_html_e( 'Spice Blocks', 'spice-fse' )); ?></b><?php printf(esc_html_e(' plugin.', 'spice-fse' )); ?>
                <br>
                <?php printf(esc_html_e( 'This plugin will unlock enhanced features to build a beautiful website. You can get access:', 'spice-fse' )); ?>
                <ul style="padding: revert; list-style-type:disc;">
                    <li><b><?php printf(esc_html_e( 'Custom Blocks', 'spice-fse' )); ?></b></li>
                    <li><b><?php printf(esc_html_e( 'Free Block Templates, and much more.', 'spice-fse' )); ?></b></li>
                </ul>
            </p>
            <?php
           
            $spice_fse_companion_about_page = spice_fse_about_page();            
            
            $spice_fse_actions = $spice_fse_companion_about_page->recommended_actions;
            $spice_fse_actions_todo = get_option( 'recommended_actions', false );
            if($spice_fse_actions): 
                foreach ($spice_fse_actions as $key => $spice_fse_val):
                    if($spice_fse_val['id']=='install_spice-blocks'):
                        /* translators: %s: theme name */
                        echo '<p>'.wp_kses_post($spice_fse_val['link']).'</p>';
                    endif;
                endforeach;
            endif;?>
        </div>

    </div>
    
    <script type="text/javascript">
        jQuery(function($) {
        $( document ).on( 'click', '.spice-fse-theme-notice .notice-dismiss', function () {
            var type = $( this ).closest( '.spice-fse-theme-notice' ).data( 'notice' );
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
add_action( 'admin_notices', 'spice_fse_admin_plugin_notice_warn' );
add_action( 'wp_ajax_dismissed_notice_handler', 'spice_fse_ajax_notice_handler');

function spice_fse_ajax_notice_handler() {
    update_option( 'dismissed-spice_fse_comanion_plugin', TRUE );
}

function spice_fse_notice_style(){?>
    <style type="text/css">
        #spice-fse-header-page-metabox-options .tg-label.breadcrumbs input[type=radio] {
            display: none;
        }
        .spice-fse-theme-notice .spice-blocks-logo-theme{
          padding-top: 15px;
        }
        .spice-fse-theme-notice p{
            font-size: 14px;
        }
        .updated.notice.spice-fse-theme-notice h3{
            margin: 0;
        }
        div.spice-fse-theme-notice.updated {
            border-left-color: #3395a0;
        }
        .spice-fse-theme-content{
            padding: 0 0 1.2rem 3.57rem;
        }
    </style>
<?php
}
add_action('admin_enqueue_scripts','spice_fse_notice_style');
?>