<?php
 /**
  * Title: Home
  * Slug: aploblocks/home
  * Categories: layouts
  */
?>


<!-- wp:pattern {"slug":"aploblocks/three-step-process"} /-->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:pattern {"slug":"aploblocks/section-header"} /-->

<!-- wp:pattern {"slug":"aploblocks/two-images-left-text"} /-->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"backgroundColor":"contrast","textColor":"base","aplofilters":{"dsx":3,"dsy":3,"dsb":3},"aplofiltersHover":{},"hasFilters":3} -->
<div class="wp-block-column is-vertically-aligned-center has-base-color has-contrast-background-color has-text-color has-background aplo-has-filters" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);--aplo-filter-string:drop-shadow(3px 3px 3px rgba(var(--aplo-fdsc), var(--aplo-fdso)))"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class=""><?php echo esc_html__('Happy Clients','aploblocks'); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":5} -->
<h5 class=""><?php echo esc_html__('Our number 1 priority','aploblocks'); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p class=""><?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat pellentesque ligula, faucibus venenatis enim congue in. Integer fermentum bibendum porta.','aploblocks'); ?> </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p class=""><?php echo esc_html__('Nullam et sem elit. Ut mollis mollis erat vitae finibus.','aploblocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|40"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|30"}}},"aploeffect":"fadeup","aploeffectdelay":250,"aplofilters":{"dsx":5,"dsy":5,"dsb":5},"aplotransforms":{"translateY":15},"hasFilters":3,"hasTransforms":1,"haspullstyles":1} -->
<div class="wp-block-column aploanim fadeup  aplo-has-filters aplo-has-transforms aplo-has-pull-styles" style="padding-bottom:var(--wp--preset--spacing--30);--aplo-filter-string:drop-shadow(5px 5px 5px rgba(var(--aplo-fdsc), var(--aplo-fdso)));--aplo-transform-string:translateY(15px) ;--aplo-tede:250ms"><!-- wp:group {"layout":{"type":"constrained"},"aploeffect":"fadeup","aplotransforms":{},"haspullstyles":2} -->
<div class="wp-block-group aploanim fadeup  aplo-has-pull-styles"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/22.jpg","id":2463,"dimRatio":0,"isDark":false,"aplotransforms":{"translateY":30},"hasTransforms":1,"haspullstyles":1} -->
<div class="wp-block-cover is-light aplo-has-transforms aplo-has-pull-styles" style="--aplo-transform-string:translateY(30px) "><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2463" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/22.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"aploeffect":"fadeup","aplofilters":{"dsx":5,"dsy":5,"dsb":5},"aplotransforms":{"translateY":-15},"hasFilters":3,"hasTransforms":1,"aplomarginleft":-50,"haspullstyles":1} -->
<div class="wp-block-column aploanim fadeup  aplo-has-filters aplo-has-transforms aplo-has-pull-styles" style="--aplo-filter-string:drop-shadow(5px 5px 5px rgba(var(--aplo-fdsc), var(--aplo-fdso)));--aplo-transform-string:translateY(-15px) ;margin-left:-50px"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/26.jpg","id":2461,"dimRatio":0,"isDark":false} -->
<div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2461" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/26.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"aploblocks/gallery-between-texts"} /-->
<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:pattern {"slug":"aploblocks/see-more"} /-->
<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:pattern {"slug":"aploblocks/four-columns-info"} /-->

<!-- wp:pattern {"slug":"aploblocks/banner-more"} /-->
