<?php
/**
 * Social media widget block pattern
 */
return array(
	'title'      => __( 'Social Media Icons Widget Panel', 'sicily' ),
	'categories' => array( 'theme', 'featured', 'widgets' ),
	'content'    => '<!-- wp:group {"className":"panel"} -->
                    <div class="wp-block-group panel"><!-- wp:heading {"fontSize":"large"} -->
                    <h2 class="has-large-font-size">' . esc_html__( 'Lets Connect', 'sicily' ) . '</h2>
                    <!-- /wp:heading -->
                    
                    <!-- wp:social-links -->
                    <ul class="wp-block-social-links"><!-- wp:social-link {"url":"#","service":"facebook"} /-->
                    
                    <!-- wp:social-link {"url":"#","service":"instagram"} /-->
                    
                    <!-- wp:social-link {"url":"#","service":"twitter"} /-->
                    
                    <!-- wp:social-link {"url":"#","service":"pinterest"} /-->
                    
                    <!-- wp:social-link {"url":"#","service":"youtube"} /-->
                    
                    <!-- wp:social-link {"url":"#","service":"tiktok"} /--></ul>
                    <!-- /wp:social-links --></div>
                    <!-- /wp:group -->',
);
