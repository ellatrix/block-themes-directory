<?php
/**
 * Core Index Hero content.
 */
return array(
	'title'      => __( 'Core Index Hero', 'intrace' ),
	'categories' => array( 'intrace-basic' ),
	'content'    => '<!-- wp:group {"layout":{"contentSize":""}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"' . esc_url( INTRACE_URI ) . 'assets/img/architecture-house-home-pool-ceiling-italy-599832-pxhere.com.webp","id":1185,"dimRatio":80,"customOverlayColor":"#181818","style":{"spacing":{"padding":{"bottom":"0px","right":"0px","left":"0px","top":"20px"}}}} -->
<div class="wp-block-cover" style="padding-top:20px;padding-right:0px;padding-bottom:0px;padding-left:0px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim" style="background-color:#181818"></span><img class="wp-block-cover__image-background wp-image-1185" alt="" src="' . esc_url( INTRACE_URI ) . 'assets/img/architecture-house-home-pool-ceiling-italy-599832-pxhere.com.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"header","theme":"intrace"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"200px"}}}} -->
<div class="wp-block-group" style="padding-top:100px;padding-bottom:200px"><!-- wp:post-title {"textAlign":"center","textColor":"intrace-accent","fontSize":"heading-4","fontFamily":"cambria-georgia"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
);
