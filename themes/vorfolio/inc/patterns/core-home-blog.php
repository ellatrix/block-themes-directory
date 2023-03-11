<?php
/**
 * Gutenverse content.
 */
return array(
	'title'      => __( 'Core Home Blog', 'vorfolio' ),
	'categories' => array( 'vorfolio-basic' ),
	'content'    => '<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"100px","bottom":"100px","right":"20px","left":"20px"}}},"layout":{"contentSize":"1140px","type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:100px;padding-right:20px;padding-bottom:100px;padding-left:20px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"secondary","className":"vorfolio-animate vorfolio-move-down","fontSize":"heading-4"} -->
<h4 class="has-text-align-center vorfolio-animate vorfolio-move-down has-secondary-color has-text-color has-heading-4-font-size" style="font-style:normal;font-weight:500">Our Blog</h4>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"primary","className":"vorfolio-animate vorfolio-move-down vorfolio-delay-1","fontSize":"heading-2"} -->
<h2 class="has-text-align-center vorfolio-animate vorfolio-move-down vorfolio-delay-1 has-primary-color has-text-color has-heading-2-font-size" style="font-style:normal;font-weight:600">Latest Articles</h2>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"layout":{"contentSize":"500px","wideSize":"500px"}} -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center","textColor":"fourth","className":"vorfolio-animate vorfolio-move-up vorfolio-delay-3","fontSize":"tiny"} -->
<p class="has-text-align-center vorfolio-animate vorfolio-move-up vorfolio-delay-3 has-fourth-color has-text-color has-tiny-font-size">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor massa cum sociis natoque.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":47,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"className":"vorfolio-animate vorfolio-move-up vorfolio-delay-7 vorfolio-post-template-gap"} -->
<div class="wp-block-query vorfolio-animate vorfolio-move-up vorfolio-delay-7 vorfolio-post-template-gap"><!-- wp:post-template -->
<!-- wp:post-featured-image /-->

<!-- wp:spacer {"height":"5px"} -->
<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:post-title {"level":4,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"heading-4"} /-->

<!-- wp:post-date {"style":{"typography":{"fontSize":"14px"}},"textColor":"tenth"} /-->

<!-- wp:spacer {"height":"12px"} -->
<div style="height:12px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:post-excerpt {"moreText":"Read More","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"fourth","fontSize":"tiny"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->',
);
