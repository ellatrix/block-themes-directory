<?php
/**
 * Gutenverse content.
 */
return array(
	'title'      => __( 'Core Home Article', 'echelon-fse' ),
	'categories' => array( 'echelon-fse-basic' ),
	'content'    => '<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"100px","bottom":"140px","right":"10px","left":"10px"}}},"layout":{"contentSize":"1200px"}} -->
<main class="wp-block-group" style="padding-top:100px;padding-right:10px;padding-bottom:140px;padding-left:10px"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400","letterSpacing":"4px","fontSize":"15px"}},"textColor":"secondary","className":"echelon-fse-animate echelon-fse-move-up"} -->
<h3 class="has-text-align-center echelon-fse-animate echelon-fse-move-up has-secondary-color has-text-color" style="font-size:15px;font-style:normal;font-weight:400;text-transform:uppercase;letter-spacing:4px">Latest News</h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","className":"echelon-fse-animate echelon-fse-move-up echelon-fse-delay-3","fontSize":"heading-2"} -->
<h2 class="has-text-align-center echelon-fse-animate echelon-fse-move-up echelon-fse-delay-3 has-primary-color has-text-color has-heading-2-font-size" style="font-style:normal;font-weight:700">Our News &amp; Article</h2>
<!-- /wp:heading -->

<!-- wp:columns {"className":"echelon-fse-animate echelon-fse-move-up echelon-fse-delay-5"} -->
<div class="wp-block-columns echelon-fse-animate echelon-fse-move-up echelon-fse-delay-5"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:query {"queryId":71,"query":{"perPage":"2","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":2},"textColor":"third"} -->
<div class="wp-block-query has-third-color has-text-color"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"height":"280px","align":"wide"} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"14px"}}} /-->

<!-- wp:post-title {"level":4,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontSize":"heading-4","fontFamily":"primary"} /-->

<!-- wp:post-date {"style":{"typography":{"fontSize":"14px"},"color":{"text":"#a2a2a2"}}} /-->

<!-- wp:post-excerpt {"style":{"typography":{"fontSize":"15px"},"spacing":{"margin":{"top":"10px"}}},"textColor":"fifth"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"2px"} -->
<div class="wp-block-column" style="flex-basis:2px"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"28%","style":{"spacing":{"padding":{"top":"10px"}}}} -->
<div class="wp-block-column" style="padding-top:10px;flex-basis:28%"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontSize":"heading-3"} -->
<h3 class="has-text-align-left has-primary-color has-text-color has-heading-3-font-size" style="font-style:normal;font-weight:700">Recent News</h3>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"color":{"background":"#e7eaf1"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#e7eaf1;color:#e7eaf1"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"color":{"text":"#ffffff"}}} -->
<div class="wp-block-group alignfull has-text-color" style="color:#ffffff;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:query {"queryId":64,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":1.6},"color":{"text":"#ffffff","link":"#ffffff"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"heading-6"} /-->

<!-- wp:post-date {"style":{"color":{"text":"#a2a2a2"},"typography":{"fontSize":"14px"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"40px"}}}} -->
<div class="wp-block-buttons" style="margin-top:40px"><!-- wp:button {"width":100,"style":{"border":{"radius":"0px"},"typography":{"fontSize":"15px"},"spacing":{"padding":{"top":"13px","bottom":"13px","left":"30px","right":"30px"}}},"className":"is-style-custombuttonone"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-custombuttonone" style="font-size:15px"><a class="wp-block-button__link" href="#" style="border-radius:0px;padding-top:13px;padding-right:30px;padding-bottom:13px;padding-left:30px">View All</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->',
);
