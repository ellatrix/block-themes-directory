<?php
/**
 * This file adds functions to the Blockpress theme for WordPress.
 *
 * @package Blockpress
 * @author  Motionblocks
 * @license GNU General Public License v2 or later
 * @link    https://blockpresswp.com/
 */

if ( !defined( 'BLOCKPRESS_THEME_VERSION' ) ) {
	define('BLOCKPRESS_THEME_VERSION', '1.2.1');
}
if ( !defined( 'BLOCKPRESS_THEME_DIR' ) ) {
	define('BLOCKPRESS_THEME_DIR', get_template_directory_uri());
}
if ( !defined( 'BLOCKPRESS_THEME_PATH' ) ) {
	define('BLOCKPRESS_THEME_PATH', get_template_directory());
}
add_filter( 'should_load_separate_core_block_assets', '__return_true' );


//////////////////////////////////////////////////////////////////
// Register assets
//////////////////////////////////////////////////////////////////

add_action('init', 'blockpress_theme_register_assets');
function blockpress_theme_register_assets(){

	//Main styles
	wp_register_style( 'blockpress-style', BLOCKPRESS_THEME_DIR . '/assets/style.min.css', array(), BLOCKPRESS_THEME_VERSION );

	//Conditional styles for Font selector support in Site editor
	$upload_dir = wp_get_upload_dir();
	$globalstyle = trailingslashit($upload_dir['basedir']) . 'blockpress/globalstyle.css';
	if(file_exists($globalstyle)){
		wp_register_style(
			'blockpress_global',
			trailingslashit($upload_dir['baseurl']) . 'blockpress/globalstyle.css',
			'',
			time()
		);
	}else{
		wp_register_style( 'blockpress_global', BLOCKPRESS_THEME_DIR . '/assets/global.css', array(), '1.0' );
	}

	//Conditional scripts

	//Sticky header
	wp_register_style('blockpress-stickyheader', BLOCKPRESS_THEME_DIR . '/assets/sticky/style.css', array(), BLOCKPRESS_THEME_VERSION);
	wp_register_script('blockpress-stickyheader', BLOCKPRESS_THEME_DIR . '/assets/sticky/index.min.js', array(), BLOCKPRESS_THEME_VERSION, true);

	//Animations
	wp_register_script('blockpress-animate', BLOCKPRESS_THEME_DIR . '/assets/fra-animate/index.min.js', array(), BLOCKPRESS_THEME_VERSION, true);
	wp_register_style('blockpress-animate', BLOCKPRESS_THEME_DIR . '/assets/fra-animate/style.css', array(), BLOCKPRESS_THEME_VERSION);

	//Floating search
	wp_register_script('blockpress-floating-search', BLOCKPRESS_THEME_DIR . '/assets/floatingsearch/index.min.js', array(), BLOCKPRESS_THEME_VERSION, true);
	wp_register_style('blockpress-floating-search', BLOCKPRESS_THEME_DIR . '/assets/floatingsearch/style.css', array(), BLOCKPRESS_THEME_VERSION);

	//Page preloader
	wp_register_script('blockpress-pagepreload', BLOCKPRESS_THEME_DIR . '/assets/preloader/index.min.js', array(), BLOCKPRESS_THEME_VERSION, true);

	//menu
	wp_register_script('blockpress-mega-menu', BLOCKPRESS_THEME_DIR . '/assets/menu/index.min.js', array(), BLOCKPRESS_THEME_VERSION, true);

	//Page progressbar
	wp_register_script('blockpress-progressbar', BLOCKPRESS_THEME_DIR . '/assets/progressbar/index.min.js', array(), BLOCKPRESS_THEME_VERSION, true);

	//TOC
	wp_register_style('blockpress-toc', BLOCKPRESS_THEME_DIR . '/assets/toc/style.css', array(), BLOCKPRESS_THEME_VERSION);
	wp_register_script('blockpress-toc-init', BLOCKPRESS_THEME_DIR . '/assets/toc/index.min.js', array(), BLOCKPRESS_THEME_VERSION, true);
	$localarray = array( 
		'path' => BLOCKPRESS_THEME_DIR, 					  
	);		
	wp_localize_script( 'blockpress-toc-init', 'tocvars', $localarray );

	//TO TOP
	wp_register_script('blockpress-totop-init', BLOCKPRESS_THEME_DIR . '/assets/totop/index.min.js', array(), BLOCKPRESS_THEME_VERSION, true);

	//Core styles
	wp_register_style('frtm_core_navigation', BLOCKPRESS_THEME_DIR . '/assets/coreblocks/navigation.css', array(), BLOCKPRESS_THEME_VERSION);
	wp_register_style('frtm_core_code', BLOCKPRESS_THEME_DIR . '/assets/coreblocks/code.css', array(), BLOCKPRESS_THEME_VERSION);
	wp_register_style('frtm_core_comments', BLOCKPRESS_THEME_DIR . '/assets/coreblocks/comments.css', array(), BLOCKPRESS_THEME_VERSION);
	wp_register_style('frtm_core_pullquote', BLOCKPRESS_THEME_DIR . '/assets/coreblocks/pullquote.css', array(), BLOCKPRESS_THEME_VERSION);
	wp_register_style('frtm_core_quote', BLOCKPRESS_THEME_DIR . '/assets/coreblocks/quote.css', array(), BLOCKPRESS_THEME_VERSION);
	wp_register_style('frtm_core_separator', BLOCKPRESS_THEME_DIR . '/assets/coreblocks/separator.css', array(), BLOCKPRESS_THEME_VERSION);
	wp_register_style('frtm_core_table', BLOCKPRESS_THEME_DIR . '/assets/coreblocks/table.css', array(), BLOCKPRESS_THEME_VERSION);
	wp_register_style('frtm_core_button', BLOCKPRESS_THEME_DIR . '/assets/coreblocks/button.css', array(), BLOCKPRESS_THEME_VERSION);
	wp_register_style('frtm_core_author', BLOCKPRESS_THEME_DIR . '/assets/coreblocks/author.css', array(), BLOCKPRESS_THEME_VERSION);
	wp_register_style('frtm_core_query', BLOCKPRESS_THEME_DIR . '/assets/coreblocks/query.css', array(), BLOCKPRESS_THEME_VERSION);
	wp_register_style('frtm_core_embed', BLOCKPRESS_THEME_DIR . '/assets/coreblocks/embed.css', array(), BLOCKPRESS_THEME_VERSION);
	wp_register_style('frtm_core_search', BLOCKPRESS_THEME_DIR . '/assets/coreblocks/search.css', array(), BLOCKPRESS_THEME_VERSION);
	wp_register_style('frtm_core_querypagination', BLOCKPRESS_THEME_DIR . '/assets/coreblocks/querypagination.css', array(), BLOCKPRESS_THEME_VERSION);
	wp_register_style('frtm_core_postnavigation', BLOCKPRESS_THEME_DIR . '/assets/coreblocks/postnavigation.css', array(), BLOCKPRESS_THEME_VERSION);
	wp_register_style('blockpress-mega-menu', BLOCKPRESS_THEME_DIR . '/assets/coreblocks/megamenu.css', array(), BLOCKPRESS_THEME_VERSION);
	wp_register_style('blockpress-comment-query', BLOCKPRESS_THEME_DIR . '/assets/coreblocks/commentquery.css', array(), BLOCKPRESS_THEME_VERSION);
	wp_register_style('blockpress-minicart', BLOCKPRESS_THEME_DIR . '/assets/coreblocks/minicart.css', array(), BLOCKPRESS_THEME_VERSION);

}


