<?php
/**
 * Collections list
 */
return array(
    'title'         => esc_html__( 'Collections list', 'taina' ),
    'categories'    => array( 'taina', 'query'),
    'blockTypes' => array( 'core/query' ),
    'viewportWidth' => 1400,
    'inserter' => true,
    'content'       => '<!-- wp:query {"queryId":4,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"list","columns":4},"layout":{"inherit":false}} -->
                      <div class="wp-block-query">
                        <!-- wp:post-template {"style":{"spacing":{"blockGap":"1em"}}} -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"left":"0px","bottom":"0px","right":"0px","top":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"background-alt","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div
                          class="wp-block-group has-background-alt-background-color has-background"
                          style="
                            margin-top: 0px;
                            margin-bottom: 0px;
                            padding-top: 0px;
                            padding-right: 0px;
                            padding-bottom: 0px;
                            padding-left: 0px;
                          "
                        >
                          <!-- wp:post-featured-image {"isLink":true,"width":"16.7vw","height":"84px","style":{"color":{"duotone":["#1e1e1e","#A0303A"]},"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /-->
                      
                          <!-- wp:post-featured-image {"isLink":true,"width":"84px","height":"84px","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /-->
                      
                          <!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"margin":{"left":"24px","right":"0px","bottom":"28px","top":"28px"}}},"fontSize":"normal"} /-->
                        </div>
                        <!-- /wp:group -->
                        <!-- /wp:post-template -->
                      
                        <!-- wp:group {"style":{"spacing":{"margin":{"top":"42px","bottom":"42px"}}}} -->
                        <div class="wp-block-group" style="margin-top: 42px; margin-bottom: 42px">
                          <!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
                          <!-- wp:query-pagination-previous /-->
                      
                          <!-- wp:query-pagination-numbers /-->
                      
                          <!-- wp:query-pagination-next /-->
                          <!-- /wp:query-pagination -->
                        </div>
                        <!-- /wp:group -->
                      </div>
                      <!-- /wp:query -->'
);
