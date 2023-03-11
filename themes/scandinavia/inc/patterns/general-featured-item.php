<?php
/**
 * Featured item block pattern
 */
return array(
	'title'      => __( 'Featured Item', 'scandinavia' ),
	'categories' => array( 'featured', 'columns', 'buttons' ),
	'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":false}} -->
                    <div class="wp-block-group alignfull featured-item-block"><!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/dark-background-patterns.jpg","id":1849,"dimRatio":0,"overlayColor":"background","style":{"color":{"duotone":["#000097","#ff4747"]}}} -->
                    <div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1849" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/dark-background-patterns.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true}} -->
                    <div class="wp-block-group"><!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","id":1850,"width":300,"height":300,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0px"}},"className":"is-style-rounded"} -->
                    <figure class="wp-block-image aligncenter size-full is-resized is-style-rounded" style="border-radius:0px"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/wine-splash.jpg" alt="" class="wp-image-1850" width="300" height="300"/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column {"verticalAlignment":"center"} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"center"} -->
                    <h2 class="has-text-align-center">' . esc_html__( 'Wine Splash', 'scandinavia' ) . '</h2>
                    <!-- /wp:heading -->
                    
                    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.2rem"}}} -->
                    <p class="has-text-align-center" style="font-size:1.2rem">' . esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text.', 'scandinavia' ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"100px"}},"className":"is-style-outline","fontSize":"large"} -->
                    <div class="wp-block-button has-custom-font-size is-style-outline has-large-font-size"><a class="wp-block-button__link" style="border-radius:100px"><strong>' . esc_html__( 'Get Now', 'scandinavia' ) . '</strong></a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns --></div>
                    <!-- /wp:group --></div></div>
                    <!-- /wp:cover --></div>
                    <!-- /wp:group -->',
);
