<?php
/**
 * Calendar widget block pattern
 */
return array(
	'title'      => __( 'Calendar Widget Panel', 'sicily' ),
	'categories' => array( 'theme', 'featured', 'widgets' ),
	'content'    => '<!-- wp:group {"className":"panel"} -->
                    <div class="wp-block-group panel"><!-- wp:heading {"fontSize":"large"} -->
                    <h2 class="has-large-font-size">' . esc_html__( 'Calendar', 'sicily' ) . '</h2>
                    <!-- /wp:heading -->
                    
                    <!-- wp:calendar /--></div>
                    <!-- /wp:group -->',
);
