<?php
/**
 * Title: Hero Section
 * Slug: societas/section-hero
 * Categories: featured
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri() . '/assets/img/hero-image.jpg') ?>","hasParallax":true,"dimRatio":75,"overlayColor":"foreground","minHeight":800,"className":"section-no-block-space","style":{"color":[]}} -->
<div id="hero-section" class="wp-block-cover has-parallax section-no-block-space"
     style="background-image:url(<?php echo esc_url(get_template_directory_uri() . '/assets/img/hero-image.jpg') ?>);min-height:800px">
    <span aria-hidden="true"
          class="wp-block-cover__background has-foreground-background-color has-background-dim-80 has-background-dim"></span>
    <div class="wp-block-cover__inner-container"><!-- wp:group {"className":"wow fadeInLeft"} -->
        <div id="animated-1" class="wp-block-group wow fadeInLeft">
            <!-- wp:heading {"textAlign":"center","level":1,"textColor":"background"} -->
            <h1 class="has-text-align-center has-background-color has-text-color">Societas Business Block Theme</h1>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"light","fontSize":"medium"} -->
            <p class="has-text-align-center has-light-color has-text-color has-medium-font-size">Improve your experience
                with full site editing. </p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"light","fontSize":"medium"} -->
            <p class="has-text-align-center has-light-color has-text-color has-medium-font-size">Societas is Gutenberg
                block theme for corporates, agencies, financial organizations and more...</p>
            <!-- /wp:paragraph -->
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"primary","style":{"border":{"radius":"25px"}}} -->
                <div class="wp-block-button"><a
                            class="wp-block-button__link has-primary-background-color has-background"
                            style="border-radius:25px">Let's Start</a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->



