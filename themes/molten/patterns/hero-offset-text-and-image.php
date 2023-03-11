<?php

/**
 * Title: Hero with a large headline with text and an offset image below
 * Slug: molten/hero-offset-text-and-image
 * Categories: molten-hero
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var(--wp--custom--spacing--gap--vertical, 32px)","bottom":"var(--wp--custom--spacing--gap--vertical, 32px)"}}}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--custom--spacing--gap--vertical, 32px);margin-bottom:var(--wp--custom--spacing--gap--vertical, 32px)">
    <!-- wp:heading {"textAlign":"left","align":"wide","fontSize":"huge"} -->
    <h2 class="alignwide has-text-align-left has-huge-font-size"><?php esc_html_e('Fresh, locally sourced produce ', 'molten') ?><br><?php esc_html_e('in a relaxed atmosphere', 'molten') ?></h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var(--wp--custom--spacing--gap--vertical, 32px)"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--custom--spacing--gap--vertical, 32px)">
        <!-- wp:column {"verticalAlignment":"bottom","width":"30%"} -->
        <div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:30%">
            <!-- wp:paragraph -->
            <p><?php esc_html_e('Wattle serves Australian cuisine with a belief that good food made from fresh, locally sourced ingredients in a relaxing atmosphere makes for the best dining experience.', 'molten') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"top","width":"70%","layout":{"inherit":false}} -->
        <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:70%">
            <!-- wp:image {"id":233,"width":989,"height":614,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/table-with-food.jpg' ?>" alt="" class="wp-image-233" width="989" height="614" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
