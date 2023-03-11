<?php
/**
 * Title: Booknow One
 * Slug: travel-init/travel-init-booknow
 * Categories: wensolutions
 * Description: A description of the pattern
 * Keywords: full site editing,
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}}},"backgroundColor":"white","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background" style="padding-top:40px;padding-bottom:40px"><!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"center","fontSize":"intro"} -->
            <h2 class="has-text-align-center has-intro-font-size"><?php echo esc_html__( 'Are you lost? We are here to help', 'travel-init' ); ?></h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"center","fontSize":"section_sub_head"} -->
            <p class="has-text-align-center has-section-sub-head-font-size"><?php echo esc_html__( 'Contact WenSolutions for the enquiry', 'travel-init' ); ?></p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"1vw","bottom":"1vw","left":"5vw","right":"5vw"}}}} -->
            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo get_site_url(); ?>/contact-us/" style="padding-top:1vw;padding-right:5vw;padding-bottom:1vw;padding-left:5vw" target="_blank" rel="noreferrer noopener"><?php echo esc_html__( 'Contact Us', 'travel-init' ); ?></a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:column -->
            
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:image {"align":"center","id":1305,"sizeSlug":"large","linkDestination":"none","className":"give-height is-style-default"} -->
            <figure class="wp-block-image aligncenter size-large give-height is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/lostSticker.jpg" alt="" class="wp-image-1305"/></figure>
            <!-- /wp:image --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns --></div>
            <!-- /wp:group -->