//////////////////////////////////////////////////////////////////
// Register theme support functions
//////////////////////////////////////////////////////////////////

add_action( 'after_setup_theme', 'blockpress_theme_setuphooks' );
if ( ! function_exists( 'blockpress_theme_setuphooks' ) ) {
	function blockpress_theme_setuphooks() {

		// Make theme available for translation.
		load_theme_textdomain( 'blockpress', BLOCKPRESS_THEME_PATH . '/languages' );

		//responsive iframes
		add_theme_support( 'responsive-embeds' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles and fonts.
		add_editor_style(
			array(
				'./assets/editor.css'
			)
		);

		//WP supports
		add_theme_support(
			'html5',
			[
				'search-form',
				'comment-form',
				'comment-list',
			]
		);

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

		//add conditional assets to core blocks
		wp_enqueue_block_style( 'core/navigation', array('handle'=>'frtm_core_navigation', 'path'=>BLOCKPRESS_THEME_PATH .'/assets/coreblocks/navigation.css', 'version'=> BLOCKPRESS_THEME_VERSION) );
		wp_enqueue_block_style( 'core/code', array('handle'=>'frtm_core_code', 'path'=>BLOCKPRESS_THEME_PATH .'/assets/coreblocks/code.css', 'version'=> BLOCKPRESS_THEME_VERSION) );
		wp_enqueue_block_style( 'core/preformatted', array('handle'=>'frtm_core_code', 'path'=>BLOCKPRESS_THEME_PATH .'/assets/coreblocks/code.css', 'version'=> BLOCKPRESS_THEME_VERSION) );
		wp_enqueue_block_style( 'core/post-comments', array('handle'=>'frtm_core_comments', 'path'=>BLOCKPRESS_THEME_PATH .'/assets/coreblocks/comments.css', 'version'=> BLOCKPRESS_THEME_VERSION) );
		wp_enqueue_block_style( 'core/pullquote', array('handle'=>'frtm_core_pullquote', 'path'=>BLOCKPRESS_THEME_PATH .'/assets/coreblocks/pullquote.css', 'version'=> BLOCKPRESS_THEME_VERSION) );
		wp_enqueue_block_style( 'core/quote', array('handle'=>'frtm_core_quote', 'path'=>BLOCKPRESS_THEME_PATH .'/assets/coreblocks/quote.css', 'version'=> BLOCKPRESS_THEME_VERSION) );
		wp_enqueue_block_style( 'core/separator', array('handle'=>'frtm_core_separator', 'path'=>BLOCKPRESS_THEME_PATH .'/assets/coreblocks/separator.css', 'version'=> BLOCKPRESS_THEME_VERSION) );
		wp_enqueue_block_style( 'core/table', array('handle'=>'frtm_core_table', 'path'=>BLOCKPRESS_THEME_PATH .'/assets/coreblocks/table.css', 'version'=> BLOCKPRESS_THEME_VERSION) );
		wp_enqueue_block_style( 'core/button', array('handle'=>'frtm_core_button', 'path'=>BLOCKPRESS_THEME_PATH .'/assets/coreblocks/button.css', 'version'=> BLOCKPRESS_THEME_VERSION) );
		wp_enqueue_block_style( 'core/post-author', array('handle'=>'frtm_core_author', 'path'=>BLOCKPRESS_THEME_PATH .'/assets/coreblocks/author.css', 'version'=> BLOCKPRESS_THEME_VERSION) );
		wp_enqueue_block_style( 'core/query', array('handle'=>'frtm_core_query', 'path'=>BLOCKPRESS_THEME_PATH .'/assets/coreblocks/query.css', 'version'=> BLOCKPRESS_THEME_VERSION) );
		wp_enqueue_block_style( 'core/embed', array('handle'=>'frtm_core_embed', 'path'=>BLOCKPRESS_THEME_PATH .'/assets/coreblocks/embed.css', 'version'=> BLOCKPRESS_THEME_VERSION) );
		wp_enqueue_block_style( 'core/search', array('handle'=>'frtm_core_search', 'path'=>BLOCKPRESS_THEME_PATH .'/assets/coreblocks/search.css', 'version'=> BLOCKPRESS_THEME_VERSION) );
		wp_enqueue_block_style( 'core/query-pagination-numbers', array('handle'=>'frtm_core_querypagination', 'path'=>BLOCKPRESS_THEME_PATH .'/assets/coreblocks/querypagination.css', 'version'=> BLOCKPRESS_THEME_VERSION) );
		wp_enqueue_block_style( 'core/post-navigation-link', array('handle'=>'frtm_core_postnavigation', 'path'=>BLOCKPRESS_THEME_PATH .'/assets/coreblocks/postnavigation.css', 'version'=> BLOCKPRESS_THEME_VERSION) );
		wp_enqueue_block_style( 'core/comments-query-loop', array('handle'=>'blockpress-comment-query', 'path'=>BLOCKPRESS_THEME_PATH .'/assets/coreblocks/commentquery.css', 'version'=> BLOCKPRESS_THEME_VERSION) );
		wp_enqueue_block_style( 'woocommerce/mini-cart-contents', array('handle'=>'blockpress-minicart', 'path'=>BLOCKPRESS_THEME_PATH .'/assets/coreblocks/minicart.css', 'version'=> BLOCKPRESS_THEME_VERSION) );

		//Hack to include conditional styles in editor because add_editor_styles is very limited in current point
		$upload_dir = wp_get_upload_dir();
		$globalstyle = trailingslashit($upload_dir['basedir']) . 'blockpress/globalstyle.css';
		if(file_exists($globalstyle)){
			wp_enqueue_block_style( 'core/rss', array('handle'=>'blockpress_global', 'path'=>$globalstyle, 'version'=> BLOCKPRESS_THEME_VERSION) );
		}
	}
}


//////////////////////////////////////////////////////////////////
//Assets Render
//////////////////////////////////////////////////////////////////

// Frontend assets
add_action( 'wp_enqueue_scripts', 'blockpress_theme_enqueue_style_sheet' );
function blockpress_theme_enqueue_style_sheet() {

	//global styles
	wp_enqueue_style( 'blockpress-style');

	$options = get_option( 'blockpress_global_settings');
	$gs_global_css='';
	if(!empty($options['globalcss'])){
		$gs_global_css = $options['globalcss'];
		$gs_global_css = str_replace('!important', '', $gs_global_css);
	}
	
	if($gs_global_css){
		wp_register_style('blockpress-global-css', false);
		wp_enqueue_style('blockpress-global-css');
		wp_add_inline_style('blockpress-global-css',$gs_global_css);

	}
	//wp_enqueue_style('blockpress_global');

}

// Editor assets
add_action('enqueue_block_editor_assets', 'blockpress_theme_editor_assets');
function blockpress_theme_editor_assets()
{

	$index_asset_file = include(BLOCKPRESS_THEME_PATH . '/build/index.asset.php');
	$sitesettings = get_option('blockpress_global_settings');
	$localfont = (!empty($sitesettings['localfont'])) ? $sitesettings['localfont'] : array();

	// Gutenberg Sidebar plugin
	wp_enqueue_script(
		'blockpress-editor-js', // Handle.
		BLOCKPRESS_THEME_DIR . '/build/index.js',
		$index_asset_file['dependencies'],
		$index_asset_file['version'],
		true
	);
	wp_localize_script(
		'blockpress-editor-js',
		'blockPress_params',
		array(
			'localfont' => $localfont
		)
	);
}

// Preloader and progress bar elements
add_action('wp_body_open', 'blockpress_additional__header_elements');
function blockpress_additional__header_elements (){
	$settings = get_option('blockpress_global_settings');
	if(!empty($settings['mediaoptions']['preloader'])){
		?>
			<?php echo '<div><style scoped>.fr-page-preloader{margin:0 !important; padding:0 !important;position: fixed;top: 0;left: 0;width: 100vw;height: 100vh;display: block;background: #FFFFFF;pointer-events: none;transform: scaleX(1);transition: transform .3s cubic-bezier(.27,.76,.38,.87);transform-origin: right center;z-index: 99999999999999999999;display:flex; justify-content:center; align-items:center;}.fr-page-preloader:empty:after{height: 48px ;width: 48px ;color: rgba(140, 2, 232, 0.08);display: inline-block;border: 4px solid;border-radius: 50%;border-right-color: rgb(140 2 232 / 28%);transform: rotate(0);animation: fr-loading-rotate 1s ease-in-out infinite;pointer-events: none;content:"";will-change: transform;}@keyframes fr-loading-rotate {0% {transform: rotate(0);}100% {transform: rotate(360deg);}}body.fr-rendered .fr-page-preloader {transform: scaleX(0);transform-origin: left center;}</style><script>window.onload = function(){ document.body.classList.add("fr-rendered"); }</script></div><div class="fr-page-preloader"></div>';?>
		<?php
	}
	if(!empty($settings['mediaoptions']['progressbar']) && is_singular('post')){
		?>
			<?php echo '<div id="fr-progress-container"><div id="fr-progress-bar"><style scoped>#fr-progress-container{position:fixed;width:100%;height:4px;left:0;top:0;z-index:1000000;background:0 0;}#fr-progress-container.ready{transform:translateY(-3px)}#fr-progress-bar{display:block;width:0;height:3px;background:var(--wp--preset--color--primary)}</style></div></div>';?>
			<?php wp_enqueue_script('blockpress-progressbar');?>
		<?php		
	}
	if(!empty($settings['mediaoptions']['toc']) && is_singular('post')){
		?>
			<?php wp_enqueue_script('blockpress-toc-init');?>
			<?php wp_enqueue_style('blockpress-toc');?>
		<?php		
	}
	if(!empty($settings['mediaoptions']['backtotop'])){
		?>
			<?php wp_enqueue_script('blockpress-totop-init');?>
		<?php		
	}
}


//////////////////////////////////////////////////////////////////
//Includes
//////////////////////////////////////////////////////////////////

// Include block styles.
require BLOCKPRESS_THEME_PATH . '/inc/block-styles.php';

// Include block patterns.
require BLOCKPRESS_THEME_PATH . '/inc/block-patterns.php';

// Include Woocommerce
if (class_exists('Woocommerce')) {
require BLOCKPRESS_THEME_PATH . '/inc/woocommerce/functions.php';
}


//////////////////////////////////////////////////////////////////
// Filters
//////////////////////////////////////////////////////////////////

//Default blank template
add_filter( 'block_editor_settings_all', function( $settings ) {
    $settings['defaultBlockTemplate'] = '
	<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}}},"className":"site-content"} -->
	<main class="site-content wp-block-group" style="padding-top:40px;padding-bottom:40px">
		<!-- wp:group {"layout":{"inherit":true}} -->
		<div class="wp-block-group">
			<!-- wp:post-title {"level":1,"fontSize":"x-large"} /-->
		</div>
		<!-- /wp:group -->
		<!-- wp:post-content {"align":"full","layout":{"inherit":true}} /-->
	</main>
	<!-- /wp:group -->
