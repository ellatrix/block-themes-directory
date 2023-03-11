<?php

/**
 * Title: Large image on top, two smaller underneath
 * Slug: molten/gallery-one-on-top-two-under
 * Categories: molten-gallery
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--gap--vertical, 32px)","bottom":"var(--wp--custom--spacing--gap--vertical, 32px)"}}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--custom--spacing--gap--vertical, 32px);padding-bottom:var(--wp--custom--spacing--gap--vertical, 32px)">
    <!-- wp:image {"id":14,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/table-with-food.jpg' ?>" alt="" class="wp-image-14" /></figure>
    <!-- /wp:image -->

    <!-- wp:gallery {"linkTo":"none","align":"center"} -->
    <figure class="wp-block-gallery aligncenter has-nested-images columns-default is-cropped">
        <!-- wp:image {"id":16,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/burger.jpg' ?>" alt="" class="wp-image-16" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":15,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/fruit-punch.jpg' ?>" alt="" class="wp-image-15" /></figure>
        <!-- /wp:image -->
    </figure>
    <!-- /wp:gallery -->
</div>
<!-- /wp:group -->
