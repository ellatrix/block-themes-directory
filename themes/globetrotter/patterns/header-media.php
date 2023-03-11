<?php
 /**
  * Title: Header Media
  * Slug: globetrotter/header-media
  * Categories: globetrotter, header
  */
?>

<!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/assets/images/header-media-bg.jpg' ); ?>","dimRatio":0,"align":"full","className":"wp-block-custom-header-media wp-block-section wp-block-no-padding"} -->
<div class="wp-block-cover alignfull wp-block-custom-header-media wp-block-section wp-block-no-padding">
   <span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo get_parent_theme_file_uri( '/assets/images/header-media-bg.jpg' ); ?>" data-object-fit="cover"/>
   <div class="wp-block-cover__inner-container">
       <!-- wp:group {"className":"social-inside-slider"} -->
   <div class="wp-block-group social-inside-slider">
      <!-- wp:social-links {"className":"is-style-logos-only","layout":{"type":"flex","orientation":"vertical"}} -->
      <ul class="wp-block-social-links is-style-logos-only">
         <!-- wp:social-link {"url":"#","service":"facebook"} /-->
         <!-- wp:social-link {"url":"#","service":"twitter"} /-->
         <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
      </ul>
      <!-- /wp:social-links -->
   </div>
   <!-- /wp:group -->
      <!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
      <div class="wp-block-group alignwide">
         <!-- wp:media-text {"mediaPosition":"right","mediaType":"image"} -->
         <div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile">
            <figure class="wp-block-media-text__media"><img src="" alt=""/></figure>
            <div class="wp-block-media-text__content">
               <!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"3px","fontStyle":"normal","fontWeight":"500"}}} -->
               <h6 style="font-style:normal;font-weight:500;text-transform:uppercase;letter-spacing:3px"><?php esc_html_e ( 'Species', 'globetrotter' ) ?></h6>
               <!-- /wp:heading -->
               <!-- wp:heading {"style":{"typography":{"lineHeight":"1.2","textTransform":"uppercase"}},"fontSize":"Colossal"} -->
               <h2 class="has-colossal-font-size" style="line-height:1.2;text-transform:uppercase"><?php esc_html_e ( 'The World', 'globetrotter' ) ?><br><?php esc_html_e ( 'Of Big Cats', 'globetrotter' ) ?></h2>
               <!-- /wp:heading -->
               <!-- wp:paragraph -->
               <p><?php esc_html_e ( 'Agile frameworks provide robust synopsis', 'globetrotter' ) ?></p>
               <!-- /wp:paragraph -->
               <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"14px"}}}} -->
               <div class="wp-block-buttons" style="margin-top:14px">
                  <!-- wp:button -->
                  <div class="wp-block-button"><a class="wp-block-button__link"><?php esc_html_e ( 'Get Started', 'globetrotter' ) ?></a></div>
                  <!-- /wp:button -->
               </div>
               <!-- /wp:buttons -->
            </div>
         </div>
         <!-- /wp:media-text -->
      </div>
      <!-- /wp:group -->

         <!-- wp:group {"className":"wp-block-scroll-down"} -->
   <div class="wp-block-group wp-block-scroll-down">
      <!-- wp:paragraph -->
      <p><a href="#">Scroll</a></p>
      <!-- /wp:paragraph -->
   </div>
   <!-- /wp:group -->
   </div>
</div>
<!-- /wp:cover -->

