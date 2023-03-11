<?php
register_block_pattern(
    'carlina/footer-2-columns-social-links',
    array(
        'title'       => 'Two Columns Footer with social links',
        'description' => 'Show two columns in footer with social links',
        'content'     => '<!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
        <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:social-links {"iconBackgroundColor":"secondary","iconBackgroundColorValue":"#394d29","className":"is-style-default"} -->
        <ul class="wp-block-social-links has-icon-background-color"><!-- wp:social-link {"url":"www.facebook.com/sample","service":"facebook"} /-->
        
        <!-- wp:social-link {"url":"www.instagram.com/sample","service":"instagram"} /-->
        
        <!-- wp:social-link {"url":"www.youtube.com/sample","service":"youtube"} /-->
        
        <!-- wp:social-link {"url":"www.pinterest.com/sample","service":"pinterest"} /--></ul>
            <!-- /wp:social-links --></div>
        <!-- /wp:column -->
        
        <!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:paragraph {"align":"left","fontSize":"x-small"} -->
        <p class="has-text-align-left has-x-small-font-size">© 2022 My Site  |  All rights reserved.</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns -->',
        'categories'  => array( 'footers' ),
        'keywords'    => array( 'footers', 'two-columns' ),
    )
);

