<?php
return array(
			'title'         => __( 'Cover with Page Title and Featured Image', 'alara' ),
			'categories'    => array( 'alara-covers' ),
			'content'       => '<!-- wp:cover {"url":"' . esc_url( ALARA_TEMPLATE_DIR_URI ) . '/assets/images/road.jpg","hasParallax":true,"dimRatio":80,"overlayColor":"background","isDark":false,"align":"full","className":"is-dark"} -->
<div class="wp-block-cover alignfull is-light has-parallax" style="background-image:url(' . esc_url( ALARA_TEMPLATE_DIR_URI ) . '/assets/images/road.jpg)"><span aria-hidden="true" class="has-background-background-color has-background-dim-80 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:post-title {"level":1} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:post-featured-image /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->',
);
