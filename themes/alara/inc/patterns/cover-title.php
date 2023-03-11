<?php
return array(
			'title'         => __( 'Cover with Page Title', 'alara' ),
			'categories'    => array( 'alara-covers' ),
			'content'       => '<!-- wp:cover {"url":"' . esc_url( ALARA_TEMPLATE_DIR_URI ) . '/assets/images/road.jpg","dimRatio":70,"overlayColor":"foreground","align":"full","className":"is-dark"} -->
<div class="wp-block-cover alignfull is-dark">
	<span aria-hidden="true" class="has-foreground-background-color has-background-dim-70 wp-block-cover__gradient-background has-background-dim"></span>
	<img class="wp-block-cover__image-background" alt="" src="' . esc_url( ALARA_TEMPLATE_DIR_URI ) . '/assets/images/road.jpg" data-object-fit="cover"/>

	<div class="wp-block-cover__inner-container">

		<!-- wp:group {"layout":{"inherit":true}} -->
		<div class="wp-block-group">
			<!-- wp:post-title {"level":1,"textAlign":"center"} /-->
		</div>
		<!-- /wp:group -->

	</div>
</div>
<!-- /wp:cover -->',
);
