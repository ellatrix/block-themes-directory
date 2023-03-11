<?php
 /**
  * Title: Contact
  * Slug: catch-bells/contact
  * Categories: catch-bells, featured
  */
?>

<!-- wp:group {"align":"full","className":"wp-block-section contact-section","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull wp-block-section contact-section"><!-- wp:media-text {"mediaId":15024,"mediaLink":"http://localhost/catchmain/?attachment_id=15024","mediaType":"image","mediaWidth":45} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:45% auto"><figure class="wp-block-media-text__media"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/contact-image.jpg' ); ?>" alt="" class="wp-image-15024 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"className":"section-title"} -->
<h2 class="section-title"><?php esc_html_e ( 'RSVP Form', 'catch-bells' ) ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e ( 'Join us ar our wedding! We look forward to celebrating in person at a later date.', 'catch-bells' ) ?></p>
<!-- /wp:paragraph -->

<!-- wp:contact-form-7/contact-form-selector -->
<div class="wp-block-contact-form-7-contact-form-selector">[contact-form-7 title="Contact form 1"]</div>
<!-- /wp:contact-form-7/contact-form-selector --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group -->
