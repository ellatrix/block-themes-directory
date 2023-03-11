<?php
/**
 * Core Page Section 1 content.
 */
return array(
	'title'      => __( 'Core Page Section 1', 'hypebiz' ),
	'categories' => array( 'hypebiz-basic' ),
	'content'    => '<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}},"backgroundColor":"white","textColor":"fourth","layout":{"inherit":false}} -->
			<main class="wp-block-group has-fourth-color has-white-background-color has-text-color has-background" style="padding-top:100px;padding-bottom:100px"><!-- wp:group {"layout":{"inherit":true}} -->
			<div class="wp-block-group"><!-- wp:post-content {"layout":{"inherit":false}} /--></div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"seventh","textColor":"secondary","layout":{"inherit":true}} -->
			<div class="wp-block-group has-secondary-color has-seventh-background-color has-text-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-comments {"backgroundColor":"white","textColor":"fourth"} /--></div>
			<!-- /wp:group --></main>
			<!-- /wp:group -->',
);
