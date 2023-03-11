<?php
 /**
  * Title: Default Footer
  * Slug: gutenify-template-kit/footer-default
  * Categories: gutenify-template-kit
  */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"6rem","bottom":"4rem","right":"3rem","left":"3rem"},"blockGap":"0px"},"elements":{"link":{"color":{"text":"#929ba8"}}},"color":{"background":"#121212","text":"#929ba8"}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-text-color has-background has-link-color"
    style="background-color:#121212;color:#929ba8;padding-top:6rem;padding-right:3rem;padding-bottom:4rem;padding-left:3rem">
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"width":"25%","style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"0px"}}}} -->
        <div class="wp-block-column"
            style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:0px;flex-basis:25%">
            <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0px","top":"0px"}}}} -->
            <div class="wp-block-group" style="padding-top:0px;padding-bottom:0px">
                <!-- wp:heading {"level":3,"textColor":"background"} -->
                <h3 class="has-background-color has-text-color"><?php echo esc_html__( 'About Us', 'gutenify-template-kit' ); ?></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph -->
            <p><?php echo esc_html__( 'We create digital experiences for brands and companies by using technology.', 'gutenify-template-kit' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:social-links {"iconColor":"background","iconColorValue":"#ffffff","openInNewTab":true,"size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{}}} -->
            <ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
                <!-- wp:social-link {"url":"#","service":"facebook"} /-->

                <!-- wp:social-link {"url":"#","service":"twitter"} /-->

                <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

                <!-- wp:social-link {"url":"#","service":"instagram"} /-->
            </ul>
            <!-- /wp:social-links -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"luminous-vivid-amber","textColor":"foreground","style":{"border":{"radius":"0px"}},"className":"is-style-fill"} -->
                <div class="wp-block-button is-style-fill"><a
                        class="wp-block-button__link has-foreground-color has-luminous-vivid-amber-background-color has-text-color has-background"
                        style="border-radius:0px"><?php echo esc_html__( 'Subscribe Now', 'gutenify-template-kit' ); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}}} -->
        <div class="wp-block-column" style="padding-top:20px;padding-bottom:20px">
            <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"10px"}}}} -->
            <div class="wp-block-group" style="padding-bottom:10px">
                <!-- wp:heading {"level":3,"textColor":"background"} -->
                <h3 class="has-background-color has-text-color"><?php echo esc_html__( 'Our Mission', 'gutenify-template-kit' ); ?></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:list {"fontSize":"small"} -->
            <ul class="has-small-font-size">
                <li><a href="#"><?php echo esc_html__( 'Start Here', 'gutenify-template-kit' ); ?></a></li>
                <li><a href="#"><?php echo esc_html__( 'Our Mission', 'gutenify-template-kit' ); ?></a></li>
                <li><a href="#"><?php echo esc_html__( 'Brand Guide', 'gutenify-template-kit' ); ?></a></li>
                <li><a href="#"><?php echo esc_html__( 'Newsletter', 'gutenify-template-kit' ); ?></a></li>
                <li><a href="#"><?php echo esc_html__( 'Blog reviews', 'gutenify-template-kit' ); ?></a></li>
                <li><a href="#"><?php echo esc_html__( 'Contributors', 'gutenify-template-kit' ); ?></a></li>
                <li><a href="#"><?php echo esc_html__( 'Social Media', 'gutenify-template-kit' ); ?></a></li>
            </ul>
            <!-- /wp:list -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
            <div class="wp-block-group"></div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}}} -->
        <div class="wp-block-column" style="padding-top:20px;padding-bottom:20px">
            <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"10px"}}}} -->
            <div class="wp-block-group" style="padding-bottom:10px">
                <!-- wp:heading {"level":3,"textColor":"background"} -->
                <h3 class="has-background-color has-text-color"><?php echo esc_html__( 'Contact Us', 'gutenify-template-kit' ); ?></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group -->
            <div class="wp-block-group">
                <!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","allowOrientation":false,"flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"id":3201,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img
                            src="<?php echo esc_url( get_template_directory_uri() );?>/images/icon-location.png"
                            alt="" class="wp-image-3201" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph -->
                    <p><strong><?php echo esc_html__( '457 Morningview Lane, NY', 'gutenify-template-kit' ); ?></strong></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","allowOrientation":false}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"id":3198,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img
                            src="<?php echo esc_url( get_template_directory_uri() );?>/images/icon-clock.png"
                            alt="" class="wp-image-3198" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph -->
                    <p><a href="#"><?php echo esc_html__( '(+879) 123 3456 7890', 'gutenify-template-kit' ); ?></a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","allowOrientation":false}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"id":3202,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img
                            src="<?php echo esc_url( get_template_directory_uri() );?>/images/icon-envelope.png"
                            alt="" class="wp-image-3202" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph -->
                    <p><a href="#"><?php echo esc_html__( 'info@companyname.com', 'gutenify-template-kit' ); ?></a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","allowOrientation":false}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"id":3198,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img
                            src="<?php echo esc_url( get_template_directory_uri() );?>/images/icon-clock.png"
                            alt="" class="wp-image-3198" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph -->
                    <p><?php echo esc_html__( 'Opening Hours: 10:00 18:00', 'gutenify-template-kit' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}}} -->
        <div class="wp-block-column" style="padding-top:20px;padding-bottom:20px">
            <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px"}}}} -->
            <div class="wp-block-group" style="padding-bottom:15px">
                <!-- wp:heading {"level":3,"textColor":"background"} -->
                <h3 class="has-background-color has-text-color"><?php echo esc_html__( 'Recent Posts', 'gutenify-template-kit' ); ?></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:latest-posts {"postsToShow":3,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75} /-->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"25px","right":"25px","bottom":"25px","left":"25px"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":true}} -->
<div class="wp-block-group has-background-color has-foreground-background-color has-text-color has-background has-link-color"
    style="padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px">
    <!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#908787"}}} -->
        <p class="has-text-align-center has-text-color" style="color:#908787"> <?php echo sprintf(
		/* Translators: WordPress link. */
		esc_html__( 'Proudly powered by %s and %s.', 'gutenify-template-kit' ),
		'<a href="' . esc_url( __( '#themes/gutenify-template-kit', 'gutenify-template-kit' ) ) . '" rel="nofollow" target="_blank">Gutenify Template Kit</a>',
		'<a href="' . esc_url( __( 'https://wordpress.org', 'gutenify-template-kit' ) ) . '" rel="nofollow" target="_blank">WordPress</a>'
		); ?> </p>
        <!-- /wp:paragraph -->

        <!-- wp:navigation } /-->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
