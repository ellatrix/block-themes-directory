<?php
return array(
    'title'      => __( 'Style 1', 'estory' ),
    'categories' => array( 'estory-footer' ),
    'content'    =>'<!-- wp:group {"style":{"spacing":{"padding":{"top":"2em","bottom":"1em"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"2em"}},"backgroundColor":"white","className":"estory-footer","layout":{"inherit":true}} -->
    <div class="wp-block-group estory-footer has-white-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:2em;padding-bottom:1em"><!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"default","wideSize":"500px"}} -->
    <div class="wp-block-group"><!-- wp:site-logo {"align":"center"} /-->
    
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">' . esc_html__( 'Vestibulum ac diam sit amet quam vehicula elentum sed sit ame porttitor tincidunt.', 'estory' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"center"}} -->
    <div class="wp-block-group"><!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","iconBackgroundColor":"background","iconBackgroundColorValue":"#1F1717","style":{"spacing":{"blockGap":"0.33333333333em"}}} -->
    <ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"facebook"} /-->
    
    <!-- wp:social-link {"url":"#","service":"twitter"} /-->
    
    <!-- wp:social-link {"url":"#","service":"instagram"} /-->
    
    <!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
    <!-- /wp:social-links --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->
    
    <!-- wp:separator {"opacity":"css","className":"alignfull is-style-wide estory-footer-separator"} -->
    <hr class="wp-block-separator has-css-opacity alignfull is-style-wide estory-footer-separator"/>
    <!-- /wp:separator -->
    
    <!-- wp:paragraph {"align":"center","textColor":"text-color","className":"estory-copyright"} -->
    <p class="has-text-align-center estory-copyright has-text-color-color has-text-color">' . esc_html__( 'Copyright © 2022 | ', 'estory' ) . ' <a href="https://themegrill.com/" data-type="URL" data-id="themegrill.com" target="_blank" rel="noreferrer noopener">' . esc_html__( 'Built with eStory by ThemeGrill', 'estory' ) . '</a></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->'
);
