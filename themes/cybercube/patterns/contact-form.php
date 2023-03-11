<?php
/**
  * Title: Contact Form
  * Slug: cybercube/contact-form
  * Categories: page
  */
?>
<?php
register_block_pattern(
	'cybercube/contact-form',
	array(
	'title'         => __( 'Contact Form', 'cybercube' ),
	'categories' => array( 'page' ),
	'content'       => '
<!-- wp:group {"style":{"color":{"background":"#fb7d58"},"spacing":{"padding":{"top":"90px","bottom":"90px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group has-background" style="background-color:#fb7d58;padding-top:90px;padding-bottom:90px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:contact-form-7/contact-form-selector {"className":"contact-form-head"} -->
<div class="wp-block-contact-form-7-contact-form-selector contact-form-head">[contact-form-7 title="Contact form 1"]</div>
<!-- /wp:contact-form-7/contact-form-selector --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( get_theme_file_uri( 'assets/images/app4.png' ) ) . '" /></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
	)
);