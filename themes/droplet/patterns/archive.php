<?php
/**
 * Title: Archive
 * Slug: droplet/archive
 * Categories: droplet, archive
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri().'/assets/img/banner.jpg' ); ?>","id":6,"dimRatio":60,"focalPoint":{"x":0.5,"y":0.5},"minHeight":200,"align":"full"} -->
<div class="wp-block-cover alignfull" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-6" alt="" src="<?php echo esc_url( get_template_directory_uri().'/assets/img/banner.jpg' ); ?>" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:query-title {"type":"archive","textAlign":"left","style":{"typography":{"letterSpacing":"1px"}},"level":2,"textColor":"white","fontSize":"huge"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","right":"20px","bottom":"40px","left":"60px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:60px;padding-right:20px;padding-bottom:40px;padding-left:60px"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:query {"queryId":28,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"top":"15px","right":"15px","bottom":"15px","left":"15px"}},"color":{"background":"#f8f8f8"}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center has-background" style="background-color:#f8f8f8;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:post-featured-image {"isLink":true} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:post-title {"level":4,"isLink":true,"fontSize":"large"} /-->

<!-- wp:post-excerpt /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"fontSize":"small"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"fontSize":"small"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"typography":{"textTransform":"uppercase"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="text-transform:uppercase"><!-- wp:post-navigation-link {"type":"previous"} /-->

<!-- wp:post-navigation-link /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}},"color":{"background":"#f8f8f8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#f8f8f8;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|primary","width":"2px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:2px"><!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"1px"},"spacing":{"margin":{"bottom":"10px"}}}} -->
<h3 style="margin-bottom:10px;letter-spacing:1px"><?php esc_html_e( 'Search', 'droplet' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}},"color":{"background":"#f8f8f8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#f8f8f8;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|primary","width":"2px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:2px"><!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"1px"},"spacing":{"margin":{"bottom":"10px"}}}} -->
<h3 style="margin-bottom:10px;letter-spacing:1px"><?php esc_html_e( 'Popular Posts', 'droplet' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":38,"query":{"perPage":"3","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"18%"} -->
<div class="wp-block-column" style="flex-basis:18%"><!-- wp:post-featured-image {"isLink":true} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"82%"} -->
<div class="wp-block-column" style="flex-basis:82%"><!-- wp:post-title {"level":6,"isLink":true} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"style":{"spacing":{"margin":{"top":"5px","right":"0px","bottom":"0px","left":"0px"}}},"className":"truncate-line"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}},"color":{"background":"#f8f8f8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#f8f8f8;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|primary","width":"2px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:2px"><!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"1px"},"spacing":{"margin":{"bottom":"10px"}}}} -->
<h3 style="margin-bottom:10px;letter-spacing:1px"><?php esc_html_e( 'Categories', 'droplet' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:categories {"showPostCounts":true,"showOnlyTopLevel":true,"className":"sidebar-meta-list"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}},"color":{"background":"#f8f8f8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#f8f8f8;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|primary","width":"2px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:2px"><!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"1px"},"spacing":{"margin":{"bottom":"10px"}}}} -->
<h3 style="margin-bottom:10px;letter-spacing:1px"><?php esc_html_e( 'Archives', 'droplet' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:archives {"className":"sidebar-meta-list"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}},"color":{"background":"#f8f8f8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#f8f8f8;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|primary","width":"2px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:2px"><!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"1px"},"spacing":{"margin":{"bottom":"10px"}}}} -->
<h3 style="margin-bottom:10px;letter-spacing:1px"><?php esc_html_e( 'Tags', 'droplet' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:tag-cloud {"showTagCounts":true,"className":"is-style-outline"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->