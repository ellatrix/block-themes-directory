<?php
/**
 * Add theme page
 */

function auto_car_dealership_menu() {
	add_theme_page( esc_html__( 'Auto Car Dealership', 'auto-car-dealership' ), esc_html__( 'Automobile Theme', 'auto-car-dealership' ), 'edit_theme_options', 'auto-car-dealership-info', 'auto_car_dealership_theme_page_display' );
}
add_action( 'admin_menu', 'auto_car_dealership_menu' );

function auto_car_dealership_admin_theme_style() {
	wp_enqueue_style('auto-car-dealership-custom-admin-style', esc_url(get_template_directory_uri()) . '/css/admin-style.css');
	wp_enqueue_script('auto-car-dealership-tabs', esc_url(get_template_directory_uri()) . '/js/tab.js');
}
add_action('admin_enqueue_scripts', 'auto_car_dealership_admin_theme_style');

/**
 * Display About page
 */
function auto_car_dealership_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	} ?>

	<div class="wrapper-info">
	    <div class="col-left">
	    	<h2><?php esc_html_e( 'Welcome to Auto Car Dealership Theme', 'auto-car-dealership' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
	    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','auto-car-dealership'); ?></p>
	    </div>
	    <div class="col-right">
	    	<div class="logo">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/final-logo.png" alt="" />
			</div>
			<div class="update-now">
				<h4><?php esc_html_e('Auto Car Dealership Pro Theme','auto-car-dealership'); ?></h4>
				<div class="info-link">
					<a href="<?php echo esc_url( AUTO_CAR_DEALERSHIP_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'auto-car-dealership' ); ?></a>
				</div>
			</div>
	    </div>

	    <div class="tab-sec">
			<div class="tab">
				<button class="tablinks" onclick="auto_car_dealership_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Free Setup', 'auto-car-dealership' ); ?></button>
			  	<button class="tablinks" onclick="auto_car_dealership_open_tab(event, 'pro_theme')"><?php esc_html_e( 'Get Premium', 'auto-car-dealership' ); ?></button>
			</div>

			<div id="lite_theme" class="tabcontent open">
				<div class="lite-theme-tab">
					<h3><?php esc_html_e( 'Lite Theme Information', 'auto-car-dealership' ); ?></h3>
					<hr class="h3hr">
				  	<p><?php esc_html_e('Auto Car Dealership is a spectacular block based theme for websites designed for car and automobile businesses, car rentals, automotive and car dealerships, auto dealers, car listings, electric cars and vehicles, auto part shops, car repair services, etc. This theme is loaded with full site editing features, block patterns, block editor patterns and much more. Crafted by WordPress experts, this theme makes use of lightweight design and the latest HTML codes that are further optimized to give you a faster page load speed. The overall look is elegant and at the same time professional to represent your business in a very presentable manner. This theme is retina-ready and has a responsive design that makes it work well across any device. There is a beautifully designed banner and many sections for displaying information about your Team, showing the client Testimonials, and more. There are plenty of customization options available for you to tweak the design and add your own flavor. To make the design SEO-friendly, developers have implemented the best coding practices so that you don’t need to take extra effort. Call to Action Button (CTA) will ensure that your visitors will get the proper guidance for the next step. There are many social media options available for your website and the theme is also made translation-ready to support multiple languages.','auto-car-dealership'); ?></p>
				  	<div class="col-left-inner">
						<div class="pro-links">
					    	<a href="<?php echo esc_url( admin_url() . 'site-editor.php' ); ?>" target="_blank"><?php esc_html_e('Edit Your Site', 'auto-car-dealership'); ?></a>
							<a href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e('Visit Your Site', 'auto-car-dealership'); ?></a>
						</div>
						<h4><?php esc_html_e('Having Trouble, Need Support?', 'auto-car-dealership'); ?></h4>
						<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'auto-car-dealership'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( AUTO_CAR_DEALERSHIP_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'auto-car-dealership'); ?></a>
						</div>
						<hr>
						<h4><?php esc_html_e('Reviews & Testimonials', 'auto-car-dealership'); ?></h4>
						<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'auto-car-dealership'); ?>  </p>
						<div class="info-link">
							<a href="<?php echo esc_url( AUTO_CAR_DEALERSHIP_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'auto-car-dealership'); ?></a>
						</div>
				  	</div>
				</div>
			</div>
			
			<div id="pro_theme" class="tabcontent">
			  	<h3><?php esc_html_e( 'Premium Theme Information', 'auto-car-dealership' ); ?></h3>
				<hr class="h3hr">
			    <div class="col-left-pro">
			    	<p><?php esc_html_e('This spectacular premium Automobile WordPress Theme is made for the motor-heads. We have created our Automobile themes Stunning design with respect to the automotive industry. The frenzy for keeping our cars immaculate and shiny is well known. We assure you that it will be well reflected in our theme. As they are made with utilizing clean coding standards and it will function well with current WordPress version. It is built on the foundation of being responsive & user-friendly. This allows it to function at its optimal best across all platforms. This takes care of all the visitors and users, regardless of the source of traffic is being driven from.','auto-car-dealership'); ?></p>
			    	<div class="pro-links">
				    	<a href="<?php echo esc_url( AUTO_CAR_DEALERSHIP_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'auto-car-dealership'); ?></a>
						<a href="<?php echo esc_url( AUTO_CAR_DEALERSHIP_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'auto-car-dealership'); ?></a>
						<a href="<?php echo esc_url( AUTO_CAR_DEALERSHIP_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'auto-car-dealership'); ?></a>
					</div>
			    </div>
			    <div class="col-right-pro">
			    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/pro.png" alt="" />
			    </div>
			</div>
		</div>
	</div>
<?php }?>