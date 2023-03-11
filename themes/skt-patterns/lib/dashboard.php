<?php
/**
 * SKT Patterns admin notify
 *
 */
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

if ( !class_exists( 'skt_patterns_Notify_Admin' ) ) :

	/**
	 * SKT Patterns admin notify
	 */
	class skt_patterns_Notify_Admin {

		/**
		 * Setup class.
		 *
		 */
		public function __construct() {
			add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
			add_action( 'admin_notices', array( $this, 'admin_notices' ), 99 );
			add_action( 'wp_ajax_skt_patterns_dismiss_notice', array( $this, 'dismiss_nux' ) );
			add_action( 'admin_menu', array( $this, 'add_menu' ), 5 );
		}
		/**
		 * Enqueue scripts.
		 *
		 */
		public function enqueue_scripts() {
			global $wp_customize;

			if ( isset( $wp_customize ) || skt_patterns_is_extra_activated() ) {
				return;
			}

			wp_enqueue_style( 'skt-patterns-admin', get_template_directory_uri() . '/css/admin/admin.css', '', '1' );

			wp_enqueue_script( 'skt-patterns-admin', get_template_directory_uri() . '/assets/js/admin/admin.js', array( 'jquery', 'updates' ), '1', 'all' );

			$skt_patterns_notify = array(
				'nonce' => wp_create_nonce( 'skt_patterns_notice_dismiss' )
			);

			wp_localize_script( 'skt-patterns-admin', 'sktpatternsNUX', $skt_patterns_notify );
		}

		/**
		 * Output admin notices.
		 *
		 */
		public function admin_notices() {
			global $pagenow;

			if ( ( 'themes.php' === $pagenow ) && isset( $_GET[ 'page' ] ) && ( 'skt-patterns' === $_GET[ 'page' ] ) || true === (bool) get_option( 'skt_patterns_notify_dismissed' ) || skt_patterns_is_extra_activated() ) {
				return;
			}

			if (!is_plugin_active('skt-blocks/skt-blocks.php')) {
				echo '<div class="error"><p>'.esc_html('SKT Blocks – Gutenberg based Page Builder plugin is a must required plugin for this theme').'</p></div>';
				}
				
				if (!is_plugin_active('theme-demo-import/theme-demo-import.php')) {
					echo '<div class="error"><p>'.esc_html('Theme Demo Import plugin is a must required plugin for this theme').'</p></div>';
				}	
				
				if (!is_plugin_active('theme-demo-import/theme-demo-import.php') && !is_plugin_active('theme-demo-import/theme-demo-import.php')) {
				echo '<div class="notice mynotice"><p>'.esc_html('Kindly click on Get Started button below to get them installed.').'</p></div>';
				}
				
			?>

<div class="notice notice-info sf-notice-nux is-dismissible"> <span class="sf-icon"> <?php echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/icon-patterns.png" width="250" />'; ?> </span>
  <div class="notice-content">
    <?php if (!is_plugin_active('theme-demo-import/theme-demo-import.php') && !is_plugin_active('theme-demo-import/theme-demo-import.php') && current_user_can( 'install_plugins' ) && current_user_can( 'activate_plugins' ) ) : ?>
    <h2>
      <?php
							/* translators: %s: Theme name */
							printf( esc_html__( 'Thank you for installing %s.', 'skt-patterns' ), '<strong>SKT Patterns</strong>' );
							?>
    </h2>
    <p> <a href="<?php echo esc_url( admin_url( 'themes.php?page=skt-patterns' ) ); ?>" class="button button-primary">
      <?php
								/* translators: %s: Theme name */
								printf( esc_html__( 'Get started with %s', 'skt-patterns' ), 'SKT Patterns' );
								?>
      </a> </p>
    <?php else : ?>
    <h2><?php echo esc_html('Installation almost done....'); ?></h2>
    <p> <a href="<?php echo esc_url( admin_url( 'themes.php?page=skt-patterns' ) ); ?>" class="button button-primary"> <?php echo esc_html('Kindly proceed to next step');?> </a> </p>
    <div class="noticetext"><?php echo esc_html('Note: Kindly close this box if you have already completed above step.');?></div>
    <?php endif; ?>
  </div>
</div>
<?php
		}

		public function add_menu() {
			if ( isset( $wp_customize ) || skt_patterns_is_extra_activated() ) {
				return;
			}
			add_theme_page(
			'SKT Patterns', 'SKT Patterns', 'edit_theme_options', 'skt-patterns', array( $this, 'admin_page' )
			);
		}

		public function admin_page() {


			if ( skt_patterns_is_extra_activated() ) {
				return;
			}
			?>
<div class="notice notice-info sf-notice-nux"> <span class="sf-icon"> <?php echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/icon-patterns.png" width="250" />'; ?> </span>
  <div class="notice-content">
    <?php if ( !skt_patterns_is_extra_activated() && current_user_can( 'install_plugins' ) && current_user_can( 'activate_plugins' ) ) : ?>
    <?php if (!is_plugin_active('theme-demo-import/theme-demo-import.php') && !is_plugin_active('theme-demo-import/theme-demo-import.php')) {?>
    <h2>
      <?php
							/* translators: %s: Theme name */
							printf( esc_html__( 'Thank you for installing %s.', 'skt-patterns' ), '<strong>SKT Patterns</strong>' );
							?>
    </h2>
    <p>
      <?php
							/* translators: %s: Plugin name string */
							printf( esc_html__( 'To take full advantage of all the features this theme has to offer, please install and activate FIRST the %s plugin.', 'skt-patterns' ), '<strong>SKT Blocks – Gutenberg based Page Builder</strong> and then followed by <strong>Theme Demo Import</strong>' );
							?>
    </p>
    <?php } ?>
    <?php if (!is_plugin_active('theme-demo-import/theme-demo-import.php') && !is_plugin_active('theme-demo-import/theme-demo-import.php')) {?>
    <p>
      <?php 
						
						$sktbuilder = array('skt-blocks','theme-demo-import');
						$sktbuilder_php = array('skt-blocks.php','theme-demo-import.php');
						$sktbuilder_title = array('SKT Blocks – Gutenberg based Page Builder','Theme Demo Import');
						
						$pluginactivation = array( 
							array (
							   "slug" => 'skt-blocks',
							   "url" => 'skt-blocks.php',
							   "title" => 'SKT Blocks – Gutenberg based Page Builder'
							)
						 );
						 
						$pluginactivation1 = array( 
							array (
							   "slug" => 'theme-demo-import',
							   "url" => 'theme-demo-import.php',
							   "title" => 'Theme Demo Import'
							)
						 );		
						 
						$match = array_merge($pluginactivation,$pluginactivation1);		
						$countloop = count($match);
						$i=0;
												
						while($match){
							
							 if($i==$countloop) break;
							 $slug = $match[$i]['slug'];
							
							$url = $match[$i]['url'];
							$title = $match[$i]['title'];
							
						
						$plugin_title = 'Install '.$title;
						
						skt_patterns_Plugin_Install::install_plugin_button( $slug, $url, $title, array( 'sf-nux-button' ), __( 'Activated', 'skt-patterns' ), __( 'Activate', 'skt-patterns' ), $plugin_title, 'skt-patterns' ); ?>
    </p>
    <?php $i++; }
					}
					 endif; ?>
    <?php 
					 	if ( is_plugin_active( 'theme-demo-import/theme-demo-import.php' ) ) {
						
						$action = 'theme-demo-import/after_import';		
							
						$patternsdata = get_option( 'skt_patterns_data' );	
						if($patternsdata !="imported"){
					 ?>
                        <p><strong><?php echo esc_html('Kindly click on this import demo content button to complete the process.');?></strong></p>
                        <a href="<?php echo esc_url( admin_url( 'themes.php?page=theme-demo-import' ) ); ?>" class="goimport"><?php echo esc_html('Import Demo Content');?></a>
                        <?php  }else{
					 	?>
						<div class="skt-patterns-customizebox">
                        	  <h2><?php echo esc_html_e('Click On Button To Start Edit Home Page','skt-patterns');?></h2> 	
                        	 <a href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" class="goimport"><?php echo esc_html_e('Go To Editor','skt-patterns');?></a>
                            <div class="clear"></div>
                            <p class="doclink"><?php echo esc_html_e('Check Documentation:','skt-patterns');?> <a href="<?php echo esc_url('https://www.sktthemesdemo.net/documentation/skt-patterns-doc/'); ?>" target="_blank"><?php echo esc_html_e('Click Here','skt-patterns');?></a></p>
                        </div>
                        <?php
					 	}
					 } ?>
  </div>
</div>
<?php
		}

		/**
		 * AJAX dismiss notice.
		 *
		 * @since 2.2.0
		 */
		public function dismiss_nux() {
			$nonce = !empty( $_POST[ 'nonce' ] ) ? sanitize_text_field( wp_unslash( $_POST[ 'nonce' ] ) ) : false;

			if ( !$nonce || !wp_verify_nonce( $nonce, 'skt_patterns_notice_dismiss' ) || !current_user_can( 'manage_options' ) ) {
				die();
			}

			update_option( 'skt_patterns_notify_dismissed', true );
		}

	}

	endif;

return new skt_patterns_Notify_Admin();