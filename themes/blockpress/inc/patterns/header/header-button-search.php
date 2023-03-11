<?php

return array(
    'title'         => __('Header with center menu, button and search icon', 'blockpress'),
    'categories'    => array('blockpress-header'),
    'blockTypes'    => array('core/template-part/header'),
    'viewportWidth' => 1280,
    'content'       => '
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"25px","bottom":"25px"}}},"layout":{"inherit":true}} -->
        <div class="wp-block-group alignfull" style="padding-top:25px;padding-bottom:25px">
            <!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
            <div class="wp-block-group alignwide">
                <!-- wp:site-title {"level":0,"className":"is-style-hideontabletdown"} /-->

                <!-- wp:navigation {"isResponsive":true} /-->

                <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","allowOrientation":false}} -->
                <div class="wp-block-group">
                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"50px"}}} -->
                    <div class="wp-block-button"><a class="wp-block-button__link" style="border-radius:50px">Download</a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons -->

                    <!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"radius":"5px"},"color":{"text":"var(--wp--custom--color--black)"}},"className":"is-style-floating-white-search"} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
    <!-- /wp:group -->',
);
