<?php
register_block_pattern(
    'carlina/footer-3-columns-social-links',
    array(
        'title'       => 'Three Columns Footer with social links',
        'description' => 'Show three columns in footer with social links',
        'content'     => '<!-- wp:columns {"verticalAlignment":null} -->
        <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:navigation {"ref":238,"layout":{"type":"flex","justifyContent":"center"},"fontSize":"x-small"} /--></div>
        <!-- /wp:column -->
        
        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:social-links {"iconBackgroundColor":"secondary","iconBackgroundColorValue":"#394d29","layout":{"type":"flex","justifyContent":"center"}} -->
        <ul class="wp-block-social-links has-icon-background-color"><!-- wp:social-link {"url":"www.facebook.com/sample","service":"facebook"} /-->
        
        <!-- wp:social-link {"url":"www.instagram.com/sample","service":"instagram"} /-->
        
        <!-- wp:social-link {"url":"www.youtube.com/sample","service":"youtube"} /-->
        
        <!-- wp:social-link {"url":"www.pinterest.com/sample","service":"pinterest"} /--></ul>
        <!-- /wp:social-links --></div>
        <!-- /wp:column -->
        
        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"fontSize":"x-small"} -->
        <p class="has-x-small-font-size">© 2022 My Site  |  All rights reserved.</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns -->',
        'categories'  => array( 'footers' ),
        'keywords'    => array( 'footers', 'three-columns' ),
    )
);
