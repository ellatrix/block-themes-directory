<?php
 /**
  * Title: Single Blog Layout
  * Slug: fse-study-lite/single
  * Categories: fse-study-lite, single
  */
?>
<!-- wp:group -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri( ).'/images/slider1.jpg'); ?>","id":1961,"dimRatio":50,"minHeight":200,"isDark":false} -->
    <div class="wp-block-cover is-light" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1961" alt="" src="<?php echo esc_url( get_template_directory_uri( ).'/images/slider1.jpg'); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true}} -->
    <div class="wp-block-group"><!-- wp:post-title {"style":{"typography":{"fontSize":"48px"}},"textColor":"white"} /--></div>
    <!-- /wp:group --></div></div>
    <!-- /wp:cover --></div>
    <!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"50px","right":"15px","bottom":"50px","left":"15px"}}}} -->
<div class="wp-block-group" style="padding-top:50px;padding-right:15px;padding-bottom:50px;padding-left:15px"><!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"top"} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"75%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:75%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-author {"byline":"By"} /-->

<!-- wp:post-date /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-content /-->

<!-- wp:spacer {"height":"25px"} -->
<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:post-terms {"term":"post_tag"} /-->

<!-- wp:comments-query-loop -->
<div class="wp-block-comments-query-loop"><!-- wp:comments-title /-->

<!-- wp:comment-template -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"40px"} -->
<div class="wp-block-column" style="flex-basis:40px"><!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:comment-author-name {"fontSize":"small"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:comment-date {"fontSize":"small"} /-->

<!-- wp:comment-edit-link {"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:comment-content /-->

<!-- wp:comment-reply-link {"fontSize":"small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form /--></div>
<!-- /wp:comments-query-loop --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:23%"><!-- wp:search {"label":"Search","buttonText":"Search"} /-->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"fse-study-lite-BlueGreen","fontSize":"medium"} -->
<h2 class="has-fse-study-lite-blue-green-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Categories','fse-study-lite');?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"backgroundColor":"fse-study-lite-BlueGreen","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-fse-study-lite-blue-green-color has-alpha-channel-opacity has-fse-study-lite-blue-green-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:categories {"showPostCounts":true} /-->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"fse-study-lite-BlueGreen","fontSize":"medium"} -->
<h2 class="has-fse-study-lite-blue-green-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Archives','fse-study-lite');?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"backgroundColor":"fse-study-lite-BlueGreen","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-fse-study-lite-blue-green-color has-alpha-channel-opacity has-fse-study-lite-blue-green-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:archives /-->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"fse-study-lite-BlueGreen","fontSize":"medium"} -->
<h2 class="has-fse-study-lite-blue-green-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Tags','fse-study-lite');?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"backgroundColor":"fse-study-lite-BlueGreen","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-fse-study-lite-blue-green-color has-alpha-channel-opacity has-fse-study-lite-blue-green-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:tag-cloud /-->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri( ).'/images/about-1.jpg'); ?>","id":1976,"dimRatio":50} -->
<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1976" alt="" src="<?php echo esc_url( get_template_directory_uri( ).'/images/about-1.jpg'); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"><?php esc_html_e('To know more','fse-study-lite');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link"><?php esc_html_e('Contact Us','fse-study-lite');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->