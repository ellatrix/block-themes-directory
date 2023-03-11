<?php
 /**
  * Title: Feature Post Column
  * Slug: gutenify-business-dark/feature-post-column
  * Categories: gutenify-business-dark
  */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"30px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignwide" style="padding-bottom: 30px">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis: 25%">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}},"backgroundColor":"background","className":"has-no-hover-shadow-dark animated animated-fadeInUp"} -->
			<div
				class="wp-block-group has-no-hover-shadow-dark animated animated-fadeInUp has-background-background-color has-background"
				style="
					padding-top: 0px;
					padding-right: 0px;
					padding-bottom: 0px;
					padding-left: 0px;
				"
			>
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"40px"},"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"foreground","layout":{"inherit":true}} -->
				<div
					class="wp-block-group has-foreground-background-color has-background"
					style="
						margin-top: 0px;
						margin-bottom: 0px;
						padding-top: 10px;
						padding-right: 10px;
						padding-bottom: 10px;
						padding-left: 40px;
					"
				>
					<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"background"} -->
					<h3
						class="has-background-color has-text-color"
						style="
							margin-top: 0px;
							margin-right: 0px;
							margin-bottom: 0px;
							margin-left: 0px;
						"
					>
					<?php echo esc_html__( 'Popular News', 'gutenify-business-dark' ); ?>
					</h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}}} -->
				<div
					class="wp-block-group"
					style="
						padding-top: 30px;
						padding-right: 30px;
						padding-bottom: 30px;
						padding-left: 30px;
					"
				>
					<!-- wp:latest-posts {"postsToShow":4,"excerptLength":10,"displayAuthor":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":100,"featuredImageSizeHeight":113} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis: 50%">
			<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/images/cover-banner.jpg'; ?>","id":817,"dimRatio":0,"focalPoint":{"x":"0.79","y":"0.45"},"minHeight":585,"contentPosition":"bottom center","isDark":false,"className":"has-no-hover-shadow-dark animated animated-fadeInUp"} -->
			<div
				class="wp-block-cover is-light has-custom-content-position is-position-bottom-center has-no-hover-shadow-dark animated animated-fadeInUp"
				style="min-height: 585px"
			>
				<span
					aria-hidden="true"
					class="wp-block-cover__background has-background-dim-0 has-background-dim"
				></span
				><img
					class="wp-block-cover__image-background wp-image-817"
					alt=""
					src="<?php echo esc_url( get_template_directory_uri() );?>/images/cover-banner.jpg"
					style="object-position: 79% 45%"
					data-object-fit="cover"
					data-object-position="79% 45%"
				/>
				<div class="wp-block-cover__inner-container">
					<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"1.2rem"}},"backgroundColor":"foreground"} -->
					<h2
						class="has-text-align-center has-foreground-background-color has-background has-link-color"
						style="font-size: 1.2rem"
					>
						<a
							href="https://gutenify.com/"
							><?php echo esc_html__( 'Life Is Either A Daring Adventure Or Nothing At
							All', 'gutenify-business-dark' ); ?> </a
						>
					</h2>
					<!-- /wp:heading -->
				</div>
			</div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis: 25%">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}},"backgroundColor":"background","className":"has-no-hover-shadow-dark animated animated-fadeInUp"} -->
			<div
				class="wp-block-group has-no-hover-shadow-dark animated animated-fadeInUp has-background-background-color has-background"
				style="
					padding-top: 0px;
					padding-right: 0px;
					padding-bottom: 0px;
					padding-left: 0px;
				"
			>
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"40px"},"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}},"color":{"background":"#171616"}},"layout":{"inherit":true}} -->
				<div
					class="wp-block-group has-background"
					style="
						background-color: #171616;
						margin-top: 0px;
						margin-bottom: 0px;
						padding-top: 10px;
						padding-right: 10px;
						padding-bottom: 10px;
						padding-left: 40px;
					"
				>
					<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"background"} -->
					<h3
						class="has-background-color has-text-color"
						style="
							margin-top: 0px;
							margin-right: 0px;
							margin-bottom: 0px;
							margin-left: 0px;
						"
					>
					<?php echo esc_html__( 'Recent News', 'gutenify-business-dark' ); ?>
					</h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}}} -->
				<div
					class="wp-block-group"
					style="
						padding-top: 30px;
						padding-right: 30px;
						padding-bottom: 30px;
						padding-left: 30px;
					"
				>
					<!-- wp:latest-posts {"postsToShow":4,"excerptLength":10,"displayAuthor":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":100,"featuredImageSizeHeight":113} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
