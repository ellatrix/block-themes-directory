<?php
/**
 * Default footer
 */
return array(
	'title'      => esc_html__( 'Default footer', 'lyna' ),
	'categories' => array( 'lyna', 'footer' ),
	'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull">
						<!-- wp:group {"align":"wide","className":"wp-block-footer  wp-block-site-generator","layout":{"inherit":true}} -->
						<div class="wp-block-group alignwide wp-block-footer  wp-block-site-generator">
							<!-- wp:group {"align":"wide","className":"wp-block-site-info","layout":{"type":"flex","justifyContent":"space-between"}} -->
							<div class="wp-block-group alignwide wp-block-site-info">
								<!-- wp:paragraph -->
								<p>' .
									sprintf(
									/* Translators: WordPress link. */
									' Copyright &copy; ' .date('Y') . esc_html__( '. Powered by %s', 'lyna' ),
									'<a href="' . esc_url( esc_html__( 'https://catchthemes.com', 'lyna' ) ) . '" rel="nofollow">Catch Themes</a>'
									) . '</p>
								<!-- /wp:paragraph -->

								<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} -->
								<!-- /wp:navigation -->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->',
);
