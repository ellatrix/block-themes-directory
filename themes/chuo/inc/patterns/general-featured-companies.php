<?php
/**
 * Featured Companies block pattern
 */
return array(
    'title'      => __( 'Featured Companies', 'chuo' ),
    'categories' => array( 'theme', 'featured', 'columns', 'buttons' ),
    'content'    => '<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem","right":"1em","left":"1em"}}}} -->
                    <section class="wp-block-group" style="padding-top:6rem;padding-right:1em;padding-bottom:6rem;padding-left:1em"><!-- wp:group {"layout":{"inherit":true}} -->
                    <div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":"5rem","margin":{"bottom":"4rem"}}}} -->
                    <div class="wp-block-columns" style="margin-bottom:4rem"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:heading {"fontSize":"xlarge"} -->
                    <h2 class="has-xlarge-font-size">' . wp_kses_post( __( 'Trusted by our<br>Lifestyle Center Partners', 'chuo' ) ) . '</h2>
                    <!-- /wp:heading -->
                    
                    <!-- wp:paragraph -->
                    <p>' . wp_kses_post( __( 'With our ever-growing number of lifestyle center partners, it is sure that you will get the most out of the Chuo App. Sit amet mattis vulputate enim nulla. Sed id semper risus in hendrerit gravida rutrum quisque non. Risus nullam eget felis eget. Sed pulvinar proin gravida hendrerit.', 'chuo' ) ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"4rem"}}}} -->
                    <div class="wp-block-group" style="margin-top:4rem"><!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"textColor":"secondary","className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-secondary-color has-text-color" href="#"><strong>' . esc_html__( 'Lifestyle Centers &gt;', 'chuo' ) . '</strong></a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column {"verticalAlignment":"center"} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"style":{"spacing":{"blockGap":"4rem"}}} -->
                    <div class="wp-block-columns"><!-- wp:column {"width":""} -->
                    <div class="wp-block-column"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#F20544","#FFFFFF"]}}} -->
                    <figure class="wp-block-image aligncenter size-full"><img src="' . get_template_directory_uri() . '/assets/images/companies/company-4.png" alt="' . esc_html__( 'Company Logo', 'chuo' ) . '" class=""/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#F20544","#FFFFFF"]}}} -->
                    <figure class="wp-block-image aligncenter size-full"><img src="' . get_template_directory_uri() . '/assets/images/companies/company-10.png" alt="' . esc_html__( 'Company Logo', 'chuo' ) . '" class=""/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#F20544","#FFFFFF"]}}} -->
                    <figure class="wp-block-image aligncenter size-full"><img src="' . get_template_directory_uri() . '/assets/images/companies/company-8.png" alt="' . esc_html__( 'Company Logo', 'chuo' ) . '" class=""/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns -->
                    
                    <!-- wp:columns {"style":{"spacing":{"blockGap":"4rem"}}} -->
                    <div class="wp-block-columns"><!-- wp:column {"width":""} -->
                    <div class="wp-block-column"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#F20544","#FFFFFF"]}}} -->
                    <figure class="wp-block-image aligncenter size-full"><img src="' . get_template_directory_uri() . '/assets/images/companies/company-12.png" alt="' . esc_html__( 'Company Logo', 'chuo' ) . '" class=""/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#F20544","#FFFFFF"]}}} -->
                    <figure class="wp-block-image aligncenter size-full"><img src="' . get_template_directory_uri() . '/assets/images/companies/company-9.png" alt="' . esc_html__( 'Company Logo', 'chuo' ) . '" class=""/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#F20544","#FFFFFF"]}}} -->
                    <figure class="wp-block-image aligncenter size-full"><img src="' . get_template_directory_uri() . '/assets/images/companies/company-5.png" alt="' . esc_html__( 'Company Logo', 'chuo' ) . '" class=""/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns -->
                    
                    <!-- wp:columns {"style":{"spacing":{"blockGap":"4rem"}}} -->
                    <div class="wp-block-columns"><!-- wp:column {"width":""} -->
                    <div class="wp-block-column"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#F20544","#FFFFFF"]}}} -->
                    <figure class="wp-block-image aligncenter size-full"><img src="' . get_template_directory_uri() . '/assets/images/companies/company-11.png" alt="' . esc_html__( 'Company Logo', 'chuo' ) . '" class=""/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#F20544","#FFFFFF"]}}} -->
                    <figure class="wp-block-image aligncenter size-full"><img src="' . get_template_directory_uri() . '/assets/images/companies/company-7.png" alt="' . esc_html__( 'Company Logo', 'chuo' ) . '" class=""/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#F20544","#FFFFFF"]}}} -->
                    <figure class="wp-block-image aligncenter size-full"><img src="' . get_template_directory_uri() . '/assets/images/companies/company-6.png" alt="' . esc_html__( 'Company Logo', 'chuo' ) . '" class=""/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns --></div>
                    <!-- /wp:group --></section>
                    <!-- /wp:group -->',
);
