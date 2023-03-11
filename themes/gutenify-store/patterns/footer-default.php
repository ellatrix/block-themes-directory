<?php
 /**
  * Title:Footer Default
  * Slug: gutenify-store/footer-default
  * Categories: gutenify-store
  */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem","right":"3rem","left":"3rem"},"blockGap":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"color":{"background":"#f8f8f8"}},"textColor":"foreground","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-foreground-color has-text-color has-background has-link-color"
    style="background-color:#f8f8f8;padding-top:5rem;padding-right:3rem;padding-bottom:5rem;padding-left:3rem">
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","right":"20px","bottom":"0px","left":"0px"}}}} -->
        <div class="wp-block-column" style="padding-top:0px;padding-right:20px;padding-bottom:0px;padding-left:0px">
            <!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"left"}} -->
            <div class="wp-block-group">
                <!-- wp:site-logo {"width":50,"shouldSyncIcon":false,"className":"is-style-default"} /-->

                <!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:spacer {"height":"13px"} -->
            <div style="height:13px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:paragraph -->
            <p><?php echo esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet est massa. Sed enim massa, mattisat libero nec, bibendum ultricies augue.', 'gutenify-store' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#000000","align":"left","className":"has-icon-color is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
            <ul class="wp-block-social-links alignleft has-icon-color is-style-logos-only">
                <!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /-->

                <!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->

                <!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"level":3} -->
            <h3 id="quick-links"><?php echo esc_html__( 'Quick Links', 'gutenify-store' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:navigation { "layout":{"type":"flex","orientation":"vertical"}} /-->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"level":3} -->
            <h3 id="help-support"><?php echo esc_html__( 'Recent Posts', 'gutenify-store' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:latest-posts {"postsToShow":3,"featuredImageSizeWidth":38,"featuredImageSizeHeight":38} /-->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"level":3} -->
            <h3 id="newsletter"><?php echo esc_html__( 'Gallery', 'gutenify-store' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:group -->
            <div class="wp-block-group">
                <!-- wp:gallery {"linkTo":"none"} -->
                <figure class="wp-block-gallery has-nested-images columns-default is-cropped">
                    <!-- wp:image {"id":3525,"sizeSlug":"large","linkDestination":"none"} -->
                    <figure class="wp-block-image size-large"><img
                            src="<?php echo esc_url( get_template_directory_uri() );?>/images/gallery-2.png"
                            alt="" class="wp-image-3525" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:image {"id":3527,"sizeSlug":"large","linkDestination":"none"} -->
                    <figure class="wp-block-image size-large"><img
                            src="<?php echo esc_url( get_template_directory_uri() );?>/images/gallery-5.png"
                            alt="" class="wp-image-3527" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:image {"id":3528,"sizeSlug":"large","linkDestination":"none"} -->
                    <figure class="wp-block-image size-large"><img
                            src="<?php echo esc_url( get_template_directory_uri() );?>/images/gallery-3.png"
                            alt="" class="wp-image-3528" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:image {"id":3530,"sizeSlug":"large","linkDestination":"none"} -->
                    <figure class="wp-block-image size-large"><img
                            src="<?php echo esc_url( get_template_directory_uri() );?>/images/gallery-4.png"
                            alt="" class="wp-image-3530" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:image {"id":3526,"sizeSlug":"large","linkDestination":"none"} -->
                    <figure class="wp-block-image size-large"><img
                            src="<?php echo esc_url( get_template_directory_uri() );?>/images/gallery-1.png"
                            alt="" class="wp-image-3526" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:image {"id":3529,"sizeSlug":"large","linkDestination":"none"} -->
                    <figure class="wp-block-image size-large"><img
                            src="<?php echo esc_url( get_template_directory_uri() );?>/images/gallery-6.png"
                            alt="" class="wp-image-3529" /></figure>
                    <!-- /wp:image -->
                </figure>
                <!-- /wp:gallery -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}},"backgroundColor":"background","layout":{"inherit":true}} -->
<div class="wp-block-group has-background-background-color has-background"
    style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px">
    <!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"center"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center">
		<?php echo sprintf(
		/* Translators: WordPress link. */
		esc_html__( 'Proudly powered by %s and %s.', 'gutenify-store' ),
		'<a href="' . esc_url( __( 'https://gutenify.com/themes/gutenify-store', 'gutenify-store' ) ) . '" rel="nofollow" target="_blank">Gutenify Store</a>',
		'<a href="' . esc_url( __( 'https://wordpress.org', 'gutenify-store' ) ) . '" rel="nofollow" target="_blank">WordPress</a>'
		); ?> </p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
