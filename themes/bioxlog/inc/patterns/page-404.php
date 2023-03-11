<?php
/**
 * About Hero
 */
return array(
	'title'      => __( '404', 'bioxlog' ),
	'categories' => array( 'pages', 'text' ),
	'content'    => '
    <!-- wp:spacer {"height":"50px"} -->
    <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:group {"tagName":"main"} -->
    <main class="wp-block-group">
        <!-- wp:group {"layout":{"inherit":true}} -->
        <div class="wp-block-group">
            <!-- wp:separator {"className":"is-style-404"} -->
            <hr class="wp-block-separator has-alpha-channel-opacity is-style-404"/>
            <!-- /wp:separator -->

            <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"200px"}}} -->
            <h2 class="has-text-align-center" style="font-size:200px">' . esc_html__( '404', 'bioxlog' ). '</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">' . esc_html__( 'This page could not be found. Maybe try a search?', 'bioxlog' ). '</p>
            <!-- /wp:paragraph -->

            <!-- wp:search {"label":"Search","showLabel":false,"width":50,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center"} /-->
            <!-- wp:spacer {"height":"32px"} -->
            <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:separator {"className":"is-style-wide"} -->
            <hr class="wp-block-separator has-alpha-channel-opacity is-style-404"/>
            <!-- /wp:separator -->
        </div>
        <!-- /wp:group -->
    </main>
    <!-- /wp:group -->

    <!-- wp:spacer {"height":"50px"} -->
    <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    ',
);
