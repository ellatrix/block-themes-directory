<?php
 /**
  * Title: Images & text block
  * Slug: aploblocks/image-text-block
  * Categories: aploblocks/imagetext
  */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"},"aplofilters":{"dsx":5,"dsy":5,"dsb":5},"hasFilters":3} -->
<div class="wp-block-group aplo-has-filters" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;--aplo-filter-string:drop-shadow(5px 5px 5px rgba(var(--aplo-fdsc), var(--aplo-fdso)))"><!-- wp:media-text {"mediaPosition":"right","mediaLink":"#","mediaType":"image","imageFill":true,"backgroundColor":"contrast","textColor":"base"} -->
<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-image-fill has-base-color has-contrast-background-color has-text-color has-background"><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30)"><!-- wp:heading -->
<h2 class=""><?php echo esc_html__('This is a heading','aploblocks'); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":5} -->
<h5 class=""><?php echo esc_html__('This is another heading','aploblocks'); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p class=""><?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat pellentesque ligula, faucibus venenatis enim congue in. Integer fermentum bibendum porta.','aploblocks'); ?></p>
<!-- /wp:paragraph --></div><figure class="wp-block-media-text__media" style="background-image:url(<?php echo esc_url( get_template_directory_uri() );?>/assets/images/26-1024x683.jpg);background-position:50% 50%"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/26-1024x683.jpg" alt=""/></figure></div>
<!-- /wp:media-text -->

<!-- wp:media-text {"mediaLink":"#","mediaType":"image","imageFill":true,"backgroundColor":"contrast","textColor":"base"} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile is-image-fill has-base-color has-contrast-background-color has-text-color has-background"><figure class="wp-block-media-text__media" style="background-image:url(<?php echo esc_url( get_template_directory_uri() );?>/assets/images/22-741x1024.jpg);background-position:50% 50%"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/22-741x1024.jpg" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30)"><!-- wp:heading -->
<h2 class=""><?php echo esc_html__('This is a heading','aploblocks'); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":5} -->
<h5 class=""><?php echo esc_html__('This is another heading','aploblocks'); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p class=""><?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat pellentesque ligula, faucibus venenatis enim congue in. Integer fermentum bibendum porta.','aploblocks'); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group -->

