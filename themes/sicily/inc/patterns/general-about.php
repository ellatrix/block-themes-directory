<?php
/**
 * About us section block pattern
 */
return array(
	'title'      => __( 'About section', 'sicily' ),
	'categories' => array( 'theme', 'featured', 'buttons', 'columns' ),
	'content'    => '<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"right":"1em","left":"1em"}}},"className":"about-section-block","layout":{"inherit":true}} -->
    <section class="wp-block-group" style="padding-right:1em;padding-left:1em"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
    <div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"textColor":"primary","fontSize":"small"} -->
    <p class="has-primary-color has-text-color has-small-font-size" style="text-transform:uppercase">' . esc_html__( 'welcome to Sicily', 'sicily' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:heading {"fontSize":"x-large"} -->
    <h2 class="has-x-large-font-size">' . esc_html__( 'Vineyards of Distinction', 'sicily' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:separator {"backgroundColor":"secondary"} -->
    <hr class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background"/>
    <!-- /wp:separator -->
    
    <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} -->
    <p style="text-transform:uppercase">' . esc_html__( 'Great wines tell a story', 'sicily' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph -->
    <p>' . wp_kses_post( __( 'In 1728, along the banks of Agusta, Stefanno Tommasco planted his first vineyard. His vision was to develop great tasting wines that reflect the true character of the grapes and the land.', 'sicily' ) ) . '</p>
    
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
    <div class="wp-block-button is-style-fill"><a class="wp-block-button__link" href="#">' . esc_html__( 'About Us', 'sicily' ) . '</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"5%"} -->
    <div class="wp-block-column" style="flex-basis:5%"></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"35.25%"} -->
    <div class="wp-block-column" style="flex-basis:35.25%"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom"} -->
    <figure class="wp-block-image size-large"><a href="#"><img src="' . get_template_directory_uri() . '/assets/images/chilling-wine.jpg" alt="' . esc_html__( 'Chilling Wine', 'sicily' ) . '"/></a></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom"} -->
    <figure class="wp-block-image size-full"><a href="#"><img src="' . get_template_directory_uri() . '/assets/images/wine-barrel.jpg" alt="' . esc_html__( 'Wine barrel', 'sicily' ) . '"/></a></figure>
    <!-- /wp:image -->
    
    <!-- wp:image {"sizeSlug":"full","linkDestination":"custom"} -->
    <figure class="wp-block-image size-full"><a href="#"><img src="' . get_template_directory_uri() . '/assets/images/wine-barrels.jpg" alt="' . esc_html__( 'Wine barrels', 'sicily' ) . '"/></a></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></section>
    <!-- /wp:group -->',
);
