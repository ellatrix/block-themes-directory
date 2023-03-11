<?php
return array(
    'title'      => __( 'Default', 'estory' ),
    'categories' => array( 'estory-search' ),
    'content'    => '<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"2.08em"}}},"layout":{"inherit":false,"contentSize":"568px"}} -->
    <div class="wp-block-group" style="margin-top:0px;padding-top:2.08em"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"bottom":"0.88em"}}},"className":"wp-block-search_title"} -->
    <h4 class="has-text-align-center wp-block-search_title" style="margin-bottom:0.88em">' . esc_html__( 'Discover Your Story', 'estory' ) . '</h4>
    <!-- /wp:heading -->
    
    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"bottom":"0px","top":"0px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search article","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","style":{"border":{"radius":"50px","color":"#BFBFBF"}}} /--></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->'
);
