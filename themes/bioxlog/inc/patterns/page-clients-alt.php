<?php
/**
 * Clients Section
 */
return array(
    'title'      => __('Clients Alt Section', 'bioxlog'),
    'categories' => array('pages'),
    'content'    => '
    <!-- wp:group {"className":"clients-section"} -->
    <div class="wp-block-group clients-section"><!-- wp:spacer {"height":"25px"} -->
    <div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
    <div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"60px"}}} -->
    <h2 style="font-size:60px;font-style:normal;font-weight:700">'. esc_html__( 'Clients', 'bioxlog' ) .'</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"style":{"typography":{"fontSize":"20px"}}} -->
        <p style="font-size:20px">
            '. esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo tempora, corporis reiciendis temporibus cupiditate recusandae fugiat libero minima incidunt quod.', 'bioxlog' ).'
        </p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"66.66%"} -->
    <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:gallery {"columns":4,"imageCrop":false,"linkTo":"none","sizeSlug":"thumbnail"} -->
    <figure class="wp-block-gallery has-nested-images columns-4"><!-- wp:image {"id":613,"sizeSlug":"thumbnail","linkDestination":"none"} -->
    <figure class="wp-block-image size-thumbnail"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/clients/1.png" alt="' . esc_attr__( 'clients', 'bioxlog' ). '" class="wp-image-613"/></figure>
    <!-- /wp:image -->

    <!-- wp:image {"id":610,"sizeSlug":"thumbnail","linkDestination":"none"} -->
    <figure class="wp-block-image size-thumbnail"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/clients/2.png" alt="' . esc_attr__( 'clients', 'bioxlog' ). '" class="wp-image-610"/></figure>
    <!-- /wp:image -->

    <!-- wp:image {"id":615,"sizeSlug":"thumbnail","linkDestination":"none"} -->
    <figure class="wp-block-image size-thumbnail"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/clients/3.png" alt="' . esc_attr__( 'clients', 'bioxlog' ). '" class="wp-image-615"/></figure>
    <!-- /wp:image -->

    <!-- wp:image {"id":611,"sizeSlug":"thumbnail","linkDestination":"none"} -->
    <figure class="wp-block-image size-thumbnail"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/clients/4.png" alt="' . esc_attr__( 'clients', 'bioxlog' ). '" class="wp-image-611"/></figure>
    <!-- /wp:image -->

    <!-- wp:image {"id":614,"sizeSlug":"thumbnail","linkDestination":"none"} -->
    <figure class="wp-block-image size-thumbnail"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/clients/5.png" alt="' . esc_attr__( 'clients', 'bioxlog' ). '" class="wp-image-614"/></figure>
    <!-- /wp:image -->

    <!-- wp:image {"id":612,"sizeSlug":"thumbnail","linkDestination":"none"} -->
    <figure class="wp-block-image size-thumbnail"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/clients/6.png" alt="' . esc_attr__( 'clients', 'bioxlog' ). '" class="wp-image-612"/></figure>
    <!-- /wp:image -->

    <!-- wp:image {"id":616,"sizeSlug":"thumbnail","linkDestination":"none"} -->
    <figure class="wp-block-image size-thumbnail"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/clients/7.png" alt="' . esc_attr__( 'clients', 'bioxlog' ). '" class="wp-image-616"/></figure>
    <!-- /wp:image -->

    <!-- wp:image {"id":617,"sizeSlug":"thumbnail","linkDestination":"none"} -->
    <figure class="wp-block-image size-thumbnail"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/clients/8.png" alt="' . esc_attr__( 'clients', 'bioxlog' ). '" class="wp-image-617"/></figure>
    <!-- /wp:image --></figure>
    <!-- /wp:gallery --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->

    <!-- wp:spacer {"height":"25px"} -->
    <div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:group -->
    ',
);
