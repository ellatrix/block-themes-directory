<?php
/**
 * Product features block pattern
 */
return array(
	'title'      => __( 'Product features', 'sicily' ),
	'categories' => array( 'theme', 'featured', 'columns' ),
	'content'    => '<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"right":"1em","left":"1em"}}},"layout":{"inherit":true}} -->
    <section class="wp-block-group" style="padding-right:1em;padding-left:1em"><!-- wp:group {"style":{"spacing":{"padding":{"top":"4em","bottom":"4em"}}}} -->
    <div class="wp-block-group" style="padding-top:4em;padding-bottom:4em"><!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
    <h2 class="has-text-align-center has-x-large-font-size">' . esc_html__( 'Our Product', 'sicily' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:columns {"style":{"spacing":{"padding":{"top":"4em"}}}} -->
    <div class="wp-block-columns" style="padding-top:4em"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"right","level":5,"className":"md-text-center","fontSize":"medium"} -->
    <h5 class="has-text-align-right md-text-center has-medium-font-size">' . esc_html__( '100% Organic Certified', 'sicily' ) . '</h5>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"right","className":"md-text-center","fontSize":"medium"} -->
    <p class="has-text-align-right md-text-center has-medium-font-size">' . wp_kses_post( __( 'No synthetic chemicals in the vineyard, no toxic residue in the wine.', 'sicily' ) ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"50px"} -->
    <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:group -->
    
    <!-- wp:group -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"right","level":5,"className":"md-text-center","fontSize":"medium"} -->
    <h5 class="has-text-align-right md-text-center has-medium-font-size">' . esc_html__( 'Chain of wine stores', 'sicily' ) . '</h5>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"right","className":"md-text-center","fontSize":"medium"} -->
    <p class="has-text-align-right md-text-center has-medium-font-size">' . wp_kses_post( __( 'Make a choice and receive your order in a convenient place.', 'sicily' ) ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"50px"} -->
    <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:group -->
    
    <!-- wp:group -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"right","level":5,"className":"md-text-center","fontSize":"medium"} -->
    <h5 class="has-text-align-right md-text-center has-medium-font-size">' . esc_html__( 'Wine expert advice', 'sicily' ) . '</h5>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"right","className":"md-text-center","fontSize":"medium"} -->
    <p class="has-text-align-right md-text-center has-medium-font-size">' . wp_kses_post( __( 'Free tips for choosing drinks and gifts, personal recommendations.', 'sicily' ) ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="' . get_template_directory_uri() . '/assets/images/wine-bottle.png" alt="' . esc_html__( 'Wine Bottle', 'sicily' ) . '" class=""/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":5,"className":"md-text-center","fontSize":"medium"} -->
    <h5 class="has-text-align-left md-text-center has-medium-font-size">' . esc_html__( 'Large selection of wines', 'sicily' ) . '</h5>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"left","className":"md-text-center","fontSize":"medium"} -->
    <p class="has-text-align-left md-text-center has-medium-font-size">' . wp_kses_post( __( 'The widest catalog of wines and spirits in Italy. Valuable information about drinks', 'sicily' ) ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"50px"} -->
    <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:group -->
    
    <!-- wp:group -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":5,"className":"md-text-center","fontSize":"medium"} -->
    <h5 class="has-text-align-left md-text-center has-medium-font-size">' . esc_html__( 'Low prices &amp; bargains', 'sicily' ) . '</h5>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"left","className":"md-text-center","fontSize":"medium"} -->
    <p class="has-text-align-left md-text-center has-medium-font-size">' . wp_kses_post( __( 'Only quality alcohol. Discount program', 'sicily' ) ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"50px"} -->
    <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:group -->
    
    <!-- wp:group -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":5,"className":"md-text-center","fontSize":"medium"} -->
    <h5 class="has-text-align-left md-text-center has-medium-font-size">' . esc_html__( 'Caring for our clients', 'sicily' ) . '</h5>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"left","className":"md-text-center","fontSize":"medium"} -->
    <p class="has-text-align-left md-text-center has-medium-font-size">' . wp_kses_post( __( 'We provide after-sales service and are always ready to help.', 'sicily' ) ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group --></section>
    <!-- /wp:group -->',
);
