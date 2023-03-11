<?php
 /**
  * Title: Header Media
  * Slug: VisionArt/header-media	
  * Categories: VisionArt, featured
  */
?>
<!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/assets/images/slider-one.png' ); ?>","id":655,"className":"header-media","dimRatio":0,"align":"full"} -->
<div class="wp-block-cover alignfull header-media">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
	<img class="wp-block-cover__image-background wp-image-655" alt="" src="<?php echo get_parent_theme_file_uri( '/assets/images/slider-one.png' ); ?>" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:columns {"align":"wide"} -->
			<div class="wp-block-columns alignwide">
				<!-- wp:column {"className":"slider-content"} -->
				<div class="wp-block-column slider-content">
					<!-- wp:heading {"level":4,"fontSize":"medium"} -->
					<h4 class="has-medium-font-size"><?php esc_html_e( 'Projects The Arts', 'visionart' ); ?></h4>
					<!-- /wp:heading -->
					<!-- wp:heading {"fontSize":"huge"} -->
					<h2 class="has-huge-font-size"><?php esc_html_e( 'Artform', 'visionart' ); ?></h2>
					<!-- /wp:heading -->
					<!-- wp:heading {"fontSize":"huge"} -->
					<h2 class="has-huge-font-size"><?php esc_html_e( 'XXV', 'visionart' ); ?></h2>
					<!-- /wp:heading -->
					<!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
									<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('View More','visionart');?></a></div>
									<!-- /wp:button --></div>
								<!-- /wp:buttons -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column"></div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->