<?php
/**
 * General: hero minimal
 */
return array(
	'title'      => __( 'Hero minimal', 'ona' ),
	'categories' => array( 'ona-general' ),
	'content'    => '
			<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"110px"}}},"backgroundColor":"background-light","layout":{"contentSize":"1170px"}} -->
			<div class="wp-block-group alignwide has-background-light-background-color has-background" style="padding-bottom:110px"><!-- wp:media-text {"mediaId":12,"mediaLink":"#","mediaType":"image","mediaWidth":68.5,"imageFill":false} -->
			<div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:68.5% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( 'assets/img/minimal/ona_minimal_hero.jpg' ) ) . '" alt="ona_minimal_hero" class="wp-image-12 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"padding":{"top":"20%","right":"15%","bottom":"20%","left":"15%"}}},"backgroundColor":"background","className":"is-style-ona-negative-offset-left"} -->
			<div class="wp-block-group is-style-ona-negative-offset-left has-background-background-color has-background" style="padding-top:20%;padding-right:15%;padding-bottom:20%;padding-left:15%"><!-- wp:heading {"textAlign":"center","level":1,"fontSize":"large"} -->
			<h1 class="has-text-align-center has-large-font-size" id="hey-i-m-ona-and-this-is-my-travel-journal">' . __( 'Hey, I’m Ona, and this is my travel journal', 'ona' ) . '</h1>
			<!-- /wp:heading --></div>
			<!-- /wp:group --></div></div>
			<!-- /wp:media-text --></div>
			<!-- /wp:group -->',
);



