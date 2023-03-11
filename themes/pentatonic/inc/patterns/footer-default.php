<?php
/**
 * Default footer
 */
return array(
	'title'      => esc_html__( 'Default footer', 'pentatonic' ),
	'categories' => array( 'pentatonic', 'footer' ),
	'content'    => '<!-- wp:group {"className":"footer-dark","align":"full","layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull footer-dark">
						<!-- wp:group {"align":"full","className":"wp-block-footer  wp-block-site-generator","layout":{"inherit":true}} -->
						<div class="wp-block-group alignfull wp-block-footer  wp-block-site-generator">
							<!-- wp:group {"align":"wide","className":"wp-block-site-info","layout":{"type":"flex","justifyContent":"space-between"}} -->
							<div class="wp-block-group alignwide wp-block-site-info">
								<!-- wp:paragraph -->
								<p>' .
									sprintf(
									/* Translators: WordPress link. */
									' Copyright &copy; ' .date('Y') . esc_html__( '. Powered by %s', 'pentatonic' ),
									'<a href="' . esc_url( esc_html__( 'https://catchthemes.com', 'pentatonic' ) ) . '" rel="nofollow">Catch Themes</a>'
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
