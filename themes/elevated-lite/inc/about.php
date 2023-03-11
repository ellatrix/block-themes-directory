<?php
/**
 * Theme About Page
 *
 * @package Elevated Lite
 * @since 1.0
 */

function elevated_lite_theme_page_admin_style( $hook ) {
	if ( 'appearance_page_elevated-lite-theme' === $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'elevated-lite-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
	}
}
add_action( 'admin_enqueue_scripts', 'elevated_lite_theme_page_admin_style' );

/**
 * Add theme page
 */
function elevated_lite_menu() {
	add_theme_page( esc_html__( 'Elevated Lite', 'elevated-lite' ), esc_html__( 'Elevated Lite', 'elevated-lite' ), 'edit_theme_options', 'elevated-lite-theme', 'elevated_lite_theme_page_display' );
}
add_action( 'admin_menu', 'elevated_lite_menu' );

/**
 * Display About page
 */
function elevated_lite_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'elevated-lite' ); ?></p>
				<div class="logo-panel">
					<a href="<?php echo esc_url('https://risingthemes.net/','elevated-lite'); ?>"><img src="<?php echo esc_url( get_template_directory_uri().'/assets/img/logo.png' ); ?>"></a>
				</div>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started with Elevated Lite!', 'elevated-lite' ); ?></h3>
							<p><?php esc_html_e( 'Awesome! Elevated Lite has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.', 'elevated-lite' ); ?></p>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'More Features with Elevate Pro Theme', 'elevated-lite' ); ?></h3>
							<p><?php esc_html_e( 'To get more features and unique home page sections, we recommend you activate the Elevate Pro. With the pro theme installed, get more options like google fonts, colors, sliders, page template, shortcodes and more.', 'elevated-lite' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href="https://risingthemes.net/shop/elevate-wordpress-theme/"><?php esc_html_e( 'Buy Elevate Pro', 'elevated-lite' ); ?></a>
						</div>
					</div>
					
				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Important Links', 'elevated-lite' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( 'https://risingthemes.net/shop/elevate-wordpress-theme/' ); ?>"><?php esc_html_e( 'Theme Info', 'elevated-lite' ); ?></a>
						<a target="_blank" href="http://risingthemesdemo.net/elevate/"><?php esc_html_e( 'View Demo', 'elevated-lite' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://risingthemes.net/forums/' ); ?>"><?php esc_html_e( 'Support', 'elevated-lite' ); ?></a>
					</div>
				</div>
				
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'elevated-lite' ); ?></h3>
						<p><?php esc_html_e( 'Loved Elevated Lite? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'elevated-lite' ); ?></p>
						<a href="https://wordpress.org/support/theme/elevated-lite/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'elevated-lite' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
