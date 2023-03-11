<?php
/**
 * Theme About Page
 *
 * @package Globetrotter
 * @since 1.0
 */

function globetrotter_admin_plugin_notice() {
    
    $screen = get_current_screen();
    
    if ( ! empty( $screen->base ) && 'appearance_page_globetrotter-theme' === $screen->base ) {
        return false;
    }
    ?>
    <div class="notice notice-info is-dismissible globetrotter-admin-notice">
        <div class="globetrotter-admin-notice-wrapper">
            <h2><?php esc_html_e( 'Globetrotter Pro', 'globetrotter' ); ?></h2>
            <p><?php esc_html_e( 'Get your hands on the WordPress Full Site Editing features. Start building your website with advanced block patterns and custom blocks! Get additional 25+ Pre-Designed Block Patterns and 10+ Custom Blocks that are highly customizable and fully responsive.', 'globetrotter' ); ?></p>
            
            <a target="_blank" class="button-primary button green" href="<?php echo esc_url( 'https://catchthemes.com/themes/globetrotter-pro/'); ?>"><?php esc_html_e( 'Get Globetrotter Pro', 'globetrotter' ); ?></a>
            
            <a class="button" href="<?php echo esc_url( admin_url( 'themes.php?page=globetrotter-theme' ) ); ?>" ><?php esc_html_e( 'Theme Info', 'globetrotter' ); ?></a>
        </div>
    </div>
    <?php
}
add_action( 'admin_notices', 'globetrotter_admin_plugin_notice' );

function globetrotter_theme_page_admin_style( $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'globetrotter-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
}
add_action( 'admin_enqueue_scripts', 'globetrotter_theme_page_admin_style' );

/**
 * Add theme page
 */
function globetrotter_menu() {
	add_theme_page( esc_html__( 'Globetrotter', 'globetrotter' ), esc_html__( 'Globetrotter', 'globetrotter' ), 'edit_theme_options', 'globetrotter-theme', 'globetrotter_theme_page_display' );
}
add_action( 'admin_menu', 'globetrotter_menu' );

/**
 * Display About page
 */
function globetrotter_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'globetrotter' ); ?></p>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started with Globetrotter!', 'globetrotter' ); ?></h3>
							<p><?php esc_html_e( 'Awesome! Globetrotter has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.', 'globetrotter' ); ?></p>
							<a target="_blank" href="https://catchthemes.com/themes/globetrotter/#theme-instructions"><?php esc_html_e( 'Theme instructions', 'globetrotter' ); ?></a>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'More Features with Globetrotter Pro Theme', 'globetrotter' ); ?></h3>
							<p><?php esc_html_e( 'To get more beautiful block patterns and templates, we recommend you activate the Globetrotter Pro. With the pro theme installed, get more options, blocks, block patterns, templates and template parts.', 'globetrotter' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href="https://catchthemes.com/themes/globetrotter-pro/"><?php esc_html_e( 'Buy Globetrotter Pro', 'globetrotter' ); ?></a>
						</div>
					</div>
					
				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Important Links', 'globetrotter' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) ); ?>"><?php esc_html_e( 'Theme Info', 'globetrotter' ); ?></a>
						<a target="_blank" href="https://fse.catchthemes.com/globetrotter-free"><?php esc_html_e( 'View Demo', 'globetrotter' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( "https://catchthemes.com/fse-faq" ); ?>"><?php esc_html_e( 'FSE FAQs', 'globetrotter' ); ?></a>
						<a  target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) . '/#changelog' ); ?>"><?php esc_html_e( 'Change log', 'globetrotter' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://catchthemes.com/support-forum/forum/full-site-editing/' ); ?>"><?php esc_html_e( 'Support', 'globetrotter' ); ?></a>
					</div>
				</div>
				
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'globetrotter' ); ?></h3>
						<p><?php esc_html_e( 'Loved Globetrotter? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'globetrotter' ); ?></p>
						<a href="https://wordpress.org/support/theme/globetrotter/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'globetrotter' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
