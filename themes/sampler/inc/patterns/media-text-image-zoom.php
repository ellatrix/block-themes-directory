<?php
return array(
			'title'         => __( 'Media & text with image zoom', 'sampler' ),
			'categories'    => array( 'sampler-info', 'featured' ),
			'viewportWidth' => 1200,
			'content'       => '
<!-- wp:media-text {"mediaPosition":"right","mediaLink":"' . sampler_pattern_content( 'humaaans' ) . '","mediaType":"image","className":"is-style-hover-zoom-img"} -->
<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-style-hover-zoom-img"><figure class="wp-block-media-text__media"><img src="' . sampler_pattern_content( 'humaaans' ) . '" alt="" /></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":1} -->
<h1>Build your site<br>with BLOCKS</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Design everything on your site - from the header down to the footer, all using blocks and patterns.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"gradient":"pale-cyan-blue-to-vivid-purple","className":"is-style-hover-effect-light"} -->
<div class="wp-block-button is-style-hover-effect-light"><a class="wp-block-button__link has-pale-cyan-blue-to-vivid-purple-gradient-background has-background">Get Started</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:media-text -->
',
);
