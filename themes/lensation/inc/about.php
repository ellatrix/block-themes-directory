<?php
/**
 * Theme About Page
 *
 * @package Lensation
 * @since 1.0
 */

function lensation_admin_plugin_notice() {
    
    $screen = get_current_screen();
    
    if ( ! empty( $screen->base ) && 'appearance_page_lensation-theme' === $screen->base ) {
        return false;
    }
    ?>
    <div class="notice notice-info is-dismissible lensation-admin-notice">
        <div class="lensation-admin-notice-wrapper">
            <h2><?php esc_html_e( 'Lensation Pro', 'lensation' ); ?></h2>
            <p><?php esc_html_e( 'Get your hands on the WordPress Full Site Editing features. Start building your website with advanced block patterns and custom blocks! Get additional 25+ Pre-Designed Block Patterns and 10+ Custom Blocks that are highly customizable and fully responsive.', 'lensation' ); ?></p>
            
            <a target="_blank" class="button-primary button green" href="<?php echo esc_url( 'https://catchthemes.com/themes/lensation-pro/'); ?>"><?php esc_html_e( 'Get Lensation Pro', 'lensation' ); ?></a>
            
            <a class="button" href="<?php echo esc_url( admin_url( 'themes.php?page=lensation-theme' ) ); ?>" ><?php esc_html_e( 'Theme Info', 'lensation' ); ?></a>
        </div>
    </div>
    <?php
}
add_action( 'admin_notices', 'lensation_admin_plugin_notice' );

function lensation_theme_page_admin_style( $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'lensation-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
}
add_action( 'admin_enqueue_scripts', 'lensation_theme_page_admin_style' );

/**
 * Add theme page
 */
function lensation_menu() {
	add_theme_page( esc_html__( 'Lensation', 'lensation' ), esc_html__( 'Lensation', 'lensation' ), 'edit_theme_options', 'lensation-theme', 'lensation_theme_page_display' );
}
add_action( 'admin_menu', 'lensation_menu' );

/**
 * Display About page
 */
function lensation_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'lensation' ); ?></p>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started with Lensation!', 'lensation' ); ?></h3>
							<p><?php esc_html_e( 'Awesome! Lensation has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.', 'lensation' ); ?></p>
							<a target="_blank" href="https://catchthemes.com/themes/lensation/#theme-instructions"><?php esc_html_e( 'Theme instructions', 'lensation' ); ?></a>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'More Features with Lensation Pro Theme', 'lensation' ); ?></h3>
							<p><?php esc_html_e( 'To get more beautiful block patterns and templates, we recommend you activate the Lensation Pro. With the pro theme installed, get more options, blocks, block patterns, templates and template parts.', 'lensation' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href="https://catchthemes.com/themes/lensation-pro/"><?php esc_html_e( 'Buy Lensation Pro', 'lensation' ); ?></a>
						</div>
					</div>
					
				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Important Links', 'lensation' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) ); ?>"><?php esc_html_e( 'Theme Info', 'lensation' ); ?></a>
						<a target="_blank" href="https://fse.catchthemes.com/lensation"><?php esc_html_e( 'View Demo', 'lensation' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( "https://catchthemes.com/fse-faq" ); ?>"><?php esc_html_e( 'FSE FAQs', 'lensation' ); ?></a>
						<a  target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) . '/#changelog' ); ?>"><?php esc_html_e( 'Change log', 'lensation' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://catchthemes.com/support-forum/forum/full-site-editing/' ); ?>"><?php esc_html_e( 'Support', 'lensation' ); ?></a>
					</div>
				</div>
				
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'lensation' ); ?></h3>
						<p><?php esc_html_e( 'Loved Lensation? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'lensation' ); ?></p>
						<a href="https://wordpress.org/support/theme/lensation/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'lensation' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