';
	return $settings;
});


//TOC heading generation
add_filter('block_editor_settings_all','blockpress_generate_anchor_headings', 10, 2);
function blockpress_generate_anchor_headings($settings, $block_editor_context){
	$settings['generateAnchors'] = true;
	return $settings;
}


//////////////////////////////////////////////////////////////////
// REST routes to save and get settings
//////////////////////////////////////////////////////////////////

add_action('rest_api_init', 'blockpress_theme_register_route');
function blockpress_theme_register_route()
{
	register_rest_route(
		'blockpress/v1',
		'/global_settings/',
		array(
			array(
				'methods'             => 'GET',
				'callback'            => 'blockpress_get_global_settings',
				'permission_callback' => function () {
					return current_user_can('manage_options');
				},
				'args'                => array(),
			),
			array(
				'methods'             => 'POST',
				'callback'            => 'blockpress_update_global_settings',
				'permission_callback' => function () {
					return current_user_can('manage_options');
				},
				'args'                => array(),
			),
		)
	);

}

function blockpress_get_global_settings()
{

	try {

		$settings = get_option('blockpress_global_settings');

		return array(
			'success'  => true,
			'settings' => $settings,
		);
	} catch (Exception $e) {
		return array(
			'success' => false,
			'message' => $e->getMessage(),
		);
	}
}

