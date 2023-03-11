<?php
/**
 * General promo section
 */
return array(
	'title'      => __( 'Promo section', 'ona' ),
	'categories' => array( 'ona-general' ),
	'content'    => '
			<!-- wp:group {"layout":{"inherit":false}} -->
			<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}}} -->
			<div class="wp-block-columns" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"15%","right":"20%","bottom":"15%","left":"20%"}}},"backgroundColor":"background-light"} -->
			<div class="wp-block-group has-background-light-background-color has-background" style="padding-top:15%;padding-right:20%;padding-bottom:15%;padding-left:20%"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"large"} -->
			<h2 class="has-large-font-size" id="my-travel-gear" style="line-height:1.2">' . __( 'My Travel Gear', 'ona' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.4"}},"fontSize":"medium"} -->
			<p class="has-medium-font-size" style="line-height:1.4">' . __( 'Some blogs focus more on fashion advice, featuring how-to articles for the lay reader.', 'ona' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p>' . __( 'Some blogs focus more on fashion advice, featuring how-to articles for the lay reader. Articles discuss clothing fit, the matching and complementing of colors, and other information on clothes wearing and care along with prescriptive advice.', 'ona' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:spacer {"height":10} -->
			<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:image {"id":97,"width":119,"height":77,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/img/ona_signature.png' ) ) . '" alt="ona_signature" class="wp-image-97" width="119" height="77"/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:group --></div>
			<!-- /wp:column -->

			<!-- wp:column {"className":"is-style-no-spacing"} -->
			<div class="wp-block-column is-style-no-spacing"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'assets/img/ona_promo.jpg' ) ) . '","id":92,"dimRatio":0,"isDark":false,"className":"is-vertically-stretched"} -->
			<div class="wp-block-cover is-light is-vertically-stretched"><span aria-hidden="true" class="has-background-dim-0 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-92" alt="ona_promo" src="' . esc_url( get_theme_file_uri( 'assets/img/ona_promo.jpg' ) ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
			<!-- /wp:cover --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->',
);



