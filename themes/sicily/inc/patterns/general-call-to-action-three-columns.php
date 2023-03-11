<?php
/**
 * Call to action - 3 columns block pattern
 */
return array(
	'title'      => __( 'Call to Action - 3 Columns', 'sicily' ),
	'categories' => array( 'theme', 'featured', 'columns', 'buttons' ),
	'content'    => '<!-- wp:group {"tagName":"section","className":"three-column-cta"} -->
    <section class="wp-block-group three-column-cta"><!-- wp:group {"style":{"spacing":{"padding":{"top":"2em"}}}} -->
    <div class="wp-block-group" style="padding-top:2em"><!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
    <h2 class="has-text-align-center has-x-large-font-size">' . esc_html__( 'Discover the Sicilian Family of Wines', 'sicily' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:separator {"backgroundColor":"secondary"} -->
    <hr class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background"/>
    <!-- /wp:separator --></div>
    <!-- /wp:group -->
    
    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"4em"},"blockGap":"0px"}}} -->
    <div class="wp-block-columns" style="margin-top:4em"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:cover {"url":"' . get_template_directory_uri() . '/assets/images/vineyard-1.jpg","dimRatio":0,"isDark":false} -->
    <div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="' . esc_html__( 'Vineyard', 'sicily' ) . '" src="' . get_template_directory_uri() . '/assets/images/vineyard-1.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
    <h3 class="has-text-align-center has-medium-font-size" style="text-transform:uppercase">' . esc_html__( 'Siracusa Heritage Collection', 'sicily' ) . '</h3>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} -->
    <p class="has-text-align-center" style="font-style:italic;font-weight:400">' . wp_kses_post( __( 'Wines of exceptional variety of character, fruit-forward with smooth and silky texture, bright and delicate aromatics.', 'sicily' ) ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button -->
    <div class="wp-block-button"><a class="wp-block-button__link" href="#">' . esc_html__( 'Shop Now', 'sicily' ) . '</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div></div>
    <!-- /wp:cover --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:cover {"url":"' . get_template_directory_uri() . '/assets/images/vineyard-3.jpg","dimRatio":0,"isDark":false} -->
    <div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="' . esc_html__( 'Grapes', 'sicily' ) . '" src="' . get_template_directory_uri() . '/assets/images/vineyard-3.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
    <h3 class="has-text-align-center has-medium-font-size" style="text-transform:uppercase">' . esc_html__( 'Trapani Prima Collection', 'sicily' ) . '</h3>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} -->
    <p class="has-text-align-center" style="font-style:italic;font-weight:400">' . wp_kses_post( __( 'Our new range of premium wines, perfectly crafted by our award-wining winemakers using the best organically grown grapes.', 'sicily' ) ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button -->
    <div class="wp-block-button"><a class="wp-block-button__link" href="#">' . esc_html__( 'Shop Now', 'sicily' ) . '</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div></div>
    <!-- /wp:cover --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:cover {"url":"' . get_template_directory_uri() . '/assets/images/vineyard-2.jpg","dimRatio":0,"isDark":false} -->
    <div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="' . esc_html__( 'Farm', 'sicily' ) . '" src="' . get_template_directory_uri() . '/assets/images/vineyard-2.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
    <h3 class="has-text-align-center has-medium-font-size" style="text-transform:uppercase">' . esc_html__( 'Catania Vintage Collection', 'sicily' ) . '</h3>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} -->
    <p class="has-text-align-center" style="font-style:italic;font-weight:400">' . wp_kses_post( __( 'A line of smooth, great tasting wines, created to be approachable that complement a wide variety of foods and cuisines.', 'sicily' ) ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button -->
    <div class="wp-block-button"><a class="wp-block-button__link" href="#">' . esc_html__( 'Shop Now', 'sicily' ) . '</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div></div>
    <!-- /wp:cover --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></section>
    <!-- /wp:group -->',
);
