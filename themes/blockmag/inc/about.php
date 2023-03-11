<?php
/**
 * Theme About Page
 *
 * @package BlockMag
 * @since 1.0
 */

function blockmag_admin_plugin_notice() {
    
    $screen = get_current_screen();
    
    if ( ! empty( $screen->base ) && 'appearance_page_blockmag-theme' === $screen->base ) {
        return false;
    }
    ?>
    <div class="notice notice-info is-dismissible blockmag-admin-notice">
        <div class="blockmag-admin-notice-wrapper">
            <h2><?php esc_html_e( 'BlockMag Pro', 'blockmag' ); ?></h2>
            <p><?php esc_html_e( 'Get your hands on the WordPress Full Site Editing features. Start building your website with advanced block patterns and custom blocks! Get additional 50+ Pre-Designed Block Patterns and 10+ Custom Blocks that are highly customizable and fully responsive.', 'blockmag' ); ?></p>
            
            <a target="_blank" class="button-primary button green" href="<?php echo esc_url( 'https://catchthemes.com/themes/blockmag-pro/'); ?>"><?php esc_html_e( 'Get BlockMag Pro', 'blockmag' ); ?></a>
            
            <a class="button" href="<?php echo esc_url( admin_url( 'themes.php?page=blockmag-theme' ) ); ?>" ><?php esc_html_e( 'Theme Info', 'blockmag' ); ?></a>
        </div>
    </div>
    <?php
}
add_action( 'admin_notices', 'blockmag_admin_plugin_notice' );

function blockmag_theme_page_admin_style( $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'blockmag-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
}
add_action( 'admin_enqueue_scripts', 'blockmag_theme_page_admin_style' );

/**
 * Add theme page
 */
function blockmag_menu() {
	add_theme_page( esc_html__( 'BlockMag', 'blockmag' ), esc_html__( 'BlockMag', 'blockmag' ), 'edit_theme_options', 'blockmag-theme', 'blockmag_theme_page_display' );
}
add_action( 'admin_menu', 'blockmag_menu' );

/**
 * Display About page
 */
function blockmag_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'blockmag' ); ?></p>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started with BlockMag!', 'blockmag' ); ?></h3>
							<p><?php esc_html_e( 'Awesome! BlockMag has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.', 'blockmag' ); ?></p>
							<a target="_blank" href="https://catchthemes.com/themes/blockmag/#theme-instructions"><?php esc_html_e( 'Theme instructions', 'blockmag' ); ?></a>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'More Features with BlockMag Pro Theme', 'blockmag' ); ?></h3>
							<p><?php esc_html_e( 'To get more beautiful block patterns and templates, we recommend you activate the BlockMag Pro. With the pro theme installed, get more options, blocks, block patterns, templates and template parts.', 'blockmag' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href="https://catchthemes.com/themes/blockmag-pro/"><?php esc_html_e( 'Buy BlockMag Pro', 'blockmag' ); ?></a>
						</div>
					</div>

					<div class="welcome-panel-column two-columns">
						<div class="compare-table welcome-panel-column-content">
							<h3><?php esc_html_e( 'Compare Free Vs Pro', 'blockmag' ); ?></h3>
							<table>
								<thead>
								<tr>
								<th><?php esc_html_e( 'Features', 'blockmag' ); ?></th>
								<th><?php esc_html_e( 'BlockMag', 'blockmag' ); ?></th>
								<th><?php esc_html_e( 'BlockMag Pro', 'blockmag' ); ?></th>
								</tr>
								</thead>
								<tbody>
								<tr>
								<td><?php esc_html_e( 'Responsive Design', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Super Easy Setup', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Color Options for various sections', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Case Study', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Skills Bar', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Masonry', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Popup Video', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Header Search ', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Header Social', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Icons', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Date', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Slider', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Tabs', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Playlist ', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( '404 Header', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'About us with Stats', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>	
								<td><?php esc_html_e( 'About Us', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Ad Full Width After Header', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Ad Full Width Second', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Ad Full Width', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Archive Header Without BG', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Archive Header', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Blog Header without BG', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Blog Header', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Category wise News', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Clients Testimonial', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Cover News', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'CTA Just Video', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'CTA With Video', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'CTA', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Featured Categories', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Featured Content', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Featured News', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Featured Videos', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Footer Default', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Footer Three columns', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Footer Four Columns', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Header Default', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Header with Cart', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Header with Logo Center', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'How it works', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Latest Products', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Lifestyle News', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Post Header', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Logo Slider', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Logo', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Portfolio', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Servies', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Style news', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Team', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Team slider', 'blockmag' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
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
						<h3><?php esc_html_e( 'Important Links', 'blockmag' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) ); ?>"><?php esc_html_e( 'Theme Info', 'blockmag' ); ?></a>
						<a target="_blank" href="https://fse.catchthemes.com/blockmag-free"><?php esc_html_e( 'View Demo', 'blockmag' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( "https://catchthemes.com/fse-faq" ); ?>"><?php esc_html_e( 'FSE FAQs', 'blockmag' ); ?></a>
						<a  target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) . '/#changelog' ); ?>"><?php esc_html_e( 'Change log', 'blockmag' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://catchthemes.com/support-forum/forum/full-site-editing/' ); ?>"><?php esc_html_e( 'Support', 'blockmag' ); ?></a>
					</div>
				</div>
				
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'blockmag' ); ?></h3>
						<p><?php esc_html_e( 'Loved BlockMag? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'blockmag' ); ?></p>
						<a href="https://wordpress.org/support/theme/blockmag/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'blockmag' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
