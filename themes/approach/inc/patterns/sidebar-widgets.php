<?php
/**
 * Postmeta block pattern for blog and archive pages
 */
return array(
	'title'      => __( 'Sidebar Widgets', 'approach' ),
	'categories' => array( 'approach_layout' ),
	'content'    => '
<!-- wp:group {"style":{"spacing":{"padding":{"top":"50px","right":"20px","bottom":"30px","left":"20px"}},"border":{"width":"1px","style":"solid"}},"borderColor":"app_content","backgroundColor":"sidebar"} -->
<div class="wp-block-group has-border-color has-app-content-border-color has-sidebar-background-color has-background" style="border-style:solid;border-width:1px;padding-top:50px;padding-right:20px;padding-bottom:30px;padding-left:20px"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"20px"}}}} -->
<div class="wp-block-group" style="padding-bottom:20px"><!-- wp:heading {"style":{"typography":{"fontSize":"28px"}}} -->
<h2 style="font-size:28px">' . esc_html__( 'Category', 'approach' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:categories /--></div>
<!-- /wp:group -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"28px"}}} -->
<h2 style="font-size:28px">' . esc_html__( 'Archives', 'approach' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:archives /--></div>
<!-- /wp:group -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"28px"}}} -->
<h2 style="font-size:28px">' . esc_html__( 'Tags', 'approach' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:tag-cloud /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
' ,
);
