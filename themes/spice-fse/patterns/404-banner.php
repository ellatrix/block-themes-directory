<?php
/**
* Title: 404 banner
* Slug: spice-fse/404-banner
* Categories: spice-fse
* Block Types: core/404-banner
*/
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/breadcrumb.jpg' ) ); ?>","id":6,"dimRatio":60,"overlayColor":"black","minHeight":355,"minHeightUnit":"px"} -->
<div class="wp-block-cover" style="min-height:355px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-6" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/breadcrumb.jpg' ) ); ?>" data-object-fit="cover"/>
<div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"fontSize":"5rem"}},"textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color" style="font-size:5rem">
    <strong><?php echo esc_html__('404: Page not found','spice-fse'); ?></strong></p>
<!-- /wp:paragraph --></div>
</div>
<!-- /wp:cover -->