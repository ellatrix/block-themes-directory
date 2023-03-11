<?php
/**
 * Membership call to action block pattern
 */
return array(
	'title'      => __( 'Membership call to action', 'sicily' ),
	'categories' => array( 'theme', 'featured', 'buttons', 'columns' ),
	'content'    => '<!-- wp:media-text {"mediaPosition":"right","mediaType":"image"} -->
    <div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="' . get_template_directory_uri() . '/assets/images/wine-club-1.jpg" alt="Wine club"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
    <div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"textColor":"primary","fontSize":"small"} -->
    <p class="has-primary-color has-text-color has-small-font-size" style="text-transform:uppercase">' . esc_html__( 'Sicily Elite Club', 'sicily' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:heading -->
    <h2>' . esc_html__( 'Join the Club', 'sicily' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:separator {"backgroundColor":"secondary"} -->
    <hr class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background"/>
    <!-- /wp:separator -->
    
    <!-- wp:paragraph -->
    <p>' . wp_kses_post( __( 'Discover Sicily through wine club membership, and enjoy limited edition wines delivered to your door, special deals when you visit the winery and discounts on wines throughout the year.', 'sicily' ) ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button -->
    <div class="wp-block-button"><a class="wp-block-button__link" href="#"><strong>' . esc_html__( 'Register', 'sicily' ) . '</strong></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div></div>
    <!-- /wp:media-text -->',
);


