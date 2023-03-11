<?php
/**
 * Categories widget block pattern
 */
return array(
	'title'      => __( 'Categories Widget Panel', 'sicily' ),
	'categories' => array( 'theme', 'featured', 'widgets' ),
	'content'    => '<!-- wp:group {"className":"panel"} -->
                    <div class="wp-block-group panel"><!-- wp:heading {"fontSize":"large"} -->
                    <h2 class="has-large-font-size">' . esc_html__( 'Categories', 'sicily' ) . '</h2>
                    <!-- /wp:heading -->
                    
                    <!-- wp:categories /--></div>
                    <!-- /wp:group -->',
);
