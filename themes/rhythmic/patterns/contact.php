<?php
 /**
  * Title: Contact
  * Slug: Rhythmic/contact	
  * Categories: Rhythmic, featured
  */
?>
<!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/assets/images/contact.jpg' ); ?>","id":20034,"dimRatio":50,"align":"full","className":"contact-section wp-block-section"} -->
<div class="wp-block-cover alignfull contact-section wp-block-section">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span>
	<img class="wp-block-cover__image-background wp-image-20034" alt="" src="<?php echo get_parent_theme_file_uri( '/assets/images/contact.jpg' ); ?>" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"className":"section-heading"} -->
		<div class="wp-block-group section-heading">
			<!-- wp:heading -->
			<h2><?php esc_html_e('Booking','rhythmic');?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e('Well designed and well printed only for you. Bring out the diva in you. A classic that is loved by all','rhythmic');?>.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group -->
		<div class="wp-block-group">
			<!-- wp:contact-form-7/contact-form-selector {"id":22368,"title":"Contact"} -->
			<div class="wp-block-contact-form-7-contact-form-selector">[contact-form-7 id="22368" title="Contact"]</div>
			<!-- /wp:contact-form-7/contact-form-selector -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->