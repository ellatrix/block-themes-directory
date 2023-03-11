<?php
/**
 * Theme About Page
 *
 * @package VisionArt
 * @since 1.0
 */

function visionart_admin_plugin_notice() {
    
    $screen = get_current_screen();
    
    if ( ! empty( $screen->base ) && 'appearance_page_visionart-theme' === $screen->base ) {
        return false;
    }
    ?>
    <div class="notice notice-info is-dismissible visionart-admin-notice">
        <div class="visionart-admin-notice-wrapper">
            <h2><?php esc_html_e( 'VisionArt Pro', 'visionart' ); ?></h2>
            <p><?php esc_html_e( 'Get your hands on the WordPress Full Site Editing features. Start building your website with advanced block patterns and custom blocks! Get additional 32+ Pre-Designed Block Patterns, 26 FSE Templates, and 15 Template Parts  that are highly customizable and fully responsive.', 'visionart' ); ?></p>
            
            <a target="_blank" class="button-primary button green" href="<?php echo esc_url( 'https://catchthemes.com/themes/visionart-pro/'); ?>"><?php esc_html_e( 'Get VisionArt Pro', 'visionart' ); ?></a>
            
            <a class="button" href="<?php echo esc_url( admin_url( 'themes.php?page=visionart-theme' ) ); ?>" ><?php esc_html_e( 'Theme Info', 'visionart' ); ?></a>
        </div>
    </div>
    <?php
}
add_action( 'admin_notices', 'visionart_admin_plugin_notice' );

function visionart_theme_page_admin_style( $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'visionart-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
}
add_action( 'admin_enqueue_scripts', 'visionart_theme_page_admin_style' );

/**
 * Add theme page
 */
function visionart_menu() {
	add_theme_page( esc_html__( 'VisionArt', 'visionart' ), esc_html__( 'VisionArt', 'visionart' ), 'edit_theme_options', 'visionart-theme', 'visionart_theme_page_display' );
}
add_action( 'admin_menu', 'visionart_menu' );

/**
 * Display About page
 */
function visionart_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'visionart' ); ?></p>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started with VisionArt!', 'visionart' ); ?></h3>
							<p><?php esc_html_e( 'Awesome! VisionArt has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.', 'visionart' ); ?></p>
							<a target="_blank" href="https://catchthemes.com/themes/visionart/#theme-instructions"><?php esc_html_e( 'Theme instructions', 'visionart' ); ?></a>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'More Features with VisionArt Pro Theme', 'visionart' ); ?></h3>
							<p><?php esc_html_e( 'To get more beautiful block patterns and templates, we recommend you upgrade to VisionArt Pro. With the pro theme installed, get more options, blocks, block patterns, templates and template parts.', 'visionart' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href="https://catchthemes.com/themes/visionart-pro/"><?php esc_html_e( 'Buy VisionArt', 'visionart' ); ?></a>
						</div>
					</div>
					
				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Important Links', 'visionart' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) ); ?>"><?php esc_html_e( 'Theme Info', 'visionart' ); ?></a>
						<a target="_blank" href="https://fse.catchthemes.com/visionart/"><?php esc_html_e( 'View Demo', 'visionart' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( "https://catchthemes.com/fse-faq" ); ?>"><?php esc_html_e( 'FSE FAQs', 'visionart' ); ?></a>
						<a  target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) . '/#changelog' ); ?>"><?php esc_html_e( 'Change log', 'visionart' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://catchthemes.com/support-forum/forum/full-site-editing/' ); ?>"><?php esc_html_e( 'Support', 'visionart' ); ?></a>
					</div>
				</div>
				
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'visionart' ); ?></h3>
						<p><?php esc_html_e( 'Loved VisionArt? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'visionart' ); ?></p>
						<a href="https://wordpress.org/support/theme/visionart/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'visionart' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
