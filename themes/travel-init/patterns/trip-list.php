<?php

/**
 * Title: Trip Lists Section 
 * Slug: travel-init/trip-list
 * Categories: wensolutions 
 * Description: Trip listing section
 * Keywords: full site editing,
 */
?>


<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"3vw","bottom":"3vw"}}},"className":"all-trip-lists","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull all-trip-lists" style="padding-top:3vw;padding-bottom:3vw"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large"} -->
<h3 class="has-text-align-center has-large-font-size"><?php echo esc_html__( 'All Available Trip', 'travel-init' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:wptravel/trips-list {"query":{"numberOfItems":34,"orderBy":"title","order":"asc"}} /--></div>
<!-- /wp:group -->