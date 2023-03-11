<?php

/**
 * Title: Two cards, side by side
 * Slug: molten/cta-cards-side-by-side
 * Categories: molten-cta
 */
?>

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
    <!-- wp:column -->
    <div class="wp-block-column">
        <!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()) . '/assets/images/bartender.jpg' ?>","id":19,"dimRatio":70,"minHeight":570,"minHeightUnit":"px","isDark":false} -->
        <div class="wp-block-cover is-light" style="min-height:570px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-19" alt="" src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/bartender.jpg' ?>" data-object-fit="cover" />
            <div class="wp-block-cover__inner-container">
                <!-- wp:heading {"textAlign":"center","textColor":"white"} -->
                <h2 class="has-text-align-center has-white-color has-text-color"><?php esc_html_e('Our philosophy', 'molten') ?></h2>
                <!-- /wp:heading -->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column">
        <!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()) . '/assets/images/old-fashioned.jpg' ?>","id":18,"dimRatio":70,"focalPoint":{"x":"0.50","y":"0.63"},"minHeight":570,"minHeightUnit":"px","isDark":false} -->
        <div class="wp-block-cover is-light" style="min-height:570px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-18" alt="" src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/old-fashioned.jpg' ?>" style="object-position:50% 63%" data-object-fit="cover" data-object-position="50% 63%" />
            <div class="wp-block-cover__inner-container">
                <!-- wp:heading {"textAlign":"center","textColor":"white"} -->
                <h2 class="has-text-align-center has-white-color has-text-color"><?php esc_html_e('Our drinks', 'molten') ?></h2>
                <!-- /wp:heading -->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
    <!-- /wp:column -->
</div>
<!-- /wp:columns -->
