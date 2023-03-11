<?php
/**
 * Add Theme info Page
 */

function carnival_lite_menu() {
	add_theme_page( esc_html__( 'Carnival Lite', 'carnival-lite' ), esc_html__( 'Carnival Lite info', 'carnival-lite' ), 'edit_theme_options', 'carnival-lite-info', 'carnival_lite_theme_page_display' );
}
add_action( 'admin_menu', 'carnival_lite_menu' );

function carnival_lite_admin_theme_style() {
	wp_enqueue_style('carnival-lite-custom-admin-style', esc_url(get_template_directory_uri()) . '/assets/css/admin-styles.css');
}
add_action('admin_enqueue_scripts', 'carnival_lite_admin_theme_style');

/**
 * Display About page
 */
function carnival_lite_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	} ?>

		<div class="Grace-wrapper">
			<div class="Grcae-info-holder">
				<div class="Grcae-info-holder-content">
					<div class="Grace-Welcome">
						<h1 class="welcomeTitle"><?php esc_html_e( 'About Theme Info', 'carnival-lite' ); ?></h1>                        
						<div class="featureDesc">
							<?php echo esc_html__( 'Carnival Lite is a free art gallery WordPress theme designed for museum and art gallery. This theme can also be used for events, exhibition, conference, expo, event management companies, schedule, seminar, meeting, meetup, speakers, event planners, wedding planners, charity or non profit websites. It is a fully responsive and retina-ready theme with a clean design and modern look. The homepage of this theme is highly attractive and customizable. Everything on the homepage is customizable, starting from colors and fonts to layouts and backgrounds. You will get a great variety of options to choose from. This SEO-friendly WordPress theme is designed to be absolutely SEO optimized. This remarkable feature of this theme helps in boosting the website ranking in the Google search engine vigorously. Moreover, this feature will also help in drawing more and more traffic to your website.', 'carnival-lite' ); ?>
						</div>
						
                        <h1 class="welcomeTitle"><?php esc_html_e( 'Theme Features', 'carnival-lite' ); ?></h1>

                        <h2><?php esc_html_e( 'Block Compatibale', 'carnival-lite' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'carnival-lite' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'Responsive Ready', 'carnival-lite' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'carnival-lite' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'Cross Browser Compatible', 'carnival-lite' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE11 and above.', 'carnival-lite' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'E-commerce', 'carnival-lite' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'Fully compatible with WooCommerce plugin. Just install the plugin and turn your site into a full featured online shop and start selling products.', 'carnival-lite' ); ?>
                        </div>

					</div> <!-- .Grace-Welcome -->
				</div> <!-- .Grcae-info-holder-content -->
				
				
				<div class="Grcae-info-holder-sidebar">
                        <div class="sidebarBX">
                            <h2 class="sidebarBX-title"><?php echo esc_html__( 'Get Carnival PRO', 'carnival-lite' ); ?></h2>
                            <p><?php echo esc_html__( 'More features availbale on Premium version', 'carnival-lite' ); ?></p>
                            <a href="<?php echo esc_url( 'https://gracethemes.com/themes/art-gallery-wordpress-theme/' ); ?>" target="_blank" class="button"><?php esc_html_e( 'Get the PRO Version &rarr;', 'carnival-lite' ); ?></a>
                        </div>


						<div class="sidebarBX">
							<h2 class="sidebarBX-title"><?php echo esc_html__( 'Important Links', 'carnival-lite' ); ?></h2>

							<ul class="themeinfo-links">
                                <li>
									<a href="<?php echo esc_url( 'https://gracethemes.com/demo/carnival/' ); ?>" target="_blank"><?php echo esc_html__( 'Demo Preview', 'carnival-lite' ); ?></a>
								</li>                               
								<li>
									<a href="<?php echo esc_url( 'https://gracethemes.com/documentation/carnival/' ); ?>" target="_blank"><?php echo esc_html__( 'Documentation', 'carnival-lite' ); ?></a>
								</li>
								
								<li>
									<a href="<?php echo esc_url( 'https://gracethemes.com/wordpress-themes/' ); ?>" target="_blank"><?php echo esc_html__( 'View Our Premium Themes', 'carnival-lite' ); ?></a>
								</li>
							</ul>
						</div>

						<div class="sidebarBX">
							<h2 class="sidebarBX-title"><?php echo esc_html__( 'Leave us a review', 'carnival-lite' ); ?></h2>
							<p><?php echo esc_html__( 'If you are satisfied with Carnival Lite, please give your feedback.', 'carnival-lite' ); ?></p>
							<a href="https://wordpress.org/support/theme/carnival-lite/reviews/" class="button" target="_blank"><?php esc_html_e( 'Submit a review', 'carnival-lite' ); ?></a>
						</div>

				</div><!-- .Grcae-info-holder-sidebar -->	

			</div> <!-- .Grcae-info-holder -->
		</div><!-- .Grace-wrapper -->
<?php } ?>