<?php
/**
 * Tag cloud widget block pattern
 */
return array(
	'title'      => __( 'Tag Cloud Widget Panel', 'sicily' ),
	'categories' => array( 'theme', 'featured', 'widgets' ),
	'content'    => '<!-- wp:group {"className":"panel"} -->
                    <div class="wp-block-group panel"><!-- wp:heading {"fontSize":"large"} -->
                    <h2 class="has-large-font-size">' . esc_html__( 'Tag Cloud', 'sicily' ) . '</h2>
                    <!-- /wp:heading -->
                    
                    <!-- wp:tag-cloud {"smallestFontSize":"0.75rem","largestFontSize":"2rem"} /--></div>
                    <!-- /wp:group -->',
);
