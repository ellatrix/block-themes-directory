<?php
return array(
			'title'         => __( 'Cover with Text and 2 Columns of Images', 'alara' ),
			'categories'    => array( 'alara-covers' ),
			'keywords'		=> array( 'paragraph', 'heading' ),
			'viewportWidth' => 1440,
			'content'       => '<!-- wp:cover {"url":"' . alara_pattern_content( 'image-road' ) . '","hasParallax":true,"dimRatio":80,"overlayColor":"background","isDark":false,"align":"full"} -->
<div class="wp-block-cover alignfull is-light has-parallax" style="background-image:url(' . alara_pattern_content( 'image-road' ) . ')"><span aria-hidden="true" class="has-background-background-color has-background-dim-80 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center" id="quality">Quality</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Curae montes faucibus ultricies proin laoreet blandit cubilia senectus morbi euismod, nisl urna interdum metus cras maecenas etiam odio sociosqu, vitae elementum quisque orci sodales sollicitudin at viverra ad.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet consectetur adipiscing elit magna tempus inceptos conubia eleifend interdum, ridiculus eget sem eu facilisis arcu convallis netus fermentum fames habitasse habitant metus ultrices massa nostra euismod.</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"style":{"spacing":{"blockGap":"64px"}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"linkDestination":"none"} -->
<figure class="wp-block-image"><img src="' . alara_pattern_content( 'image-man-3' ) . '" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"linkDestination":"none"} -->
<figure class="wp-block-image"><img src="' . alara_pattern_content( 'image-woman-2' ) . '" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->',
);
