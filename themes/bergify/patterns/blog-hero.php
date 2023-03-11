<?php
/**
* Title: Blog Hero
* Slug: bergify/blog-hero
* Categories: blog
* Inserter: yes
* Description: Cover photo, headline and description
* Block Types: core/cover
*/
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/jpg/blog-hero-bg.jpg' ) ); ?>","dimRatio":0,"minHeight":376,"minHeightUnit":"px"} -->
<div class="wp-block-cover" style="min-height:376px"><span aria-hidden="true" class="has-background-dim-0 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/jpg/blog-hero-bg.jpg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"contentSize":"916px"}} -->
	<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1} -->
			<h1 class="has-text-align-center" id="blog"><?php esc_html_e( 'Blog', 'bergify' ); ?></h1>
			<!-- /wp:heading -->
			
			<!-- wp:query-title {"type":"archive","textAlign":"center"} /--></div>
			<!-- /wp:group -->
			
			<!-- wp:paragraph {"align":"center","fontSize":"lead"} -->
			<p class="has-text-align-center has-lead-font-size"><?php esc_html_e( 'Bring your idea to life in no time. The prototyping solution for all your needs. For UX designers, entrepreneurs, product managers, marketers, and anyone with a great idea.', 'bergify' ); ?></p>
		<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div></div>
<!-- /wp:cover -->
			
<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
