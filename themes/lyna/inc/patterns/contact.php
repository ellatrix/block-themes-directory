<?php
/**
 * Contact
 */
return array(
	'title'      => esc_html__( ' Contact', 'lyna' ),
	'categories' => array( 'lyna', 'featured' ),
	'content'    => '<!-- wp:group {"align":"wide","className":"wp-block-section contact-section"} -->
    <div class="wp-block-group alignwide wp-block-section contact-section"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
    <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/team.jpg' ) ) . '","id":19847,"dimRatio":0} -->
    <div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-19847" alt="" src="' . esc_url( get_theme_file_uri( '/assets/images/team.jpg' ) ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
    <p class="has-text-align-center has-large-font-size"></p>
    <!-- /wp:paragraph --></div></div>
    <!-- /wp:cover --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"33.33%"} -->
    <div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/contact-bg.jpg' ) ) . '","id":19848,"dimRatio":0,"align":"center","className":"contact-right-layout"} -->
    <div class="wp-block-cover aligncenter contact-right-layout"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-19848" alt="" src="' . esc_url( get_theme_file_uri( '/assets/images/contact-bg.jpg' ) ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","fontSize":"normal"} -->
    <h2 class="has-text-align-center has-normal-font-size"> ' . esc_html__( 'Wanna Talk to Us ?', 'lyna' ) . ' </h2>
    <!-- /wp:heading -->
    
    <!-- wp:heading {"textAlign":"center","level":5} -->
    <h5 class="has-text-align-center"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-foreground-color"><a rel="noreferrer noopener" href="#" target="_blank"> ' . esc_html__( 'Contact Us Now', 'lyna' ) . '</a></mark></h5>
    <!-- /wp:heading --></div>
    <!-- /wp:group --></div></div>
    <!-- /wp:cover --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->',
);
