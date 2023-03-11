<?php
/**
 * Section 1 Hero content.
 */
return array(
	'title'      => __( 'Section 1 Hero', 'photology' ),
	'categories' => array( 'photology-basic' ),
	'content'    => '
            <!-- wp:group {"layout":{"inherit":false}} -->
            <div class="wp-block-group"><!-- wp:cover {"url":"' . esc_url( PHOTOLOGY_URI ) . '/assets/img/man-camera-photography-photographer-lens-reflex-camera-60417-pxhere.com.jpg","id":526,"dimRatio":80,"overlayColor":"black","focalPoint":{"x":"0.50","y":"0.00"},"minHeight":563,"contentPosition":"center center","style":{"spacing":{"padding":{"bottom":"200px"}}}} -->
            <div class="wp-block-cover" style="padding-bottom:200px;min-height:563px"><span aria-hidden="true" class="has-black-background-color has-background-dim-80 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-526" alt="" src="' . esc_url( PHOTOLOGY_URI ) . '/assets/img/man-camera-photography-photographer-lens-reflex-camera-60417-pxhere.com.jpg" style="object-position:50% 0%" data-object-fit="cover" data-object-position="50% 0%"/><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"header","theme":"photology"} /-->
            
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"160px"}}},"layout":{"wideSize":"1170px","contentSize":"1170px"}} -->
            <div class="wp-block-group" style="padding-top:160px"><!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"width":"700px"} -->
            <div class="wp-block-column" style="flex-basis:700px"><!-- wp:heading {"level":1,"style":{"typography":{"textTransform":"capitalize","fontSize":"64px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"right":"0px"}},"color":{"text":"#d1c8bb"}}} -->
            <h1 class="has-text-color" style="color:#d1c8bb;font-size:64px;font-style:normal;font-weight:500;margin-right:0px;text-transform:capitalize">Photography is the Art of Catching Memories</h1>
            <!-- /wp:heading -->
            
            <!-- wp:group {"layout":{"contentSize":"700px"}} -->
            <div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"padding":{"right":"240px"}}}} -->
            <div class="wp-block-columns" style="padding-right:240px"><!-- wp:column {"width":"95%"} -->
            <div class="wp-block-column" style="flex-basis:95%"><!-- wp:paragraph {"align":"left","style":{"color":{"text":"#c2babb"},"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"tiny"} -->
            <p class="has-text-align-left has-text-color has-tiny-font-size" style="color:#c2babb;font-style:normal;font-weight:300">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns --></div>
            <!-- /wp:group -->
            
            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"20px"}}}} -->
            <div class="wp-block-buttons" style="margin-top:20px"><!-- wp:button {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"15px","right":"40px","bottom":"15px","left":"40px"}},"color":{"background":"#916c3d"}},"className":"is-style-fill","fontFamily":"helvetica-arial"} -->
            <div class="wp-block-button is-style-fill has-helvetica-arial-font-family"><a class="wp-block-button__link has-background" style="border-radius:0px;background-color:#916c3d;padding-top:15px;padding-right:40px;padding-bottom:15px;padding-left:40px">View Portfolio</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:column -->
            
            <!-- wp:column -->
            <div class="wp-block-column"></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns --></div>
            <!-- /wp:group --></div></div>
            <!-- /wp:cover --></div>
            <!-- /wp:group -->',
);
