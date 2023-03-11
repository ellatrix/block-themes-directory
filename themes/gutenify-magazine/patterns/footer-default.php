<?php
 /**
  * Title: Footer Default
  * Slug: gutenify-magazine/footer-default
  * Categories: gutenify-magazine
  */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem","right":"3rem","left":"3rem"},"blockGap":"0px"},"elements":{"link":{"color":{"text":"#929ba8"}}},"color":{"background":"#121212","text":"#929ba8"}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-text-color has-background has-link-color"
        style="background-color:#121212;color:#929ba8;padding-top:4rem;padding-right:3rem;padding-bottom:4rem;padding-left:3rem">
        <!-- wp:columns {"align":"wide"} -->
        <div class="wp-block-columns alignwide">
                <!-- wp:column {"width":"25%","style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"0px"}}}} -->
                <div class="wp-block-column"
                        style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:0px;flex-basis:25%">
                        <!-- wp:group {"className":" animated animated-fadeInUp"} -->
                        <div class="wp-block-group animated animated-fadeInUp">
                                <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"1.5rem"}},"textColor":"background"} -->
                                <h3 class="has-background-color has-text-color"
                                        style="font-size:1.5rem;font-style:normal;font-weight:500"><?php echo esc_html__( 'About Us', 'gutenify-magazine' ); ?></h3>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:paragraph {"className":" animated animated-fadeInUp"} -->
                        <p class="animated animated-fadeInUp"><?php echo esc_html__( 'Nsectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 'gutenify-magazine' ); ?> </p>
                        <!-- /wp:paragraph -->

                        <!-- wp:social-links {"iconColor":"background","iconColorValue":"#ffffff","openInNewTab":true,"size":"has-small-icon-size","className":"is-style-logos-only  animated animated-fadeInUp","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{}}} -->
                        <ul
                                class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only  animated animated-fadeInUp">
                                <!-- wp:social-link {"url":"#","service":"facebook"} /-->

                                <!-- wp:social-link {"url":"#","service":"twitter"} /-->

                                <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

                                <!-- wp:social-link {"url":"#","service":"instagram"} /-->
                        </ul>
                        <!-- /wp:social-links -->

                        <!-- wp:buttons {"className":" animated animated-fadeInUp"} -->
                        <div class="wp-block-buttons  animated animated-fadeInUp">
                                <!-- wp:button {"backgroundColor":"primary","textColor":"background","style":{"border":{"radius":"0px"}},"className":"is-style-fill"} -->
                                <div class="wp-block-button is-style-fill"><a
                                                class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background"
                                                style="border-radius:0px"><?php echo esc_html__( 'Subscribe Now', 'gutenify-magazine' ); ?></h3></a></div>
                                <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}}} -->
                <div class="wp-block-column" style="padding-top:20px;padding-bottom:20px">
                        <!-- wp:group {"className":" animated animated-fadeInUp"} -->
                        <div class="wp-block-group animated animated-fadeInUp">
                                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.5rem","fontStyle":"normal","fontWeight":"500"}},"textColor":"background"} -->
                                <h3 class="has-background-color has-text-color"
                                        style="font-size:1.5rem;font-style:normal;font-weight:500"><?php echo esc_html__( 'Archive', 'gutenify-magazine' ); ?></h3>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:archives {"showPostCounts":true,"className":" animated animated-fadeInUp"} /-->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}}} -->
                <div class="wp-block-column" style="padding-top:20px;padding-bottom:20px">
                        <!-- wp:group {"className":" animated animated-fadeInUp"} -->
                        <div class="wp-block-group animated animated-fadeInUp">
                                <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"1.5rem"}},"textColor":"background"} -->
                                <h3 class="has-background-color has-text-color"
                                        style="font-size:1.5rem;font-style:normal;font-weight:500"><?php echo esc_html__( 'Categories', 'gutenify-magazine' ); ?></h3>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:categories {"showPostCounts":true,"className":" animated animated-fadeInUp"} /-->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}}} -->
                <div class="wp-block-column" style="padding-top:20px;padding-bottom:20px">
                        <!-- wp:group {"className":" animated animated-fadeInUp"} -->
                        <div class="wp-block-group animated animated-fadeInUp">
                                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.5rem","fontStyle":"normal","fontWeight":"500"}},"textColor":"background"} -->
                                <h3 class="has-background-color has-text-color"
                                        style="font-size:1.5rem;font-style:normal;font-weight:500"><?php echo esc_html__( 'Recent News', 'gutenify-magazine' ); ?></h3>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:latest-posts {"postsToShow":3,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75,"className":" animated animated-fadeInUp"} /-->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}}} -->
                <div class="wp-block-column" style="padding-top:20px;padding-bottom:20px">
                        <!-- wp:group {"className":" animated animated-fadeInUp"} -->
                        <div class="wp-block-group animated animated-fadeInUp">
                                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.5rem","fontStyle":"normal","fontWeight":"500"}},"textColor":"background"} -->
                                <h3 class="has-background-color has-text-color"
                                        style="font-size:1.5rem;font-style:normal;font-weight:500"> <?php echo esc_html__( 'Ads Area', 'gutenify-magazine' ); ?></h3>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"className":" animated animated-fadeInUp"} -->
                        <div class="wp-block-group animated animated-fadeInUp">
                                <!-- wp:image {"id":787,"sizeSlug":"full","linkDestination":"custom"} -->
                                <figure class="wp-block-image size-full"><a href="#"><img
                                                        src="<?php echo esc_url( get_template_directory_uri() );?>/images/slidebar-banner.jpg"
                                                        alt="" class="wp-image-787" /></a></figure>
                                <!-- /wp:image -->
                        </div>
                        <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"25px","right":"25px","bottom":"25px","left":"25px"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":true}} -->
<div class="wp-block-group has-background-color has-foreground-background-color has-text-color has-background has-link-color"
        style="padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px">
        <!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"center"}} -->
        <div class="wp-block-group alignwide">
                <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#908787"}}} -->
                <p class="has-text-align-center has-text-color" style="color:#908787"><?php echo esc_html__( 'Proudly powered by', 'gutenify-magazine' ); ?> <a
                                href="http://gutenify.com/themes/gutenify-magazine" rel="nofollow noopener"
                                target="_blank"><?php echo esc_html__( 'Gutenify Magazine', 'gutenify-magazine' ); ?> </a> <?php echo esc_html__( 'and', 'gutenify-magazine' ); ?>  <a href="https://wordpress.org"
                                rel="nofollow noopener" target="_blank"> <?php echo esc_html__( 'WordPress', 'gutenify-magazine' ); ?></a>. </p>
                <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
</div>
<!-- /wp:group -->
