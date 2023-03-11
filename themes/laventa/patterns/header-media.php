<?php
 /**
  * Title: Header Media
  * Slug: laventa/header-media
  * Categories: laventa, header
  */
?>

<!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/assets/images/slider-one.jpg' ); ?>","dimRatio":0,"align":"full","className":"wp-block-custom-header-media wp-block-section wp-block-no-padding"} -->
<div class="wp-block-cover alignfull wp-block-custom-header-media wp-block-section wp-block-no-padding">
    <span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
    <img class="wp-block-cover__image-background" alt="" src="<?php echo get_parent_theme_file_uri( '/assets/images/slider-one.jpg' ); ?>" data-object-fit="cover" />
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"align":"wide","layout":{"inherit":true,"type":"constrained"}} -->
        <div class="wp-block-group alignwide">
            <!-- wp:media-text {"mediaType":"image"} -->
            <div class="wp-block-media-text alignwide is-stacked-on-mobile">
                <figure class="wp-block-media-text__media"><img src="" alt="" /></figure>
                <div class="wp-block-media-text__content">
                    <!-- wp:heading {"textAlign":"center"} -->
                    <h2 class="has-text-align-center"><?php esc_html_e ( 'Luxury Jewelry', 'laventa' ) ?></h2>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e ( 'Your Search For Perfect Jewelry Ends Here', 'laventa' ) ?></p>
                    <!-- /wp:paragraph -->
                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"14px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top: 14px;">
                        <!-- wp:button -->
                        <div class="wp-block-button">
                            <a class="wp-block-button__link wp-element-button"><?php esc_html_e ( 'Shop Now', 'laventa' ) ?></a>
                        </div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:media-text -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->

