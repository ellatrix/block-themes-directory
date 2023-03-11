<?php
/**
 * Core Single Hero content.
 */
return array(
	'title'      => __( 'Core Single Hero', 'travey' ),
	'categories' => array( 'travey-basic' ),
	'content'    => '<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"className":"travey-margin-top-n80 travey-z-index-0"} -->
			<div class="wp-block-column travey-margin-top-n80 travey-z-index-0"><!-- wp:cover {"url":"' . esc_url( TRAVEY_URI ) . 'assets/img/beach-sea-palm-tropical-island-tree-1634361-pxhere.com.webp","id":1299,"dimRatio":50,"minHeight":571,"minHeightUnit":"px","isDark":false,"style":{"spacing":{"padding":{"top":"10rem","bottom":"10rem","right":"0rem","left":"0rem"}}}} -->
			<div class="wp-block-cover is-light" style="padding-top:10rem;padding-right:0rem;padding-bottom:10rem;padding-left:0rem;min-height:571px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1299" alt="" src="' . esc_url( TRAVEY_URI ) . 'assets/img/beach-sea-palm-tropical-island-tree-1634361-pxhere.com.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
			<p class="has-text-align-center has-large-font-size"></p>
			<!-- /wp:paragraph -->
			
			<!-- wp:post-title {"textAlign":"center","style":{"typography":{"fontSize":"48px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"3px"}},"textColor":"ninth","fontFamily":"primary"} /--></div></div>
			<!-- /wp:cover --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->',
);
