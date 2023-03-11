<?php
/**
 * Core 404 content.
 */
return array(
	'title'      => __( 'Core 404', 'accountra' ),
	'categories' => array( 'accountra-basic' ),
	'content'    => '<!-- wp:group -->
			<div class="wp-block-group"><!-- wp:cover {"url":"' . esc_url( ACCOUNTRA_URI ) . 'assets/img/work-architecture-sky-roof-building-city-1037258-pxhere.com.webp","id":93,"dimRatio":80,"overlayColor":"black","focalPoint":{"x":"0.49","y":"0.51"},"minHeight":449,"minHeightUnit":"px","contentPosition":"center center","style":{"spacing":{"padding":{"bottom":"150px"}}}} -->
			<div class="wp-block-cover" style="padding-bottom:150px;min-height:449px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-93" alt="" src="' . esc_url( ACCOUNTRA_URI ) . 'assets/img/work-architecture-sky-roof-building-city-1037258-pxhere.com.webp" style="object-position:49% 51%" data-object-fit="cover" data-object-position="49% 51%"/><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"header","theme":"accountra"} /-->

			<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"120px"}}},"layout":{"wideSize":"890px","contentSize":"890px"}} -->
			<main class="wp-block-group" style="padding-top:120px"><!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1"}},"textColor":"secondary","fontSize":"gigantic"} -->
			<h2 class="has-text-align-center has-secondary-color has-text-color has-gigantic-font-size" style="font-style:normal;font-weight:500;line-height:1;margin-bottom:0px">404</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}}} -->
			<p class="has-text-align-center" style="font-style:normal;font-weight:300">It looks like nothing was found at this location. Maybe try a search?</p>
			<!-- /wp:paragraph -->

			<!-- wp:spacer {"height":"15px"} -->
			<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:search {"label":"Search...","showLabel":false,"width":75,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center","style":{"border":{"radius":"5px"}},"borderColor":"third","backgroundColor":"secondary"} /--></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></main>
			<!-- /wp:group --></div></div>
			<!-- /wp:cover --></div>
			<!-- /wp:group -->',
);
