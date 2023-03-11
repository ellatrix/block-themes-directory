<?php
 /**
  * Title: Hero Content
  * Slug: laventa/hero-content
  * Categories: laventa, page
  */
?>

<!-- wp:group {"align":"full","className":"wp-block-section  wp-block-hero-content"} -->
<div class="wp-block-group alignfull wp-block-section wp-block-hero-content">
    <!-- wp:group {"layout":{"inherit":false}} -->
    <div class="wp-block-group">
        <!-- wp:group {"style":{"color":{}},"layout":{"inherit":true,"type":"constrained"}} -->
        <div class="wp-block-group">
            <!-- wp:media-text {"mediaLink":"#","mediaType":"image"} -->
            <div class="wp-block-media-text alignwide is-stacked-on-mobile">
                <figure class="wp-block-media-text__media"><img
                        src="<?php echo get_parent_theme_file_uri( '/assets/images/hero-content.png' ); ?>"
                        alt="" /></figure>
                <div class="wp-block-media-text__content">
                    <!-- wp:group {"className":"wp-block-group-heading"} -->
                    <div class="wp-block-group wp-block-group-heading">
                        <!-- wp:heading {"textAlign":"center"} -->
                        <h2 class="has-text-align-center"><?php esc_html_e ( 'Jewellery Store', 'laventa' ) ?></h2>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e ( 'As a jeweler, your goal is to increase the number of customers who buy from you, and perhaps to cultivate a long-term relationship in which they make multiple purchases from your store.', 'laventa' ) ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons">
                        <!-- wp:button -->
                        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e ( 'Read More', 'laventa' ) ?></a>
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
    <!-- /wp:group -->
</div>
<!-- /wp:group -->


