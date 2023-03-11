<?php
 /**
  * Title: Footer With Three Columns
  * Slug: VisionArt/footer-with-three-columns
  * Categories: VisionArt, footer
  */
?>
<!-- wp:group {"align":"full","className":"footer","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull footer">
	<!-- wp:columns {"align":"wide","className":"upper-footer"} -->
	<div class="wp-block-columns alignwide upper-footer">
		<!-- wp:column {"className":"footer-contact"} -->
		<div class="wp-block-column footer-contact">
			<!-- wp:paragraph {"className":"footer-title","fontSize":"tiny"} -->
			<p class="footer-title has-tiny-font-size"><?php esc_html_e('Contact us','visionart');?></p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:media-text {"mediaId":22785,"mediaLink":"#","mediaType":"image","mediaWidth":19} -->
				<div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:19% auto">
					<figure class="wp-block-media-text__media">
						<img src="<?php echo get_parent_theme_file_uri( '/assets/images/icon-location.png' ); ?>" alt="" class="wp-image-22785 size-full"/>
					</figure>
					<div class="wp-block-media-text__content">
						<!-- wp:group {"layout":{"type":"constrained"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"className":"location-content"} -->
							<p class="location-content"><?php esc_html_e('111 San Francisco, West, USA','visionart');?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
				</div>
				<!-- /wp:media-text -->
				<!-- wp:media-text {"mediaId":22786,"mediaLink":"#","mediaType":"image"} -->
				<div class="wp-block-media-text alignwide is-stacked-on-mobile">
					<figure class="wp-block-media-text__media">
						<img src="<?php echo get_parent_theme_file_uri( '/assets/images/icon-envelope.png' ); ?>" alt="" class="wp-image-22786 size-full"/>
					</figure>
					<div class="wp-block-media-text__content">
						<!-- wp:group {"layout":{"type":"constrained"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"className":"location-content"} -->
							<p class="location-content"><?php esc_html_e('info@example.com','visionart');?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
				</div>
				<!-- /wp:media-text -->
				<!-- wp:media-text {"mediaId":22786,"mediaLink":"#","mediaType":"image"} -->
				<div class="wp-block-media-text alignwide is-stacked-on-mobile">
					<figure class="wp-block-media-text__media">
						<img src="<?php echo get_parent_theme_file_uri( '/assets/images/icon-phone.png' ); ?>" alt="" class="wp-image-22786 size-full"/>
					</figure>
					<div class="wp-block-media-text__content">
						<!-- wp:group {"layout":{"type":"constrained"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"className":"location-content"} -->
							<p class="location-content"><?php esc_html_e('+123 456 7890','visionart');?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
				</div>
				<!-- /wp:media-text -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"className":"footer-title","fontSize":"tiny"} -->
			<p class="footer-title has-tiny-font-size"><?php esc_html_e('Services','visionart');?></p>
			<!-- /wp:paragraph -->
			<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"}} /-->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"className":"footer-title","fontSize":"tiny"} -->
			<p class="footer-title has-tiny-font-size"><?php esc_html_e('Connect','visionart');?></p>
			<!-- /wp:paragraph -->
			<!-- wp:social-links {"className":"is-style-circle-shape social-lists"} -->
			<ul class="wp-block-social-links is-style-circle-shape social-lists">
				<!-- wp:social-link {"url":"#","service":"facebook"} /-->
				<!-- wp:social-link {"url":"#","service":"twitter"} /-->
				<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
				<!-- wp:social-link {"url":"#","service":"instagram"} /-->
				<!-- wp:social-link {"url":"#","service":"dribbble"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:group {"align":"wide","className":"wp-block-footer  wp-block-site-generator bottom-footer","layout":{"inherit":true,"type":"constrained"}} -->
	<div class="wp-block-group alignwide wp-block-footer wp-block-site-generator bottom-footer">
		<!-- wp:group {"align":"wide","className":"wp-block-site-info","layout":{"type":"flex","justifyContent":"space-between","orientation":"horizontal"}} -->
		<div class="wp-block-group alignwide wp-block-site-info">
			<!-- wp:paragraph -->
			<p><?php printf( 
				_x( 'Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL, 3: Privacy Policy Link', 'visionart' ), 
				esc_attr( date_i18n( __( 'Y', 'visionart' ) ) ), 
				'<a href="'. esc_url( home_url( '/' ) ) .'">'. esc_attr( get_bloginfo( 'name', 'display' ) ) . '</a><span class="sep"> | </span>VisionArt by <a target="_blank" href="https://catchthemes.com">Catch Themes</a>' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:navigation {} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->