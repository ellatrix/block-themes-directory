<?php
/**
 * Theme About Page
 *
 * @package Catch_Bells
 * @since 1.0
 */

function catch_bells_admin_plugin_notice() {
    
    $screen = get_current_screen();
    
    if ( ! empty( $screen->base ) && 'appearance_page_catch-bells-theme' === $screen->base ) {
        return false;
    }
    ?>
    <div class="notice notice-info is-dismissible catch-bells-admin-notice">
        <div class="catch-bells-admin-notice-wrapper">
            <h2><?php esc_html_e( 'Catch Bells Pro', 'catch-bells' ); ?></h2>
            <p><?php esc_html_e( 'Get your hands on the WordPress Full Site Editing features. Start building your website with advanced block patterns and custom blocks! Get additional 25+ Pre-Designed Block Patterns and 10+ Custom Blocks that are highly customizable and fully responsive.', 'catch-bells' ); ?></p>
            
            <a target="_blank" class="button-primary button green" href="<?php echo esc_url( 'https://catchthemes.com/themes/catch-bells-pro/'); ?>"><?php esc_html_e( 'Get Catch Bells Pro', 'catch-bells' ); ?></a>
            
            <a class="button" href="<?php echo esc_url( admin_url( 'themes.php?page=catch-bells-theme' ) ); ?>" ><?php esc_html_e( 'Theme Info', 'catch-bells' ); ?></a>
        </div>
    </div>
    <?php
}
add_action( 'admin_notices', 'catch_bells_admin_plugin_notice' );

function catch_bells_theme_page_admin_style( $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'catch-bells-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
}
add_action( 'admin_enqueue_scripts', 'catch_bells_theme_page_admin_style' );

/**
 * Add theme page
 */
function catch_bells_menu() {
	add_theme_page( esc_html__( 'Catch Bells', 'catch-bells' ), esc_html__( 'Catch Bells', 'catch-bells' ), 'edit_theme_options', 'catch-bells-theme', 'catch_bells_theme_page_display' );
}
add_action( 'admin_menu', 'catch_bells_menu' );

/**
 * Display About page
 */
function catch_bells_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'catch-bells' ); ?></p>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started with Catch Bells!', 'catch-bells' ); ?></h3>
							<p><?php esc_html_e( 'Awesome! Catch Bells has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.', 'catch-bells' ); ?></p>
							<a target="_blank" href="https://catchthemes.com/themes/catch-bells/#theme-instructions"><?php esc_html_e( 'Theme instructions', 'catch-bells' ); ?></a>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'More Features with Catch Bells Pro Theme', 'catch-bells' ); ?></h3>
							<p><?php esc_html_e( 'To get more beautiful block patterns and templates, we recommend you activate the Catch Bells Pro. With the pro theme installed, get more options, blocks, block patterns, templates and template parts.', 'catch-bells' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href="https://catchthemes.com/themes/catch-bells-pro/"><?php esc_html_e( 'Buy Catch Bells Pro', 'catch-bells' ); ?></a>
						</div>
					</div>

					<div class="welcome-panel-column two-columns">
						<div class="compare-table welcome-panel-column-content">
							<h3><?php esc_html_e( 'Compare Free Vs Pro', 'catch-bells' ); ?></h3>
							<table>
								<thead>
								<tr>
								<th><?php esc_html_e( 'Features', 'catch-bells' ); ?></th>
								<th><?php esc_html_e( 'Catch Bells', 'catch-bells' ); ?></th>
								<th><?php esc_html_e( 'Catch Bells Pro', 'catch-bells' ); ?></th>
								</tr>
								</thead>
								<tbody>
								<tr>
								<td><?php esc_html_e( 'Responsive Design', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Super Easy Setup', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Color Options for various sections', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Case Study', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Skills Bar', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Masonry', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Popup Video', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Header Search ', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Header Social', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Icons', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Slider', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Tabs', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Playlist ', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>	
								<td><?php esc_html_e( 'Header Media', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Contact', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Hero Content', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Hero Content With Background', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Featured Content', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Featured Post', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Header with social search', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Events', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Logos', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Portfolio', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Services', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Stats', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Sidebar', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Team', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Testimonials', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( '404 Header With Background', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( '404 Header', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( '404 Content', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Post Header With Background', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Archive Header', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Archive Header with Background', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Search Header with Background', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Search Header', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'CTA', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'CTA With Video', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Footer Default', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Footer with Three columns', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Footer with Four Columns', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Recent Blog', 'catch-bells' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
					
				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Important Links', 'catch-bells' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) ); ?>"><?php esc_html_e( 'Theme Info', 'catch-bells' ); ?></a>
						<a target="_blank" href="https://fse.catchthemes.com/catch-bells-free"><?php esc_html_e( 'View Demo', 'catch-bells' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( "https://catchthemes.com/fse-faq" ); ?>"><?php esc_html_e( 'FSE FAQs', 'catch-bells' ); ?></a>
						<a  target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) . '/#changelog' ); ?>"><?php esc_html_e( 'Change log', 'catch-bells' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://catchthemes.com/support-forum/forum/full-site-editing/' ); ?>"><?php esc_html_e( 'Support', 'catch-bells' ); ?></a>
					</div>
				</div>
				
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'catch-bells' ); ?></h3>
						<p><?php esc_html_e( 'Loved Catch Bells? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'catch-bells' ); ?></p>
						<a href="https://wordpress.org/support/theme/catch-bells/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'catch-bells' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
