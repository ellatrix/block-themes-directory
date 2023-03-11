<?php
/**
 * Title: Hero Section
 * Slug: marenda/hero-section
 * Categories: featured
 */
?>

<!-- wp:group {"tagName":"section","align":"wide","layout":{"type":"default"}} -->
<section class="wp-block-group alignwide" id="hero-section">
    <!-- wp:cover {"gradient":"vertical-primary-to-foreground","isDark":false,"align":"wide","style":{"spacing":{"padding":{"bottom":"0"}}}} -->
    <div class="wp-block-cover alignwide is-light" style="padding-bottom:0"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-vertical-primary-to-foreground-gradient-background"></span><div class="wp-block-cover__inner-container">
            <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group">
                <!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"margin":{"bottom":"0"}}}} -->
                <div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-bottom:0">
                    <!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
                        <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group">

                            <!-- wp:outermost/icon-block {"iconName":"wordpress-sparkles","itemsJustification":"center","iconColor":"background","iconColorValue":"#ffffff","width":227} -->
                            <div class="wp-block-outermost-icon-block items-justified-center"><div class="icon-container has-icon-color" style="color:#ffffff;width:227px"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"><path d="M10 11c-1.588-.479-4-.91-4-.91s2-.241 4-.454c1.8-.191 3.365-.502 4-3.181C14.635 3.775 15 1 15 1s.365 2.775 1 5.455c.635 2.679 2 2.969 4 3.181 2 .213 4 .455 4 .455s-2.412.43-4 .909c-1.588.479-3 1-4 4.546-.746 2.643-.893 4.948-1 5.454-.107-.506-.167-2.5-1-5.454C13 12 11.588 11.479 10 11zM7.333 3.5C6.803 3.333 6 3.182 6 3.182s.667-.085 1.333-.16c.6-.066 1.122-.175 1.334-1.113C8.878.971 9 0 9 0s.122.971.333 1.91c.212.937.667 1.038 1.334 1.113.666.074 1.333.159 1.333.159s-.804.15-1.333.318c-.53.167-1 .35-1.334 1.59C9.085 6.017 9.036 6.824 9 7c-.036-.177-.056-.875-.333-1.91-.334-1.24-.804-1.423-1.334-1.59zM2.444 18C1.474 17.713 0 17.454 0 17.454s1.222-.145 2.444-.272c1.1-.115 2.057-.302 2.445-1.91C5.277 13.666 5.5 12 5.5 12s.223 1.665.611 3.273c.388 1.607 1.222 1.781 2.445 1.909 1.222.127 2.444.273 2.444.273s-1.474.258-2.444.545c-.971.287-1.834.6-2.445 2.727-.456 1.586-.546 2.97-.611 3.273-.065-.304-.102-1.5-.611-3.273C4.278 18.6 3.415 18.287 2.444 18z"></path></svg></div></div>
                            <!-- /wp:outermost/icon-block -->

                            <!-- wp:heading {"level":3,"textColor":"primary","fontFamily":"roboto"} -->
                            <h3 class="has-primary-color has-text-color has-roboto-font-family">This is a block theme. Discover the freedom of full site editing.</h3>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"left","placeholder":"Write title…","textColor":"background","fontSize":"small"} -->
                            <p class="has-text-align-left has-background-color has-text-color has-small-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pulvinar massa sed turpis dapibus sollicitudin. </p>
                            <!-- /wp:paragraph -->

                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"}}} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:66.66%">

                        <!-- wp:image {"align":"right","id":2530,"sizeSlug":"large","linkDestination":"none"} -->
                        <figure class="wp-block-image alignright size-large"><img src="<?php echo esc_url(MARENDA_URI.'/assets/img/heroimage_1.png'); ?>" alt="" class="wp-image-2530"/></figure>
                        <!-- /wp:image -->

                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
</section>
<!-- /wp:group -->