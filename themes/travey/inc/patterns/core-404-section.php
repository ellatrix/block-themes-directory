<?php
/**
 * Core 404 content.
 */
return array(
	'title'      => __( 'Core 404', 'travey' ),
	'categories' => array( 'travey-basic' ),
	'content'    => '<!-- wp:group {"layout":{"wideSize":"","contentSize":""}} -->
			<div class="wp-block-group"><!-- wp:cover {"url":"' . esc_url( TRAVEY_URI ) . 'assets/img/landscape-coast-sky-sunrise-sunset-hill-105304-pxhere.com.webp","id":1134,"dimRatio":40,"overlayColor":"black","focalPoint":{"x":"0.48","y":"0.51"},"contentPosition":"center center","isDark":false,"className":"travey-margin-top-n80 travey"} -->
			<div class="wp-block-cover is-light travey-margin-top-n80 travey"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1134" alt="" src="' . esc_url( TRAVEY_URI ) . 'assets/img/landscape-coast-sky-sunrise-sunset-hill-105304-pxhere.com.webp" style="object-position:48% 51%" data-object-fit="cover" data-object-position="48% 51%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"260px","bottom":"260px"}}},"layout":{"wideSize":"1140px"}} -->
			<main class="wp-block-group" style="padding-top:260px;padding-bottom:260px"><!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"30px"}}},"textColor":"ninth","fontSize":"extra-large"} -->
			<h2 class="has-text-align-center has-ninth-color has-text-color has-extra-large-font-size" style="margin-bottom:30px">Page Not Found</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","textColor":"ninth"} -->
			<p class="has-text-align-center has-ninth-color has-text-color">It looks like nothing was found at this location. Maybe try a search?</p>
			<!-- /wp:paragraph -->

			<!-- wp:spacer {"height":"20px"} -->
			<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:search {"label":"Search...","showLabel":false,"width":75,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center","style":{"border":{"radius":"5px"}},"borderColor":"fifth","backgroundColor":"ninth","textColor":"primary"} /--></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></main>
			<!-- /wp:group --></div></div>
			<!-- /wp:cover --></div>
			<!-- /wp:group -->',
);
