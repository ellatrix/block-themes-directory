<?php
/**
 * Recent comments widget block pattern
 */
return array(
	'title'      => __( 'Recent Comments Widget Panel', 'sicily' ),
	'categories' => array( 'theme', 'featured', 'widgets' ),
	'content'    => '<!-- wp:group {"className":"panel"} -->
                    <div class="wp-block-group panel"><!-- wp:heading {"fontSize":"large"} -->
                    <h2 class="has-large-font-size">' . esc_html__( 'Recent Comments', 'sicily' ) . '</h2>
                    <!-- /wp:heading -->
                    
                    <!-- wp:latest-comments /--></div>
                    <!-- /wp:group -->',
);
