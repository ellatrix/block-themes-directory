<?php

/**
 * Title: Blogs 
 * Slug: travel-init/travel-init-blog-page
 * Categories: wensolutions 
 * Description: A description of the pattern
 * Keywords: full site editing,
 */
?>

<!-- wp:group {"layout":{"inherit":false}} -->
<div class="wp-block-group">
    <!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/who-we-are.jpg","id":1435,"dimRatio":50,"focalPoint":{"x":"0.51","y":"0.31"},"minHeight":323,"minHeightUnit":"px","isDark":false} -->
    <div class="wp-block-cover is-light" style="min-height: 323px">
        <span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img
            class="wp-block-cover__image-background wp-image-1435" alt=""
            src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/who-we-are.jpg"
            style="object-position: 51% 31%" data-object-fit="cover" data-object-position="51% 31%" />
        <div class="wp-block-cover__inner-container">
            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"5.1vw"}},"textColor":"white"} -->
            <p class="has-text-align-center has-white-color has-text-color" style="font-size: 5.1vw">
            <?php echo esc_html__( 'Blog Page', 'travel-init' ); ?>
            </p>
            <!-- /wp:paragraph -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group" style="
    padding-top: var(--wp--preset--spacing--20);
    padding-bottom: var(--wp--preset--spacing--20);
  ">
   <!-- wp:group {"style":{"spacing":{"padding":{"top":"3vw","bottom":"3vw"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:3vw;padding-bottom:3vw"><!-- wp:query {"queryId":10,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-featured-image {"width":"300px","height":"300px"} /-->

<!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}}},"backgroundColor":"white","layout":{"inherit":true,"type":"constrained"}} -->
    <div class="wp-block-group has-white-background-color has-background"
        style="padding-top: 40px; padding-bottom: 40px">
        <!-- wp:columns -->
        <div class="wp-block-columns">
            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center">
                <!-- wp:heading {"textAlign":"center","fontSize":"intro"} -->
                <h2 class="has-text-align-center has-intro-font-size"><?php echo esc_html__( 'Are you lost? We are here to help', 'travel-init' ); ?>
                </h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","fontSize":"section_sub_head"} -->
                <p class="has-text-align-center has-section-sub-head-font-size">
                <?php echo esc_html__( 'Contact WenSolutions for the enquiry', 'travel-init' ); ?>
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"style":{"spacing":{"padding":{"top":"1vw","bottom":"1vw","left":"5vw","right":"5vw"}}}} -->
                    <div class="wp-block-button">
                        <a class="wp-block-button__link wp-element-button" href="<?php echo get_site_url(); ?>/contact-us/" style="
                padding-top: 1vw;
                padding-right: 5vw;
                padding-bottom: 1vw;
                padding-left: 5vw;
              " target="_blank" rel="noreferrer noopener"><?php echo esc_html__( 'Contact Us', 'travel-init' ); ?></a>
                    </div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:image {"align":"center","id":1305,"sizeSlug":"large","linkDestination":"none","className":"give-height is-style-default"} -->
                <figure class="wp-block-image aligncenter size-large give-height is-style-default">
                    <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/lostSticker.jpg"
                        alt="" class="wp-image-1305" />
                </figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->