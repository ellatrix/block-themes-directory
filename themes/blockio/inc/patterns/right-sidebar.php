<?php
/**
 * Right Sidebar
 */
return array(
	'title'      => __( 'Right Sidebar', 'blockio' ),
	'categories' => ['blockio-patterns'] ,
	'content'    => '<!-- wp:group -->
            <div class="wp-block-group"><!-- wp:columns {"inherit":true }} -->
<div class="wp-block-columns">

    <!-- wp:column {"width":"66.66%"} -->
    <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
        <div class="wp-block-query"><!-- wp:post-template -->

            <!-- wp:post-featured-image {"isLink":true,"align":"wide"} /-->

            <!-- wp:post-title {"isLink":true} /-->

            <!-- wp:post-excerpt /-->

            <!-- wp:post-date /-->
            <!-- /wp:post-template -->

            <!-- wp:group {"className":"blog-pagination" } -->
            <div class="wp-block-group blog-pagination">
                <!-- wp:query-pagination -->
                <!-- wp:query-pagination-previous /-->

                <!-- wp:query-pagination-numbers /-->

                <!-- wp:query-pagination-next /-->
                <!-- /wp:query-pagination -->
            </div>
            <!-- /wp:group -->

        </div><!-- /wp:query -->
    </div><!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","style":{"spacing":{"margin":"0"}}} -->
    <div class="wp-block-column" style="flex-basis:33.33%;margin:0">

    </div>
    <!-- /wp:column -->


</div>
<!-- /wp:columns -->
</div>
            <!-- /wp:group -->',
       );


