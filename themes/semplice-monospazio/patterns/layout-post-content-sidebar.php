<?php
/**
 * Title: Single Post - Content-Sidebar Layout.
 * Slug: semplice-monospazio/layout-post-content-sidebar
 * Categories: semplice-monospazio-layouts
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"verticalAlignment":null,"align":"wide","className":"content-sidebar-layout"} -->
<div class="wp-block-columns alignwide content-sidebar-layout"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%">
<!-- wp:post-title {"className":"is-style-jm-web-development-fse-starter-theme-text-shadow","fontSize":"max-50","level":"1","textAlign":"left"} /-->

<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"left"},"className":"post-meta-area"} -->
<div class="wp-block-group">
	<!-- wp:post-author {"showAvatar":false} /-->
	<!-- wp:post-date /-->
	<!-- wp:post-terms {"term":"category"} /-->
	<!-- wp:post-terms {"term":"post_tag"} /-->
</div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"sizeSlug":"large"} /-->

<!-- wp:separator {"color":"secondary","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-background has-primary-background-color has-primary-color is-style-wide" />
<!-- /wp:separator -->
<!-- wp:spacer {"height":20} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:post-content {"align":"full","layout":{"inherit":true}} /-->

<!-- wp:spacer {"height":20} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group">
	<!-- wp:post-navigation-link {"showTitle":true} /-->

	<!-- wp:post-navigation-link {"type":"previous","showTitle":true} /-->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":20} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:separator {"color":"secondary","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-background has-secondary-background-color has-secondary-color is-style-wide" />
<!-- /wp:separator -->

<!-- wp:post-comments /-->
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.33%">
	<!-- wp:template-part {"slug":"sidebar","className":"site-sidebar"} /-->
</div>
</div>
<!-- /wp:column -->
<!-- /wp:columns --></div>
<!-- /wp:group -->
