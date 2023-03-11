<?php
/**
 * Core Page Hero content.
 */
return array(
	'title'      => __( 'Core Page Hero', 'travey' ),
	'categories' => array( 'travey-basic' ),
	'content'    => '<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"className":"travey-margin-top-n80 travey-z-index-0"} -->
			<div class="wp-block-column travey-margin-top-n80 travey-z-index-0"><!-- wp:cover {"url":"' . esc_url( TRAVEY_URI ) . 'assets/img/landscape-coast-sky-sunrise-sunset-hill-105304-pxhere.com.webp","id":1301,"dimRatio":50,"minHeight":571,"minHeightUnit":"px","isDark":false,"style":{"spacing":{"padding":{"top":"20rem","bottom":"10rem","right":"0rem","left":"0rem"}}}} -->
			<div class="wp-block-cover is-light" style="padding-top:20rem;padding-right:0rem;padding-bottom:10rem;padding-left:0rem;min-height:571px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1301" alt="" src="' . esc_url( TRAVEY_URI ) . 'assets/img/landscape-coast-sky-sunrise-sunset-hill-105304-pxhere.com.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:post-title {"textAlign":"center","style":{"typography":{"fontSize":"48px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"4px"}},"textColor":"ninth","fontFamily":"primary"} /--></div></div>
			<!-- /wp:cover --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->',
);
