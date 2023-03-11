<?php
return array(
			'title'         => __( 'Welcome Cover', 'alara' ),
			'categories'    => array( 'alara-welcome', 'alara-covers' ),
			'keywords'		=> array( 'text', 'paragraph', 'heading', 'button' ),
			'viewportWidth' => 1440,
			'content'       => '<!-- wp:cover {"url":"' . alara_pattern_content( 'image-road' ) . '","dimRatio":70,"overlayColor":"foreground","align":"full"} -->
<div class="wp-block-cover alignfull"><span aria-hidden="true" class="has-foreground-background-color has-background-dim-70 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . alara_pattern_content( 'image-road' ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"6em","bottom":"6em"}}},"textColor":"background","layout":{"inherit":true},"className":"is-style-reading-width"} -->
<div class="wp-block-group has-background-color has-text-color is-style-reading-width" style="padding-top:6em;padding-bottom:6em"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size" style="text-transform:uppercase">Welcome to</p>
<!-- /wp:paragraph -->

<!-- wp:site-title {"level":2,"textAlign":"center","isLink":false,"textColor":"primary","fontSize":"gigantic"} /-->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">Lorem ipsum dolor sit amet consectetur adipiscing elit magna tempus inceptos conubia eleifend interdum, ridiculus eget sem eu facilisis arcu convallis netus fermentum fames habitasse habitant metus ultrices massa.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">Curae montes faucibus ultricies proin laoreet blandit cubilia senectus morbi euismod, nisl urna interdum metus cras maecenas etiam odio sociosqu, vitae elementum quisque orci sodales sollicitudin at viverra ad.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":20} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"50px"}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" style="border-radius:50px">Who we are</a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"secondary","textColor":"foreground","style":{"border":{"radius":"50px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-secondary-background-color has-text-color has-background" style="border-radius:50px">What we do</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->',
);
