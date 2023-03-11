<?php
 /**
  * Title: Search Header
  * Slug: shoplaza/search-header
  * Categories: shoplaza, header
  */
?>

<!-- wp:group {"align":"full","className":"no-margin-top header-media-inner-post","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull no-margin-top header-media-inner-post">
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false}} -->
	<div class="wp-block-group alignfull" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
		<!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/assets/images/inner-header-media.jpg' ); ?>","dimRatio":30,"overlayColor":"body-text","focalPoint":{"x":"0.52","y":"0.00"},"isDark":false} -->
		<div class="wp-block-cover is-light">
			<span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span>
			<img class="wp-block-cover__image-background" alt="" src="<?php echo get_parent_theme_file_uri( '/assets/images/inner-header-media.jpg' ); ?>" style="object-position:52% 0%" data-object-fit="cover" data-object-position="52% 0%"/>
			<div class="wp-block-cover__inner-container">
				<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:search {"label":"' . esc_html__( 'Search', 'shoplaza' ) . '","showLabel":false,"placeholder":"Search Here...","width":100,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true} /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
		</div>
		<!-- /wp:cover -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->