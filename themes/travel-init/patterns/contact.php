<?php
/**
 * Title: Contact us
 * Slug: travel-init/travel-init-contact
 * Categories: wensolutions 
 * Description: A description of the pattern
 * Keywords: full site editing,
 */
?>
<!-- wp:group {"layout":{"inherit":false}} -->
<div class="wp-block-group">
    <!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/who-we-are.jpg","id":1435,"dimRatio":50,"focalPoint":{"x":"0.51","y":"0.31"},"minHeight":323,"minHeightUnit":"px","isDark":false} -->
    <div class="wp-block-cover is-light" style="min-height: 323px">
        <span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img
            class="wp-block-cover__image-background wp-image-1435" alt=""
            src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/who-we-are.jpg"
            style="object-position: 51% 31%" data-object-fit="cover" data-object-position="51% 31%" />
        <div class="wp-block-cover__inner-container">
            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"5.1vw"}},"textColor":"white"} -->
            <p class="has-text-align-center has-white-color has-text-color" style="font-size: 5.1vw">
            <?php echo esc_html__( 'Contact Us', 'travel-init' ); ?>
            </p>
            <!-- /wp:paragraph -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->


