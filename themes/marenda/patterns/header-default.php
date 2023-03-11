<?php
/**
 * Title: Default Header
 * Slug: marenda/header-default
 * Categories: header
 * Block Types: 'core/template-part/header'
 */
?>

<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"right":"10px","left":"10px","top":"20px","bottom":"20px"}},"border":{"bottom":{"width":"2px","color":"var:preset|color|primary"}}},"backgroundColor":"foreground","textColor":"text-regular","layout":{"type":"constrained"}} -->

<header id="header" class="wp-block-group has-text-regular-color has-foreground-background-color has-text-color has-background" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:2px;padding-top:20px;padding-right:10px;padding-bottom:20px;padding-left:10px">

    <!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->

    <div class="wp-block-group alignwide">

        <!-- wp:site-title {"textAlign":"left","style":{"typography":{"textDecoration":"none"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"large-2"} /-->

        <!-- wp:navigation {"textColor":"light","overlayBackgroundColor":"primary","overlayTextColor":"foreground","layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"blockGap":"var:preset|spacing|40"}},"fontSize":"medium"} /-->

    </div>

    <!-- /wp:group -->

</header>

<!-- /wp:group -->