<?php

return array(
    'title'         => __('Header with center menu and search icon', 'blockpress'),
    'categories'    => array('blockpress-header'),
    'blockTypes'    => array('core/template-part/header'),
    'viewportWidth' => 1280,
    'content'       => '
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"25px","bottom":"25px"}}, "color":{"background":"var(--wp--custom--color--white)","text":"var(--wp--custom--color--black)"}},"layout":{"inherit":true}} -->
        <div class="wp-block-group has-text-color has-background alignfull" style="padding-top:25px;padding-bottom:25px;background-color:var(--wp--custom--color--white);color:var(--wp--custom--color--black);">
            <!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
            <div class="wp-block-group alignwide">
                <!-- wp:site-title {"level":0} /-->

                <!-- wp:navigation {"isResponsive":true} /-->

                <!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"radius":"5px"},"color":{"text":"var(--wp--custom--color--black)"}},"className":"is-style-floating-white-search"} /-->
            </div>
            <!-- /wp:group -->
        </div>
    <!-- /wp:group -->',
);
