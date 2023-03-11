<?php
/**
 * Title: Sidebar
 * Slug: vision-fse/sidebar
 * Categories: vision-fse
 */
?>
<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonUseIcon":true,"align":"center","style":{"border":{"radius":{"topLeft":"5px","topRight":"0px","bottomLeft":"5px","bottomRight":"0px"}}},"className":"sidebar-search"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","bottom":"40px","top":"40px"},"blockGap":"0","margin":{"top":"50px"}}},"className":"vision-sidebar-user-detail","layout":{"type":"constrained"}} -->
<div class="wp-block-group vision-sidebar-user-detail"
    style="margin-top:50px;padding-top:40px;padding-right:0;padding-bottom:40px">
    <!-- wp:image {"align":"center","id":181,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image aligncenter size-full"><img
            src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/sidebar-img.png" alt=""
            class="wp-image-181" /></figure>
    <!-- /wp:image -->

    <!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"15px","bottom":"20px"}}},"textColor":"vision-base"} -->
    <h3 class="has-text-align-center has-vision-base-color has-text-color" style="margin-top:15px;margin-bottom:20px">
        <?php echo esc_html__( 'Romania W Smith', 'vision-fse' ); ?></h3>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">We carry out any projects with our<br>hearts and are not afraid<br>of difficulties!
    </p>
    <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"10px"},"margin":{"top":"50px"}}},"textColor":"vision-hover","className":"sidebar-item","layout":{"type":"constrained","justifyContent":"center"},"fontSize":"normal"} -->
<div class="wp-block-group sidebar-item has-vision-hover-color has-text-color has-normal-font-size"
    style="margin-top:50px;padding-top:40px;padding-bottom:40px;padding-left:10px">
    <!-- wp:list {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"vision-base","fontSize":"medium"} -->
    <ul class="has-vision-base-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:700">
        <!-- wp:list-item -->
        <li><?php echo esc_html__( 'Categories', 'vision-fse' ); ?></li>
        <!-- /wp:list-item -->
    </ul>
    <!-- /wp:list -->

    <!-- wp:categories {"className":"sidebar-cat-list","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"right":"40px"}}}} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"30px"},"margin":{"top":"50px"}}},"className":"sidebar-item","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group sidebar-item" style="margin-top:50px;padding-top:40px;padding-bottom:40px;padding-left:30px">
    <!-- wp:list {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"20px"}}},"textColor":"vision-base","fontSize":"medium"} -->
    <ul class="has-vision-base-color has-text-color has-medium-font-size"
        style="padding-left:20px;font-style:normal;font-weight:700">
        <!-- wp:list-item -->
        <li><?php echo esc_html__( 'Recent Posts', 'vision-fse' ); ?></li>
        <!-- /wp:list-item -->
    </ul>
    <!-- /wp:list -->

    <!-- wp:latest-posts {"categories":[],"postsToShow":3,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75,"className":"sidebar-latest-post-item"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"10px","bottom":"40px","top":"40px"},"margin":{"top":"50px"}}},"className":"sidebar-follow-icons","layout":{"type":"constrained"}} -->
<div class="wp-block-group sidebar-follow-icons"
    style="margin-top:50px;padding-top:40px;padding-bottom:40px;padding-left:10px">
    <!-- wp:list {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"40px"}}},"textColor":"vision-base","fontSize":"medium"} -->
    <ul class="has-vision-base-color has-text-color has-medium-font-size"
        style="padding-left:40px;font-style:normal;font-weight:700">
        <!-- wp:list-item -->
        <li><?php echo esc_html__( 'Follow Us', 'vision-fse' ); ?></li>
        <!-- /wp:list-item -->
    </ul>
    <!-- /wp:list -->

    <!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","iconBackgroundColor":"vision-hover","iconBackgroundColorValue":"#FF6600","size":"has-normal-icon-size","align":"center","style":{"spacing":{"padding":{"left":"20px"},"blockGap":{"top":"0.5em","left":"0.5em"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
    <ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color has-icon-background-color"
        style="padding-left:20px">
        <!-- wp:social-link {"url":"facebook.com","service":"facebook","className":"social\u002d\u002dmedia\u002d\u002dicon"} /-->

        <!-- wp:social-link {"url":"twitter.com","service":"twitter","className":"social\u002d\u002dmedia\u002d\u002dicon"} /-->

        <!-- wp:social-link {"url":"pinterest.com","service":"pinterest","className":"social\u002d\u002dmedia\u002d\u002dicon"} /-->

        <!-- wp:social-link {"url":"instagram.com","service":"instagram","className":"social\u002d\u002dmedia\u002d\u002dicon"} /-->

        <!-- wp:social-link {"url":"linkden.com","service":"linkedin","className":"social\u002d\u002dmedia\u002d\u002dicon"} /-->
    </ul>
    <!-- /wp:social-links -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"10px"},"margin":{"top":"50px"}}},"className":"sidebar-popular-tags","layout":{"type":"constrained"}} -->
<div class="wp-block-group sidebar-popular-tags"
    style="margin-top:50px;padding-top:40px;padding-bottom:40px;padding-left:10px">
    <!-- wp:list {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"40px"}}},"textColor":"vision-base","fontSize":"medium"} -->
    <ul class="has-vision-base-color has-text-color has-medium-font-size"
        style="padding-left:40px;font-style:normal;font-weight:700">
        <!-- wp:list-item -->
        <li><?php echo esc_html__( 'Popular Tag', 'vision-fse' ); ?></li>
        <!-- /wp:list-item -->
    </ul>
    <!-- /wp:list -->

    <!-- wp:post-terms {"term":"post_tag"} /-->
</div>
<!-- /wp:group -->