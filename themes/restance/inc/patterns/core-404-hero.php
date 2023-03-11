<?php
/**
 * Core 404 Hero content.
 */
return array(
	'title'      => __( 'Core 404 Hero', 'restance' ),
	'categories' => array( 'restance-basic' ),
	'content'    => '<!-- wp:group {"layout":{"contentSize":""}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"' . esc_url( RESTANCE_URI ) . 'assets/img/architecture-house-home-pool-ceiling-italy-599832-pxhere.com.webp","id":1568,"dimRatio":80,"customOverlayColor":"#181818","minHeight":189,"minHeightUnit":"px","style":{"spacing":{"padding":{"bottom":"0px","right":"0px","left":"0px","top":"20px"}}}} -->
<div class="wp-block-cover" style="padding-top:20px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:189px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim" style="background-color:#181818"></span><img class="wp-block-cover__image-background wp-image-1568" alt="" src="' . esc_url( RESTANCE_URI ) . 'assets/img/architecture-house-home-pool-ceiling-italy-599832-pxhere.com.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"header","theme":"restance"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"140px","bottom":"200px","right":"20px","left":"20px"}}},"layout":{"contentSize":"1140px","type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:140px;padding-right:20px;padding-bottom:200px;padding-left:20px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"capitalize","letterSpacing":"0em","lineHeight":"1"}},"textColor":"white","className":"restance-animate restance-move-up restance-delay-1","fontSize":"heading-4"} -->
<h2 class="has-text-align-center restance-animate restance-move-up restance-delay-1 has-white-color has-text-color has-heading-4-font-size" style="font-style:normal;font-weight:600;letter-spacing:0em;line-height:1;text-transform:capitalize">Page Not Found</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"forth","className":"restance-animate restance-move-up restance-delay-3","fontSize":"heading-5"} -->
<p class="has-text-align-center restance-animate restance-move-up restance-delay-3 has-forth-color has-text-color has-heading-5-font-size">It looks like nothing was found at this location. Maybe try a search?</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:search {"label":"Search...","showLabel":false,"width":75,"widthUnit":"%","buttonText":"Search","align":"center","style":{"border":{"radius":"5px"}},"className":"restance-animate restance-move-up restance-delay-5","fontSize":"heading-5"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
);
