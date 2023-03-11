<?php
/**
 * Follow Subscribe
 */

$form = block_aarambha_get_mailchimp_forms();
return array(
	'title'      => esc_html__( 'Follow Subscribe', 'block-aarambha' ),
	'categories' => array( 'block-aarambha' ),
	'content'    => '
        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{}}} -->
        <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"customOverlayColor":"#FFFFFF","minHeight":300,"isDark":false} -->
        <div class="wp-block-cover is-light" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#FFFFFF"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"fontSize":"14px","textTransform":"uppercase","letterSpacing":"0.3em"},"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"text-light"} -->
        <p class="has-text-align-center has-text-light-color has-text-color" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;font-size:14px;letter-spacing:0.3em;text-transform:uppercase">' . esc_html__( 'Stay connected', 'block-aarambha' ) . '</p>
        <!-- /wp:paragraph -->
        <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"24px"},"spacing":{"margin":{"bottom":"25px"}}}} -->
        <h3 class="has-text-align-center" style="margin-bottom:25px;font-size:24px">' . esc_html__( 'Follow me on various social media platform', 'block-aarambha' ) . '</h3>
        <!-- /wp:heading -->

        <!-- wp:social-links {"iconColor":"heading","iconColorValue":"#242424","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
        <ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">
        <!-- wp:social-link {"url":"#","service":"facebook"} /-->
        <!-- wp:social-link {"url":"#","service":"instagram"} /-->
        <!-- wp:social-link {"url":"#","service":"twitter"} /--></ul>
        <!-- /wp:social-links --></div></div>
        <!-- /wp:cover --></div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"customOverlayColor":"#F1F1F1","minHeight":300,"isDark":false} -->
        <div class="wp-block-cover is-light" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#F1F1F1"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"fontSize":"14px","textTransform":"uppercase","letterSpacing":"0.3em"},"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"text-light"} -->
        <p class="has-text-align-center has-text-light-color has-text-color" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;font-size:14px;letter-spacing:0.3em;text-transform:uppercase">' . esc_html__( 'Subscribe', 'block-aarambha' ) . '</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"24px"},"spacing":{"margin":{"bottom":"25px"}}}} -->
        <h3 class="has-text-align-center" style="margin-bottom:25px;font-size:24px">' . esc_html__( 'Get the latest posts delivered right to your inbox', 'block-aarambha' ) . '</h3>
        <!-- /wp:heading -->' . wp_kses_post( $form ) . '
        </div>
        <!-- /wp:cover --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
        <!-- /wp:group -->',
);
