<?php
/**
 * 404 Header
 */
return array(
	'title'      => esc_html__( '404 Header', 'lyna' ),
	'categories' => array( 'lyna', 'header' ),
	'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}, "className":"no-margin-top banner"} -->
<div class="wp-block-group alignfull no-margin-top banner"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false}} -->
    <div class="wp-block-group alignfull" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"' . get_parent_theme_file_uri( '/assets/images/banner.jpg' ) . '","dimRatio":0,"overlayColor":"body-text"} -->
    <div class="wp-block-cover"><span aria-hidden="true" class="has-body-text-background-color has-background-dim-0 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . get_parent_theme_file_uri( '/assets/images/banner.jpg' ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true}} -->
    <div class="wp-block-group">
        <!-- wp:group {"align":"wide} -->
        <div class="wp-block-group alignwide">
            <!-- wp:heading {"textAlign":"center","level":1,"textColor":"foreground","className":"has-text-color-foreground"} -->
                <h1 class="has-text-align-center has-text-color-foreground has-foreground-color has-text-color">' . esc_html__( '404 Nothing Found', 'lyna' ) . '</h1>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textAlign":"center"} -->
            <p class="has-text-align-center">' . esc_html__( 'Oops! That page can\'t be found', 'lyna' ) . '</p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group --></div></div>
    <!-- /wp:cover --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->',
);
