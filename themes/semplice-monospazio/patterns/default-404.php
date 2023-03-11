<?php
/**
 * Title: Default 404 Pattern.
 * Slug: semplice-monospazio/default-404
 * Categories: semplice-monospazio-404
 * Viewport Width: 1280
 */
?>

<!-- wp:heading {"className":"is-style-jm-web-development-fse-starter-theme-text-shadow","textAlign":"center","fontSize":"max-50"} -->
<h1 class="has-text-align-center has-max-50-font-size is-style-jm-web-development-fse-starter-theme-text-shadow"><?php esc_html_e( 'Page not found', 'semplice-monospazio' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:separator {"align":"center","className":"is-style-wide"} -->
<hr class="wp-block-separator aligncenter has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->
<!-- wp:paragraph --><p><?php esc_html_e( 'The page that you are looking for isn\'t here. But that\'s okay. You can use the search form below to find what you\'re looking for or use the links to navigate to a new page.', 'semplice-monospazio' ); ?></p><!-- /wp:paragraph -->
<!-- wp:search {"label":"Search","showLabel":true,"buttonText":"Search"} /-->
<!-- wp:spacer {"height":40} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group">
<!-- wp:heading {"textAlign":"left"} -->
<h2 class="has-text-align-left"><?php esc_html_e( 'Latest posts', 'semplice-monospazio' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:latest-posts {"postsToShow":10} /-->
<!-- wp:spacer {"height":40} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:heading {"textAlign":"left"} -->
<h2 class="has-text-align-left"><?php esc_html_e( 'Pages', 'semplice-monospazio' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:page-list /-->
<!-- wp:spacer {"height":40} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:heading {"textAlign":"left"} -->
<h2 class="has-text-align-left"><?php esc_html_e( 'Categories', 'semplice-monospazio' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:categories {"showHierarchy":true} /-->
</div>
<!-- /wp:group -->
