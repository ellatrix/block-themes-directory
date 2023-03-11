<?php
 /**
  * Title: Call To Action  
  * Slug: approach/call-to-action
  * Categories:approach-front-page-sections
  */
?>
<!-- wp:cover {"url":"<?php echo (esc_url( get_theme_file_uri( 'assets/images/cta.jpg' ) )); ?>","id":30,"dimRatio":70,"overlayColor":"black","focalPoint":{"x":"0.50","y":"0.55"},"style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}}} -->
<div class="wp-block-cover" style="padding-top:50px;padding-bottom:50px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-30" alt="" src="<?php echo (esc_url( get_theme_file_uri( 'assets/images/cta.jpg' ) )); ?>" style="object-position:50% 55%" data-object-fit="cover" data-object-position="50% 55%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"contentSize":"1200px"}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"50px"}},"textColor":"sidebar"} -->
<h2 class="has-text-align-center has-sidebar-color has-text-color" style="font-size:50px;font-style:normal;font-weight:700"><?php echo ( esc_html__( 'LETS TALK ABOUT YOUR PROJECTS','approach'));?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","textColor":"sidebar"} -->
<p class="has-text-align-center has-sidebar-color has-text-color"><?php echo (esc_html__('Lorem ipsum dolor sit amet, suas hinc eros has te. Ne ponderum detraxit quaerendum per.','approach'));?></p>
<!-- /wp:paragraph -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"30px"}}}} -->
<div class="wp-block-column" style="padding-top:30px"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"pink","textColor":"sidebar","style":{"spacing":{"padding":{"top":"13px","bottom":"13px","left":"30px","right":"30px"}},"border":{"radius":"10px"}},"className":"is-style-fill","fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size is-style-fill has-small-font-size"><a href="#" class="wp-block-button__link has-sidebar-color has-pink-background-color has-text-color has-background" style="border-radius:10px;padding-top:13px;padding-right:30px;padding-bottom:13px;padding-left:30px"><?php echo ( esc_html__( 'CONTACT US','approach'));?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->