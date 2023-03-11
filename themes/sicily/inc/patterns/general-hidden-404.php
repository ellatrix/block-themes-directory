<?php
/**
 * 404 content block pattern
 */
return array(
	'title'    => __( '404 content', 'sicily' ),
	'inserter' => false,
	'content'  => '<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"right":"1em","left":"1em"}}},"layout":{"inherit":true}} -->
                    <main class="wp-block-group" style="padding-right:1em;padding-left:1em"><!-- wp:group {"layout":{"inherit":true}} -->
                    <div class="wp-block-group"><!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"60px","bottom":"60px"}}},"layout":{"inherit":true,"contentSize":"960px"}} -->
                    <main class="wp-block-group" style="margin-top:60px;margin-bottom:60px"><!-- wp:group -->
                    <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"clamp(4rem, 40vw, 20rem)","fontWeight":"700","lineHeight":"1","fontStyle":"normal"}},"className":"has-text-align-center"} -->
                    <h2 class="has-text-align-center" style="font-size:clamp(4rem, 40vw, 20rem);font-style:normal;font-weight:700;line-height:1">404</h2>
                    <!-- /wp:heading --></div>
                    <!-- /wp:group -->
                    
                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"2em"}}}} -->
                    <div class="wp-block-group" style="margin-top:2em"><!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center">' . wp_kses_post( __( 'This page could not be found. Maybe try a search?', 'sicily' ) ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:search {"label":"' . esc_html_x( 'Search', 'label', 'sicily' ) . '","showLabel":false,"width":50,"widthUnit":"%","buttonText":"' . esc_html_x( 'Search', 'label', 'sicily' ) . '","buttonUseIcon":true,"align":"center"} /--></div>
                    <!-- /wp:group --></main>
                    <!-- /wp:group --></div>
                    <!-- /wp:group --></main>
                    <!-- /wp:group -->',
);
