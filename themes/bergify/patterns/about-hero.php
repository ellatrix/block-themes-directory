<?php
/**
* Title: About Hero
* Slug: bergify/about-hero
* Categories: section
* Inserter: yes
* Description: Cover photo, headline, a short text and buttons
* Block Types: core/cover
*/
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/jpg/about-hero-bg.jpg' ) ); ?>","dimRatio":0,"minHeight":400,"minHeightUnit":"px","align":"full"} -->
<div class="wp-block-cover alignfull" style="min-height:400px"><span aria-hidden="true" class="has-background-dim-0 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/jpg/about-hero-bg.jpg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":false,"contentSize":"916px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="has-text-align-center" id="about-us">About us</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"lead"} -->
<p class="has-text-align-center has-lead-font-size">Bring your idea to life in no time. The prototyping solution for all your needs. For UX designers, entrepreneurs, product managers, marketers, and anyone with a great idea.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"contentJustification":"center"} -->
<div class="wp-block-buttons is-content-justification-center"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">Get started</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-white-link"} -->
<div class="wp-block-button is-style-white-link"><a class="wp-block-button__link">See how it works</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
