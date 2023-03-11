<?php
/**
 * Gutenverse content.
 */
return array(
	'title'      => __( 'Core Single Post Hero', 'vorfolio' ),
	'categories' => array( 'vorfolio-basic' ),
	'content'    => '<!-- wp:group {"layout":{"inherit":false}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"' . esc_url( VORFOLIO_URI ) . 'assets/img/gaussian-bg-hero.webp","id":357,"dimRatio":0,"focalPoint":{"x":"0.50","y":"1.00"},"minHeight":50,"contentPosition":"center center","style":{"spacing":{"padding":{"bottom":"280px"}}}} -->
<div class="wp-block-cover" style="padding-bottom:280px;min-height:50px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-357" alt="" src="' . esc_url( VORFOLIO_URI ) . 'assets/img/gaussian-bg-hero.webp" style="object-position:50% 100%" data-object-fit="cover" data-object-position="50% 100%"/><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"header","theme":"vorfolio"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px"}}},"layout":{"wideSize":"1140px","contentSize":"1140px"}} -->
<div class="wp-block-group" style="padding-top:80px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-title {"textAlign":"center","textColor":"white","className":"vorfolio-animate vorfolio-move-up ","fontSize":"heading-2"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
);
