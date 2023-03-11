<?php

/**
 * Title: Media text block with heading, text and a button
 * Slug: molten/cta-media-text-with-button
 * Categories: molten-cta
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var(--wp--custom--spacing--gap--vertical, 32px)","bottom":"var(--wp--custom--spacing--gap--vertical, 32px)"}}}} -->
<div class="wp-block-group" style="margin-top:var(--wp--custom--spacing--gap--vertical, 32px);margin-bottom:var(--wp--custom--spacing--gap--vertical, 32px)">
    <!-- wp:media-text {"align":"","mediaId":19,"mediaLink":"<?php echo esc_url(get_template_directory_uri()) . '/assets/images/open-kitchen.jpg' ?>","mediaType":"image","verticalAlignment":"center","imageFill":false} -->
    <div class="wp-block-media-text is-stacked-on-mobile is-vertically-aligned-center">
        <figure class="wp-block-media-text__media"><img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/open-kitchen.jpg' ?>" alt="" class="wp-image-19 size-full" /></figure>
        <div class="wp-block-media-text__content">
            <!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"top":"0px"}}},"fontSize":"large"} -->
            <h2 class="has-text-align-left has-large-font-size" style="margin-top:0px"><?php esc_html_e('Make a reservation', 'molten') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"left"} -->
            <p class="has-text-align-left"><?php esc_html_e('For bookings more than 8 people or for private events, please email: restaurant@email.com', 'molten') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"align":"left"} -->
            <p class="has-text-align-left"><?php esc_html_e('We look forward to welcoming you at Molten.', 'molten') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"40px"}}}} -->
            <div class="wp-block-buttons" style="margin-top:40px">
                <!-- wp:button -->
                <div class="wp-block-button"><a class="wp-block-button__link"><?php esc_html_e('Make reservation', 'molten') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
    </div>
    <!-- /wp:media-text -->
</div>
<!-- /wp:group -->
