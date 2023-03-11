<?php
 /**
  * Title: About Us
  * Slug: blockmag/about-us
  * Categories: blockmag, page
  */
?>

<!-- wp:group {"align":"full","className":"wp-block-section","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull wp-block-section">
   <!-- wp:media-text {"mediaPosition":"right","mediaLink":"<?php echo get_parent_theme_file_uri( '/assets/images/hero-content.jpg' ); ?>","mediaType":"image"} -->
   <div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile">
      <figure class="wp-block-media-text__media"><img
         src="<?php echo get_parent_theme_file_uri( '/assets/images/hero-content.jpg' ); ?>"
         alt="" /></figure>
      <div class="wp-block-media-text__content">
         <!-- wp:group {"className":"wp-block-group-heading"} -->
         <div class="wp-block-group wp-block-group-heading">
            <!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase"}}} -->
            <h6 style="text-transform:uppercase"><?php esc_html_e ( 'About Us', 'blockmag' ) ?></h6>
            <!-- /wp:heading -->
            <!-- wp:heading -->
            <h2><?php esc_html_e ( 'Fresh ideas for every business', 'blockmag' ) ?></h2>
            <!-- /wp:heading -->
         </div>
         <!-- /wp:group -->
         <!-- wp:paragraph -->
         <p><?php esc_html_e ( 'Lorem ipsum dolor sit amet, consectetur Integer pretium condimentum tristique aenean luctus mauris lorem ipsum dolor sit amet consectetur.', 'blockmag' ) ?></p>
         <!-- /wp:paragraph -->
         <!-- wp:buttons -->
         <div class="wp-block-buttons">
            <!-- wp:button -->
            <div class="wp-block-button"><a class="wp-block-button__link"><?php esc_html_e ( 'Get started', 'blockmag' ) ?></a></div>
            <!-- /wp:button -->
         </div>
         <!-- /wp:buttons -->
      </div>
   </div>
   <!-- /wp:media-text -->
</div>
<!-- /wp:group -->
