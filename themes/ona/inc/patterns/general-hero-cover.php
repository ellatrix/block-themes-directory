<?php
/**
 * General hero cover
 */
return array(
	'title'      => __( 'Hero cover', 'ona' ),
	'categories' => array( 'ona-general' ),
	'content'    => '
			<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/img/ona_hero_cover.jpg","id":10,"hasParallax":true,"dimRatio":30,"overlayColor":"foreground","minHeight":67,"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"className":"ona-hero","style":{"color":[]}} -->
			<div class="wp-block-cover is-light has-parallax ona-hero" style="background-image:url(' . esc_url( get_template_directory_uri() ) . '/assets/img/ona_hero_cover.jpg' . ');min-height:67vh"><span aria-hidden="true" class="has-foreground-background-color has-background-dim-30 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":false,"contentSize":"720px"}} -->
			<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"textColor":"background","fontSize":"x-large"} -->
			<h1 class="has-text-align-center has-background-color has-text-color has-x-large-font-size" id="hello-i-m-ona-and-this-is-my-personal-travel-journal">' . __( 'Hello, I\'m Ona. And this is my personal travel journal', 'ona' ) . '</h1>
			<!-- /wp:heading --></div>
			<!-- /wp:group --></div></div>
			<!-- /wp:cover -->',
);



