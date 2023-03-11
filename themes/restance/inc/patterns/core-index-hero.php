<?php
/**
 * Core Index Hero content.
 */
return array(
	'title'      => __( 'Core Index Hero', 'restance' ),
	'categories' => array( 'restance-basic' ),
	'content'    => '<!-- wp:group {"layout":{"contentSize":""}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"' . esc_url( RESTANCE_URI ) . 'assets/img/architecture-house-home-pool-ceiling-italy-599832-pxhere.com.webp","id":1566,"dimRatio":80,"customOverlayColor":"#181818","minHeight":189,"minHeightUnit":"px","style":{"spacing":{"padding":{"bottom":"0px","right":"0px","left":"0px","top":"20px"}}}} -->
<div class="wp-block-cover" style="padding-top:20px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:189px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim" style="background-color:#181818"></span><img class="wp-block-cover__image-background wp-image-1566" alt="" src="' . esc_url( RESTANCE_URI ) . 'assets/img/architecture-house-home-pool-ceiling-italy-599832-pxhere.com.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"header","theme":"restance"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"140px","bottom":"200px","right":"20px","left":"20px"}}},"layout":{"contentSize":"1140px","type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:140px;padding-right:20px;padding-bottom:200px;padding-left:20px"><!-- wp:columns {"textColor":"white"} -->
<div class="wp-block-columns has-white-color has-text-color"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-title {"textAlign":"center","textColor":"white","className":"restance-animate restance-move-up restance-delay-1","fontSize":"heading-4","fontFamily":"cambria-georgia"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
);
