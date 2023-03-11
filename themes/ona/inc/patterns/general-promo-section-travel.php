<?php
/**
 * General promo section travel
 */
return array(
	'title'      => __( 'Promo section travel', 'ona' ),
	'categories' => array( 'ona-general' ),
	'content'    => '
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"110px","bottom":"110px","right":"1.5rem","left":"1.5rem"}}},"backgroundColor":"secondary","layout":{"inherit":false,"contentSize":"1170px"}} -->
			<div class="wp-block-group has-secondary-background-color has-background" style="padding-top:110px;padding-right:1.5rem;padding-bottom:110px;padding-left:1.5rem"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}}} -->
			<div class="wp-block-columns" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"12%","right":"12%","bottom":"12%","left":"12%"}}},"backgroundColor":"background"} -->
			<div class="wp-block-group has-background-background-color has-background" style="padding-top:12%;padding-right:12%;padding-bottom:12%;padding-left:12%"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.2"}},"textColor":"primary","className":"is-style-ona-alt-font","fontSize":"medium-large"} -->
			<h2 class="is-style-ona-alt-font has-primary-color has-text-color has-medium-large-font-size" id="my-travel-gear" style="line-height:1.2">' . __( 'Hey There', 'ona' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:heading {"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"medium-large"} -->
			<h2 class="has-medium-large-font-size" id="my-travel-gear" style="line-height:1.2">' . __( 'Discover my latest Updates', 'ona' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>' . __( 'I’m a coffee lover, content creator and influencer who is design obsessed. My husband and I love to help businesses transform them into something amazing.', 'ona' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p>' . __( 'When your life appears so out of balance, ordinary comfort diminishes completely. Anxiety, stress and often depression feel more compelling to us than any hope or comfort in life.', 'ona' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"textAlign":"right","level":3,"className":"is-style-ona-alt-font"} -->
			<h3 class="has-text-align-right is-style-ona-alt-font">' . __( 'Joeby Ragpa', 'ona' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:spacer {"height":"10px"} -->
			<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer --></div>
			<!-- /wp:group --></div>
			<!-- /wp:column -->

			<!-- wp:column {"className":"is-style-no-spacing"} -->
			<div class="wp-block-column is-style-no-spacing"><!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ). '/assets/img/travel/ona_travel_promo.jpg","id":20,"dimRatio":0,"minHeightUnit":"%","isDark":false,"className":"is-vertically-stretched"} -->
			<div class="wp-block-cover is-light is-vertically-stretched"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-20" alt="" src="' . esc_url( get_template_directory_uri() ). '/assets/img/travel/ona_travel_promo.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
			</div></div>
			<!-- /wp:cover --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->',
);



