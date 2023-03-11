<?php

/**
 * Page Gallery
 */
return array(
    'title'      => __('Gallery Section', 'bioxlog'),
    'categories' => array('pages'),
    'content'    => '
    <!-- wp:group {"layout":{"inherit":true}} -->
    <div class="wp-block-group"><!-- wp:spacer {"height":"25px"} -->
    <div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:gallery {"linkTo":"none","sizeSlug":"full"} -->
    <figure class="wp-block-gallery has-nested-images columns-default is-cropped"><!-- wp:image {"id":467,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="' .esc_url( get_template_directory_uri() ) . '/assets/images/gallery/1.jpg'.'" alt="' . esc_attr__( 'Gallery photo', 'bioxlog' ) . '" class="wp-image-467"/></figure>
    <!-- /wp:image -->

    <!-- wp:image {"id":467,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="' .esc_url( get_template_directory_uri() ) . '/assets/images/gallery/2.jpg'.'" alt="' . esc_attr__( 'Gallery photo', 'bioxlog' ) . '" class="wp-image-467"/></figure>
    <!-- /wp:image -->

    <!-- wp:image {"id":467,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="' .esc_url( get_template_directory_uri() ) . '/assets/images/gallery/3.jpg'.'" alt="' . esc_attr__( 'Gallery photo', 'bioxlog' ) . '" class="wp-image-467"/></figure>
    <!-- /wp:image -->

    <!-- wp:image {"id":466,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="' .esc_url( get_template_directory_uri() ) . '/assets/images/gallery/2.jpg'.'" alt="' . esc_attr__( 'Gallery photo', 'bioxlog' ) . '" class="wp-image-466"/></figure>
    <!-- /wp:image -->

    <!-- wp:image {"id":466,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="' .esc_url( get_template_directory_uri() ) . '/assets/images/gallery/3.jpg'.'" alt="' . esc_attr__( 'Gallery photo', 'bioxlog' ) . '" class="wp-image-466"/></figure>
    <!-- /wp:image -->

    <!-- wp:image {"id":465,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="' .esc_url( get_template_directory_uri() ) . '/assets/images/gallery/1.jpg'.'" alt="' . esc_attr__( 'Gallery photo', 'bioxlog' ) . '" class="wp-image-465"/></figure>
    <!-- /wp:image --></figure>
    <!-- /wp:gallery -->

    <!-- wp:spacer {"height":"25px"} -->
    <div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:group -->',
);
