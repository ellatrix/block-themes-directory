<?php
 /**
  * Title: Featured Post
  * Slug: catch-bells/featured-post
  * Categories: catch-bells, featured
  */
?>

<!-- wp:group {"align":"full","className":"wp-block-section featured-post-section"} -->
<div class="wp-block-group alignfull wp-block-section featured-post-section"><!-- wp:group {"align":"wide","className":"section-heading","layout":{"inherit":true}} -->
<div class="wp-block-group alignwide section-heading"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","orientation":"horizontal"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"className":"section-title"} -->
<h2 class="section-title"><?php esc_html_e ( 'Featured Posts', 'catch-bells' ) ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-catch-bells-button"} -->
<div class="wp-block-button is-style-catch-bells-button"><a class="wp-block-button__link"><?php esc_html_e ( 'Read All', 'catch-bells' ) ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":78,"query":{"perPage":"2","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":{"category":[]}},"displayLayout":{"type":"flex","columns":2},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:group {"layout":{"inherit":false}} -->
<div class="wp-block-group"><!-- wp:post-featured-image /-->

<!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt {"moreText":"read more"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
