<?php
/**
 * Video with header and details block pattern
 */
return array(
	'title'      => __( 'Video with header and details', 'sicily' ),
	'categories' => array( 'theme', 'featured', 'columns' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--large, 8rem)","bottom":"var(--wp--custom--spacing--large, 8rem)"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"backgroundColor":"foreground","textColor":"secondary"} -->
					<div class="wp-block-group alignfull has-secondary-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--custom--spacing--large, 8rem);padding-bottom:var(--wp--custom--spacing--large, 8rem)"><!-- wp:group {"align":"full","layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull"><!-- wp:heading {"level":1,"align":"wide","style":{"typography":{"fontSize":"clamp(3rem, 6vw, 4.5rem)"}}} -->
					<h1 class="alignwide" id="warble-a-film-about-hobbyist-bird-watchers-1" style="font-size:clamp(3rem, 6vw, 4.5rem)">' . wp_kses_post( __( 'Enjoy <em>every moments</em> with a bottle of our finest.', 'sicily' ) ) . '</h1>
					<!-- /wp:heading -->

					<!-- wp:spacer {"height":32} -->
					<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:video {"align":"wide"} -->
					<figure class="wp-block-video alignwide"><video controls src="' . get_template_directory_uri() . '/assets/videos/estate.mp4"></video></figure>
					<!-- /wp:video -->

					<!-- wp:spacer {"height":32} -->
					<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:columns {"align":"wide"} -->
					<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%"} -->
					<div class="wp-block-column" style="flex-basis:40%">
					<!-- wp:heading {"level":3} -->
					<h3><strong>' . esc_html__( 'Events', 'sicily' ) . '</strong></h3>
					<!-- /wp:heading --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph -->
					<p>' . wp_kses_post( __( '<strong>Red Wine Festival</strong><br><br>February 21, 2021<br>4:00PM<br><br><strong>Venue</strong><br>Via Fluvial, 28100 Siracusa SR, Italy', 'sicily' ) ) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph -->
					<p>' . wp_kses_post( __( '<strong>White Wine Expo</strong><br><br>March 02, 2021<br>3:30PM<br><br><strong>Venue</strong><br>Albertal, 58912 Palermo PA, Italy', 'sicily' ) ) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns --></div>
					<!-- /wp:group --></div>
					<!-- /wp:group -->',
);
