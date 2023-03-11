<?php
/**
 * Title: Hidden 404
 * Slug: vision-fse/hidden-404
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"30px","left":"30px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:30px;padding-left:30px"><!-- wp:image {"align":"center","id":449,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-large"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/404.pn" alt="" class="wp-image-449"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":1,"align":"wide","fontSize":"large"} -->
<h1 class="alignwide has-text-align-center has-large-font-size"><?php echo esc_html__( '404', 'vision-fse' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">The page you are looking for might have been removed had its<br>name changed or is temporary unavailable.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Back Home', 'vision-fse' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->