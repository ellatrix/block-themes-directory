<?php
/**
 * Theme About Page
 *
 * @package Rhythmic
 * @since 1.0
 */

function rhythmic_admin_plugin_notice() {
    
    $screen = get_current_screen();
    
    if ( ! empty( $screen->base ) && 'appearance_page_rhythmic-theme' === $screen->base ) {
        return false;
    }
    ?>
    <div class="notice notice-info is-dismissible rhythmic-admin-notice">
        <div class="rhythmic-admin-notice-wrapper">
            <h2><?php esc_html_e( 'Rhythmic Pro', 'rhythmic' ); ?></h2>
            <p><?php esc_html_e( 'Get your hands on the WordPress Full Site Editing features. Start building your website with advanced block patterns and custom blocks! Get additional 28+ Pre-Designed Block Patterns and 10+ Custom Blocks that are highly customizable and fully responsive.', 'rhythmic' ); ?></p>
            
            <a target="_blank" class="button-primary button green" href="<?php echo esc_url( 'https://catchthemes.com/themes/rhythmic-pro/'); ?>"><?php esc_html_e( 'Get Rhythmic Pro', 'rhythmic' ); ?></a>
            
            <a class="button" href="<?php echo esc_url( admin_url( 'themes.php?page=rhythmic-theme' ) ); ?>" ><?php esc_html_e( 'Theme Info', 'rhythmic' ); ?></a>
        </div>
    </div>
    <?php
}
add_action( 'admin_notices', 'rhythmic_admin_plugin_notice' );

function rhythmic_theme_page_admin_style( $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'rhythmic-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
}
add_action( 'admin_enqueue_scripts', 'rhythmic_theme_page_admin_style' );

/**
 * Add theme page
 */
function rhythmic_menu() {
	add_theme_page( esc_html__( 'Rhythmic', 'rhythmic' ), esc_html__( 'Rhythmic', 'rhythmic' ), 'edit_theme_options', 'rhythmic-theme', 'rhythmic_theme_page_display' );
}
add_action( 'admin_menu', 'rhythmic_menu' );

/**
 * Display About page
 */
function rhythmic_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'rhythmic' ); ?></p>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started with Rhythmic!', 'rhythmic' ); ?></h3>
							<p><?php esc_html_e( 'Awesome! Rhythmic has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.', 'rhythmic' ); ?></p>
							<a target="_blank" href="https://catchthemes.com/themes/rhythmic/#theme-instructions"><?php esc_html_e( 'Theme instructions', 'rhythmic' ); ?></a>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'More Features with Rhythmic Pro Theme', 'rhythmic' ); ?></h3>
							<p><?php esc_html_e( 'To get more beautiful block patterns and templates, we recommend you activate the Rhythmic Pro. With the pro theme installed, get more options, blocks, block patterns, templates and template parts.', 'rhythmic' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href="https://catchthemes.com/themes/rhythmic-pro/"><?php esc_html_e( 'Buy Rhythmic Pro', 'rhythmic' ); ?></a>
						</div>
					</div>

					<div class="welcome-panel-column two-columns">
						<div class="compare-table welcome-panel-column-content">
							<h3><?php esc_html_e( 'Compare Free Vs Pro', 'rhythmic' ); ?></h3>
							<table>
								<thead>
								<tr>
								<th><?php esc_html_e( 'Features', 'rhythmic' ); ?></th>
								<th><?php esc_html_e( 'Rhythmic', 'rhythmic' ); ?></th>
								<th><?php esc_html_e( 'Rhythmic Pro', 'rhythmic' ); ?></th>
								</tr>
								</thead>
								<tbody>
								<tr>
								<td><?php esc_html_e( 'Responsive Design', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Super Easy Setup', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Color Options for various sections', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Case Study', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Skills Bar', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Masonry', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Popup Video', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Header Search ', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Header Social', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Icons', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Date', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Slider', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Tabs', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Playlist ', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Contact', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Event', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>	
								<td><?php esc_html_e( 'Header Media', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Hero Section', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Playlists', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Product', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Services', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Stats', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Sticky Playlist', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Testimonial', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Video Section', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Archive Header With Background', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Archive Header', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Footer with Three columns', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Footer with Four Columns', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Header with Search Cart', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Header with Social Search', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( '404 Content', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Post Header Default', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Post Header with Background', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Post Header', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Recent Blog', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Search header with Background', 'rhythmic' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Search Header', 'rhythmic' ); ?></th>
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
						<h3><?php esc_html_e( 'Important Links', 'rhythmic' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) ); ?>"><?php esc_html_e( 'Theme Info', 'rhythmic' ); ?></a>
						<a target="_blank" href="https://fse.catchthemes.com/rhythmic"><?php esc_html_e( 'View Demo', 'rhythmic' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( "https://catchthemes.com/fse-faq" ); ?>"><?php esc_html_e( 'FSE FAQs', 'rhythmic' ); ?></a>
						<a  target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) . '/#changelog' ); ?>"><?php esc_html_e( 'Change log', 'rhythmic' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://catchthemes.com/support-forum/forum/full-site-editing/' ); ?>"><?php esc_html_e( 'Support', 'rhythmic' ); ?></a>
					</div>
				</div>
				
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'rhythmic' ); ?></h3>
						<p><?php esc_html_e( 'Loved Rhythmic? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'rhythmic' ); ?></p>
						<a href="https://wordpress.org/support/theme/rhythmic/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'rhythmic' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
