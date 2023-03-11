<?php
return array(
    'title'      => __( 'Header Default', 'estory' ),
    'categories' => array( 'estory-header' ),
    'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}},"backgroundColor":"white","layout":{"inherit":true}} -->
    <div class="wp-block-group has-white-background-color has-background" style="padding-top:0px;padding-bottom: 0px;">
    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--small)","bottom":"var(--wp--custom--spacing--small)"}}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between","flexWrap":"wrap"}} -->
    <div class="wp-block-group alignwide" style="padding-top:var(--wp--custom--spacing--small);padding-bottom:var(--wp--custom--spacing--small);">
    <!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
    <div class="wp-block-group"><!-- wp:site-logo {"width": 120} /-->
    <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
    <div class="wp-block-group"><!-- wp:site-title /-->
    
    <!-- wp:site-tagline { "style":{"spacing":{"margin":{"top":0}}}} /--></div>
    <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
    
    <!-- wp:navigation {"isResponsive":true,"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"blockGap":"1.6em"}}} -->
    <!-- wp:navigation-link {"label":"Home","url":"#","kind":"custom","isTopLevelLink":true} /-->
    <!-- wp:navigation-submenu {"label":"Pages","url":"#","kind":"custom","isTopLevelItem":true} -->
    <!-- wp:navigation-link {"label":"Page Layout","url":"#","kind":"custom","isTopLevelLink":false} /-->
    <!-- wp:navigation-link {"label":"Contact","url":"#","kind":"custom","isTopLevelLink":false} /-->
    <!-- /wp:navigation-submenu -->
    <!-- wp:navigation-link {"label":"Get Theme","url":"#","kind":"custom","isTopLevelLink":true} /-->
    <!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","iconBackgroundColor":"background","iconBackgroundColorValue":"#1F1717","style":{"spacing":{"blockGap":"0.33333333333em"}}} -->
    <ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"facebook.com","service":"facebook"} /-->
    
    <!-- wp:social-link {"url":"twitter.com","service":"twitter"} /-->
    
     <!-- wp:social-link {"url":"instagram.com","service":"instagram"} /-->
    
    <!-- wp:social-link {"url":"youtube.com","service":"youtube"} /--></ul>
    <!-- /wp:social-links -->
    <!-- /wp:navigation -->
    </div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->'
);
