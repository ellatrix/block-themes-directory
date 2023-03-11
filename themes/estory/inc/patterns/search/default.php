<?php
return array(
    'title'      => __( 'Style 1', 'estory' ),
    'categories' => array( 'estory-search' ),
    'content'    => '<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"2.08em"}}},"layout":{"inherit":true}} -->
    <div class="wp-block-group" style="margin-top:0px;padding-top:2.08em"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"margin":{"bottom":"0px"}}}} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":4,"className":"wp-block-search_title"} -->
    <h4 class="wp-block-search_title">' . esc_html__( 'Discover Your Story', 'estory' ) . '</h4>
    <!-- /wp:heading --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search article","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","style":{"border":{"radius":"50px","color":"#BFBFBF"}}} /--></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->'
);
