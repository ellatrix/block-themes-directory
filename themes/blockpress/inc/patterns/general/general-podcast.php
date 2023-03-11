<?php
/**
 * Blockpress: Podcast Episode with media, text
 *
 * @package Blockpress
 */

return array(
	'title'         => __( 'Podcast episode with media, text.', 'blockpress' ),
	'categories'    => array( 'blockpress-general' ),
 
	'content'       => '
	<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":3489,"sizeSlug":"full","linkDestination":"none","className":"is-style-no-margin"} -->
<figure class="wp-block-image size-full is-style-no-margin"><img src="' . esc_url( get_theme_file_uri( 'assets/patterns/white_800_800.jpg' ) ) . '"  alt="' . esc_attr__( 'Sample Image', 'blockpress' ) . '" class="wp-image-3489"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30px"} -->
<div class="wp-block-column" style="flex-basis:30px"><!-- wp:paragraph -->
<p> </p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="has-x-large-font-size" id="sample-podcast-episode">' . esc_html__( 'Sample Podcast Episode', 'blockpress' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}}} -->
<p style="line-height:1.5">Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum. Quisque vitae mi pellentesque arcu fermentum, dignissim velit vitae, malesuad elit condimentum. Vestibulum et faucibus.</p>
<!-- /wp:paragraph -->

<!-- wp:audio {"id":3546} -->
<figure class="wp-block-audio"><audio controls src="' . esc_url( get_theme_file_uri( 'assets/patterns/sample-audio-file.mp3' ) ) . '"></audio></figure>
<!-- /wp:audio -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline-black"} -->
<div class="wp-block-button is-style-outline-black"><a class="wp-block-button__link" href="#">Apple Podcasts</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline-black"} -->
<div class="wp-block-button is-style-outline-black"><a class="wp-block-button__link" href="#">Google Podcasts</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline-black"} -->
<div class="wp-block-button is-style-outline-black"><a class="wp-block-button__link" href="#">Spotify</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline-black"} -->
<div class="wp-block-button is-style-outline-black"><a class="wp-block-button__link" href="#">Stitcher</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":70} -->
<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
',
);
