<?php
/**
 * General: latest YouTube video
 */
return array(
	'title'      => __( 'Latest YouTube video', 'ona' ),
	'categories' => array( 'ona-general' ),
	'content'    => '
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}},"backgroundColor":"background-light","layout":{"contentSize":"1170px"}} -->
			<div class="wp-block-group has-background-light-background-color has-background" style="padding-top:100px;padding-bottom:100px"><!-- wp:columns {"style":{"spacing":{"blockGap":"10%"}}} -->
			<div class="wp-block-columns"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:heading {"fontSize":"medium-large"} -->
			<h2 class="has-medium-large-font-size" id="discover-my-latest-video">' . __( 'Discover my latest video', 'ona' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>' . __( 'When your life appears so out of balance, ordinary comfort diminishes completely. Anxiety, stress and often depression feel more compelling to us.', 'ona' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link">' . __( 'See More Vlogs', 'ona' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:embed {"url":"https://www.youtube.com/watch?v=NKhUVFJDJ-Q","type":"video","providerNameSlug":"youtube","responsive":true,"className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
			<figure class="wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
			https://www.youtube.com/watch?v=NKhUVFJDJ-Q
			</div></figure>
			<!-- /wp:embed --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->',
);



