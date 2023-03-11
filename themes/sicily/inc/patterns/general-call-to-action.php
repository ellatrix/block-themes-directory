<?php
/**
 * Call to action block pattern
 */
return array(
	'title'      => __( 'Call to Action', 'sicily' ),
	'categories' => array( 'theme', 'featured', 'buttons' ),
	'content'    => '<!-- wp:group {"tagName":"section"} -->
    <section class="wp-block-group"><!-- wp:cover {"url":"' . get_template_directory_uri() . '/assets/images/vineyard-path.jpg","dimRatio":80,"overlayColor":"background","focalPoint":{"x":"0.90","y":"0.00"},"isDark":false} -->
    <div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background" alt="' . esc_html__( 'Vineyard', 'sicily' ) . '" src="' . get_template_directory_uri() . '/assets/images/vineyard-path.jpg" style="object-position:90% 0%" data-object-fit="cover" data-object-position="90% 0%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
    <div class="wp-block-group"><!-- wp:heading {"fontSize":"large"} -->
    <h2 class="has-large-font-size">' . wp_kses_post( __( 'Handcrafted in the tradition of artisanal winemaking', 'sicily' ) ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"2em"}}}} -->
    <div class="wp-block-buttons" style="margin-top:2em"><!-- wp:button -->
    <div class="wp-block-button"><a class="wp-block-button__link" href="#">' . esc_html__( 'Shop Now', 'sicily' ) . '</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div></div>
    <!-- /wp:cover --></section>
    <!-- /wp:group -->',
);