function blockpress_update_global_settings($request)
{

	try {
		$params = $request->get_params();
		$defaults = get_option('blockpress_global_settings');
		$settings = '';

		if ($defaults === false) {
			add_option('blockpress_global_settings', $params);
			$settings = $params;
		} else {
			$newargs = wp_parse_args( $params, $defaults );
			update_option('blockpress_global_settings', $newargs);
			$settings = $newargs;
		}

		$fr_global_css = (!empty($settings['globalcss'])) ? $settings['globalcss'] : '';
		
		$upload_dir = wp_upload_dir();
		require_once ABSPATH . 'wp-admin/includes/file.php';
		global $wp_filesystem;
		$dir = trailingslashit($upload_dir['basedir']) . 'blockpress/'; // Set storage directory path
	
		WP_Filesystem(); // WP file system
	
		if (!$wp_filesystem->is_dir($dir)) {
			$wp_filesystem->mkdir($dir);
		}
	
		$css_filename = 'globalstyle.css';

		$fr_global_css = str_replace('!important', '', $fr_global_css);
	
		if (!$wp_filesystem->put_contents($dir . $css_filename, $fr_global_css)) {
			throw new Exception(__('CSS not saved due the permission!!!', 'blockpress'));
		}
		
		return json_encode(array(
			'success' => true,
			'message' => 'Global settings updated!',
		));
	} catch (Exception $e) {
		return json_encode(array(
			'success' => false,
			'message' => $e->getMessage(),
		));
	}
}

