<?php
 /**
  * Title: Footer With Three Columns
  * Slug: artsylens/footer-with-three-columns
  * Categories: artsylens, footer
  */
?>
<!-- wp:group {"className":"footer","align":"full","layout":{"inherit":true}} -->
<div class="wp-block-group footer alignfull">
	<!-- wp:columns {"align":"wide","className":"upper-footer"} -->
	<div class="wp-block-columns alignwide upper-footer">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"className":"footer-title","fontSize":"tiny"} -->
			<p class="footer-title has-tiny-font-size">Contact</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e('4292 Ryan Road','artsylens');?>
				<br><?php esc_html_e('9325 Dorchester St #127','artsylens');?>
					<br><?php esc_html_e('+123-456-7890','artsylens');?>
						<br><a href="mailto:info@example.com"><?php esc_html_e('hello@example.com','artsylens');?></a>
						</p>
						<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"className":"footer-title","fontSize":"tiny"} -->
			<p class="footer-title has-tiny-font-size"><?php esc_html_e('Recent Posts','artsylens');?></p>
			<!-- /wp:paragraph -->
			<!-- wp:latest-posts {"displayPostDate":true} /-->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"className":"footer-title","fontSize":"tiny"} -->
			<p class="footer-title has-tiny-font-size"><?php esc_html_e('Newsletter','artsylens');?></p>
			<!-- /wp:paragraph -->
			<!-- wp:tnp/minimal -->
			<div style="padding:20px" class="wp-block-tnp-minimal">
				<p><?php esc_html_e('Subscribe to our newsletter!','artsylens');?></p>
				<div>[newsletter_form type="minimal"]</div>
			</div>
			<!-- /wp:tnp/minimal -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:group {"align":"wide","className":"wp-block-footer  wp-block-site-generator bottom-footer","layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide wp-block-footer wp-block-site-generator bottom-footer">
		<!-- wp:group {"align":"wide","className":"wp-block-site-info","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignwide wp-block-site-info">
			<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left"}} /-->
			<!-- wp:paragraph -->
			<p><?php printf( 
				_x( 'Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL, 3: Privacy Policy Link', 'artsylens' ), 
				esc_attr( date_i18n( __( 'Y', 'artsylens' ) ) ), 
				'<a href="'. esc_url( home_url( '/' ) ) .'">'. esc_attr( get_bloginfo( 'name', 'display' ) ) . '</a><span class="sep"> | </span>ArtsyLens  by <a target="_blank" href="https://catchthemes.com">Catch Themes</a>' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
