<?php
/**
 * Theme About Page
 *
 * @package Catch_FSE
 * @since 1.0
 */

function catch_fse_admin_plugin_notice() {

	if ( ! class_exists( 'FSE_PRO' ) ) {
    
	    $screen = get_current_screen();
	    
	    if ( ! empty( $screen->base ) && 'appearance_page_catch-fse-theme' === $screen->base ) {
	        return false;
	    }
	    ?>
	    <div class="notice notice-info is-dismissible catch-fse-admin-notice">
	        <div class="catch-fse-admin-notice-wrapper">
	            <h2><?php esc_html_e( 'Catch FSE + FSE Pro Plugin = Amazing', 'catch-fse' ); ?></h2>
	            <p><?php esc_html_e( 'Get your hands on the WordPress Full Site Editing features. Start building your website with advanced block patterns and custom blocks! Get additional 25+ Pre-Designed Block Patterns and 10+ Custom Blocks that are highly customizable and fully responsive.', 'catch-fse' ); ?></p>
	            
	            <a target="_blank" class="button-primary button green" href="<?php echo esc_url( 'https://catchthemes.com/fse-pro-plugin/'); ?>"><?php esc_html_e( 'Get FSE Pro', 'catch-fse' ); ?></a>
	            
	            <a class="button" href="<?php echo esc_url( admin_url( 'themes.php?page=catch-fse-theme' ) ); ?>" ><?php esc_html_e( 'Theme Info', 'catch-fse' ); ?></a>
	        </div>
	    </div>
	    <?php
	}
}
add_action( 'admin_notices', 'catch_fse_admin_plugin_notice' );

function catch_fse_theme_page_admin_style( $hook ) {
	//if ( 'appearance_page_catch-fse-theme' === $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'catch-fse-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
	//}
}
add_action( 'admin_enqueue_scripts', 'catch_fse_theme_page_admin_style' );

/**
 * Add theme page
 */
function catch_fse_menu() {
	add_theme_page( esc_html__( 'Catch FSE', 'catch-fse' ), esc_html__( 'Catch FSE', 'catch-fse' ), 'edit_theme_options', 'catch-fse-theme', 'catch_fse_theme_page_display' );
}
add_action( 'admin_menu', 'catch_fse_menu' );

/**
 * Display About page
 */
function catch_fse_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'catch-fse' ); ?></p>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started with Catch FSE!', 'catch-fse' ); ?></h3>
							<p><?php esc_html_e( 'Awesome! Catch FSE has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.', 'catch-fse' ); ?></p>
							<a target="_blank" href="https://catchthemes.com/themes/catch-fse/#theme-instructions"><?php esc_html_e( 'Theme instructions', 'catch-fse' ); ?></a>
						</div>
					</div>
					
					<?php if ( ! class_exists( 'FSE_PRO' ) ) : ?>
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'More Features with FSE Pro plugin', 'catch-fse' ); ?></h3>
							<p><?php esc_html_e( 'To get more beautiful block patterns and templates, we recommend you activate the FSE Pro plugin by Catch Themes. With the plugin installed, get more options, blocks, block patterns, templates and template parts.', 'catch-fse' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href="https://catchthemes.com/fse-pro-plugin"><?php esc_html_e( 'Buy FSE Pro', 'catch-fse' ); ?></a>
						</div>
					</div>
					<?php else : ?>
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'FSE Pro plugin', 'catch-fse' ); ?></h3>
							<p><?php esc_html_e( 'FSE Pro plugin is installed and activated. Start using Pro Features Now!!!', 'catch-fse' ); ?></p>
						</div>
					</div>
					<?php endif; ?>
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Compare Free Vs Pro', 'catch-fse' ); ?></h3>
							<table>
								<thead>
								<tr>
								<th><?php esc_html_e( 'Features', 'catch-fse' ); ?></th>
								<th><?php esc_html_e( 'Free FSE Theme', 'catch-fse' ); ?></th>
								<th><?php esc_html_e( 'FSE Pro Plugin', 'catch-fse' ); ?></th>
								</tr>
								</thead>
								<tbody>
								<tr>
								<td><?php esc_html_e( 'Responsive Design', 'catch-fse' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Super Easy Setup', 'catch-fse' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Color Options for various sections', 'catch-fse' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Pattern  : Header Media', 'catch-fse' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Pattern  : Featured Content', 'catch-fse' ); ?></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Pattern  : Featured Content Two/Three', 'catch-fse' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Pattern  : Homepage One', 'catch-fse' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Pattern  : Footer Four Column', 'catch-fse' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Pattern  : Header With Center Logo', 'catch-fse' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Pattern  : Header With Buttons', 'catch-fse' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Pattern  : Logo', 'catch-fse' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Pattern  : Pricing Table One/Two/Three', 'catch-fse' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Pattern  : Service One/Two/Three/Four', 'catch-fse' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Pattern  : Testimonial One/Two/Three', 'catch-fse' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Pattern  : Footer Four Columns', 'catch-fse' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block    : Case Study', 'catch-fse' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block    : Slider', 'catch-fse' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
								<td><span class="dashicons dashicons-yes"></span></th>
								</tr>
								<tr>
								<td><?php esc_html_e( 'Block    : PopUp Video', 'catch-fse' ); ?></th>
								<td><span class="dashicons dashicons-no"></span></th>
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
						<h3><?php esc_html_e( 'Important Links', 'catch-fse' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) ); ?>"><?php esc_html_e( 'Theme Info', 'catch-fse' ); ?></a>
						<a target="_blank" href="https://fse.catchthemes.com/catch-fse"><?php esc_html_e( 'View Demo', 'catch-fse' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( "https://catchthemes.com/fse-faq" ); ?>"><?php esc_html_e( 'FSE FAQs', 'catch-fse' ); ?></a>
						<a  target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) . '/#changelog' ); ?>"><?php esc_html_e( 'Change log', 'catch-fse' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://catchthemes.com/support-forum/forum/full-site-editing/' ); ?>"><?php esc_html_e( 'Support', 'catch-fse' ); ?></a>
					</div>
				</div>
				
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'catch-fse' ); ?></h3>
						<p><?php esc_html_e( 'Loved Catch FSE? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'catch-fse' ); ?></p>
						<a href="https://wordpress.org/support/theme/catch-fse/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'catch-fse' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
