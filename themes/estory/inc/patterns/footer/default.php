<?php
return array(
    'title'      => __( 'Footer Default', 'estory' ),
    'categories' => array( 'estory-footer' ),
    'content'    =>'<!-- wp:group {"style":{"spacing":{"blockGap":"2em","padding":{"top":"2em","bottom":"1em"}}},"backgroundColor":"white","className":"estory-footer","layout":{"inherit":true}} -->
    <div class="wp-block-group estory-footer has-white-background-color has-background" style="padding-top:2em;padding-bottom:1em"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"2em"}}}} -->
    <div class="wp-block-columns alignwide  are-vertically-aligned-center" style="margin-top:0px;margin-bottom:2em"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"2em"}}} -->
    <!-- wp:navigation-link {"label":"Home","url":"#","kind":"custom","isTopLevelLink":true} /-->
    
    <!-- wp:navigation-link {"label":"News" ,"url":"#","kind":"custom","isTopLevelLink":true} /-->
    
    <!-- wp:navigation-link {"label":"Pages","url":"#","kind":"custom","isTopLevelLink":true} /-->
    <!-- /wp:navigation -->
    </div>
    <!-- /wp:column -->
    
    <!-- wp:column {"className":"site-logo","verticalAlignment":"center","width":"50%"} -->
    <div class="wp-block-column is-vertically-aligned-center site-logo" style="flex-basis:50%"><!-- wp:site-logo {"align":"center"} /-->
    <!-- wp:site-title {"textAlign":"center","style":{"spacing":{"margin":{"top":"0px"}}}} /--></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","iconBackgroundColor":"background","iconBackgroundColorValue":"#1d2327","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"8px"}}} -->
    <ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"facebook.com","service":"facebook"} /-->
    
    <!-- wp:social-link {"url":"twitter.com","service":"twitter"} /-->
    
    <!-- wp:social-link {"url":"instagram.com","service":"instagram"} /-->
    
    <!-- wp:social-link {"url":"youtube.com","service":"youtube"} /--></ul>
    <!-- /wp:social-links --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    <!-- wp:separator {"align":"full","className":"is-style-wide estory-footer-separator"} -->
    <hr class="wp-block-separator alignfull is-style-wide estory-footer-separator"/>
    <!-- /wp:separator -->
    <!-- wp:paragraph {"align":"center","textColor":"text-color","className":"estory-copyright"} -->
    <p class="has-text-align-center estory-copyright has-text-color-color has-text-color">' . esc_html__( 'Copyright © 2022 | ', 'estory' ) . ' <a href="https://themegrill.com/" data-type="URL" data-id="themegrill.com" target="_blank" rel="noreferrer noopener">' . esc_html__( 'Built with eStory by ThemeGrill', 'estory' ) . '</a></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->'
);
