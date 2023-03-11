<?php
/**
 * Title: Theme Header
 * Slug: travel-init/header-pattern
 * Categories: travel-init-headers 
 * Description: A description of the pattern
 * Keywords: footer, links, copyright, keywords used in the search
 * Block Types: core/navigation,
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"0px","right":"0px"}}},"backgroundColor":"black","className":"header3","layout":{"type":"default"}} -->
<div class="wp-block-group header3 has-black-background-color has-background" style="padding-top:20px;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"10px","right":"10px"}}},"backgroundColor":"black","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-color has-black-background-color has-text-color has-background" style="padding-top:0px;padding-right:10px;padding-bottom:0px;padding-left:10px"><!-- wp:columns {"isStackedOnMobile":false} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"10%"} -->
<div class="wp-block-column" style="flex-basis:10%"><!-- wp:image {"id":379,"width":50,"height":50,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized">
    <a href="<?php echo esc_url(home_url()); ?>">
        <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/icons/logo.png" alt="" class="wp-image-379" width="50" height="50"/>
    </a>
</figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"90%","className":"travel-init-nav"} -->
<div class="wp-block-column is-vertically-aligned-center travel-init-nav" style="flex-basis:90%"><!-- wp:navigation {"ref":11,"textColor":"tertiary","backgroundColor":"black","customOverlayBackgroundColor":"#6d4b32","className":"travel-init-navigation","layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"},"style":{"spacing":{"blockGap":"0"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->