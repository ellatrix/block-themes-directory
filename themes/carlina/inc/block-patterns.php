<?php
function carlina_register_block_patterns() {

    $block_pattern_categories = array(
		'featured'      => array( 'label' => __( 'Featured', 'carlina' ) ),
		'layout'        => array( 'label' => __( 'Layouts', 'carlina' ) ),
		'headers'       => array( 'label' => __( 'Headers', 'carlina' ) ),
		'footers'       => array( 'label' => __( 'Footers', 'carlina' ) ),
		'navigations'   => array( 'label' => __( 'Navigations', 'carlina' ) ),
		'newsletter'    => array( 'label' => __( 'Newsletter', 'carlina' ) ),
    );

    $block_pattern_categories = apply_filters( 'carlina_register_block_categories', $block_pattern_categories );

    foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}


    $block_patterns = [
        'footer-2-columns-social-links',
        'footer-3-columns-social-links',
        'layout-2-columns-page',
        'navigation-bar-floating',
        'newsletter-cover',
        'layout-features',
        'header-large-image',
        'header-standard',
    ];

    $block_patterns = apply_filters( 'carlina_block_patterns', $block_patterns );

    foreach( $block_patterns as $block_pattern ) {
        include(get_template_directory() . '/inc/patterns/' . $block_pattern . '.php');
    }
}

add_action( 'init', 'carlina_register_block_patterns' , 9 );
