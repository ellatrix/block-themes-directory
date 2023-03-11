<?php
/**
 * Minimal One Column Footer
 */
return array(
	'title'      => __( 'Minimal One Column Footer', 'kemet' ),
	'categories' => array( 'kemet-footers' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '
    <!-- wp:group {"align":"full"} -->
<div class="wp-block-group alignfull"><!-- wp:cover {"overlayColor":"secondary","isDark":false,"align":"center"} -->
<div class="wp-block-cover aligncenter is-light"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:site-logo {"align":"center"} /-->

<!-- wp:spacer {"height":"30px","width":"72px"} -->
<div style="height:30px;width:72px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:navigation {"ref":19,"textColor":"foreground","overlayMenu":"never","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"20px"}}} -->
<!-- wp:page-list /-->
<!-- /wp:navigation -->
<!-- wp:spacer {"height":"0px","width":"72px"} -->
<div style="height:0px;width:72px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:social-links {"iconColor":"background","iconColorValue":"#ffffff","iconBackgroundColor":"tertiary","iconBackgroundColorValue":"#02273a","className":"is-style-default","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":{"top":"15px","left":"15px"}}}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"vimeo"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:group {"layout":{"wideSize":"600px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'kemet') . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":"5px"} -->
<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:separator {"className":"has-text-color has-background has-cyan-bluish-gray-background-color has-cyan-bluish-gray-color is-style-wide eplus-wrapper"} -->
<hr class="wp-block-separator has-alpha-channel-opacity has-text-color has-background has-cyan-bluish-gray-background-color has-cyan-bluish-gray-color is-style-wide eplus-wrapper"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:spacer {"height":"0px"} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"foreground"} -->
<p class="has-text-align-center has-foreground-color has-text-color has-link-color">' .
sprintf(
    esc_html__( 'Copyright © 2022 | ', 'kemet') .
    '<a href="' . esc_url( __( 'https://kemet.io/', 'kemet' )) . '">Kemet</a>' . esc_html__( ' WordPress Theme', 'kemet' ) ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->
    ',
);