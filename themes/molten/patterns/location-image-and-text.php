<?php

/**
 * Title: Image on the left and restaurant information on the right
 * Slug: molten/location-image-and-text
 * Categories: molten-location
 */
?>
<!-- wp:media-text {"mediaId":126,"mediaLink":"<?php echo esc_url(get_template_directory_uri()) . '/assets/images/coffee-shop-patio.jpg' ?>","mediaType":"image","mediaSizeSlug":"full","verticalAlignment":"center","imageFill":true,"focalPoint":{"x":"0.76","y":"0.68"}, "style":{"spacing":{"margin":{"top":"var(--wp--custom--spacing--gap--vertical, 32px)"}}}} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center is-image-fill" style="margin-top:var(--wp--custom--spacing--gap--vertical, 32px)">
    <figure class="wp-block-media-text__media" style="background-image:url(<?php echo esc_url(get_template_directory_uri()) . '/assets/images/coffee-shop-patio.jpg' ?>);background-position:76% 68%"><img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/coffee-shop-patio.jpg' ?>" alt="" class="wp-image-126 size-full" /></figure>
    <div class="wp-block-media-text__content">
        <!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","bottom":"32px"}}}} -->
        <h2 style="margin-top:0px;margin-bottom:32px"><?php esc_html_e('Where to find us', 'molten') ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p><?php esc_html_e('123 Test Street, Braddon ACT 2612', 'molten') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"level":3} -->
        <h3><?php esc_html_e('Opening Hours', 'molten') ?></h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p><strong><?php esc_html_e('Lunch', 'molten') ?><br></strong><em><?php esc_html_e('Monday – Sunday', 'molten') ?></em><br><?php esc_html_e('11:30am to 2:30pm', 'molten') ?><br><br><strong><?php esc_html_e('Dinner', 'molten') ?></strong><br><em><?php esc_html_e('Monday – Sunday', 'molten') ?></em><br><?php esc_html_e('5:30pm to 9:30pm', 'molten') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"level":3} -->
        <h3><?php esc_html_e('Contact', 'molten') ?></h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p><?php esc_html_e('Phone: (02) 6262 6888', 'molten') ?><br><?php esc_html_e('Email: restaurant@email.com', 'molten') ?></p>
        <!-- /wp:paragraph -->
    </div>
</div>
<!-- /wp:media-text -->
