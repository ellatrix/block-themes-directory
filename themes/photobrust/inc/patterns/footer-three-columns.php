<?php
/**
 * Footer with Three Columns
 */
return array(
	'title'      => esc_html__( 'Footer Three Columns', 'photobrust' ),
	'categories' => array( 'photobrust', 'footer' ),
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"color-dim-dark","layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull has-color-dim-dark-background-color has-background">
					<!-- wp:group {"align":"full","className":"wp-block-footer wp-block-widget-area","layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull wp-block-footer wp-block-widget-area">
					<!-- wp:group {"align":"wide"} -->
					<div class="wp-block-group alignwide">
					<!-- wp:columns {"className":"wp-block-footer-widget-area-columns"} -->
					<div class="wp-block-columns wp-block-footer-widget-area-columns">
					<!-- wp:column {"className":"wp-block-widget"} -->
					<div class="wp-block-column wp-block-widget">
					<!-- wp:group -->
					<div class="wp-block-group">
					<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"textColor":"color-light"} -->
					<h2 class="has-color-light-color has-text-color" id="about" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px">' . esc_html__( 'About', 'photobrust' ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"textColor":"ironside-grey"} -->
					<p class="has-ironside-grey-color has-text-color">' . esc_html__( 'Photography is a way of feeling, of touching, of loving. What you have caught on film is captured forever…', 'photobrust' ) . '</p>
					<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"className":"wp-block-widget"} -->
					<div class="wp-block-column wp-block-widget">
						<!-- wp:group -->
						<div class="wp-block-group">
							<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"textColor":"color-light"} -->
							<h2 class="has-color-light-color has-text-color" id="contact" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px">Contact</h2>
							<!-- /wp:heading -->

							<!-- wp:group {"className":"contact-detail","layout":{"type":"flex","allowOrientation":false}} -->
							<div class="wp-block-group contact-detail">
								<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
								<figure class="wp-block-image size-full"><img
										src="' . get_parent_theme_file_uri( '/assets/images/icon-envelope.png' ) . '" alt=""
										class="" /></figure>
								<!-- /wp:image -->

								<!-- wp:paragraph -->
								<p><a href="#">' . esc_html__( 'info@companyname.com', 'photobrust' ) . '</a></p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:group -->

							<!-- wp:group {"className":"contact-detail","layout":{"type":"flex","allowOrientation":false}} -->
							<div class="wp-block-group contact-detail">
								<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
								<figure class="wp-block-image size-full"><img
										src="' . get_parent_theme_file_uri( '/assets/images/icon-phone.png' ) . '" alt=""
										class="" /></figure>
								<!-- /wp:image -->

								<!-- wp:paragraph -->
								<p><a href="#">' . esc_html__( '(+880) 123 3456 7890', 'photobrust' ) . '</a></p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:group -->

							<!-- wp:group {"className":"contact-detail","layout":{"type":"flex","allowOrientation":false}} -->
							<div class="wp-block-group contact-detail">
								<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
								<figure class="wp-block-image size-full"><img
										src="' . get_parent_theme_file_uri( '/assets/images/icon-location.png' ) . '" alt=""
										class="" /></figure>
								<!-- /wp:image -->

								<!-- wp:paragraph -->
								<p><a href="#">' . esc_html__( '2080 Peaceful Lane, Chicago,IL, USA', 'photobrust' ) . '</a></p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"className":"wp-block-widget"} -->
					<div class="wp-block-column wp-block-widget"><!-- wp:group -->
					<div class="wp-block-group">
					<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"textColor":"color-light"} -->
					<h2 class="has-color-light-color has-text-color" id="recent-post" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px">' . esc_html__( 'Recent Post', 'photobrust' ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:latest-posts {"postsToShow":4} /-->
					</div>
					<!-- /wp:group --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns --></div>
					<!-- /wp:group --></div>
					<!-- /wp:group --></div>
					<!-- /wp:group -->',
);
