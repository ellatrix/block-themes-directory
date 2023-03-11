<?php

return array(
	'title'         => __( 'Hero section with Video animation', 'blockpress' ),
	'categories'    => array( 'blockpress-hero' ),
 
	'content'       => '<!-- wp:group {"align":"full","style":{"color":{"gradient":"linear-gradient(180deg,var(--wp--custom--color--white) 0%,var(--wp--custom--color--light) 100%)"},"spacing":{"padding":{"bottom":"60px","top":"0px"}}},"layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull has-background" style="background:linear-gradient(180deg,var(--wp--custom--color--white) 0%,var(--wp--custom--color--light) 100%);padding-top:0px;padding-bottom:60px"><!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"},"spacing":{"margin":{"top":"10px"}}},"className":"is-style-line-separator fr-animate fr-move-up","fontSize":"xsmall"} -->
    <h6 class="is-style-line-separator fr-animate fr-move-up has-xsmall-font-size" id="extremelly-fast" style="font-style:normal;font-weight:400;text-transform:uppercase;margin-top:10px">Extremelly fast</h6>
    <!-- /wp:heading -->
    
    <!-- wp:heading {"style":{"typography":{"lineHeight":"1.2"},"spacing":{"margin":{"bottom":"30px","top":"30px"}}},"className":"fr-animate fr-flip","fontSize":"max-gigantic"} -->
    <h2 class="fr-animate fr-flip has-max-gigantic-font-size" id="text-on-left-image-on-right" style="line-height:1.2;margin-top:30px;margin-bottom:30px">Meet BlockPress - powerful Block theme </h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"textColor":"lightgrey","className":"fr-animate fr-move-up fr-delay-3"} -->
    <p class="fr-animate fr-move-up fr-delay-3 has-lightgrey-color has-text-color">Change the workflow for your Wordpress site, control everything from Site editor without using any extra plugins. Improved speed, web vitals score and SEO to get better positions</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"textonprimary","style":{"spacing":{"padding":{"top":"15px","right":"40px","bottom":"15px","left":"40px"}},"border":{"radius":"3px"}},"className":"is-style-cubebtndark fr-animate fr-move-up fr-delay-5"} -->
    <div class="wp-block-button is-style-cubebtndark fr-animate fr-move-up fr-delay-5"><a class="wp-block-button__link has-textonprimary-color has-primary-background-color has-text-color has-background" style="border-radius:3px;padding-top:15px;padding-right:40px;padding-bottom:15px;padding-left:40px">Get Started</a></div>
    <!-- /wp:button -->
    
    <!-- wp:button {"backgroundColor":"white","style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"40px","right":"40px"}}},"className":"is-style-cubebtnwhite fr-animate fr-move-up fr-delay-7"} -->
    <div class="wp-block-button is-style-cubebtnwhite fr-animate fr-move-up fr-delay-7"><a class="wp-block-button__link has-white-background-color has-background" style="padding-top:15px;padding-right:40px;padding-bottom:15px;padding-left:40px">Learn More</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"50%"} -->
    <div class="wp-block-column" style="flex-basis:50%">
    <!-- wp:video {"id":7637} -->
        <figure class="wp-block-video">
        <video autoplay loop muted poster="'.BLOCKPRESS_THEME_DIR.'/assets/patterns/circleblock.webp" preload="auto" src="'.BLOCKPRESS_THEME_DIR.'/assets/patterns/circleblock.webm" playsinline>
        </video>
        </figure>
    <!-- /wp:video -->
    </div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:group {"align":"wide"} -->
    <div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
    <div class="wp-block-group"><!-- wp:paragraph {"textColor":"primary","fontSize":"small"} -->
    <p class="has-primary-color has-text-color has-small-font-size">Optimized assets</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"fontSize":"large"} -->
    <p class="has-large-font-size">No jquery and libraries</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph -->
    <p>Theme doesn\'t use jquery, icon or javascript libraries and fast as possible</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"xsmall"} -->
    <p class="has-primary-color has-text-color has-link-color has-xsmall-font-size"><a href="#">Read more about assets</a>  →</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
    <div class="wp-block-group"><!-- wp:paragraph {"textColor":"primary","fontSize":"small"} -->
    <p class="has-primary-color has-text-color has-small-font-size">Reliable</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"fontSize":"large"} -->
    <p class="has-large-font-size">Design features</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph -->
    <p>Theme has bundled design possibilities and style variations and helper classes</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"xsmall"} -->
    <p class="has-primary-color has-text-color has-link-color has-xsmall-font-size"><a href="#">Check design guide</a>  →</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
    <div class="wp-block-group"><!-- wp:paragraph {"textColor":"primary","fontSize":"small"} -->
    <p class="has-primary-color has-text-color has-small-font-size">Scalable</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"fontSize":"large"} -->
    <p class="has-large-font-size">Edit everything</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph -->
    <p>Full site editing allows to edit any page or element of site directly in editor</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"xsmall"} -->
    <p class="has-primary-color has-text-color has-link-color has-xsmall-font-size"><a href="#">Read about FSE</a>  →</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->',
);
