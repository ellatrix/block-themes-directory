<?php
/**
 * Title: 404 - Grid Content-Sidebar Layout.
 * Slug: semplice-monospazio/layout-404-grid-sidebar
 * Categories: semplice-monospazio-404
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"verticalAlignment":null,"align":"wide","className":"content-sidebar-layout"} -->
<div class="wp-block-columns alignwide content-sidebar-layout"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%">
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
<!-- wp:latest-posts {"postsToShow":10,"displayAuthor":true,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left"} /-->
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
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.33%"><!-- wp:template-part {"slug":"sidebar","theme":"semplice-monospazio-dev","className":"site-sidebar"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
