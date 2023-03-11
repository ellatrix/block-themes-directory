<?php
/**
 * Title: Default Header
 * Slug: blocland-fse/header-default
 * Categories: header
 * Block Types: 'core/template-part/header'
 */
?>

<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"right":"10px","left":"10px","top":"20px","bottom":"20px"}},"border":{"top":{"color":"var:preset|color|foreground","width":"3px"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<header id="header" class="wp-block-group" style="border-top-color:var(--wp--preset--color--foreground);border-top-width:3px;padding-top:20px;padding-right:10px;padding-bottom:20px;padding-left:10px"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide"><!-- wp:site-title {"textAlign":"left","style":{"typography":{"textDecoration":"none"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"large-2"} /-->

        <!-- wp:navigation {"layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"blockGap":"var:preset|spacing|40"}},"fontSize":"medium"} /-->

        <!-- wp:social-links {"iconColor":"secondary","iconColorValue":"#362706","iconBackgroundColor":"light","iconBackgroundColorValue":"#E9E5D6","size":"has-normal-icon-size","className":"blocland-hide-small-devices","layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <ul class="wp-block-social-links has-normal-icon-size has-icon-color has-icon-background-color blocland-hide-small-devices"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

            <!-- wp:social-link {"url":"#","service":"instagram"} /-->

            <!-- wp:social-link {"url":"#","service":"twitter"} /--></ul>
        <!-- /wp:social-links --></div>
    <!-- /wp:group --></header>
<!-- /wp:group -->
