<?php
 /**
  * Title: About Button
  * Slug: evit-fse/about-btn
  * Categories: evit-fse
  */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"87%"}} -->
<div id="about-us" class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
    <!-- wp:spacer {"height":"68px"} -->
    <div style="height:68px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:columns {"isStackedOnMobile":false} -->
    <div class="wp-block-columns is-not-stacked-on-mobile">
        <!-- wp:column {"verticalAlignment":"bottom","width":"66.66%"} -->
        <div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:66.66%">
            <!-- wp:site-title {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}}} /-->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"top","width":"33.33%"} -->
        <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.33%" id="close-about">
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"background","textColor":"foreground","style":{"border":{"radius":"0px"}},"className":"is-style-fill"} -->
                <div class="wp-block-button is-style-fill" id="close"><a
                        class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button"
                        style="border-radius:0px">✖</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:group {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
    <div class="wp-block-group alignwide has-link-color" id="evit-social"><!-- wp:social-links -->
        <ul class="wp-block-social-links"><!-- wp:social-link {"url":"www.facebook.com","service":"facebook"} /--></ul>
        <!-- /wp:social-links -->

        <!-- wp:social-links -->
        <ul class="wp-block-social-links"><!-- wp:social-link {"url":"www.twitter.com","service":"twitter"} /--></ul>
        <!-- /wp:social-links -->

        <!-- wp:social-links -->
        <ul class="wp-block-social-links"><!-- wp:social-link {"url":"www.instagram.com","service":"instagram"} /-->
        </ul>
        <!-- /wp:social-links -->

        <!-- wp:social-links -->
        <ul class="wp-block-social-links"><!-- wp:social-link {"url":"www.wordpress.org","service":"wordpress"} /-->
        </ul>
        <!-- /wp:social-links -->
    </div>
    <!-- /wp:group -->

    <!-- wp:spacer -->
    <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"90%"}} -->
    <div class="wp-block-group"><!-- wp:separator {"backgroundColor":"body-text","className":"is-style-wide"} -->
        <hr
            class="wp-block-separator has-text-color has-body-text-color has-alpha-channel-opacity has-body-text-background-color has-background is-style-wide" />
        <!-- /wp:separator -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|80","bottom":"0"}},"typography":{"lineHeight":"1.6"}},"textColor":"foreground","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"wrap"}} -->
        <div class="wp-block-group has-foreground-color has-text-color"
            style="margin-top:var(--wp--preset--spacing--80);margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.6">
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center"><?php echo esc_html__( '875-758-7584', 'evit-fse' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center"><?php echo esc_html__( '234 Sample Ave, Sampling,', 'evit-fse' ); ?><br><?php echo esc_html__( 'FL, USA 2345', 'evit-fse' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center"><?php echo esc_html__( 'info@email.com', 'evit-fse' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->