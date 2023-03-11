<?php
/**
 * Call to action block pattern
 */
return array(
	'title'      => __( 'Call to Action', 'scandinavia' ),
	'categories' => array( 'featured', 'columns', 'buttons' ),
	'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":false}} -->
                    <div class="wp-block-group alignfull"><!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/call-to-action-background.jpg","id":1843,"dimRatio":60,"overlayColor":"background","focalPoint":{"x":"0.45","y":"0.52"},"minHeight":300,"contentPosition":"center center","isDark":false,"style":{"color":{"duotone":["#000000","#00a5ff"]}}} -->
                    <div class="wp-block-cover is-light" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1843" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/call-to-action-background.jpg" style="object-position:45% 52%" data-object-fit="cover" data-object-position="45% 52%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true}} -->
                    <div class="wp-block-group"><!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
                    <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group -->
                    <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"3rem"}},"textColor":"foreground"} -->
                    <h2 class="has-text-align-left has-foreground-color has-text-color" style="font-size:3rem;font-style:normal;font-weight:700">' . esc_html__( 'Call to Action', 'scandinavia' ) . '</h2>
                    <!-- /wp:heading -->
                    
                    <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"1.2rem"}},"textColor":"foreground"} -->
                    <p class="has-text-align-left has-foreground-color has-text-color" style="font-size:1.2rem">' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'scandinavia' ) . '</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons"><!-- wp:button -->
                    <div class="wp-block-button"><a class="wp-block-button__link"><strong>' . esc_html__( 'Call Now!', 'scandinavia' ) . '</strong></a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns --></div>
                    <!-- /wp:group --></div></div>
                    <!-- /wp:cover --></div>
                    <!-- /wp:group -->',
);
