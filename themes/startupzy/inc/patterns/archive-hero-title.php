<?php
/**
 * Archive Hero content.
 */
return array(
	'title'      => __( 'Archive Hero', 'startupzy' ),
	'categories' => array( 'startupzy-basic' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"' . esc_url( STARTUPZY_URI ) . 'assets/img/action-african-american-american-asian-black-brainstorming-1442007-pxhere.com.webp","id":129,"dimRatio":92,"overlayColor":"startupzy-bg-overlay","focalPoint":{"x":"0.50","y":"0.66"},"minHeight":500,"contentPosition":"center center","style":{"spacing":{"padding":{"bottom":"200px","top":"0px","right":"0px","left":"0px"}}}} -->
<div class="wp-block-cover" style="padding-top:0px;padding-right:0px;padding-bottom:200px;padding-left:0px;min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-startupzy-bg-overlay-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-129" alt="" src="' . esc_url( STARTUPZY_URI ) . 'assets/img/action-african-american-american-asian-black-brainstorming-1442007-pxhere.com.webp" style="object-position:50% 66%" data-object-fit="cover" data-object-position="50% 66%"/><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"header","theme":"startupzy"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"160px"}}},"layout":{"wideSize":"1170px","contentSize":"1170px"}} -->
<div class="wp-block-group" style="padding-top:160px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:query-title {"type":"archive","textAlign":"center","textColor":"white"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
);

