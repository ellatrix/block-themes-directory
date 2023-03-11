<?php

/**
 * Call to action
 */
return array(
    'title'      => __('Call to action Section', 'bioxlog'),
    'categories' => array('pages', 'text'),
    'content'    => '
    <!-- wp:group {"className":"call-to-action-section"} -->
    <div class="wp-block-group call-to-action-section"><!-- wp:spacer {"height":"25px"} -->
    <div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
    <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"60px"}}} -->
    <h2 style="font-size:60px;font-style:normal;font-weight:700">' . esc_html__( 'Do you want to build a project?', 'bioxlog' ). '</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"style":{"typography":{"fontSize":"20px"}}} -->
    <p style="font-size:20px">' . esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo tempora, corporis reiciendis temporibus cupiditate recusandae fugiat libero minima incidunt quod.', 'bioxlog' ). '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%"} -->
    <div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:spacer {"height":"50px"} -->
    <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
    <div class="wp-block-buttons"><!-- wp:button -->
    <div class="wp-block-button"><a class="wp-block-button__link">' . esc_html__( 'Get a Quote', 'bioxlog' ). '</a></div>
    <!-- /wp:button -->

    <!-- wp:button {"className":"is-style-outline"} -->
    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link">' . esc_html__( 'Contact', 'bioxlog' ). '</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons -->

    <!-- wp:spacer {"height":"50px"} -->
    <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->

    <!-- wp:spacer {"height":"25px"} -->
    <div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:group -->',
);
