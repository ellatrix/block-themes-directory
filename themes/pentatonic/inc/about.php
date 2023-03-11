<?php
/**
 * Theme About Page
 *
 * @package Pentatonic
 * @since 1.0
 */

function pentatonic_admin_plugin_notice() {
    
    $screen = get_current_screen();
    
    if ( ! empty( $screen->base ) && 'appearance_page_pentatonic-theme' === $screen->base ) {
        return false;
    }
    ?>
    <div class="notice notice-info is-dismissible pentatonic-admin-notice">
        <div class="pentatonic-admin-notice-wrapper">
            <h2><?php esc_html_e( 'Pentatonic Pro', 'pentatonic' ); ?></h2>
            <p><?php esc_html_e( 'Get your hands on the WordPress Full Site Editing features. Start building your website with advanced block patterns and custom blocks! Get additional 25+ Pre-Designed Block Patterns and 10+ Custom Blocks that are highly customizable and fully responsive.', 'pentatonic' ); ?></p>
            
            <a target="_blank" class="button-primary button green" href="<?php echo esc_url( 'https://catchthemes.com/themes/pentatonic-pro/'); ?>"><?php esc_html_e( 'Get Pentatonic Pro', 'pentatonic' ); ?></a>
            
            <a class="button" href="<?php echo esc_url( admin_url( 'themes.php?page=pentatonic-theme' ) ); ?>" ><?php esc_html_e( 'Theme Info', 'pentatonic' ); ?></a>
        </div>
    </div>
    <?php
}
add_action( 'admin_notices', 'pentatonic_admin_plugin_notice' );

function pentatonic_theme_page_admin_style( $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'pentatonic-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
}
add_action( 'admin_enqueue_scripts', 'pentatonic_theme_page_admin_style' );

/**
 * Add theme page
 */
function pentatonic_menu() {
	add_theme_page( esc_html__( 'Pentatonic', 'pentatonic' ), esc_html__( 'Pentatonic', 'pentatonic' ), 'edit_theme_options', 'pentatonic-theme', 'pentatonic_theme_page_display' );
}
add_action( 'admin_menu', 'pentatonic_menu' );

/**
 * Display About page
 */
function pentatonic_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'pentatonic' ); ?></p>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started with Pentatonic!', 'pentatonic' ); ?></h3>
							<p><?php esc_html_e( 'Awesome! Pentatonic has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.', 'pentatonic' ); ?></p>
							<a target="_blank" href="https://catchthemes.com/themes/pentatonic/#theme-instructions"><?php esc_html_e( 'Theme instructions', 'pentatonic' ); ?></a>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'More Features with Pentatonic Pro Theme', 'pentatonic' ); ?></h3>
							<p><?php esc_html_e( 'To get more beautiful block patterns and templates, we recommend you activate the Pentatonic Pro. With the pro theme installed, get more options, blocks, block patterns, templates and template parts.', 'pentatonic' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href="https://catchthemes.com/themes/pentatonic-pro/"><?php esc_html_e( 'Buy Pentatonic Pro', 'pentatonic' ); ?></a>
						</div>
					</div>
					
				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Important Links', 'pentatonic' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) ); ?>"><?php esc_html_e( 'Theme Info', 'pentatonic' ); ?></a>
						<a target="_blank" href="https://fse.catchthemes.com/pentatonic"><?php esc_html_e( 'View Demo', 'pentatonic' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( "https://catchthemes.com/fse-faq" ); ?>"><?php esc_html_e( 'FSE FAQs', 'pentatonic' ); ?></a>
						<a  target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) . '/#changelog' ); ?>"><?php esc_html_e( 'Change log', 'pentatonic' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://catchthemes.com/support-forum/forum/full-site-editing/' ); ?>"><?php esc_html_e( 'Support', 'pentatonic' ); ?></a>
					</div>
				</div>
				
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'pentatonic' ); ?></h3>
						<p><?php esc_html_e( 'Loved Pentatonic? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'pentatonic' ); ?></p>
						<a href="https://wordpress.org/support/theme/pentatonic/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'pentatonic' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
