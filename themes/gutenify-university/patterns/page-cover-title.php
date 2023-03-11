<?php
 /**
  * Title: Page Cover With Tital
  * Slug: gutenify-university/page-cover-title
  * Categories: gutenify-university
  */
?>
<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull">
	<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/images/single-header.png'; ?>","dimRatio":50,"overlayColor":"foreground","focalPoint":{"x":"0.59","y":"0.45"},"minHeight":300,"minHeightUnit":"px","contentPosition":"center center","isDark":false,"align":"full"} -->
	<div class="wp-block-cover alignfull is-light" style="min-height:300px"><span aria-hidden="true"
			class="wp-block-cover__background has-foreground-background-color has-background-dim"></span><img
			class="wp-block-cover__image-background" alt=""
			src="<?php echo esc_url( get_template_directory_uri() ) . '/images/single-header.png'; ?>"
			style="object-position:59% 45%" data-object-fit="cover" data-object-position="59% 45%" />
		<div class="wp-block-cover__inner-container">
			<!-- wp:post-title {"textAlign":"center","level":1,"align":"wide","style":{"spacing":{"margin":{"bottom":"0px","top":"0px"}}},"textColor":"background","fontSize":"large"} /-->
		</div>
	</div>
	<!-- /wp:cover -->

	<!-- wp:post-featured-image {"align":"wide","style":{"spacing":{"margin":{"bottom":"var(--wp--custom--spacing--medium, 6rem)"}}}} /-->
</div>
<!-- /wp:group -->
