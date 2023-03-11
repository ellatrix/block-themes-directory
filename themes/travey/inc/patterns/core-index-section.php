<?php
/**
 * Core Index Hero content.
 */
return array(
	'title'      => __( 'Core Index Hero', 'travey' ),
	'categories' => array( 'travey-basic' ),
	'content'    => '<!-- wp:columns {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px"}}}} -->
            <div class="wp-block-columns" style="padding-top:10px;padding-bottom:10px"><!-- wp:column {"className":"travey-margin-top-n70"} -->
            <div class="wp-block-column travey-margin-top-n70"><!-- wp:cover {"url":"' . esc_url( TRAVEY_URI ) . 'assets/img/beach-sea-coast-water-sand-ocean-1200073-pxhere.com.webp","id":1075,"dimRatio":50,"minHeight":500,"minHeightUnit":"px","isDark":false,"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","right":"0px","left":"0px"}}}} -->
            <div class="wp-block-cover is-light" style="padding-top:100px;padding-right:0px;padding-bottom:100px;padding-left:0px;min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1075" alt="" src="' . esc_url( TRAVEY_URI ) . 'assets/img/beach-sea-coast-water-sand-ocean-1200073-pxhere.com.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
            <p class="has-text-align-center has-large-font-size"></p>
            <!-- /wp:paragraph -->
            
            <!-- wp:query-title {"type":"archive","textAlign":"center","style":{"typography":{"fontSize":"48px","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase","letterSpacing":"3px"}},"textColor":"ninth","fontFamily":"primary"} /--></div></div>
            <!-- /wp:cover --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->',
);
