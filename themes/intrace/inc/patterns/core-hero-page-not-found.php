<?php
/**
 * Core 404 Hero content.
 */
return array(
	'title'      => __( 'Core 404 Hero', 'intrace' ),
	'categories' => array( 'intrace-basic' ),
	'content'    => '<!-- wp:group {"layout":{"contentSize":""}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"' . esc_url( INTRACE_URI ) . 'assets/img/architecture-house-home-pool-ceiling-italy-599832-pxhere.com.webp","id":1185,"dimRatio":80,"customOverlayColor":"#181818","style":{"spacing":{"padding":{"bottom":"0px","right":"0px","left":"0px","top":"20px"}}}} -->
<div class="wp-block-cover" style="padding-top:20px;padding-right:0px;padding-bottom:0px;padding-left:0px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim" style="background-color:#181818"></span><img class="wp-block-cover__image-background wp-image-1185" alt="" src="' . esc_url( INTRACE_URI ) . 'assets/img/architecture-house-home-pool-ceiling-italy-599832-pxhere.com.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"header","theme":"intrace"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"280px","bottom":"380px"}}},"layout":{"contentSize":"1140px","type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:280px;padding-bottom:380px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"100%"} -->
<div class="wp-block-column" style="flex-basis:100%"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"capitalize","letterSpacing":"0em","lineHeight":"1"}},"textColor":"intrace-accent","fontSize":"heading-4"} -->
<h2 class="has-text-align-center has-intrace-accent-color has-text-color has-heading-4-font-size" style="font-style:normal;font-weight:600;letter-spacing:0em;line-height:1;text-transform:capitalize">Page Not Found</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"white","fontSize":"heading-6"} -->
<p class="has-text-align-center has-white-color has-text-color has-heading-6-font-size">It looks like nothing was found at this location. Maybe try a search?</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:search {"label":"Search...","showLabel":false,"width":75,"widthUnit":"%","buttonText":"Search","align":"center","style":{"border":{"radius":"5px"}},"borderColor":"intrace-background","backgroundColor":"intrace-accent","textColor":"intrace-background"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
);
