<?php
/**
 * Header with logo and background block pattern
 */
return array(
    'title'      => __( 'Header with Logo, Title, and Background', 'sicily' ),
    'categories' => array( 'theme', 'header', 'navigation' ),
    'content'    => '<!-- wp:cover {"url":"' . get_template_directory_uri() . '/assets/images/hero-image.jpg","dimRatio":50,"isDark":false} -->
    <div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background" alt="' . esc_html__( 'Vineyard', 'sicily' ) . '" src="' . get_template_directory_uri() . '/assets/images/hero-image.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:site-logo {"width":50} /-->
        
        <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group"><!-- wp:site-title /-->
        
        <!-- wp:site-tagline /--></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->
        
        <!-- wp:navigation {"textColor":"white","overlayMenu":"never","overlayBackgroundColor":"white","overlayTextColor":"primary","className":"text-shadow","style":{"spacing":{"blockGap":"1em"},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}}} /--></div>
        <!-- /wp:group -->
        
        <!-- wp:spacer {"height":"15rem"} -->
        <div style="height:15rem" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
        
        <!-- wp:heading {"textAlign":"center"} -->
        <h2 class="has-text-align-center has-white-color has-text-color"><strong>' . wp_kses_post( __( 'This is Sicilian Wine', 'sicily' ) ) . '</strong></h2>
        <!-- /wp:heading -->
        
        <!-- wp:spacer {"height":"15rem"} -->
        <div style="height:15rem" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer --></div></div>
        <!-- /wp:cover -->',
);
