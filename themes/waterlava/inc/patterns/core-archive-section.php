<?php
/**
 * Archive Section content.
 */
return array(
	'title'      => __( 'Archive Section', 'waterlava' ),
	'categories' => array( 'waterlava-basic' ),
	'content'    => '<!-- wp:group {"layout":{"wideSize":"","contentSize":""}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"' . esc_url( WATERLAVA_URI ) . 'assets/img/nature-plant-leaf-flower-petal-glass-612874-pxhere.com.webp","id":16,"dimRatio":70,"overlayColor":"black","focalPoint":{"x":"0.58","y":"0.88"},"contentPosition":"center center"} -->
<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-16" alt="" src="' . esc_url( WATERLAVA_URI ) . 'assets/img/nature-plant-leaf-flower-petal-glass-612874-pxhere.com.webp" style="object-position:58% 88%" data-object-fit="cover" data-object-position="58% 88%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"layout":{"wideSize":"1140px"}} -->
<div class="wp-block-group" style="padding-top:80px;padding-bottom:80px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:query-title {"type":"archive","textAlign":"center","textColor":"waterlava-third"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
);
