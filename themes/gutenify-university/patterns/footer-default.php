
<?php
 /**
  * Title: Footer Default
  * Slug: gutenify-university/footer-default
  * Categories: gutenify-university
  */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"80px","right":"40px","bottom":"80px","left":"40px"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":true}} -->
<div class="wp-block-group alignwide has-background-color has-foreground-background-color has-text-color has-background has-link-color"
	style="padding-top:80px;padding-right:40px;padding-bottom:80px;padding-left:40px">
	<!-- wp:columns {"verticalAlignment":"top","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-top">
		<!-- wp:column {"verticalAlignment":"top"} -->
		<div class="wp-block-column is-vertically-aligned-top">
			<!-- wp:heading {"level":3,"textColor":"background"} -->
			<h3 class="has-background-color has-text-color" id="quick-links"><?php echo esc_html__( 'About Us', 'gutenify-university' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:separator {"color":"luminous-vivid-amber","className":"is-style-wide"} -->
			<hr
				class="wp-block-separator has-text-color has-background has-luminous-vivid-amber-background-color has-luminous-vivid-amber-color is-style-wide" />
			<!-- /wp:separator -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet est massa. Sed enim massa, mattis
				at libero nec, bibendum ultricies augue.', 'gutenify-university' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
			<div class="wp-block-group">
				<!-- wp:group -->
				<div class="wp-block-group">
					<!-- wp:social-links {"iconColor":"tertiary","iconColorValue":"#c3d9e7","align":"center","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
					<ul
						class="wp-block-social-links aligncenter has-icon-color is-style-logos-only">
						<!-- wp:social-link {"url":"#","service":"wordpress"} /-->

						<!-- wp:social-link {"url":"#","service":"twitter"} /-->

						<!-- wp:social-link {"url":"#","service":"instagram"} /-->
					</ul>
					<!-- /wp:social-links -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top"} -->
		<div class="wp-block-column is-vertically-aligned-top">
			<!-- wp:heading {"level":3,"textColor":"background"} -->
			<h3 class="has-background-color has-text-color" id="quick-links"><?php echo esc_html__( 'Quick Links', 'gutenify-university' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:separator {"color":"luminous-vivid-amber","className":"is-style-wide"} -->
			<hr
				class="wp-block-separator has-text-color has-background has-luminous-vivid-amber-background-color has-luminous-vivid-amber-color is-style-wide" />
			<!-- /wp:separator -->

			<!-- wp:navigation { "overlayMenu":"never","layout":{"type":"flex","orientation":"vertical","justifyContent":"left" } } /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top"} -->
		<div class="wp-block-column is-vertically-aligned-top">
			<!-- wp:heading {"level":3,"textColor":"background"} -->
			<h3 class="has-background-color has-text-color" id="help-support"><?php echo esc_html__( 'Recent Posts', 'gutenify-university' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:separator {"color":"luminous-vivid-amber","className":"is-style-wide"} -->
			<hr
				class="wp-block-separator has-text-color has-background has-luminous-vivid-amber-background-color has-luminous-vivid-amber-color is-style-wide" />
			<!-- /wp:separator -->

			<!-- wp:latest-posts /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top"} -->
		<div class="wp-block-column is-vertically-aligned-top">
			<!-- wp:heading {"level":3,"textColor":"background"} -->
			<h3 class="has-background-color has-text-color" id="newsletter"><?php echo esc_html__( 'Gallery', 'gutenify-university' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:separator {"color":"luminous-vivid-amber","className":"is-style-wide"} -->
			<hr
				class="wp-block-separator has-text-color has-background has-luminous-vivid-amber-background-color has-luminous-vivid-amber-color is-style-wide" />
			<!-- /wp:separator -->

			<!-- wp:gallery {"linkTo":"none"} -->
			<figure class="wp-block-gallery has-nested-images columns-default is-cropped">
				<!-- wp:image {"id":1416,"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large"><img
						src="<?php echo esc_url( get_template_directory_uri() ) . '/images/gallery-1.png'; ?>" alt=""
						class="wp-image-1416" /></figure>
				<!-- /wp:image -->

				<!-- wp:image {"id":1417,"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large"><img
						src="<?php echo esc_url( get_template_directory_uri() ) . '/images/gallery-2.png'; ?>" alt=""
						class="wp-image-1417" /></figure>
				<!-- /wp:image -->

				<!-- wp:image {"id":1410,"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large"><img
						src="<?php echo esc_url( get_template_directory_uri() ) . '/images/gallery-3.png'; ?>"
						alt="" class="wp-image-1410" /></figure>
				<!-- /wp:image -->

				<!-- wp:image {"id":1418,"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large"><img
						src="<?php echo esc_url( get_template_directory_uri() ) . '/images/gallery-4.png'; ?>" alt=""
						class="wp-image-1418" /></figure>
				<!-- /wp:image -->

				<!-- wp:image {"id":1432,"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large"><img
						src="<?php echo esc_url( get_template_directory_uri() ) . '/images/gallery-5.png'; ?>"
						alt="" class="wp-image-1432" /></figure>
				<!-- /wp:image -->

				<!-- wp:image {"id":1434,"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large"><img
						src="<?php echo esc_url( get_template_directory_uri() ) . '/images/gallery-6.png'; ?>" alt=""
						class="wp-image-1434" /></figure>
				<!-- /wp:image -->
			</figure>
			<!-- /wp:gallery -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","right":"0rem","left":"0rem"}},"color":{"text":"#777777","background":"#1d1d1d"},"elements":{"link":{"color":{"text":"#777777"}}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-text-color has-background has-link-color"
	style="background-color:#1d1d1d;color:#777777;padding-top:1rem;padding-right:0rem;padding-bottom:1rem;padding-left:0rem">
	<!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"align":"center","textColor":"background"} -->
		<p class="has-text-align-center has-background-color has-text-color">
			<a href="https://gutenify.com//themes/gutenify-university" target="_blank" rel="noreferrer noopener">
				<?php echo esc_html__( 'Gutenify University', 'gutenify-university' ); ?>
			</a>
			<?php echo esc_html__( 'Proudly Powered by', 'gutenify-university' ); ?>
			<a rel="noreferrer noopener" href="<?php echo esc_url( __( 'https://wordpress.org', 'gutenify-university' ) ); ?>" target="_blank">
				<?php echo esc_html__( 'WordPress', 'gutenify-university' ); ?>
			</a>
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
