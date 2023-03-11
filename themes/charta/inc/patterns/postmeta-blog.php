<?php
/**
 * Postmeta block pattern for blog and archive pages
 */
return array(
	'title'      => __( 'Postmeta Blog', 'charta' ),
	'categories' => array( 'charta_posts' ),
	'content'    => '<!-- wp:group {"className":"is-style-post-meta","layout":{"type":"flex","allowOrientation":false,"flexWrap":"wrap"}} -->
					<div class="wp-block-group is-style-post-meta">

						<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
						<div class="wp-block-group">

							<!-- wp:paragraph -->
							<p><strong>On</strong></p>
							<!-- /wp:paragraph -->
						
							<!-- wp:post-date /-->

						</div>
						<!-- /wp:group -->

						<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
						<div class="wp-block-group">

							<!-- wp:paragraph -->
							<p><strong>By</strong></p>
							<!-- /wp:paragraph -->

							<!-- wp:post-author {"showAvatar":false} /-->

						</div>
						<!-- /wp:group -->

					</div>
					<!-- /wp:group -->',
);
