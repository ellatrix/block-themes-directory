<?php
/**
  * Title: Blog Hero
  * Slug: cybercube/blog-hero
  * Categories: blog
  */
?>
<?php
register_block_pattern(
	'cybercube/blog-hero',
	array(
		'title'		  => __( 'Blog Hero', 'cybercube' ),
		'blockTypes'  => array( 'core/template-part/blog-hero' ),
		'categories'  => array( 'blog' ),
		'description' => _x( 'Blog Hero', 'Cover photo, headline and description', 'cybercube' ),
		'content'     => '<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'assets/images/banner.jpg' ) ) . '","dimRatio":0,"minHeight":376,"minHeightUnit":"px"} -->
			<div class="wp-block-cover" style="min-height:376px"><span aria-hidden="true" class="has-background-dim-0 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . esc_url( get_theme_file_uri( 'assets/images/banner.jpg' ) ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"contentSize":"916px"}} -->
			<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1} -->
			<h1 class="has-text-align-center">Blog</h1>
			<!-- /wp:heading -->
			
			<!-- wp:query-title {"type":"archive","textAlign":"center"} /--></div>
			<!-- /wp:group -->
			
			<!-- wp:paragraph {"align":"center","fontSize":"lead"} -->
			<p class="has-text-align-center has-lead-font-size">Bring your idea to life in no time. The prototyping solution for all your needs. For UX designers, entrepreneurs, product managers, marketers, and anyone with a great idea.</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group --></div></div>
			<!-- /wp:cover -->
			
			<!-- wp:spacer {"height":50} -->
			<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->',
	)
);
