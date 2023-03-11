<?php
/**
 * Footer Info
 * 
 * Title: Footer Info
 * Slug: it-firm/footer/info
 * Categories: it-firm-footer
 *
 * @package it-firm
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Footer Info', 'it-firm' ),
	'categories' => array( 'it-firm-footer' ),
	'inserter'   => true,
	'content'    => '<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
    <div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-no-text-decoration"} -->
    <p class="is-style-no-text-decoration"><img class="wp-image-105" style="width: 15px;" src="'. esc_url( get_theme_file_uri( "assets/images/location_icon.webp" ) ) .'" alt=""> 5325 Old Middleton Rd Madison West Virginia 53705</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"className":"is-style-no-text-decoration"} -->
    <p class="is-style-no-text-decoration"><img class="wp-image-107" style="width: 15px;" src="'. esc_url( get_theme_file_uri( "assets/images/call_ic_icon.webp" ) ) .'" alt=""> +1 (002) 345 6789</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"className":"is-style-no-text-decoration"} -->
    <p class="is-style-no-text-decoration">Time 09:00 am - 07:00 pm</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->',
);
