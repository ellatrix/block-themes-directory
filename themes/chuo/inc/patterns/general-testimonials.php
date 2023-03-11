<?php
/**
 * Testimonials block pattern
 */
return array(
    'title'      => __( 'Testimonials', 'chuo' ),
    'categories' => array( 'theme', 'featured', 'columns', 'buttons' ),
    'content'    => '<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem","right":"1em","left":"1em"}}},"className":"testimonials"} -->
                    <section class="wp-block-group testimonials" style="padding-top:6rem;padding-right:1em;padding-bottom:6rem;padding-left:1em"><!-- wp:group {"layout":{"inherit":true}} -->
                    <div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":"5rem"}}} -->
                    <div class="wp-block-columns"><!-- wp:column {"width":""} -->
                    <div class="wp-block-column"></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column {"width":"70%"} -->
                    <div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"textAlign":"center","fontSize":"huge"} -->
                    <h2 class="has-text-align-center has-huge-font-size">' . wp_kses_post( __( 'Our Customer Stories', 'chuo' ) ) . '</h2>
                    <!-- /wp:heading -->
                    
                    <!-- wp:paragraph {"align":"center","textColor":"highlight","fontSize":"large"} -->
                    <p class="has-text-align-center has-highlight-color has-text-color has-large-font-size">' . wp_kses_post( __( 'Learn how companies use Chuo App to build stronger relationships and change the way they do business', 'chuo' ) ) . '</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column {"width":""} -->
                    <div class="wp-block-column"></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns -->
                    
                    <!-- wp:columns {"style":{"spacing":{"blockGap":"5rem","margin":{"top":"6rem"}}},"className":"testimonial-items"} -->
                    <div class="wp-block-columns testimonial-items" style="margin-top:6rem"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"style":{"border":{"width":"1px"}},"borderColor":"secondary"} -->
                    <div class="wp-block-group has-border-color has-secondary-border-color" style="border-width:1px"><!-- wp:image {"align":"center","width":176,"height":96,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#F20544","#FFFFFF"]}}} -->
                    <figure class="wp-block-image aligncenter size-full is-resized"><img src="' . get_template_directory_uri() . '/assets/images/companies/company-1.png" alt="' . esc_html__( 'Company Logo', 'chuo' ) . '" class="" width="176" height="96"/></figure>
                    <!-- /wp:image -->
                    
                    <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph -->
                    <p>' . wp_kses_post( __( 'We have no regrets! Chuo App impressed me on multiple levels. <strong>Our group of companies are already using the app for 2 years now</strong>. It does what it needs to do and helped our peoples productivity allowing our companies perform more and deliver more output. Very good support.', 'chuo' ) ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":2403,"width":80,"height":80,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="' . get_template_directory_uri() . '/assets/images/portraits/person-1.png" alt="Sawaka" class="wp-image-2403" width="80" height="80"/></figure>
                    <!-- /wp:image -->
                    
                    <!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"fontSize":"medium"} -->
                    <p class="has-medium-font-size" style="line-height:1"><strong>' . esc_html__( 'Sawaka Daichi', 'chuo' ) . '</strong></p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}}} -->
                    <p style="line-height:1">' . esc_html__( 'Managing Director', 'chuo' ) . '</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"style":{"border":{"width":"1px"}},"borderColor":"secondary"} -->
                    <div class="wp-block-group has-border-color has-secondary-border-color" style="border-width:1px"><!-- wp:image {"align":"center","width":151,"height":96,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#F20544","#FFFFFF"]}}} -->
                    <figure class="wp-block-image aligncenter size-full is-resized"><img src="' . get_template_directory_uri() . '/assets/images/companies/company-3.png" alt="' . esc_html__( 'Company Logo', 'chuo' ) . '" class="" width="151" height="96"/></figure>
                    <!-- /wp:image -->
                    
                    <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph -->
                    <p>' . wp_kses_post( __( 'Chuo App did not disappoint us, and continue helping us us go further. <strong>My company hs been using the app for more than 3 years now</strong>. It does what it needs to do and helped our peoples productivity allowing our companies perform more and deliver more output. One of the greatest app!', 'chuo' ) ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":2414,"width":80,"height":80,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="' . get_template_directory_uri() . '/assets/images/portraits/person-2.png" alt="Toshio" class="wp-image-2414" width="80" height="80"/></figure>
                    <!-- /wp:image -->
                    
                    <!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"fontSize":"medium"} -->
                    <p class="has-medium-font-size" style="line-height:1"><strong>' . esc_html__( 'Toshio Sato', 'chuo' ) . '</strong></p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}}} -->
                    <p style="line-height:1">' . esc_html__( 'CEO', 'chuo' ) . '</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"style":{"border":{"width":"1px"}},"borderColor":"secondary"} -->
                    <div class="wp-block-group has-border-color has-secondary-border-color" style="border-width:1px"><!-- wp:image {"align":"center","width":114,"height":96,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#F20544","#FFFFFF"]}}} -->
                    <figure class="wp-block-image aligncenter size-full is-resized"><img src="' . get_template_directory_uri() . '/assets/images/companies/company-2.png" alt="' . esc_html__( 'Company Logo', 'chuo' ) . '" class="" width="114" height="96"/></figure>
                    <!-- /wp:image -->
                    
                    <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph -->
                    <p>' . wp_kses_post( __( 'Superb Application that helps us provide the best for our employees. Chuo App offered us new workplace dynamics. <strong>Our employees are reported to perform more efficiently with the help of the App</strong>. It does what it needs to do and helped our people\'s productivity. What a marvelous invention.', 'chuo' ) ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":2415,"width":80,"height":80,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="' . get_template_directory_uri() . '/assets/images/portraits/person-3.png" alt="Erina" class="wp-image-2415" width="80" height="80"/></figure>
                    <!-- /wp:image -->
                    
                    <!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"fontSize":"medium"} -->
                    <p class="has-medium-font-size" style="line-height:1"><strong>' . esc_html__( 'Erina Tanaka', 'chuo' ) . '</strong></p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}}} -->
                    <p style="line-height:1">' . esc_html__( 'Sr Vice President', 'chuo' ) . '</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns --></div>
                    <!-- /wp:group --></section>
                    <!-- /wp:group -->',
);
