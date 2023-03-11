<?php
 /**
  * Title: Hero Section Two
  * Slug: gutenify-template-kit/hero-section-2
  * Categories: gutenify-template-kit
  */
?>
<!-- wp:group {"tagName":"main","className":"no-margin no-padding"} -->
<main class="wp-block-group no-margin no-padding">
    <!-- wp:group {"layout":{"inherit":true}} -->
    <div class="wp-block-group">
        <!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/images/single-header.png","id":172,"dimRatio":90,"focalPoint":{"x":"0.58","y":"0.18"},"minHeight":400,"minHeightUnit":"px","customGradient":"linear-gradient(135deg,rgb(76,15,242) 0%,rgb(155,81,224) 100%)","contentPosition":"center center","align":"full"} -->
        <div class="wp-block-cover alignfull" style="min-height:400px"><span aria-hidden="true"
                class="wp-block-cover__background has-background-dim-90 has-background-dim wp-block-cover__gradient-background has-background-gradient"
                style="background:linear-gradient(135deg,rgb(76,15,242) 0%,rgb(155,81,224) 100%)"></span><img
                class="wp-block-cover__image-background wp-image-172" alt=""
                src="<?php echo esc_url( get_template_directory_uri() );?>/images/single-header.png"
                style="object-position:58% 18%" data-object-fit="cover" data-object-position="58% 18%" />
            <div class="wp-block-cover__inner-container">
               <!-- wp:query-title {"type":"archive","textAlign":"center"} /-->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
    <!-- /wp:group -->
</main>
<!-- /wp:group -->
