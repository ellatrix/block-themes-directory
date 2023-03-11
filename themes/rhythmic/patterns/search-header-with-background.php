<?php
 /**
  * Title: Search header With Background
  * Slug: Rhythmic/search-header-with-background
  * Categories: Rhythmic, header
  */
?>
<!-- wp:group {"align":"full","className":"no-margin-top banner","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull no-margin-top banner">
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false}} -->
	<div class="wp-block-group alignfull" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
		<!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/assets/images/banner.jpg' ); ?>","dimRatio":0,"overlayColor":"body-text"} -->
		<div class="wp-block-cover">
			<span aria-hidden="true" class="wp-block-cover__background has-body-text-background-color has-background-dim-0 has-background-dim"></span>
			<img class="wp-block-cover__image-background" alt="" src="<?php echo get_parent_theme_file_uri( '/assets/images/banner.jpg' ); ?>" data-object-fit="cover"/>
			<div class="wp-block-cover__inner-container">
				<!-- wp:group {"layout":{"inherit":true}} -->
				<div class="wp-block-group">
					<!-- wp:group {"layout":{"inherit":true}} -->
					<div class="wp-block-group">
						<!-- wp:search {"textAlign":"center","label":"<?php esc_html_e('Search','rhythmic');?>","showLabel":false,"placeholder":"<?php esc_html_e('Search...','rhythmic');?>","width":100,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true} /-->
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