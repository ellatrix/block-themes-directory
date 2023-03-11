<?php
/**
 * Title: Image with headline and description
 * Slug: trouvelot/image-with-quote
 * Categories: images
 */
?>

<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":"40px"}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.2"}},"fontSize":"large"} -->
<p class="has-text-align-left has-large-font-size" style="line-height:1.2"><strong><?php esc_html_e( 'No human skill can reproduce on paper, the majestic beauty and radiance of Celestial objects.', 'trouvelot' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '– Étienne Léopold Trouvelot', 'trouvelot' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"28%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:28%"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/planet-jupiter.png" alt="<?php esc_attr_e( 'The planet Jupiter. Observed November 1, 1880', 'trouvelot' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->