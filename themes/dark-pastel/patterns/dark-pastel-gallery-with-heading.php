<?php
/**
 * Title: Gallery with heading
 * Slug: dark-pastel/gallery-with-heading
 * Categories: dark-pastel
 */
?>

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center"><?php echo __( 'Recent artwork', 'dark-pastel' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:gallery {"linkTo":"none"} -->
<figure class="wp-block-gallery has-nested-images columns-default is-cropped"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/img-placeholder.png" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/img-placeholder.png" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/img-placeholder.png" alt=""/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery -->

<!-- wp:separator {"backgroundColor":"primary","className":"is-style-narrow-ornament"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-narrow-ornament"/>
<!-- /wp:separator -->
