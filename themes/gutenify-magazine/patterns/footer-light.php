<?php
 /**
  * Title: Footer Light
  * Slug: gutenify-magazine/footer-light
  * Categories: gutenify-magazine
  */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem","right":"3rem","left":"3rem"},"blockGap":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"color":{"background":"#dedede"}},"textColor":"boulder","layout":{"inherit":true}} -->
<div
	class="wp-block-group alignfull has-boulder-color has-text-color has-background has-link-color"
	style="
		background-color: #dedede;
		padding-top: 4rem;
		padding-right: 3rem;
		padding-bottom: 4rem;
		padding-left: 3rem;
	"
>
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"25%","style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"0px"}}}} -->
		<div
			class="wp-block-column"
			style="
				padding-top: 20px;
				padding-right: 20px;
				padding-bottom: 20px;
				padding-left: 0px;
				flex-basis: 25%;
			"
		>
			<!-- wp:group -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"1.5rem"}},"textColor":"foreground"} -->
				<h3
					class="has-foreground-color has-text-color"
					style="
						font-size: 1.5rem;
						font-style: normal;
						font-weight: 500;
					"
				>
					<?php echo esc_html__( 'About Us', 'gutenify-magazine' ); ?>
				</h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph -->
			<p>
				<?php echo esc_html__( 'We create digital experiences for brands and companies by using technology ', 'gutenify-magazine' ); ?>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:social-links {"iconColor":"vivid-red","iconColorValue":"#cf2e2e","openInNewTab":true,"size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{}}} -->
			<ul
				class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"
			>
				<!-- wp:social-link {"url":"#","service":"facebook"} /-->

				<!-- wp:social-link {"url":"#","service":"twitter"} /-->

				<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

				<!-- wp:social-link {"url":"#","service":"instagram"} /-->
			</ul>
			<!-- /wp:social-links -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"vivid-red","textColor":"background","style":{"border":{"radius":"0px"}},"className":"is-style-fill"} -->
				<div class="wp-block-button is-style-fill">
					<a
						class="wp-block-button__link has-background-color has-vivid-red-background-color has-text-color has-background"
						style="border-radius: 0px"
						><?php echo esc_html__( 'Subscribe Now', 'gutenify-magazine' ); ?></a
					>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}}} -->
		<div
			class="wp-block-column"
			style="padding-top: 20px; padding-bottom: 20px"
		>
			<!-- wp:group -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.5rem","fontStyle":"normal","fontWeight":"500"}},"textColor":"foreground"} -->
				<h3
					class="has-foreground-color has-text-color"
					style="
						font-size: 1.5rem;
						font-style: normal;
						font-weight: 500;
					"
				>
					<?php echo esc_html__( 'Archive', 'gutenify-magazine' ); ?>
				</h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:archives /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}}} -->
		<div
			class="wp-block-column"
			style="padding-top: 20px; padding-bottom: 20px"
		>
			<!-- wp:group -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"1.5rem"}},"textColor":"foreground"} -->
				<h3
					class="has-foreground-color has-text-color"
					style="
						font-size: 1.5rem;
						font-style: normal;
						font-weight: 500;
					"
				>
					<?php echo esc_html__( 'Categories', 'gutenify-magazine' ); ?>
				</h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:categories /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}}} -->
		<div
			class="wp-block-column"
			style="padding-top: 20px; padding-bottom: 20px"
		>
			<!-- wp:group -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.5rem","fontStyle":"normal","fontWeight":"500"}},"textColor":"foreground"} -->
				<h3
					class="has-foreground-color has-text-color"
					style="
						font-size: 1.5rem;
						font-style: normal;
						font-weight: 500;
					"
				>
					<?php echo esc_html__( 'Recent News', 'gutenify-magazine' ); ?>
				</h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:latest-posts {"postsToShow":3,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"25px","right":"25px","bottom":"25px","left":"25px"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"backgroundColor":"background","textColor":"boulder","layout":{"inherit":true}} -->
<div
	class="wp-block-group has-boulder-color has-background-background-color has-text-color has-background has-link-color"
	style="
		padding-top: 25px;
		padding-right: 25px;
		padding-bottom: 25px;
		padding-left: 25px;
	"
>
	<!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"center"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#908787"}}} -->
		<p class="has-text-align-center has-text-color" style="color: #908787">
			<?php echo esc_html__( 'Proudly powered by', 'gutenify-magazine' ); ?><a
				href="http://gutenify.com/themes/gutenify-magazine"
				rel="nofollow noopener"
				target="_blank"
				><?php echo esc_html__( 'Gutenify Magazine', 'gutenify-magazine' ); ?></a
			>
			<?php echo esc_html__( 'and', 'gutenify-magazine' ); ?>
			<a
				href="https://wordpress.org"
				rel="nofollow noopener"
				target="_blank"
				><?php echo esc_html__( 'WordPress', 'gutenify-magazine' ); ?></a
			>.
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
