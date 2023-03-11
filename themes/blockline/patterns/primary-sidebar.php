<?php
/**
 * Primary Sidebar
 * 
 * slug: primary-sidebar
 * title: Primary Sidebar
 * categories: blockline
 */

 return array(
    'title'      =>__( 'Sidebar Section', 'blockline' ),
    'categories' => array( 'blockline' ),
    'content'    =>'<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"30px"}},"className":"has-no-hover-box-shadow"} -->
    <div class="wp-block-group has-no-hover-box-shadow" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"5px","padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}},"backgroundColor":"bg-sec","className":" "} -->
    <div class="wp-block-group has-bg-sec-background-color has-background" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
    <div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:search {"label":"","showLabel":false,"placeholder":" Search","width":100,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"style":{"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"accent","textColor":"background"} /--></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}},"backgroundColor":"bg-sec","className":" "} -->
    <div class="wp-block-group has-bg-sec-background-color has-background" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:group {"style":{"spacing":{"blockGap":"5px","margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0px","right":"0px","bottom":"10px","left":"0px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:10px;padding-left:0px"><!-- wp:heading {"level":3,"align":"wide","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"foreground","fontSize":"content-heading"} -->
    <h3 class="alignwide has-foreground-color has-text-color has-content-heading-font-size" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">Recent Posts</h3>
    <!-- /wp:heading --></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"0px","bottom":"0px","left":"0px"}}}} -->
    <div class="wp-block-group" style="padding-top:10px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:latest-posts {"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75} /--></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}},"backgroundColor":"bg-sec","className":" "} -->
    <div class="wp-block-group has-bg-sec-background-color has-background" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:group {"style":{"spacing":{"blockGap":"5px","margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0px","right":"0px","bottom":"10px","left":"0px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:10px;padding-left:0px"><!-- wp:heading {"level":3,"align":"wide","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"foreground","fontSize":"content-heading"} -->
    <h3 class="alignwide has-foreground-color has-text-color has-content-heading-font-size" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">About Us</h3>
    <!-- /wp:heading --></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
    <div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":64,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="'. esc_url( get_template_directory_uri() ).'/assets/images/about.png" alt="" class="wp-image-64"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:paragraph -->
    <p>'.esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac lorem pretium, laoreet enim at, malesuada elit.', 'blockline' ).'</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"background"} -->
    <div class="wp-block-button"><a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background wp-element-button">'.esc_html__('Know More', 'blockline').'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}},"backgroundColor":"bg-sec","className":" "} -->
    <div class="wp-block-group has-bg-sec-background-color has-background" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:group {"style":{"spacing":{"blockGap":"5px","margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0px","right":"0px","bottom":"10px","left":"0px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:10px;padding-left:0px"><!-- wp:heading {"level":3,"align":"wide","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"foreground","fontSize":"content-heading"} -->
    <h3 class="alignwide has-foreground-color has-text-color has-content-heading-font-size" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">'.esc_html__('Categories', 'blockline').'</h3>
    <!-- /wp:heading --></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
    <div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:categories /--></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}},"backgroundColor":"bg-sec","className":" "} -->
    <div class="wp-block-group has-bg-sec-background-color has-background" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:group {"style":{"spacing":{"blockGap":"5px","margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0px","right":"0px","bottom":"10px","left":"0px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:10px;padding-left:0px"><!-- wp:heading {"level":3,"align":"wide","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"foreground","fontSize":"content-heading"} -->
    <h3 class="alignwide has-foreground-color has-text-color has-content-heading-font-size" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">'.esc_html__('Archive', 'blockline').'</h3>
    <!-- /wp:heading --></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
    <div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group -->
    <div class="wp-block-group"><!-- wp:archives /--></div>
    <!-- /wp:group --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}},"backgroundColor":"bg-sec","className":" "} -->
    <div class="wp-block-group has-bg-sec-background-color has-background" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:group {"style":{"spacing":{"blockGap":"5px","margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0px","right":"0px","bottom":"10px","left":"0px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:10px;padding-left:0px"><!-- wp:heading {"level":3,"align":"wide","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"foreground","fontSize":"content-heading"} -->
    <h3 class="alignwide has-foreground-color has-text-color has-content-heading-font-size" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">Tags</h3>
    <!-- /wp:heading --></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
    <div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:tag-cloud /--></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}},"backgroundColor":"bg-sec","className":" "} -->
    <div class="wp-block-group has-bg-sec-background-color has-background" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:group {"style":{"spacing":{"blockGap":"5px","margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0px","right":"0px","bottom":"10px","left":"0px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:10px;padding-left:0px"><!-- wp:heading {"level":3,"align":"wide","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"foreground","fontSize":"content-heading"} -->
    <h3 class="alignwide has-foreground-color has-text-color has-content-heading-font-size" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">Social Media</h3>
    <!-- /wp:heading --></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
    <div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","size":"has-small-icon-size","style":{"spacing":{"margin":{"top":"20px","bottom":"0px"},"blockGap":{"top":"20px","left":"20px"}}},"className":"is-style-default","layout":{"type":"flex","justifyContent":"left"}} -->
    <ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-default" style="margin-top:20px;margin-bottom:0px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->
    
    <!-- wp:social-link {"url":"#","service":"twitter"} /-->
    
    <!-- wp:social-link {"url":"#","service":"youtube"} /-->
    
    <!-- wp:social-link {"service":"wordpress"} /-->
    
    <!-- wp:social-link {"service":"pinterest"} /--></ul>
    <!-- /wp:social-links --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->'
);