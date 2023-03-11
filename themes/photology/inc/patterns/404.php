<?php
/**
 * 404 content.
 */
return array(
	'title'      => __( '404', 'photology' ),
	'categories' => array( 'photology-basic' ),
	'content'    => '<!-- wp:group {"tagName":"main","layout":{"inherit":false}} -->
<main class="wp-block-group"><!-- wp:cover {"url":"' . esc_url( PHOTOLOGY_URI ) . 'assets/img/rock-music-people-night-smoke-crowd-655306-pxhere.com.jpg","id":510,"dimRatio":70,"overlayColor":"photology-bg-overlay","focalPoint":{"x":"0.50","y":"0.48"},"minHeight":530,"contentPosition":"center center","style":{"spacing":{"padding":{"bottom":"380px"}}}} -->
<div class="wp-block-cover" style="padding-bottom:380px;min-height:530px"><span aria-hidden="true" class="wp-block-cover__background has-photology-bg-overlay-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-510" alt="" src="' . esc_url( PHOTOLOGY_URI ) . 'assets/img/rock-music-people-night-smoke-crowd-655306-pxhere.com.jpg" style="object-position:50% 48%" data-object-fit="cover" data-object-position="50% 48%"/><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"header","theme":"photology"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"280px"}}},"layout":{"wideSize":"1170px","contentSize":"1170px","type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:280px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"30px"}}},"textColor":"photology-brown-soft","fontSize":"extra-large"} -->
<h2 class="has-text-align-center has-photology-brown-soft-color has-text-color has-extra-large-font-size" style="margin-bottom:30px">Page Not Found</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"photology-text-hero"} -->
<p class="has-text-align-center has-photology-text-hero-color has-text-color">It looks like nothing was found at this location. Maybe try a search?</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:search {"label":"Search...","showLabel":false,"width":75,"widthUnit":"%","buttonText":"Search","align":"center","style":{"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"photology-brown","textColor":"photology-secondary"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></main>
<!-- /wp:group -->',
);
