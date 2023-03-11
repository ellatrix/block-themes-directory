<?php
/**
 * Music Podcast
 */
return array(
	'title'      => esc_html__( 'Music Podcast', 'pentatonic' ),
	'categories' => array( 'pentatonic', 'featured', 'pages' ),
	// 'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","className":"wp-block-section wp-bloock-music-podcast","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull wp-block-section wp-bloock-music-podcast"><!-- wp:media-text {"mediaLink":"' . get_parent_theme_file_uri( '/assets/images/music-playlist.jpg' ) . '","mediaType":"image","mediaWidth":40,"className":"has-media-on-the-left"} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile has-media-on-the-left" style="grid-template-columns:40% auto"><figure class="wp-block-media-text__media"><img src="' . get_parent_theme_file_uri( '/assets/images/music-playlist.jpg' ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:group {"className":"wp-block-group-heading"} -->
<div class="wp-block-group wp-block-group-heading"><!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase"}},"className":"has-body-text-color has-text-color"} -->
<h6 class="has-body-text-color has-text-color" style="text-transform:uppercase">' . esc_html__( 'Single Player', 'pentatonic' ) . '</h6>
<!-- /wp:heading -->

<!-- wp:heading -->
<h2>' . esc_html__( 'Music Podcast', 'pentatonic' ) . '</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:audio {"id":5939} -->
<figure class="wp-block-audio"><audio controls src="' . get_parent_theme_file_uri( '/assets/media/sample-3s.mp3' ) . '"></audio></figure>
<!-- /wp:audio -->

<!-- wp:paragraph -->
<p>' . esc_html__( 'The earliest use of "podcasting" was traced to The Guardian columnist and BBC journalist Ben Hammersley, who coined it in early February 2004 while writing an article for The Guardian newspaper.', 'pentatonic' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"9px","bottom":"9px","left":"25px","right":"25px"}}},"className":"is-style-outline","fontSize":"medium"} -->
<div class="wp-block-button has-custom-font-size is-style-outline has-medium-font-size"><a class="wp-block-button__link" style="border-radius:0px;padding-top:9px;padding-right:25px;padding-bottom:9px;padding-left:25px">' . esc_html__( 'Apple  Podcasts', 'pentatonic' ) . '</a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"9px","bottom":"9px","left":"25px","right":"25px"}}},"className":"is-style-outline","fontSize":"medium"} -->
<div class="wp-block-button has-custom-font-size is-style-outline has-medium-font-size"><a class="wp-block-button__link" style="border-radius:0px;padding-top:9px;padding-right:25px;padding-bottom:9px;padding-left:25px">' . esc_html__( 'Google  Podcasts', 'pentatonic' ) . '</a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"9px","bottom":"9px","left":"25px","right":"25px"}}},"className":"is-style-outline","fontSize":"medium"} -->
<div class="wp-block-button has-custom-font-size is-style-outline has-medium-font-size"><a class="wp-block-button__link" style="border-radius:0px;padding-top:9px;padding-right:25px;padding-bottom:9px;padding-left:25px">' . esc_html__( 'Spotify', 'pentatonic' ) . '</a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"9px","bottom":"9px","left":"25px","right":"25px"}}},"className":"is-style-outline","fontSize":"medium"} -->
<div class="wp-block-button has-custom-font-size is-style-outline has-medium-font-size"><a class="wp-block-button__link" style="border-radius:0px;padding-top:9px;padding-right:25px;padding-bottom:9px;padding-left:25px">' . esc_html__( 'Stitcher', 'pentatonic' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group -->',
);
