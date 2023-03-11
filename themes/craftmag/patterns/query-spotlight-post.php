<?php
/**
 * Title: Spotlight Post
 * Slug: craftmag/spotlight-post
 * Categories: featured
 * Keywords: Spotlight
 * Block Types: core/query
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"80px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:80px"><!-- wp:query {"queryId":31,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"list","columns":3}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"top":"0px","left":"0px"}}}} -->
<div class="wp-block-columns alignfull"><!-- wp:column {"width":"58%"} -->
<div class="wp-block-column" style="flex-basis:58%"><!-- wp:post-featured-image {"isLink":true,"align":"wide"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"42%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:42%"><!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"13.8%","left":"13.8%"},"margin":{"top":"70px"}},"typography":{"fontSize":"97px","fontStyle":"normal","fontWeight":"700"},"color":{"text":"#e6e6e6"}},"fontFamily":"fira-sans-condensed"} -->
<p class="has-text-color has-fira-sans-condensed-font-family" style="color:#e6e6e6;margin-top:70px;padding-right:13.8%;padding-left:13.8%;font-size:97px;font-style:normal;font-weight:700">SPOTLIGHT</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"13.8%","left":"14%"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:13.8%;padding-left:14%"><!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"48px"}}} /-->

<!-- wp:post-excerpt /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->