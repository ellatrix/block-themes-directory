<?php
/**
 * 404 content block pattern
 */
return array(
	'title'    => __( '404 content', 'scandinavia' ),
	'inserter' => false,
	'content'  => '<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"60px","bottom":"60px"}}},"layout":{"inherit":true,"contentSize":"960px"}} -->
                    <main class="wp-block-group" style="margin-top:60px;margin-bottom:60px">
                    <!-- wp:heading {"style":{"typography":{"fontSize":"clamp(4rem, 40vw, 20rem)","fontWeight":"700","lineHeight":"1","fontStyle":"normal"}},"className":"has-text-align-center"} -->
                    <h2 class="has-text-align-center" style="font-size:clamp(4rem, 40vw, 20rem);font-style:normal;font-weight:700;line-height:1">404</h2>
                    <!-- /wp:heading -->
                    
                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center">' . esc_html__( 'This page could not be found. Maybe try a search?', 'scandinavia' ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:search {"label":"' . esc_html_x( 'Search', 'label', 'scandinavia' ) . '","showLabel":false,"width":50,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center"} /-->
                    </main>
                    <!-- /wp:group -->',
);
