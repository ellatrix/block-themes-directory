<?php
/**
 * 404 Header
 */
return array(
	'title'      => esc_html__( '404 Header', 'axton' ),
	'categories' => array( 'axton', 'header' ),
	'content'    => '<!-- wp:group {"backgroundColor":"background","className":"wp-block-section","layout":{"inherit":true}} -->
    <div class="wp-block-group wp-block-section has-background-background-color has-background"><!-- wp:group {"className":"alignwide"} -->
    <div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","level":1} -->
    <h1 class="has-text-align-center">404 Nothing Found</h1>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"className":"has-text-align-center"} -->
    <p class="has-text-align-center">Oops! That page can’t be found</p>
    <!-- /wp:paragraph -->
    <!-- wp:group {"tagName":"div"} -->
    <div class="wp-block-group"><!-- wp:group {"layout":{"inherit":true}} -->
    <div class="wp-block-group">
    <!-- wp:pattern {"slug":"axton/hidden-404"} /-->
    </div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->
    </div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->',
);


