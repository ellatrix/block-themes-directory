<?php
/**
 * Hero Cover
 */
return array(
	'title'      => esc_html__( 'Hero Cover', 'block-aarambha' ),
	'categories' => array( 'block-aarambha' ),
	'content'    => '
    <!-- wp:group {"className":"is-style-block-aarambha-frontpage-container is-style-block-aarambha-container","layout":{"type":"default"}} -->
    <div class="wp-block-group is-style-block-aarambha-frontpage-container is-style-block-aarambha-container"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri() ) . '/assets/images/hero.jpg","id":191,"dimRatio":20,"minHeight":420,"minHeightUnit":"px","isDark":false} -->
    <div class="wp-block-cover is-light" style="min-height:420px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-191" alt="' . esc_attr__( 'Hero Image', 'block-aarambha' ) . '" src="' . esc_url( get_theme_file_uri() ) . '/assets/images/hero.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"backgroundColor":"white","className":"is-style-block-aarambha-container","layout":{"type":"constrained","justifyContent":"left","contentSize":""}} -->
    <div class="wp-block-group is-style-block-aarambha-container has-white-background-color has-background"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"14px","letterSpacing":"1.4px","textTransform":"uppercase"}},"textColor":"text-light"} -->
    <p class="has-text-align-left has-text-light-color has-text-color" style="font-size:14px;letter-spacing:1.4px;text-transform:uppercase">' . esc_html__( 'CULTURE', 'block-aarambha' ) . '</p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"left","style":{"typography":{"letterSpacing":"0.05em","fontSize":"32px"},"spacing":{"margin":{"top":"15px"}}}} -->
    <h2 class="has-text-align-left" style="margin-top:15px;font-size:32px;letter-spacing:0.05em">' . esc_html__( 'Minimalist Creative Design Examples to Inspire You', 'block-aarambha' ) . '</h2>
    <!-- /wp:heading -->

    <!-- wp:spacer {"height":"18px"} -->
    <div style="height:18px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"textColor":"white","align":"center","style":{"border":{"radius":"0px"}},"className":"has-custom-font-size is-style-fill has-medium-font-size"} -->
    <div class="wp-block-button aligncenter has-custom-font-size is-style-fill has-medium-font-size"><a class="wp-block-button__link has-white-color has-text-color wp-element-button" style="border-radius:0px">' . esc_html__( 'Discover', 'block-aarambha' ). '</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div></div>
    <!-- /wp:cover --></div>
    <!-- /wp:group -->'
);
