<?php
/**
 * Theme About Page
 *
 * @package lyna
 * @since 1.0
 */

function lyna_admin_plugin_notice() {
    
    $screen = get_current_screen();
    
    if ( ! empty( $screen->base ) && 'appearance_page_lyna-theme' === $screen->base ) {
        return false;
    }
    ?>
    <div class="notice notice-info is-dismissible lyna-admin-notice">
        <div class="lyna-admin-notice-wrapper">
            <h2><?php esc_html_e( 'Lyna Pro', 'lyna' ); ?></h2>
            <p><?php esc_html_e( 'Get your hands on the WordPress Full Site Editing features. Start building your website with advanced block patterns and custom blocks! Get additional 25+ Pre-Designed Block Patterns and 10+ Custom Blocks that are highly customizable and fully responsive.', 'lyna' ); ?></p>
            
            <a target="_blank" class="button-primary button green" href="<?php echo esc_url( 'https://catchthemes.com/themes/lyna-pro/'); ?>"><?php esc_html_e( 'Get Lyna Pro', 'lyna' ); ?></a>
            
            <a class="button" href="<?php echo esc_url( admin_url( 'themes.php?page=lyna-theme' ) ); ?>" ><?php esc_html_e( 'Theme Info', 'lyna' ); ?></a>
        </div>
    </div>
    <?php
}
add_action( 'admin_notices', 'lyna_admin_plugin_notice' );

function lyna_theme_page_admin_style( $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'lyna-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
}
add_action( 'admin_enqueue_scripts', 'lyna_theme_page_admin_style' );

/**
 * Add theme page
 */
function lyna_menu() {
	add_theme_page( esc_html__( 'Lyna', 'lyna' ), esc_html__( 'Lyna', 'lyna' ), 'edit_theme_options', 'lyna-theme', 'lyna_theme_page_display' );
}
add_action( 'admin_menu', 'lyna_menu' );

/**
 * Display About page
 */
function lyna_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'lyna' ); ?></p>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started with Lyna!', 'lyna' ); ?></h3>
							<p><?php esc_html_e( 'Awesome! Lyna has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.', 'lyna' ); ?></p>
							<a target="_blank" href="https://catchthemes.com/themes/lyna/#theme-instructions"><?php esc_html_e( 'Theme documentation', 'lyna' ); ?></a>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'More Features with Lyna Pro Theme', 'lyna' ); ?></h3>
							<p><?php esc_html_e( 'To get more beautiful block patterns and templates, we recommend you activate the Lyna Pro. With the pro theme installed, get more options, blocks, block patterns, templates and template parts.', 'lyna' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href="https://catchthemes.com/themes/lyna-pro"><?php esc_html_e( 'Buy Lyna Pro', 'lyna' ); ?></a>
						</div>
					</div>
				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Important Links', 'lyna' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) ); ?>"><?php esc_html_e( 'Theme Info', 'lyna' ); ?></a>
						<a target="_blank" href="https://fse.catchthemes.com/lyna"><?php esc_html_e( 'View Demo', 'lyna' ); ?></a>
						<a  target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) . '/#theme-instructions' ); ?>"><?php esc_html_e( 'Theme Instructions', 'lyna' ); ?></a>
						<a  target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) . '/#changelog' ); ?>"><?php esc_html_e( 'Change log', 'lyna' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://catchthemes.com/support-forum/forum/full-site-editing/' ); ?>"><?php esc_html_e( 'Support', 'lyna' ); ?></a>
					</div>
				</div>
				
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'lyna' ); ?></h3>
						<p><?php esc_html_e( 'Loved Lyna? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'lyna' ); ?></p>
						<a href="https://wordpress.org/support/theme/lyna/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'lyna' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
