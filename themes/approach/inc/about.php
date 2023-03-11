<?php
/**
 * Theme About Page
 *
 * @package Approach
 * @since 1.0
 */

function approach_theme_page_admin_style( $hook ) {
	if ( 'appearance_page_approach-theme' === $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'approach-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
	}
}
add_action( 'admin_enqueue_scripts', 'approach_theme_page_admin_style' );

/**
 * Add theme page
 */
function approach_menu() {
	add_theme_page( esc_html__( 'Approach', 'approach' ), esc_html__( 'Approach', 'approach' ), 'edit_theme_options', 'approach-theme', 'approach_theme_page_display' );
}
add_action( 'admin_menu', 'approach_menu' );

/**
 * Display About page
 */
function approach_theme_page_display() {
	$theme = wp_get_theme();
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'Approach Theme is a  Full Site Editing WordPress theme. It is based on block patterns that allow you to create stunning blogs and websites. The theme comes with a clean and modern responsive design having built in  business  about, and service templates.', 'approach' ); ?></p>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started with Approach!', 'approach' ); ?></h3>
							<p><?php esc_html_e( 'Awesome! Approach has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this outstanding theme.', 'approach' ); ?></p>
							<a target="_blank" href="<?php echo esc_url( 'https://help.webriti.com/category/themes/approach-fse/' ); ?>"><?php esc_html_e( 'Theme instructions', 'approach' ); ?></a>
						</div>
					</div>
				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Important Links', 'approach' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) ); ?>"><?php esc_html_e( 'Theme Info', 'approach' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://fse-approach.webriti.com/' );?>"><?php esc_html_e( 'View Demo', 'approach' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://wordpress.org/support/theme/approach/' );?>"><?php esc_html_e( 'Support', 'approach' ); ?></a>
					</div>
				</div>
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'approach' ); ?></h3>
						<p><?php esc_html_e( 'If  you like our theme. Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'approach' ); ?></p>
						<a href="<?php echo esc_url( 'https://wordpress.org/support/theme/approach/reviews/#new-post' );?>" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'approach' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
?>
