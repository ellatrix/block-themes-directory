<?php
/**
 * General: hero creative
 */
return array(
	'title'      => __( 'Hero creative', 'ona' ),
	'categories' => array( 'ona-general' ),
	'content'    => '
			<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'assets/img/creative/ona_creative_hero.jpg' ) ) . '","id":5,"hasParallax":true,"dimRatio":40,"overlayColor":"foreground","focalPoint":{"x":"0.50","y":0},"minHeight":100,"minHeightUnit":"vh","contentPosition":"bottom center","isDark":false} -->
			<div class="wp-block-cover is-light has-parallax has-custom-content-position is-position-bottom-center" style="background-image:url(' . esc_url( get_theme_file_uri( 'assets/img/creative/ona_creative_hero.jpg' ) ) . ');min-height:100vh"><span aria-hidden="true" class="has-foreground-background-color has-background-dim-40 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"48px","bottom":"48px","right":"68px","left":"68px"}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":false,"contentSize":"600px"}} -->
			<div class="wp-block-group has-background-color has-foreground-background-color has-text-color has-background" style="padding-top:48px;padding-right:68px;padding-bottom:48px;padding-left:68px"><!-- wp:paragraph {"textColor":"secondary","className":"ona-alt-font","fontSize":"medium-large"} -->
			<p class="ona-alt-font has-secondary-color has-text-color has-medium-large-font-size">' . __( 'Hey There', 'ona' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"fontSize":"x-large"} -->
			<h1 class="has-x-large-font-size" id="i-m-ona-and-this-is-my-travel-journal">' . __( 'I’m Ona, and this is my travel journal', 'ona' ) . '</h1>
			<!-- /wp:heading --></div>
			<!-- /wp:group -->

			<!-- wp:spacer {"height":30} -->
			<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer --></div></div>
			<!-- /wp:cover -->',
);



