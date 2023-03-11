<?php
/**
 * Core Archive Hero content.
 */
return array(
	'title'      => __( 'Core Archive Hero', 'hypebiz' ),
	'categories' => array( 'hypebiz-basic' ),
	'content'    => '<!-- wp:group {"layout":{"wideSize":"","contentSize":""}} -->
			<div class="wp-block-group"><!-- wp:cover {"url":"' . esc_url( HYPEBIZ_URI ) . 'assets/img/StockSnap_RRJH1KMRMW.webp","id":266,"dimRatio":70,"overlayColor":"fifth","focalPoint":{"x":"0.48","y":"0.34"},"contentPosition":"center center"} -->
			<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-fifth-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-266" alt="" src="' . esc_url( HYPEBIZ_URI ) . 'assets/img/StockSnap_RRJH1KMRMW.webp" style="object-position:48% 34%" data-object-fit="cover" data-object-position="48% 34%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"wideSize":"1140px"},"style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}}} -->
			<div class="wp-block-group" style="padding-top:80px;padding-bottom:80px"><!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:query-title {"type":"archive","textAlign":"center","style":{"typography":{"fontSize":"60px"}}} /--></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group --></div></div>
			<!-- /wp:cover --></div>
			<!-- /wp:group -->',
);
