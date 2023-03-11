<?php
/**
 * Core Header content.
 */
return array(
	'title'      => __( 'Core Header', 'accountra' ),
	'categories' => array( 'accountra-basic' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"15px"}}},"layout":{"contentSize":"1140px"}} -->
            <div class="wp-block-group" style="padding-top:10px;padding-bottom:15px"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"right":"10px"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-center" style="padding-right:10px"><!-- wp:column {"verticalAlignment":"center","layout":{"contentSize":""}} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:image {"id":54,"width":15,"height":15,"sizeSlug":"full","linkDestination":"none","className":"accountra-margin-top-n10"} -->
            <figure class="wp-block-image size-full is-resized accountra-margin-top-n10"><img src="' . esc_url( ACCOUNTRA_URI ) . 'assets/img/icon-clock.webp" alt="" class="wp-image-54" width="15" height="15"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"accountra_secondary","className":"accountra-margin-left-n10"} -->
            <p class="accountra-margin-left-n10 has-accountra-secondary-color has-text-color" style="font-style:normal;font-weight:300">Opening : Mon-Fri 08:00 - 17:00</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group --></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:social-links {"iconColor":"accountra_secondary","iconColorValue":"#FFFFFF","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":{"top":"20px","left":"20px"}}}} -->
            <ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->
            
            <!-- wp:social-link {"url":"#","service":"twitter"} /-->
            
            <!-- wp:social-link {"url":"#","service":"pinterest"} /-->
            
            <!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
            <!-- /wp:social-links --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns --></div>
            <!-- /wp:group -->
            
            <!-- wp:group {"layout":{"contentSize":"1140px"}} -->
            <div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"20px","right":"25px","bottom":"20px","left":"25px"}},"color":{"background":"#9494946e"},"border":{"radius":"5px"}}} -->
            <div class="wp-block-columns has-background" style="background-color:#9494946e;border-radius:5px;padding-top:20px;padding-right:25px;padding-bottom:20px;padding-left:25px"><!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:site-title {"isLink":false,"style":{"typography":{"fontSize":"28px"}}} /--></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"verticalAlignment":"center","width":"65%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:65%"><!-- wp:navigation {"layout":{"type":"flex","orientation":"horizontal","justifyContent":"center"},"style":{"spacing":{"blockGap":"40px"}}} -->
            <!-- wp:navigation-link {"label":"Home","url":"#","kind":"custom","isTopLevelLink":true} /-->
            
            <!-- wp:navigation-link {"label":"About Us","url":"#","kind":"custom","isTopLevelLink":true} /-->
            
            <!-- wp:navigation-link {"label":"Services","url":"#","kind":"custom","isTopLevelLink":true} /-->
            
            <!-- wp:navigation-submenu {"label":"Pages","url":"#","kind":"custom","isTopLevelItem":true} -->
            <!-- wp:navigation-link {"label":"Cases","url":"#","kind":"custom","isTopLevelLink":false} /-->
            
            <!-- wp:navigation-link {"label":"Pricing","url":"#","kind":"custom","isTopLevelLink":false} /-->
            
            <!-- wp:navigation-link {"label":"FAQ","url":"#","kind":"custom","isTopLevelLink":false} /-->
            <!-- /wp:navigation-submenu -->
            
            <!-- wp:navigation-submenu {"label":"Blog","url":"#","kind":"custom","isTopLevelItem":true} -->
            <!-- wp:navigation-link {"label":"Blog","url":"#","kind":"custom","isTopLevelLink":false} /-->
            
            <!-- wp:navigation-link {"label":"Single Blog","url":"#","kind":"custom","isTopLevelLink":false} /-->
            <!-- /wp:navigation-submenu -->
            
            <!-- wp:navigation-link {"label":"Contact","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- /wp:navigation --></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"width":"15%"} -->
            <div class="wp-block-column" style="flex-basis:15%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"12px","bottom":"12px","left":"30px","right":"30px"}},"border":{"radius":"5px"},"typography":{"fontSize":"14px"}},"className":"is-style-custombuttonfill  is-style-custombuttonone","fontFamily":"helvetica-arial"} -->
            <div class="wp-block-button has-custom-font-size is-style-custombuttonfill is-style-custombuttonone has-helvetica-arial-font-family" style="font-size:14px"><a class="wp-block-button__link" href="#" style="border-radius:5px;padding-top:12px;padding-right:30px;padding-bottom:12px;padding-left:30px">CALL US</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns --></div>
            <!-- /wp:group -->',
);
