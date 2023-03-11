<?php
/**
 * Membership benefits block pattern
 */
return array(
	'title'      => __( 'Membership benefits', 'sicily' ),
	'categories' => array( 'theme', 'featured', 'buttons', 'columns' ),
	'content'    => '<!-- wp:media-text {"mediaType":"image"} -->
    <div class="wp-block-media-text alignwide is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="' . get_template_directory_uri() . '/assets/images/wine-club-2.jpg" alt="' . esc_html__( 'Wine club', 'sicily' ) . '"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
    <h2>' . wp_kses_post( __( 'Member Benefits', 'sicily' ) ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:separator {"backgroundColor":"secondary"} -->
    <hr class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background"/>
    <!-- /wp:separator -->
    
    <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} -->
    <p style="text-transform:uppercase">' . wp_kses_post( __( 'Join us to experience these member benefits', 'sicily' ) ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:list -->
    <ul><li>' . wp_kses_post( __( 'Updates on new release wines', 'sicily' ) ) . '</li><li>' . wp_kses_post( __( 'Access to special offers and deals', 'sicily' ) ) . '</li><li>' . wp_kses_post( __( 'Invitations to exclusive events', 'sicily' ) ) . '</li><li>' . wp_kses_post( __( 'Wine tips for cellaring, drinking and food pairing', 'sicily' ) ) . '</li><li>' . wp_kses_post( __( 'Free standard shipping on online orders', 'sicily' ) ) . '</li></ul>
    <!-- /wp:list --></div>
    <!-- /wp:group --></div></div>
    <!-- /wp:media-text -->',
);


