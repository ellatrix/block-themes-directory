<?php

/**
 * Title: 50/50 split between content and image
 * Slug: molten/hero-media-text
 * Categories: molten-hero
 */
?>

<!-- wp:media-text {"align":"full","mediaPosition":"right","mediaId":23,"mediaLink":"<?php echo esc_url(get_template_directory_uri()) . '/assets/images/table-with-food.jpg' ?>","mediaType":"image","mediaSizeSlug":"full","imageFill":false, "style":{"spacing":{"margin":{"top":"var(--wp--custom--spacing--gap--vertical, 32px)","bottom":"var(--wp--custom--spacing--gap--vertical, 32px)"}}}} -->
<div class="wp-block-media-text alignfull has-media-on-the-right is-stacked-on-mobile" style="margin-top:var(--wp--custom--spacing--gap--vertical, 32px);margin-bottom:var(--wp--custom--spacing--gap--vertical, 32px)">
    <figure class="wp-block-media-text__media"><img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/table-with-food.jpg' ?>" alt="" class="wp-image-23 size-full" /></figure>
    <div class="wp-block-media-text__content">
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"}}},"layout":{"contentSize":"550px"}} -->
        <div class="wp-block-group" style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px">
            <!-- wp:heading {"textAlign":"center"} -->
            <h2 class="has-text-align-center"><?php esc_html_e('A first class ', 'molten') ?><br><?php esc_html_e('dining experience', 'molten') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate', 'molten') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:media-text -->
