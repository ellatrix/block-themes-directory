<?php
/**
* Title: Home Banner
* Slug: dablam/home-banner
* Categories: dablam-general
*/
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","className":"home-banner"} -->
<div class="wp-block-group home-banner has-secondary-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/dablam-banner.jpg'; ?>","id":808,"dimRatio":50,"focalPoint":{"x":"0.50","y":"0.20"},"minHeight":620,"customGradient":"radial-gradient(rgba(21,132,207,0.33) 0%,rgb(0,122,204) 42%)","contentPosition":"center center"} -->
<div class="wp-block-cover" style="min-height:620px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:radial-gradient(rgba(21,132,207,0.33) 0%,rgb(0,122,204) 42%)"></span><img class="wp-block-cover__image-background wp-image-808" alt="" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/dablam-banner.jpg'; ?>" style="object-position:50% 20%" data-object-fit="cover" data-object-position="50% 20%"/><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"header","theme":"dablam"} /-->

<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"82px"},"spacing":{"margin":{"bottom":"20px"}}},"textColor":"secondary"} -->
<h1 class="has-text-align-center has-secondary-color has-text-color" style="font-size:82px;margin-bottom:20px">Dablam</h1>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"28px"}},"textColor":"secondary"} -->
<h2 class="has-text-align-center has-secondary-color has-text-color" style="font-size:28px">Full Site Editing Blog Theme</h2>
<!-- /wp:heading --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->