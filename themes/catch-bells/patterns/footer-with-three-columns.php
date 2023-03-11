<?php
 /**
  * Title: Footer With Three Columns
  * Slug: catch-bells/footer-with-three-columns
  * Categories: catch-bells, footer
  */
?>
<!-- wp:group {"align":"full","className":"footer","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull footer"><!-- wp:columns {"align":"wide","className":"upper-footer"} -->
<div class="wp-block-columns alignwide upper-footer">
	
<!-- wp:column {"className":"wp-block-widget"} -->
<div class="wp-block-column wp-block-widget"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading {"level":5,"className":"footer-title"} -->
<h5 class="footer-title"><?php esc_html_e ( 'Get in touch', 'catch-bells' ) ?></h5>
<!-- /wp:heading -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:group {"className":"wp-info-group","layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group wp-info-group"><!-- wp:image {"id":15025,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/phone.png' ); ?>" alt="" class="wp-image-15025"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><a href="#"><?php esc_html_e ( '(+880) 123 3456 7890', 'catch-bells' ) ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wp-info-group","layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group wp-info-group"><!-- wp:image {"id":15026,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/envelope.png' ); ?>" alt="" class="wp-image-15026"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><a href="#"><?php esc_html_e ( 'support@companyname.com', 'catch-bells' ) ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wp-info-group","layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group wp-info-group"><!-- wp:image {"id":15027,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/clock.png' ); ?>" alt="" class="wp-image-15027"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><a href="#"><?php esc_html_e ( 'Opening Hours: 10:00 18:00', 'catch-bells' ) ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":5,"className":"footer-title"} -->
<h5 class="footer-title"><a href="#"><?php esc_html_e ( 'Recent Posts', 'catch-bells' ) ?></a></h5>
<!-- /wp:heading -->

<!-- wp:latest-posts {"displayPostDate":true} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":5,"className":"footer-title"} -->
<h5 class="footer-title"><a href="#"><?php esc_html_e ( 'Newsletter', 'catch-bells' ) ?></a></h5>
<!-- /wp:heading -->

<!-- wp:tnp/minimal -->
<div style="padding:20px" class="wp-block-tnp-minimal">
<div>[newsletter_form type="minimal"]</div></div>
<!-- /wp:tnp/minimal --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
