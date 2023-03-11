<?php
/**
 * Default footer
 */
return array(
	'title'      => esc_html__( 'Default footer', 'photobrust' ),
	'categories' => array( 'photobrust', 'footer' ),
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"color-dim-dark","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull has-color-dim-dark-background-color has-background">
		<!-- wp:group {"align":"full","className":"wp-block-footer  wp-block-site-generator","layout":{"inherit":true}} -->
		<div class="wp-block-group alignfull wp-block-footer wp-block-site-generator">
			<!-- wp:group {"align":"wide","className":"wp-block-site-info"} -->
			<div class="wp-block-group alignwide wp-block-site-info">
				<!-- wp:paragraph {"align":"center","textColor":"ironside-grey"} -->
				<p class="has-text-align-center has-ironside-grey-color has-text-color">' .
					sprintf(
					/* Translators: WordPress link. */
					' Copyright &copy; ' .date('Y') . esc_html__( '. Powered by %s', 'photobrust' ),
					'<a href="' . esc_url( esc_html__( 'https://wenthemes.com', 'photobrust' ) ) . '" rel="nofollow">' . esc_html__( 'Wen Themes', 'photobrust' ) . '</a>'
					) . '</p>
				<!-- /wp:paragraph -->
	
				<!-- wp:social-links {"iconColor":"foreground","className":"has-icon-color is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
				<ul class="wp-block-social-links has-icon-color is-style-logos-only">
					<!-- wp:social-link {"url":"#","service":"facebook"} /-->
	
					<!-- wp:social-link {"url":"#","service":"twitter"} /-->
	
					<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
	
					<!-- wp:social-link {"url":"#","service":"instagram"} /-->
	
					<!-- wp:social-link {"url":"#","service":"dribbble"} /-->
				</ul>
				<!-- /wp:social-links -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->',
);
