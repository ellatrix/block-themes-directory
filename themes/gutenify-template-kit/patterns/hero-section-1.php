<?php
 /**
  * Title: Hero Section One
  * Slug: gutenify-template-kit/hero-section-1
  * Categories: gutenify-template-kit
  */
?>
<!-- wp:group {"align":"full","style":{"color":{"gradient":"linear-gradient(135deg,rgb(26,1,154) 0%,rgb(130,51,224) 95%)"},"spacing":{"padding":{"top":"140px","bottom":"100px"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group alignfull has-background"
	style="background:linear-gradient(135deg,rgb(26,1,154) 0%,rgb(130,51,224) 95%);padding-top:140px;padding-bottom:100px">
	<!-- wp:group {"align":"full","layout":{"inherit":false,"contentSize":"1300px"}} -->
	<div class="wp-block-group alignfull">
		<!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:media-text {"mediaPosition":"right","mediaId":85,"mediaLink":"https://demo.gutenify.com/gutenify-template-kit/banner/","mediaType":"image","verticalAlignment":"center","imageFill":false,"className":"no-margin"} -->
			<div
				class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-center no-margin">
				<figure class="wp-block-media-text__media"><img
						src="<?php echo esc_url( get_template_directory_uri() );?>/images/banner.png"
						alt="" class="wp-image-85 size-full" /></figure>
				<div class="wp-block-media-text__content">
					<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px","padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":true}} -->
					<div class="wp-block-group alignwide"
						style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
						<!-- wp:heading {"level":3,"style":{"typography":{"lineHeight":"1.5"}},"textColor":"background","className":"animated fadeInUp","fontSize":"large"} -->
						<h3 class="animated fadeInUp has-background-color has-text-color has-large-font-size"
							style="line-height:1.5"><?php echo esc_html__( 'Meet Our', 'gutenify-template-kit' ); ?></h3>
						<!-- /wp:heading -->

						<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.5","fontSize":"3.5rem"}},"textColor":"background","className":"animated fadeInUp"} -->
						<h2 class="animated fadeInUp has-background-color has-text-color"
							style="font-size:3.5rem;font-style:normal;font-weight:700;line-height:1.5"><?php echo esc_html__( 'Powerful Gutenify
							Template Kits', 'gutenify-template-kit' ); ?></h2>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"textColor":"background","className":"animated fadeInUp"} -->
						<p class="animated fadeInUp has-background-color has-text-color"><?php echo esc_html__( 'Change the workflow for your
							WordPress site, control everything from Site editor without using any extra plugins.
							Improved speed, web vitals score and SEO to get better positions', 'gutenify-template-kit' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:buttons {"className":"animated fadeInUp","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"30px","bottom":"20px"}}}} -->
						<div class="wp-block-buttons animated fadeInUp" style="margin-top:30px;margin-bottom:20px">
							<!-- wp:button {"backgroundColor":"luminous-vivid-amber","textColor":"foreground","style":{"border":{"radius":"0px"},"spacing":{"padding":{"right":"35px","left":"35px"}}},"className":"is-style-fill"} -->
							<div class="wp-block-button is-style-fill"><a
									class="wp-block-button__link has-foreground-color has-luminous-vivid-amber-background-color has-text-color has-background"
									href="#" style="border-radius:0px;padding-right:35px;padding-left:35px"><?php echo esc_html__( 'Get Started', 'gutenify-template-kit' ); ?></a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:group -->
				</div>
			</div>
			<!-- /wp:media-text -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
