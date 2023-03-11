<?php
/**
 * Title: Newsletter area
 * Slug: blockme/newsletter
 * Categories: text, blockme
 * Block Types: core/group, core/columns, core/column, core/heading, core/paragraph, core/buttons, core/button
 * Inserter: yes
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px"><!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"top":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"blockme-ghostwhite","className":"newsletter-section","fontSize":"medium"} -->
<div class="wp-block-columns alignfull newsletter-section has-blockme-ghostwhite-background-color has-background has-medium-font-size" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"width":"100%","style":{"spacing":{"padding":{"top":"30px","right":"20px","bottom":"30px","left":"20px"}},"border":{"top":{"color":"var:preset|color|blockme-ghostwhite","width":"1px"}}},"backgroundColor":"blockme-lightgray","fontSize":"medium"} -->
<div class="wp-block-column has-blockme-lightgray-background-color has-background has-medium-font-size" style="border-top-color:var(--wp--preset--color--blockme-ghostwhite);border-top-width:1px;padding-top:30px;padding-right:20px;padding-bottom:30px;padding-left:20px;flex-basis:100%"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"blockme-x-large"} -->
<h2 class="has-text-align-center has-blockme-x-large-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><?php echo esc_html__( 'Subscribe to Our Newsletter!', 'blockme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"blockme-smaller"} -->
<p class="has-text-align-center has-blockme-smaller-font-size"><?php echo esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'blockme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"vivid-cyan-blue","textColor":"blockme-ghostwhite","align":"center","style":{"border":{"radius":"100px"}},"className":"is-style-fill","fontSize":"blockme-normal"} -->
<div class="wp-block-button aligncenter has-custom-font-size is-style-fill has-blockme-normal-font-size"><a class="wp-block-button__link has-blockme-ghostwhite-color has-vivid-cyan-blue-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:100px" rel="#"><strong><?php echo esc_html__( 'Subscribe Now', 'blockme' ); ?></strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->