<?php
/**
 * Service
 */
return array(
	'title'      => esc_html__( ' Header Media', 'lyna' ),
	'categories' => array( 'lyna', 'featured' ),
	'content'    => '<!-- wp:group {"align":"full","className":"slider"} -->
    <div class="wp-block-group alignfull slider"><!-- wp:group {"align":"full","layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/header.jpg' ) ) . '","id":20034,"dimRatio":0,"minHeight":100,"minHeightUnit":"vh","align":"full"} -->
    <div class="wp-block-cover alignfull" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-20034" alt="" src="' . esc_url( get_theme_file_uri( '/assets/images/header.jpg' ) ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"className":"slider-content"} -->
    <div class="wp-block-columns slider-content"><!-- wp:column {"verticalAlignment":"center","width":"100%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%"><!-- wp:paragraph {"align":"right"} -->
    <p class="has-text-align-right">' . esc_html__( 'Photo By Sakin Shrestha', 'lyna' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"100%"} -->
    <div class="wp-block-column" style="flex-basis:100%"><!-- wp:heading {"className":"slider-title","fontSize":"huge"} -->
    <h2 class="slider-title has-huge-font-size">' . esc_html__( 'Into', 'lyna' ) . '<br>' . esc_html__( 'Another', 'lyna' ) . '<br>' . esc_html__( 'Dimension', 'lyna' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link">' . esc_html__( 'View Project', 'lyna' ) . '</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div></div>
    <!-- /wp:cover --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->',
);
