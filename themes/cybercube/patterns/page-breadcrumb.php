<?php
/**
  * Title: Page breadcrumb
  * Slug: cybercube/page-breadcrumb
  * Categories: page
  */
?>
<?php
register_block_pattern(
	'cybercube/page-breadcrumb',
	array(
		'title'		  => __( 'Page breadcrumb', 'cybercube' ),
		'categories'  => array( 'page' ),
		'description' => _x( 'Blog Hero', 'Cover photo, headline and description', 'cybercube' ),
		'content'     => '<!-- wp:cover {"customOverlayColor":"#ffe0d3","minHeight":250,"isDark":false} -->
<div class="wp-block-cover is-light" style="min-height:250px"><span aria-hidden="true" class="has-background-dim-100 wp-block-cover__gradient-background has-background-dim" style="background-color:#ffe0d3"></span><div class="wp-block-cover__inner-container"><!-- wp:post-title {"textAlign":"center","style":{"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"800"},"color":{"text":"#00070f"}}} /--></div></div>
<!-- /wp:cover -->',
	)
);