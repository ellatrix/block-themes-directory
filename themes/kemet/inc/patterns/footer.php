<?php
/**
 * Default Footer
 */
return array(
	'title'      => __( 'Default Footer', 'kemet' ),
	'categories' => array( 'kemet-footers' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '
    <!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"0px","bottom":"0px"}}},"backgroundColor":"tertiary","className":"has-secondary-color has-text-color","layout":{"inherit":true}} -->
<div class="wp-block-group has-secondary-color has-text-color has-tertiary-background-color has-background" style="padding-top:0px;padding-bottom:0px"><!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"20px","top":"20px"}}}} -->
<div class="wp-block-columns" style="padding-top:20px;padding-bottom:20px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"textColor":"secondary"} -->
<h4 class="has-secondary-color has-text-color" id="about-us">' . esc_html__( 'About Us', 'kemet' ) . '</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'kemet') . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:site-logo {"align":"center"} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"textColor":"secondary"} -->
<h4 class="has-secondary-color has-text-color" id="join-the-community">' . esc_html__( 'Join The Community', 'kemet' ) . '</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'kemet' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#023047","iconBackgroundColor":"background","iconBackgroundColorValue":"#ffffff"} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"color":"cyan-bluish-gray","className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity has-text-color has-background has-cyan-bluish-gray-background-color has-cyan-bluish-gray-color is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"15px","bottom":"15px"},"blockGap":"0px"}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:15px;padding-bottom:15px"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"fontSize":"tiny"} -->
<p class="has-link-color has-tiny-font-size">' .
sprintf(
    esc_html__( 'Copyright © 2022 | ', 'kemet') .
    '<a href="' . esc_url( __( 'https://kemet.io/', 'kemet' )) . '">Kemet</a>' . esc_html__( ' WordPress Theme', 'kemet' ) ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"right","fontSize":"tiny"} -->
<p class="has-text-align-right has-tiny-font-size">' . esc_html__('Kemet WordPress Block Theme', 'kemet') . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
    ',
);