<?php

/**
 * Title: Image with large heading underneath
 * Slug: molten/hero-image-and-heading
 * Categories: molten-hero
 */
?>
<!-- wp:group {"align":"wide","layout":{"inherit":false,"wideSize":"1200px"}, "style":{"spacing":{"margin":{"top":"var(--wp--custom--spacing--gap--vertical, 32px)","bottom":"var(--wp--custom--spacing--gap--vertical, 32px)"}}}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--custom--spacing--gap--vertical, 32px);margin-bottom:var(--wp--custom--spacing--gap--vertical, 32px)">

    <!-- wp:image {"align":"wide","id":29,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image alignwide size-full"><img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/table-with-food.jpg' ?>" alt="" class="wp-image-29" /></figure>
    <!-- /wp:image -->

    <!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:heading {"textAlign":"center","align":"wide","fontSize":"huge"} -->
        <h2 class="alignwide has-text-align-center has-huge-font-size"><?php esc_html_e('Care & Perfection', 'molten') ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.', 'molten') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
