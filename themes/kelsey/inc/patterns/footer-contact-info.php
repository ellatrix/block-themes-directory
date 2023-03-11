<?php
/**
 * Footer  Contact Info
 */
return array(
	'title'      => esc_html__( 'Footer Contact Info', 'kelsey' ),
	'categories' => array( 'kelsey', 'footer' ),
	'content'    => '<!-- wp:group {"align":"full","className":"footer-contact-info","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull footer-contact-info">
		<!-- wp:group {"align":"wide","className":"wp-block-footer wp-block-widget-area","layout":{"inherit":true}} -->
		<div class="wp-block-group alignwide wp-block-footer wp-block-widget-area">
			<!-- wp:group {"align":"wide"} -->
			<div class="wp-block-group alignwide">
				<!-- wp:columns {"className":"wp-block-footer-widget-area-columns footer-contact-info-columns"} -->
				<div class="wp-block-columns wp-block-footer-widget-area-columns footer-contact-info-columns">
					<!-- wp:column {"className":"wp-block-widget"} -->
					<div class="wp-block-column wp-block-widget">
						<!-- wp:group {"className":"footer-contact-info-address"} -->
						<div class="wp-block-group footer-contact-info-address">
							<!-- wp:paragraph -->
							<p>' . esc_html__( 'USA', 'kelsey' ) . '</p>
							<!-- /wp:paragraph -->
							<!-- wp:paragraph -->
							<p>' . esc_html__( '621 Hewes Avenue, Lincoln Heights', 'kelsey' ) . '</p>
							<!-- /wp:paragraph -->
							<!-- wp:paragraph -->
							<p>' . esc_html__( 'Maryland, 21090', 'kelsey' ) . '</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->
	
					<!-- wp:column {"className":"wp-block-widget"} -->
					<div class="wp-block-column wp-block-widget">
						<!-- wp:group -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"className":"phone-contact"} -->
							<p class="phone-contact"><a href="tel:+8801234567890">' . esc_html__( '(+880) 123 3456 7890', 'kelsey' ) . '</a></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
	
						<!-- wp:group -->
						<div class="wp-block-group">
							<!-- wp:paragraph -->
							<p><a href="mailto:info@companyname.com">' . esc_html__( 'info@companyname.com', 'kelsey' ) . '</a></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->
	
					<!-- wp:column {"className":"wp-block-widget"} -->
					<div class="wp-block-column wp-block-widget">
						<!-- wp:group -->
						<div class="wp-block-group">
							<!-- wp:latest-posts {"postsToShow":2,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75,"addLinkToFeaturedImage":true} /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->',
);
