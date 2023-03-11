<?php
/**
 * Featured Content
 */
return array(
	'title'      => esc_html__( ' Hero Content', 'lyna' ),
	'categories' => array( 'lyna', 'featured' ),
	'content'    => '<!-- wp:group {"align":"wide","className":"wp-block-section hero-content"} -->
    <div class="wp-block-group alignwide wp-block-section hero-content"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top","className":"hero-title"} -->
    <div class="wp-block-column is-vertically-aligned-top hero-title"><!-- wp:heading {"style":{"typography":{"lineHeight":"1"}},"textColor":"alternate-bg-color"} -->
    <h2 class="has-alternate-bg-color-color has-text-color" style="line-height:1">' . esc_html__( '6', 'lyna' ) . '<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-alternate-bg-color-color">' . esc_html__( '+', 'lyna' ) . '</mark></h2>
    <!-- /wp:heading -->
    
    <!-- wp:heading {"level":5} -->
    <h5>' . esc_html__( 'YEARS', 'lyna' ) . '<br>' . esc_html__( 'EXPERIENCE', 'lyna' ) . '<br>' . esc_html__( 'WORKING', 'lyna' ) . '</h5>
    <!-- /wp:heading --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group {"className":"section-heading"} -->
    <div class="wp-block-group section-heading"><!-- wp:heading -->
    <h2>' . esc_html__( 'We Using Top Leading Design Trends', 'lyna' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:separator {"opacity":"css"} -->
    <hr class="wp-block-separator has-css-opacity"/>
    <!-- /wp:separator --></div>
    <!-- /wp:group -->
    
    <!-- wp:paragraph -->
    <p>' . esc_html__( 'Even by his own high standards Lewis Hamilton set a new benchmark in 2019. In a class of his own, his sixth championship was defined by opening with an almost crushing, relentless run …', 'lyna' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link">' . esc_html__( 'Read More', 'lyna' ) . '</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->',
);
