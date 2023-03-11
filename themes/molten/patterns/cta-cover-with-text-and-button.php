<?php

/**
 * Title: Full width cover with center aligned text and button
 * Slug: molten/cta-cover-with-text-and-button
 * Categories: molten-cta
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()) . '/assets/images/table-with-food.jpg' ?>","id":133,"dimRatio":70,"focalPoint":{"x":"0.59","y":"0.42"},"minHeight":692,"minHeightUnit":"px","align":"full"} -->
<div class="wp-block-cover alignfull" style="min-height:692px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-133" alt="" src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/table-with-food.jpg' ?>" style="object-position:59% 42%" data-object-fit="cover" data-object-position="59% 42%" />
    <div class="wp-block-cover__inner-container">
        <!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
        <h2 class="has-text-align-center has-x-large-font-size"><?php esc_html_e('We look forward to having you', 'molten') ?></h2>
        <!-- /wp:heading -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons">
            <!-- wp:button {"className":"is-style-fill"} -->
            <div class="wp-block-button is-style-fill"><a class="wp-block-button__link"><?php esc_html_e('Make a reservation', 'molten') ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
</div>
<!-- /wp:cover -->
