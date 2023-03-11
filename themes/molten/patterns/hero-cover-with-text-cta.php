<?php

/**
 * Title: A full width cover with heading, text and button on the left
 * Slug: molten/hero-cover-with-text-cta
 * Categories: molten-hero
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()) . '/assets/images/open-kitchen.jpg' ?>","id":27,"dimRatio":80,"customOverlayColor":"#111111","minHeight":600,"contentPosition":"center center","align":"full","style":{"spacing":{"margin":{"top":"var(--wp--custom--spacing--gap--vertical, 32px)", "bottom":"var(--wp--custom--spacing--gap--vertical, 32px)"}}}} -->
<div class="wp-block-cover alignfull" style="margin-top:var(--wp--custom--spacing--gap--vertical, 32px);margin-bottom:var(--wp--custom--spacing--gap--vertical, 32px);min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim" style="background-color:#111111"></span><img class="wp-block-cover__image-background wp-image-27" alt="" src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/open-kitchen.jpg' ?>" data-object-fit="cover" />
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
        <div class="wp-block-group alignwide">
            <!-- wp:columns {"align":"wide"} -->
            <div class="wp-block-columns alignwide">
                <!-- wp:column {"width":"60%"} -->
                <div class="wp-block-column" style="flex-basis:60%">
                    <!-- wp:group {"align":"wide","layout":{"inherit":false}} -->
                    <div class="wp-block-group alignwide">
                        <!-- wp:heading {"textAlign":"left"} -->
                        <h2 class="has-text-align-left"><?php esc_html_e('Fresh ingredients, cooked simply', 'molten') ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"left"} -->
                        <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.', 'molten') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"className":"is-style-fill"} -->
                            <div class="wp-block-button is-style-fill"><a class="wp-block-button__link"><?php esc_html_e('Book a table', 'molten') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"40%"} -->
                <div class="wp-block-column" style="flex-basis:40%"></div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->
