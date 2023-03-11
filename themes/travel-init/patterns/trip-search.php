<?php

/**
 * Title: Trip Search Section
 * Slug: travel-init/trip-search
 * Categories: wensolutions 
 * Description: Trip search section
 * Keywords: full site editing,
 */
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#4a4545"},"spacing":{"padding":{"top":"3vw","bottom":"3vw"}}},"className":"travel-init-trip-search","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull travel-init-trip-search has-background" style="background-color:#4a4545;padding-top:3vw;padding-bottom:3vw">

    <!-- wp:paragraph {"align":"center","textColor":"white"} -->
    <p class="has-text-align-center has-white-color has-text-color"><?php echo esc_html__( 'FIND YOUR PERFECT TOUR WITH YOUR PREFERENCES !!', 'travel-init' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:group {"align":"full","className":"travel-init-trip-search","layout":{"type":"constrained","contentSize":"1140px"}} -->
    <div class="wp-block-group alignfull travel-init-trip-search">
        <!-- wp:wptravel/trip-search /-->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->