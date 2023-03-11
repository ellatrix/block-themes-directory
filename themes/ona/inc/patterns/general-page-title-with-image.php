<?php
/**
 * General page title with image
 */
return array(
	'title'      => __( 'Page title with image', 'ona' ),
	'categories' => array( 'ona-general' ),
	'content'    => '
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"68px"}}},"backgroundColor":"background-light","layout":{"contentSize":"1170px"}} -->
			<div class="wp-block-group has-background-light-background-color has-background" style="padding-top:68px"><!-- wp:columns {"style":{"spacing":{"blockGap":"68px"}}} -->
			<div class="wp-block-columns"><!-- wp:column {"className":"is-style-ona-negative-offset-bottom"} -->
			<div class="wp-block-column is-style-ona-negative-offset-bottom"><!-- wp:image {"id":220,"width":565,"height":637,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/img/ona_about_hero.jpg' ) ) . '" alt="ona_about_hero" class="wp-image-220" width="565" height="637"/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":223,"width":319,"height":133,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/img/ona_about_page_title_signature.png' ) ) . '" alt="ona_about_page_title_signature" class="wp-image-223" width="319" height="133"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"right":"15%"}}}} -->
			<h1 id="i-am-a-lifestyle-and-fashion-blogger-a-person-who-enjoys-travel" style="margin-right:15%">' . __( 'I am a lifestyle and fashion blogger, a person who enjoys travel.', 'ona' ) . '</h1>
			<!-- /wp:heading --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->',
);



