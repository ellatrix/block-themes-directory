<?php
/**
 * Hero Section
 */
return array(
	'title'      => __( 'Hero Section', 'bioxlog' ),
	'categories' => array( 'pages' ),
	'content'    => '
    <!-- wp:group -->
    <div class="wp-block-group"><!-- wp:spacer -->
    <div style="height:125px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
    <h1 class="has-text-align-center" style="font-style:normal;font-weight:700">' . esc_html__( 'Monzur Alam', 'bioxlog' ). '</h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"28px"}}} -->
    <p class="has-text-align-center" style="font-size:28px"><strong>' . esc_html__( 'Professional WordPress Developer', 'bioxlog' ). '</strong></p>
    <!-- /wp:paragraph -->

    <!-- wp:social-links {"iconBackgroundColor":"foreground","iconBackgroundColorValue":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dforeground)","layout":{"type":"flex","justifyContent":"center"}} -->
    <ul class="wp-block-social-links has-icon-background-color">
    
    <!-- wp:social-link {"url":"#","service":"facebook"} /-->

    <!-- wp:social-link {"url":"#","service":"twitter"} /-->

    <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

    <!-- wp:social-link {"url":"#","service":"skype"} /-->

    <!-- wp:social-link {"url":"#","service":"github"} /-->
    </ul>
    <!-- /wp:social-links -->

    </div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->

    <!-- wp:spacer -->
    <div style="height:125px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:group -->
    ',
);
