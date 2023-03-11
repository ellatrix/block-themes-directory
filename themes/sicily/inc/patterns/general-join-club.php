<?php
/**
 * Join the club block pattern
 */
return array(
	'title'      => __( 'Join the Club', 'sicily' ),
	'categories' => array( 'theme', 'featured', 'buttons', 'columns' ),
	'content'    => '<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"right":"1em","left":"1em"}}},"layout":{"inherit":true}} -->
    <section class="wp-block-group" style="padding-right:1em;padding-left:1em"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":""} -->
    <div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
    <div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"textColor":"primary","fontSize":"small"} -->
    <p class="has-primary-color has-text-color has-small-font-size" style="text-transform:uppercase">' . esc_html__( 'Our Club', 'sicily' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:heading {"fontSize":"x-large"} -->
    <h2 class="has-x-large-font-size">' . esc_html__( 'Vineyards of Distinction', 'sicily' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:separator {"backgroundColor":"secondary"} -->
    <hr class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background"/>
    <!-- /wp:separator --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"5%"} -->
    <div class="wp-block-column" style="flex-basis:5%"></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"bottom"} -->
    <div class="wp-block-column is-vertically-aligned-bottom"></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":""} -->
    <div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
    <div class="wp-block-group"><!-- wp:paragraph -->
    <p>' . wp_kses_post( __( 'Discover Sicily through wine club membership, and enjoy limited edition wines delivered to your door, special deals when you visit the winery and discounts on wines throughout the year.', 'sicily' ) ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"5%"} -->
    <div class="wp-block-column" style="flex-basis:5%"></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right","verticalAlignment":"top"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="#">' . esc_html__( 'Join Now', 'sicily' ) . '</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"1em"}}}} -->
    <div class="wp-block-columns" style="margin-top:1em"><!-- wp:column {"width":""} -->
    <div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
    <div class="wp-block-group"><!-- wp:group -->
    <div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
    <h3 class="has-large-font-size">' . esc_html__( 'Up to 40% Discount', 'sicily' ) . '</h3>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph -->
    <p>' . wp_kses_post( __( 'Discounted prices on all your wine orders', 'sicily' ) ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"25px"} -->
    <div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:group -->
    
    <!-- wp:group -->
    <div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
    <h3 class="has-large-font-size">' . esc_html__( 'Mix of Whites, Reds &amp; Rose', 'sicily' ) . '</h3>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph -->
    <p>' . wp_kses_post( __( 'Customize type of wines', 'sicily' ) ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"25px"} -->
    <div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:group -->
    
    <!-- wp:group -->
    <div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
    <h3 class="has-large-font-size">' . esc_html__( 'Free Shipping &amp; Payment', 'sicily' ) . '</h3>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph -->
    <p>' . wp_kses_post( __( 'Customize type of wines', 'sicily' ) ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"25px"} -->
    <div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"5%"} -->
    <div class="wp-block-column" style="flex-basis:5%"></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"bottom"} -->
    <div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="' . get_template_directory_uri() . '/assets/images/wine-club.jpg" alt="' . esc_html__( 'Wine Club', 'sicily' ) . '" /></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></section>
    <!-- /wp:group -->',
);
