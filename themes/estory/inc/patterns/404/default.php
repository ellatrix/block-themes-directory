<?php
return array(
    'title'      => __( 'Default', 'estory' ),
    'categories' => array( 'estory-404' ),
    'content'    => '<!-- wp:group {"style":{"spacing":{"blockGap":"2.5em","margin":{"top":"0px","bottom":"0px"}}},"layout":{"contentSize":"751px"}} -->
    <div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:image {"align":"center","id":1251,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( get_theme_file_uri( '/assets/images/404.png' ) ) . '" alt="" class="wp-image-1251"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:group {"style":{"spacing":{"blockGap":"1.875em"}}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4} -->
    <h4 class="has-text-align-center">' . esc_html__( 'Oops! That page can\'t be found', 'estory' ) . '</h4>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph -->
    <p>' . esc_html__( 'Sorry, but the page you are looking for is not found. Please, make sure you have typed the current URL.', 'estory' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button -->
    <div class="wp-block-button"><a class="wp-block-button__link" href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Go to Home Page', 'estory' ) . '</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->'
);
