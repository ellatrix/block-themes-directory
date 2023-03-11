<?php
return array(
			'title'         => __( 'Call to Action 2', 'alara' ),
			'categories'    => array( 'alara-cta', 'alara-covers' ),
			'keywords'		=> array( 'cover' ),
			'viewportWidth' => 1440,
			'content'       => '
<!-- wp:cover {"url":"' . alara_pattern_content( 'image-man-4' ) . '","dimRatio":70,"overlayColor":"foreground","minHeight":800,"contentPosition":"bottom right","align":"full"} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-right" style="min-height:800px"><span aria-hidden="true" class="has-foreground-background-color has-background-dim-70 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . alara_pattern_content( 'image-man-4' ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|quaternary"}}}},"backgroundColor":"white"} -->
<div class="wp-block-group has-white-background-color has-background has-link-color"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"textColor":"foreground"} -->
<h2 class="has-foreground-color has-text-color" id="see-how-it-works" style="text-transform:uppercase">See how it works</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"className":"is-style-links-underline-on-hover","fontSize":"smaller"} -->
<p class="is-style-links-underline-on-hover has-smaller-font-size" style="text-transform:uppercase"><a href="#">Check out our awesome product today →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->',
);
