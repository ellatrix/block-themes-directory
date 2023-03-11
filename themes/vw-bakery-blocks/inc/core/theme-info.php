<?php
/**
 * Add theme page
 */

function vw_bakery_blocks_menu() {
	add_theme_page( esc_html__( 'VW Bakery Blocks', 'vw-bakery-blocks' ), esc_html__( 'Bakery Blocks Theme', 'vw-bakery-blocks' ), 'edit_theme_options', 'vw-bakery-blocks-info', 'vw_bakery_blocks_theme_page_display' );
}
add_action( 'admin_menu', 'vw_bakery_blocks_menu' );

function vw_bakery_blocks_admin_theme_style() {
	wp_enqueue_style('vw-bakery-blocks-custom-admin-style', esc_url(get_template_directory_uri()) . '/css/admin-style.css');
	wp_enqueue_script('vw-bakery-blocks-tabs', esc_url(get_template_directory_uri()) . '/js/tab.js');
}
add_action('admin_enqueue_scripts', 'vw_bakery_blocks_admin_theme_style');

/**
 * Display About page
 */
function vw_bakery_blocks_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	} ?>

	<div class="wrapper-info">
	    <div class="col-left">
	    	<h2><?php esc_html_e( 'Welcome to VW Bakery Blocks Theme', 'vw-bakery-blocks' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
	    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','vw-bakery-blocks'); ?></p>
	    </div>
	    <div class="col-right">
	    	<div class="logo">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/final-logo.png" alt="" />
			</div>
			<div class="update-now">
				<h4><?php esc_html_e('VW Bakery Blocks Pro Theme','vw-bakery-blocks'); ?></h4>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_BAKERY_BLOCKS_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'vw-bakery-blocks' ); ?></a>
				</div>
			</div>
	    </div>

	    <div class="tab-sec">
			<div class="tab">
				<button class="tablinks" onclick="vw_bakery_blocks_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Free Setup', 'vw-bakery-blocks' ); ?></button>
			  	<button class="tablinks" onclick="vw_bakery_blocks_open_tab(event, 'pro_theme')"><?php esc_html_e( 'Get Premium', 'vw-bakery-blocks' ); ?></button>
			</div>

			<div id="lite_theme" class="tabcontent open">
				<div class="lite-theme-tab">
					<h3><?php esc_html_e( 'Lite Theme Information', 'vw-bakery-blocks' ); ?></h3>
					<hr class="h3hr">
				  	<p><?php esc_html_e('Bakery Theme is a clean and beautiful WordPress theme that can be used for any kind of food blog, bakery, boxed, bread or cake, as well as eCommerce stores. The theme comes with many options and features that allow you to easily customize it to suit your needs. Your site will look amazing on any device, thanks to its Gutenberg plugin. The theme also features interactive elements and customizable options, as well as a beautiful testimonial section. This theme is perfect for creating a bakery blog or bakery shop. This theme is great for anyone who wants to sell baking products online. This theme features a sophisticated design, as well as many useful features that will help you to sell your products. It is responsive and includes bootstrap, which looks great on all devices. It also has short codes. You can use it by any chef or baker. Baker is the perfect theme for all you sweet lovers. This theme is modern and has many great homepages. It also includes a wonderful collection of inner pages.','vw-bakery-blocks'); ?></p>
				  	<div class="col-left-inner">
						<div class="pro-links">
					    	<a href="<?php echo esc_url( admin_url() . 'site-editor.php' ); ?>" target="_blank"><?php esc_html_e('Edit Your Site', 'vw-bakery-blocks'); ?></a>
							<a href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e('Visit Your Site', 'vw-bakery-blocks'); ?></a>
						</div>
						<h4><?php esc_html_e('Having Trouble, Need Support?', 'vw-bakery-blocks'); ?></h4>
						<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'vw-bakery-blocks'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( VW_BAKERY_BLOCKS_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'vw-bakery-blocks'); ?></a>
						</div>
						<hr>
						<h4><?php esc_html_e('Reviews & Testimonials', 'vw-bakery-blocks'); ?></h4>
						<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'vw-bakery-blocks'); ?>  </p>
						<div class="info-link">
							<a href="<?php echo esc_url( VW_BAKERY_BLOCKS_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'vw-bakery-blocks'); ?></a>
						</div>
				  	</div>
				</div>
			</div>
			
			<div id="pro_theme" class="tabcontent">
			  	<h3><?php esc_html_e( 'Premium Theme Information', 'vw-bakery-blocks' ); ?></h3>
				<hr class="h3hr">
			    <div class="col-left-pro">
			    	<p><?php esc_html_e('This VW Gutenberg Cake WordPress Theme was created for bakeries, pastry shops, restaurants, or other sweet shop websites. This theme is among the best in the collection of VW WordPress Themes. It is suitable for the job. Our WordPress theme is professional, considerate, and easy to use. This theme can effectively showcase your products, professionalism, testimonials, and other important information. It can be used in any responsive and cross-browser compatibility. We are available 24 hours a day to assist you with any problem. The theme is perfect for any dessert business and pays attention to sweet-loving details. It can also be used for other types of businesses as it is a multipurpose WordPress theme. The theme&#39;s entire structure is designed to give maximum exposure to every detail and element of your business. Our specialists have spent many hours working hard to create the best theme possible.','vw-bakery-blocks'); ?></p>
			    	<div class="pro-links">
				    	<a href="<?php echo esc_url( VW_BAKERY_BLOCKS_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'vw-bakery-blocks'); ?></a>
						<a href="<?php echo esc_url( VW_BAKERY_BLOCKS_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'vw-bakery-blocks'); ?></a>
						<a href="<?php echo esc_url( VW_BAKERY_BLOCKS_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'vw-bakery-blocks'); ?></a>
					</div>
			    </div>
			    <div class="col-right-pro">
			    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/pro.png" alt="" />
			    </div>
			</div>
		</div>
	</div>
<?php }?>