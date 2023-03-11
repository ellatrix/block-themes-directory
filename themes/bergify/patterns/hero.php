<?php
/**
* Title: Hero
* Slug: bergify/hero
* Categories: section
* Inserter: yes
* Description: Header headline, picture and call-to-action buttons
* Block Types: core/cover, core/columns
*/
?>
<!-- wp:columns {"className":"hero"} -->
<div class="wp-block-columns hero"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":1,"style":{"typography":{"fontWeight":"700"}}} -->
<h1 style="font-weight:700"><strong>Increase sales,<br>not your workload.</strong></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"lead"} -->
<p class="has-lead-font-size">Bring your idea to life in no time. The prototyping solution for all your needs. For UX designers, entrepreneurs, product managers, marketers, and anyone with a great idea.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">Get started</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">See how it works <svg width="20" height="21" viewBox="0 0 20 21" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M10 18.5C12.1217 18.5 14.1566 17.6571 15.6569 16.1569C17.1571 14.6566 18 12.6217 18 10.5C18 8.37827 17.1571 6.34344 15.6569 4.84315C14.1566 3.34285 12.1217 2.5 10 2.5C7.87827 2.5 5.84344 3.34285 4.34315 4.84315C2.84285 6.34344 2 8.37827 2 10.5C2 12.6217 2.84285 14.6566 4.34315 16.1569C5.84344 17.6571 7.87827 18.5 10 18.5ZM9.555 7.668C9.4044 7.56752 9.22935 7.50981 9.04852 7.50103C8.86769 7.49224 8.68786 7.53272 8.52823 7.61813C8.3686 7.70354 8.23516 7.83068 8.14213 7.98599C8.04909 8.1413 7.99997 8.31896 8 8.5V12.5C7.99997 12.681 8.04909 12.8587 8.14213 13.014C8.23516 13.1693 8.3686 13.2965 8.52823 13.3819C8.68786 13.4673 8.86769 13.5078 9.04852 13.499C9.22935 13.4902 9.4044 13.4325 9.555 13.332L12.555 11.332C12.692 11.2407 12.8043 11.117 12.8819 10.9718C12.9596 10.8267 13.0002 10.6646 13.0002 10.5C13.0002 10.3354 12.9596 10.1733 12.8819 10.0282C12.8043 9.88304 12.692 9.75932 12.555 9.668L9.555 7.668Z" fill="currentColor"></path>
</svg>
</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/jpg/home-hero-bg.jpg' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
