<?php
/**
 * Title: Header with site title, navigation.
 * Slug: design-mode/header
 * Categories: design-mode-header
 * Block Types: core/template-part/header
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"layout":{"inherit":true},"align":"full","style":{"spacing":{"padding":{"top":"40px","bottom":"40px"},"margin":{"top":"0px"}}}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;padding-top:40px;padding-bottom:40px">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"},"align":"wide"} -->
<div class="wp-block-group alignwide">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"15px"}}} -->
<div class="wp-block-group">
<!-- wp:site-title /-->
<!-- wp:separator {"className":"is-style-default"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-default"/>
<!-- /wp:separator -->
</div>
<!-- /wp:group -->
<!-- wp:navigation {"isResponsive":true,"style":{"spacing":{"blockGap":"20px"}}} -->
<!-- wp:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
<!-- /wp:navigation -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
