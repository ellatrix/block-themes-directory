<?php
 /**
  * Title: Hidden 404
  * Slug: gutenify-template-kit/hidden-404
  * Categories: gutenify-template-kit
  */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}}} -->
<main class="wp-block-group" style="padding-top:80px;padding-bottom:80px">
    <!-- wp:group {"layout":{"inherit":true}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"style":{"typography":{"fontSize":"clamp(4rem, 40vw, 20rem)","fontWeight":"200","lineHeight":"1"}},"className":"has-text-align-center"} -->
        <h2 class="has-text-align-center" style="font-weight:200;line-height:1"><?php echo esc_html__( '404', 'gutenify-template-kit' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php echo esc_html__( 'This page could not be found. Maybe try a search?', 'gutenify-template-kit' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:search {"label":"Search","showLabel":false,"width":50,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center"} /-->
    </div>
    <!-- /wp:group -->
</main>
<!-- /wp:group -->
