<?php
return array(
			'title'         => __( 'Cover with 2 Columns of Images and Text', 'alara' ),
			'categories'    => array( 'alara-covers' ),
			'keywords'		=> array( 'paragraph', 'heading' ),
			'viewportWidth' => 1440,
			'content'       => '<!-- wp:cover {"url":"' . alara_pattern_content( 'image-road' ) . '","hasParallax":true,"dimRatio":80,"overlayColor":"background","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-cover alignfull is-light has-parallax" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;background-image:url(' . alara_pattern_content( 'image-road' ) . ')"><span aria-hidden="true" class="has-background-background-color has-background-dim-80 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":"64px"}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"linkDestination":"none"} -->
<figure class="wp-block-image"><img src="' . alara_pattern_content( 'image-man-3' ) . '" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit magna tempus inceptos conubia eleifend interdum, ridiculus eget sem eu facilisis arcu convallis netus fermentum fames habitasse habitant metus ultrices massa nostra euismod.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading -->
<h2 id="quality">Quality</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Curae montes faucibus ultricies proin laoreet blandit cubilia senectus morbi euismod, nisl urna interdum metus cras maecenas etiam odio sociosqu, vitae elementum quisque orci sodales sollicitudin at viverra ad.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"linkDestination":"none","className":"is-style-no-bottom-margin"} -->
<figure class="wp-block-image is-style-no-bottom-margin"><img src="' . alara_pattern_content( 'image-woman-2' ) . '" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->',
);
