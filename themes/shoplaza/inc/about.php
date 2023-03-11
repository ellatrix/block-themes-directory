<?php
/**
 * Theme About Page
 *
 * @package Shoplaza
 * @since 1.0
 */

function shoplaza_admin_plugin_notice() {
    
    $screen = get_current_screen();
    
    if ( ! empty( $screen->base ) && 'appearance_page_shoplaza-theme' === $screen->base ) {
        return false;
    }
    ?>
    <div class="notice notice-info is-dismissible shoplaza-admin-notice">
        <div class="shoplaza-admin-notice-wrapper">
            <h2><?php esc_html_e( 'Shoplaza Pro', 'shoplaza' ); ?></h2>
            <p><?php esc_html_e( 'Get your hands on the WordPress Full Site Editing features. Start building your website with advanced block patterns and custom blocks! Get additional 44+ Pre-Designed Block Patterns and 10+ Custom Blocks that are highly customizable and fully responsive.', 'shoplaza' ); ?></p>
            
            <a target="_blank" class="button-primary button green" href="<?php echo esc_url( 'https://catchthemes.com/themes/shoplaza-pro/'); ?>"><?php esc_html_e( 'Get Shoplaza Pro', 'shoplaza' ); ?></a>
            
            <a class="button" href="<?php echo esc_url( admin_url( 'themes.php?page=shoplaza-theme' ) ); ?>" ><?php esc_html_e( 'Theme Info', 'shoplaza' ); ?></a>
        </div>
    </div>
    <?php
}
add_action( 'admin_notices', 'shoplaza_admin_plugin_notice' );

function shoplaza_theme_page_admin_style( $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'shoplaza-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
}
add_action( 'admin_enqueue_scripts', 'shoplaza_theme_page_admin_style' );

/**
 * Add theme page
 */
function shoplaza_menu() {
	add_theme_page( esc_html__( 'Shoplaza', 'shoplaza' ), esc_html__( 'Shoplaza', 'shoplaza' ), 'edit_theme_options', 'shoplaza-theme', 'shoplaza_theme_page_display' );
}
add_action( 'admin_menu', 'shoplaza_menu' );

/**
 * Display About page
 */
function shoplaza_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'shoplaza' ); ?></p>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started with Shoplaza!', 'shoplaza' ); ?></h3>
							<p><?php esc_html_e( 'Awesome! Shoplaza has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.', 'shoplaza' ); ?></p>
							<a target="_blank" href="https://catchthemes.com/themes/shoplaza/#theme-instructions"><?php esc_html_e( 'Theme instructions', 'shoplaza' ); ?></a>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'More Features with Shoplaza Pro Theme', 'shoplaza' ); ?></h3>
							<p><?php esc_html_e( 'To get more beautiful block patterns and templates, we recommend you activate the Shoplaza Pro. With the pro theme installed, get more options, blocks, block patterns, templates and template parts.', 'shoplaza' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href="https://catchthemes.com/themes/shoplaza-pro/"><?php esc_html_e( 'Buy Shoplaza Pro', 'shoplaza' ); ?></a>
						</div>
					</div>

					<div class="welcome-panel-column two-columns">
						<div class="compare-table welcome-panel-column-content">
							<h3><?php esc_html_e( 'Compare Free Vs Pro', 'shoplaza' ); ?></h3>
							<table>
								<thead>
								<tr>
								<th><?php esc_html_e( 'Features', 'shoplaza' ); ?></th>
								<th><?php esc_html_e( 'Shoplaza', 'shoplaza' ); ?></th>
								<th><?php esc_html_e( 'Shoplaza Pro', 'shoplaza' ); ?></th>
								</tr>
								</thead>
								<tbody>
								<tr>
								<td><?php esc_html_e( 'Responsive Design', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Super Easy Setup', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Color Options', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Case Study', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Skills Bar', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Masonry', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Popup Video', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Header Search ', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Header Social', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Icons', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Date', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Slider', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Tabs', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block : Playlist ', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( '404 Header', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Archive Header', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>	
								<td><?php esc_html_e( 'Archive Post Header', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Blog Header', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'CTA', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Featured Content', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Featued Product Slider', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Featured Product Three Columns', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Featured Slider', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-nos"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Footer Default', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Footer Four Columns', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Footer Three Columns', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Grid Blog Post', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Header Default', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Header Media', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Header Transparent', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Header With Both Toggle Social and Search', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Header with Buttons', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Header With Cart and Search', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Header With Cart', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Header with Social And Toggle Search', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Hero Content', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Hidden 404', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'How it works', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Latest Products', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Logo Slider', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Logo With No Title', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Logo', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Post Header', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Product Category Four Rows', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Product Category Image on Left', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Product Category Image on Right', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Product Category Three Rows', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Product Category Two Rows', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Product Reviews', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Quick Contact Form', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Quick Contact', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Search Header', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Shop Header', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Sidebar Products', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Stats', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Subscribe', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Testimonials', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-no"></span></td>
								<td><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Woocommerce Features', 'shoplaza' ); ?></td>
								<td><span class="dashicons dashicons-yes"></span></td>
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
						<h3><?php esc_html_e( 'Important Links', 'shoplaza' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) ); ?>"><?php esc_html_e( 'Theme Info', 'shoplaza' ); ?></a>
						<a target="_blank" href="https://fse.catchthemes.com/shoplaza-free/"><?php esc_html_e( 'View Demo', 'shoplaza' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( "https://catchthemes.com/fse-faq" ); ?>"><?php esc_html_e( 'FSE FAQs', 'shoplaza' ); ?></a>
						<a  target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) . '/#changelog' ); ?>"><?php esc_html_e( 'Change log', 'shoplaza' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://catchthemes.com/support-forum/forum/full-site-editing/' ); ?>"><?php esc_html_e( 'Support', 'shoplaza' ); ?></a>
					</div>
				</div>
				
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'shoplaza' ); ?></h3>
						<p><?php esc_html_e( 'Loved Shoplaza? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'shoplaza' ); ?></p>
						<a href="https://wordpress.org/support/theme/shoplaza/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'shoplaza' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