//////////////////////////////////////////////////////////////////
// Recommended plugins
//////////////////////////////////////////////////////////////////

/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.4.0
 * @author     Thomas Griffin <thomasgriffinmedia.com>
 * @author     Gary Jones <gamajo.com>
 * @copyright  Copyright (c) 2014, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/thomasgriffin/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'blockpress_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
if( !function_exists('blockpress_register_required_plugins') ) {
function blockpress_register_required_plugins() {

    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
		array(
			'name' => 'Greenshift - page builder',
			'slug' => 'greenshift-animation-and-page-builder-blocks',
			'required' => false,
			'description' => 'Page builder for Gutenberg',
		), 
    );         

    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'id'           => 'blockpress',            // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => esc_html__( 'Install Required Plugins', 'blockpress' ),
            'menu_title'                      => esc_html__( 'Install Plugins', 'blockpress' ),
            'installing'                      => esc_html__( 'Installing Plugin: %s', 'blockpress' ), // %s = plugin name.
            'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'blockpress' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'blockpress' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s. Please, activate only those plug-ins which are necessary to you', 'blockpress' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'blockpress' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'blockpress' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'blockpress' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'blockpress' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'blockpress' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'blockpress' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'blockpress' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'blockpress' ),
            'return'                          => esc_html__( 'Return to Required Plugins Installer and Activate plugins', 'blockpress' ),
            'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'blockpress' ),
            'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'blockpress' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );

    tgmpa( $plugins, $config );

}
}

/**
 * Include theme menu.
 */
require_once dirname( __FILE__ ) . '/inc/admin_menu/index.php';