<?php
/**
 * Highlight Box 3 Pattern
 *
 * @package WordPress
 * @subpackage Allele
 * @since Allele 1.0.0
 */

return array(
			'title'         => __( 'Highlight Box 3', 'allele' ),
			'categories'    => array( 'allele-general' ),
			'content'       => '<!-- wp:group {"align":"full","backgroundColor":"background-primary","className":"is-style-allele-no-spacing","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull is-style-allele-no-spacing has-background-primary-background-color has-background"><!-- wp:media-text {"mediaId":3118,"mediaLink":"' . esc_url( get_theme_file_uri( 'images/highlight-4.jpg' ) ) . '","linkDestination":"none","mediaType":"image"} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( 'images/highlight-4.jpg' ) ) . '" alt="" class="wp-image-3118 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"padding":{"top":"4vw","bottom":"4vw"}}},"backgroundColor":"background-secondary","className":"is-style-allele-box-shadow"} -->
<div class="wp-block-group is-style-allele-box-shadow has-background-secondary-background-color has-background" style="padding-top:4vw;padding-bottom:4vw"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<h3 style="font-style:normal;font-weight:700">We are creative digital agency.</h3>
<!-- /wp:heading --></div>
<!-- /wp:group --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group -->',
);
