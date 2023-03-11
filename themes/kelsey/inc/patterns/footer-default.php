<?php
/**
 * Default footer
 */
return array(
	'title'      => esc_html__( 'Default footer', 'kelsey' ),
	'categories' => array( 'kelsey', 'footer' ),
	'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull">
						<!-- wp:group {"align":"full","className":"wp-block-footer  wp-block-site-generator","layout":{"inherit":true}} -->
						<div class="wp-block-group alignfull wp-block-footer  wp-block-site-generator">
							<!-- wp:group {"align":"wide","className":"wp-block-site-info","layout":{"type":"flex","justifyContent":"space-between"}} -->
							<div class="wp-block-group alignwide wp-block-site-info">
								<!-- wp:paragraph -->
								<p>' .
									sprintf(
									/* Translators: WordPress link. */
									' Copyright &copy; ' .date('Y') . esc_html__( '. Powered by %s', 'kelsey' ),
									'<a href="' . esc_url( esc_html__( 'https://wenthemes.com', 'kelsey' ) ) . '" rel="nofollow">' . esc_html__( 'Wen Themes', 'kelsey' ) . '</a>'
									) . '</p>
								<!-- /wp:paragraph -->

								<!-- wp:social-links {"iconColor":"foreground","className":"is-style-logos-only"} -->
								<ul class="wp-block-social-links has-icon-color is-style-logos-only">
									<!-- wp:social-link {"url":"#","service":"facebook"} /-->

									<!-- wp:social-link {"url":"#","service":"twitter"} /-->

									<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
								</ul>
								<!-- /wp:social-links -->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->',
);
