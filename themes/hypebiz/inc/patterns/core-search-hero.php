<?php
/**
 * Core Search Hero content.
 */
return array(
	'title'      => __( 'Core Search Hero', 'hypebiz' ),
	'categories' => array( 'hypebiz-basic' ),
	'content'    => '<!-- wp:group {"layout":{"wideSize":"","contentSize":""}} -->
			<div class="wp-block-group"><!-- wp:cover {"url":"' . esc_url( HYPEBIZ_URI ) . 'assets/img/StockSnap_LK46EHFEEF.webp","id":263,"dimRatio":70,"overlayColor":"fifth","focalPoint":{"x":"0.49","y":"0.48"},"contentPosition":"center center"} -->
			<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-fifth-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-263" alt="" src="' . esc_url( HYPEBIZ_URI ) . 'assets/img/StockSnap_LK46EHFEEF.webp" style="object-position:49% 48%" data-object-fit="cover" data-object-position="49% 48%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"layout":{"wideSize":"1140px"}} -->
			<div class="wp-block-group" style="padding-top:80px;padding-bottom:80px"><!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:query-title {"type":"archive","textAlign":"center","style":{"typography":{"fontSize":"60px"}},"textColor":"seventh","fontFamily":"primary"} /--></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group --></div></div>
			<!-- /wp:cover --></div>
			<!-- /wp:group -->',
);
