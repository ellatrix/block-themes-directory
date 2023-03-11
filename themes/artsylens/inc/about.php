<?php
/**
 * Theme About Page
 *
 * @package artsylens
 * @since 1.0
 */

function artsylens_admin_plugin_notice() {
    
    $screen = get_current_screen();
    
    if ( ! empty( $screen->base ) && 'appearance_page_artsylens-theme' === $screen->base ) {
        return false;
    }
    ?>
    <div class="notice notice-info is-dismissible artsylens-admin-notice">
        <div class="artsylens-admin-notice-wrapper">
            <h2><?php esc_html_e( 'ArtsyLens Pro', 'artsylens' ); ?></h2>
            <p><?php esc_html_e( 'Get your hands on the WordPress Full Site Editing features. Start building your website with advanced block patterns and custom blocks! Get additional 25+ Pre-Designed Block Patterns and 10+ Custom Blocks that are highly customizable and fully responsive.', 'artsylens' ); ?></p>
            
            <a target="_blank" class="button-primary button green" href="<?php echo esc_url( 'https://catchthemes.com/themes/artsylens-pro/'); ?>"><?php esc_html_e( 'Get ArtsyLens Pro', 'artsylens' ); ?></a>
            
            <a class="button" href="<?php echo esc_url( admin_url( 'themes.php?page=artsylens-theme' ) ); ?>" ><?php esc_html_e( 'Theme Info', 'artsylens' ); ?></a>
        </div>
    </div>
    <?php
}
add_action( 'admin_notices', 'artsylens_admin_plugin_notice' );

function artsylens_theme_page_admin_style( $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'artsylens-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
}
add_action( 'admin_enqueue_scripts', 'artsylens_theme_page_admin_style' );

/**
 * Add theme page
 */
function artsylens_menu() {
	add_theme_page( esc_html__( 'ArtsyLens', 'artsylens' ), esc_html__( 'ArtsyLens', 'artsylens' ), 'edit_theme_options', 'artsylens-theme', 'artsylens_theme_page_display' );
}
add_action( 'admin_menu', 'artsylens_menu' );

/**
 * Display About page
 */
function artsylens_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'artsylens' ); ?></p>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started with ArtsyLens!', 'artsylens' ); ?></h3>
							<p><?php esc_html_e( 'Awesome! ArtsyLens has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.', 'artsylens' ); ?></p>
							<a target="_blank" href="https://catchthemes.com/themes/artsylens/#theme-instructions"><?php esc_html_e( 'Theme instructions', 'artsylens' ); ?></a>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'More Features with ArtsyLens Pro Theme', 'artsylens' ); ?></h3>
							<p><?php esc_html_e( 'To get more beautiful block patterns and templates, we recommend you activate the ArtsyLens Pro. With the pro theme installed, get more options, blocks, block patterns, templates and template parts.', 'artsylens' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href="https://catchthemes.com/themes/artsylens-pro/"><?php esc_html_e( 'Buy ArtsyLens Pro', 'artsylens' ); ?></a>
						</div>
					</div>
					
				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Important Links', 'artsylens' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) ); ?>"><?php esc_html_e( 'Theme Info', 'artsylens' ); ?></a>
						<a target="_blank" href="https://fse.catchthemes.com/artsylens"><?php esc_html_e( 'View Demo', 'artsylens' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( "https://catchthemes.com/fse-faq" ); ?>"><?php esc_html_e( 'FSE FAQs', 'artsylens' ); ?></a>
						<a  target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) . '/#changelog' ); ?>"><?php esc_html_e( 'Change log', 'artsylens' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://catchthemes.com/support-forum/forum/full-site-editing/' ); ?>"><?php esc_html_e( 'Support', 'artsylens' ); ?></a>
					</div>
				</div>
				
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'artsylens' ); ?></h3>
						<p><?php esc_html_e( 'Loved ArtsyLens? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'artsylens' ); ?></p>
						<a href="https://wordpress.org/support/theme/artsylens/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'artsylens' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
