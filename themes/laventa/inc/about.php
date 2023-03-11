<?php
/**
 * Theme About Page
 *
 * @package LaVenta
 * @since 1.0
 */

function laventa_admin_plugin_notice() {
    
    $screen = get_current_screen();
    
    if ( ! empty( $screen->base ) && 'appearance_page_laventa-theme' === $screen->base ) {
        return false;
    }
    ?>
    <div class="notice notice-info is-dismissible laventa-admin-notice">
        <div class="laventa-admin-notice-wrapper">
            <h2><?php esc_html_e( 'LaVenta Pro', 'laventa' ); ?></h2>
            <p><?php esc_html_e( 'Get your hands on the WordPress Full Site Editing features. Start building your website with advanced block patterns and custom blocks! Get additional 44+ Pre-Designed Block Patterns, 25 Templates, and 21 Template Parts that are highly customizable and fully responsive.', 'laventa' ); ?></p>
            
            <a target="_blank" class="button-primary button green" href="<?php echo esc_url( 'https://catchthemes.com/themes/laventa-pro/'); ?>"><?php esc_html_e( 'Get LaVenta Pro', 'laventa' ); ?></a>
            
            <a class="button" href="<?php echo esc_url( admin_url( 'themes.php?page=laventa-theme' ) ); ?>" ><?php esc_html_e( 'Theme Info', 'laventa' ); ?></a>
        </div>
    </div>
    <?php
}
add_action( 'admin_notices', 'laventa_admin_plugin_notice' );

function laventa_theme_page_admin_style( $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'laventa-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
}
add_action( 'admin_enqueue_scripts', 'laventa_theme_page_admin_style' );

/**
 * Add theme page
 */
function laventa_menu() {
	add_theme_page( esc_html__( 'LaVenta', 'laventa' ), esc_html__( 'LaVenta', 'laventa' ), 'edit_theme_options', 'laventa-theme', 'laventa_theme_page_display' );
}
add_action( 'admin_menu', 'laventa_menu' );

/**
 * Display About page
 */
function laventa_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'laventa' ); ?></p>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started with LaVenta!', 'laventa' ); ?></h3>
							<p><?php esc_html_e( 'Awesome! LaVenta has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.', 'laventa' ); ?></p>
							<a target="_blank" href="https://catchthemes.com/themes/laventa/#theme-instructions"><?php esc_html_e( 'Theme instructions', 'laventa' ); ?></a>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'More Features with LaVenta Pro Theme', 'laventa' ); ?></h3>
							<p><?php esc_html_e( 'To get more beautiful block patterns and templates, we recommend you activate the LaVenta Pro. With the pro theme installed, get more options, blocks, block patterns, templates and template parts.', 'laventa' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href="https://catchthemes.com/themes/laventa-pro/"><?php esc_html_e( 'Buy LaVenta Pro', 'laventa' ); ?></a>
						</div>
					</div>
					
				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Important Links', 'laventa' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) ); ?>"><?php esc_html_e( 'Theme Info', 'laventa' ); ?></a>
						<a target="_blank" href="https://fse.catchthemes.com/laventa-free/"><?php esc_html_e( 'View Demo', 'laventa' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( "https://catchthemes.com/fse-faq" ); ?>"><?php esc_html_e( 'FSE FAQs', 'laventa' ); ?></a>
						<a  target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) . '/#changelog' ); ?>"><?php esc_html_e( 'Change log', 'laventa' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://catchthemes.com/support-forum/forum/full-site-editing/' ); ?>"><?php esc_html_e( 'Support', 'laventa' ); ?></a>
					</div>
				</div>
				
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'laventa' ); ?></h3>
						<p><?php esc_html_e( 'Loved LaVenta? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'laventa' ); ?></p>
						<a href="https://wordpress.org/support/theme/laventa/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'laventa' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}