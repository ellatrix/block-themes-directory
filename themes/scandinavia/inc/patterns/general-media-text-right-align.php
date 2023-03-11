<?php
/**
 * Media text block pattern
 */
return array(
	'title'      => __( 'Media Text (Right Align)', 'scandinavia' ),
	'categories' => array( 'featured', 'columns' ),
	'content'    => '<!-- wp:media-text {"mediaId":1845,"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/assets/images/media-text.jpg","mediaType":"image","mediaWidth":65,"mediaSizeSlug":"full","verticalAlignment":"top","imageFill":true,"backgroundColor":"foreground","textColor":"background"} -->
                    <div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-top is-image-fill has-background-color has-foreground-background-color has-text-color has-background" style="grid-template-columns:65% auto"><figure class="wp-block-media-text__media" style="background-image:url(' . esc_url( get_template_directory_uri() ) . '/assets/images/media-text.jpg);background-position:50% 50%"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/media-text.jpg" alt="media-text" class="wp-image-1845 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:separator {"className":"is-style-default"} -->
                    <hr class="wp-block-separator has-alpha-channel-opacity is-style-default"/>
                    <!-- /wp:separator -->
                    
                    <!-- wp:paragraph {"align":"right","placeholder":"Content…","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"x-large"} -->
                    <p class="has-text-align-right has-x-large-font-size" style="font-style:normal;font-weight:700">' . esc_html__( 'The Sky is Blue', 'scandinavia' ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"italic","fontWeight":"700"}}} -->
                    <p class="has-text-align-right has-link-color" style="font-style:italic;font-weight:700"><a href="#">' . esc_html__( 'Browse', 'scandinavia' ) . '</a></p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:spacer {"height":"300px"} -->
                    <div style="height:300px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer --></div></div>
                    <!-- /wp:media-text -->',
);
