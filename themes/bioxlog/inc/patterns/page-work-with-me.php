<?php

/**
 * Work with me
 */
return array(
    'title'      => __('Work with me Section', 'bioxlog'),
    'categories' => array( 'pages', 'text' ),
    'content'    => '
    <!-- wp:group -->
    <div class="wp-block-group"><!-- wp:spacer {"height":"25px"} -->
    <div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:columns {"style":{"spacing":{"padding":{"top":"100px","right":"0px","bottom":"100px","left":"0px"}}}} -->
    <div class="wp-block-columns" style="padding-top:100px;padding-right:0px;padding-bottom:100px;padding-left:0px"><!-- wp:column {"width":"66.6%"} -->
    <div class="wp-block-column" style="flex-basis:66.6%"><!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}}} -->
    <p style="font-size:18px">' . esc_html__( 'START WORKING WITH ME', 'bioxlog' ). '</p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"800"}}} -->
    <h2 style="font-style:normal;font-weight:800">' . esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing.', 'bioxlog' ). '</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"style":{"typography":{"fontSize":"24px"}}} -->
    <p style="font-size:24px">' . esc_html__( 'DO YOU HAVE A PROJECT OPPORTUNITY, OR ARE YOU JUST A LOOKING TO GET CREATIVE SOLUTIONS?', 'bioxlog' ). '</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"style":{"spacing":{"blockGap":"0px"}}} -->
    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"foreground","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
    <div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><strong>GET STARTED</strong></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column"></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->

    <!-- wp:spacer {"height":"25px"} -->
    <div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:group -->',
);
