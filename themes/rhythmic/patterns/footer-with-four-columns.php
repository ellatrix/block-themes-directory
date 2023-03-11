<?php
 /**
  * Title: Footer With Four Columns
  * Slug: Rhythmic/footer-with-four-columns
  * Categories: Rhythmic, footer
  */
?>
<!-- wp:group {"align":"full","className":"footer","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull footer">
	<!-- wp:columns {"align":"wide","className":"upper-footer"} -->
	<div class="wp-block-columns alignwide upper-footer">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"className":"footer-title","fontSize":"tiny"} -->
			<p class="footer-title has-tiny-font-size"><?php esc_html_e('About us','rhythmic');?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e('Even by his own high standards Lewis Hamilton set a new benchmark in 2019. In a class of his own, his sixth champ-ionship was defined by opening with an almost crushing, relentless run','rhythmic');?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"className":"footer-title","fontSize":"tiny"} -->
			<p class="footer-title has-tiny-font-size"><?php esc_html_e('Customer Care','rhythmic');?></p>
			<!-- /wp:paragraph -->
			<!-- wp:navigation {"layout":{"type":"flex","orientation":"vertical"}} /-->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"className":"footer-title","fontSize":"tiny"} -->
			<p class="footer-title has-tiny-font-size"><?php esc_html_e('Latest Posts','rhythmic');?></p>
			<!-- /wp:paragraph -->
			<!-- wp:latest-posts {"displayFeaturedImage":true} /-->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"className":"footer-title","fontSize":"tiny"} -->
			<p class="footer-title has-tiny-font-size"><?php esc_html_e('Contact','rhythmic');?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e('4292 Ryan Road','rhythmic');?>				
				
				<br><?php esc_html_e('9325 Dorchester St #127','rhythmic');?>					
					
					<br><?php esc_html_e('+123-456-7890','rhythmic');?>						
						
						<br>
							<a href="mailto:info@example.com"><?php esc_html_e('hello@example.com','rhythmic');?></a>
						</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
				<!-- wp:group {"align":"wide","className":"wp-block-footer  wp-block-site-generator bottom-footer","layout":{"inherit":true}} -->
				<div class="wp-block-group alignwide wp-block-footer wp-block-site-generator bottom-footer">
					<!-- wp:group {"align":"wide","className":"wp-block-site-info","layout":{"type":"flex","justifyContent":"center","orientation":"vertical"}} -->
					<div class="wp-block-group alignwide wp-block-site-info">
						<!-- wp:social-links {"className":"is-style-logos-only"} -->
						<ul class="wp-block-social-links is-style-logos-only">
							<!-- wp:social-link {"url":"#","service":"facebook"} /-->
							<!-- wp:social-link {"url":"#","service":"twitter"} /-->
							<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
						</ul>
						<!-- /wp:social-links -->
						<!-- wp:paragraph -->
						<p><?php printf( 
				_x( 'Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL, 3: Privacy Policy Link', 'rhythmic' ), 
				esc_attr( date_i18n( __( 'Y', 'rhythmic' ) ) ), 
				'<a href="'. esc_url( home_url( '/' ) ) .'">'. esc_attr( get_bloginfo( 'name', 'display' ) ) . '</a><span class="sep"> | </span>Rhythmic by <a target="_blank" href="https://catchthemes.com">Catch Themes</a>' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->