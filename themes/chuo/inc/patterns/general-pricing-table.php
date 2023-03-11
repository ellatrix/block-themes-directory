<?php
/**
 * Pricing Table block pattern
 */
return array(
    'title'      => __( 'Pricing Table', 'chuo' ),
    'categories' => array( 'theme', 'featured', 'columns', 'buttons' ),
    'content'    => '<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem","right":"1em","left":"1em"}}},"className":"pricing"} -->
                    <section class="wp-block-group pricing" style="padding-top:6rem;padding-right:1em;padding-bottom:6rem;padding-left:1em"><!-- wp:group {"layout":{"inherit":true}} -->
                    <div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":"5rem"}}} -->
                    <div class="wp-block-columns"><!-- wp:column {"width":""} -->
                    <div class="wp-block-column"></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column {"width":"70%"} -->
                    <div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"textAlign":"center","fontSize":"huge"} -->
                    <h2 class="has-text-align-center has-huge-font-size">' . wp_kses_post( __( 'Get in Reasonable Price', 'chuo' ) ) . '</h2>
                    <!-- /wp:heading -->
                    
                    <!-- wp:paragraph {"align":"center","textColor":"highlight","fontSize":"large"} -->
                    <p class="has-text-align-center has-highlight-color has-text-color has-large-font-size">' . wp_kses_post( __( 'Our subscription plans unlock powerful experiences on top of the awesome experience you\'ve come to love.', 'chuo' ) ) . '</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column {"width":""} -->
                    <div class="wp-block-column"></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns -->
                    
                    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"5rem","margin":{"top":"6rem"}}},"className":"pricing-items"} -->
                    <div class="wp-block-columns are-vertically-aligned-center pricing-items" style="margin-top:6rem"><!-- wp:column {"verticalAlignment":"center"} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"border":{"width":"5px","radius":"1em"}},"borderColor":"tertiary"} -->
                    <div class="wp-block-group has-border-color has-tertiary-border-color" style="border-radius:1em;border-width:5px"><!-- wp:paragraph {"align":"center","textColor":"highlight","fontSize":"xlarge"} -->
                    <p class="has-text-align-center has-highlight-color has-text-color has-xlarge-font-size"><strong>' . wp_kses_post( __( 'Individual', 'chuo' ) ) . '</strong></p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"huge"} -->
                    <p class="has-text-align-center has-primary-color has-text-color has-huge-font-size">¥ 299</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:paragraph -->
                    <p><strong>You\'ll Get</strong></p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"1rem"}}}} -->
                    <div class="wp-block-group" style="margin-top:1rem"><!-- wp:list -->
                    <ul><li>' . wp_kses_post( __( 'Personal account', 'chuo' ) ) . '</li><li>' . wp_kses_post( __( 'End-to-end encryption', 'chuo' ) ) . '</li><li>' . wp_kses_post( __( 'Up to 2 devices sync', 'chuo' ) ) . '</li><li>' . wp_kses_post( __( 'Basic lifestyle centers', 'chuo' ) ) . '</li><li>' . wp_kses_post( __( 'Basic finance manager', 'chuo' ) ) . '</li><li>' . wp_kses_post( __( 'Email support', 'chuo' ) ) . '</li></ul>
                    <!-- /wp:list --></div>
                    <!-- /wp:group -->
                    
                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"textColor":"primary","style":{"border":{"radius":"100px"}},"className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-primary-color has-text-color" href="#" style="border-radius:100px"><strong>Get Started</strong></a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column {"verticalAlignment":"center","className":"promote"} -->
                    <div class="wp-block-column is-vertically-aligned-center promote"><!-- wp:group {"style":{"border":{"width":"5px","radius":"1em"}},"borderColor":"primary"} -->
                    <div class="wp-block-group has-border-color has-primary-border-color" style="border-radius:1em;border-width:5px"><!-- wp:paragraph {"align":"center","textColor":"highlight","fontSize":"xlarge"} -->
                    <p class="has-text-align-center has-highlight-color has-text-color has-xlarge-font-size"><strong>' . wp_kses_post( __( 'Family', 'chuo' ) ) . '</strong></p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"huge"} -->
                    <p class="has-text-align-center has-primary-color has-text-color has-huge-font-size">¥ 549</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:paragraph -->
                    <p><strong>' . wp_kses_post( __( 'You\'ll Get', 'chuo' ) ) . '</strong></p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"1rem"}}}} -->
                    <div class="wp-block-group" style="margin-top:1rem"><!-- wp:list -->
                    <ul><li>' . wp_kses_post( __( 'Up to 4 accounts', 'chuo' ) ) . '</li><li>' . wp_kses_post( __( 'End-to-end encryption', 'chuo' ) ) . '</li><li>' . wp_kses_post( __( 'Unlimited devices sync', 'chuo' ) ) . '</li><li>' . wp_kses_post( __( 'Major lifestyle centers', 'chuo' ) ) . '</li><li>' . wp_kses_post( __( 'Major finance manager', 'chuo' ) ) . '</li><li>' . wp_kses_post( __( 'Email and phone support', 'chuo' ) ) . '</li></ul>
                    <!-- /wp:list --></div>
                    <!-- /wp:group -->
                    
                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"gradient":"horizontal-primary","style":{"border":{"radius":"100px"}},"className":"is-style-fill"} -->
                    <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-horizontal-primary-gradient-background has-background" href="#" style="border-radius:100px"><strong>Get Started</strong></a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column {"verticalAlignment":"center"} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"border":{"width":"5px","radius":"1em"}},"borderColor":"tertiary"} -->
                    <div class="wp-block-group has-border-color has-tertiary-border-color" style="border-radius:1em;border-width:5px"><!-- wp:paragraph {"align":"center","textColor":"highlight","fontSize":"xlarge"} -->
                    <p class="has-text-align-center has-highlight-color has-text-color has-xlarge-font-size"><strong>' . wp_kses_post( __( 'Group', 'chuo' ) ) . '</strong></p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"huge"} -->
                    <p class="has-text-align-center has-primary-color has-text-color has-huge-font-size">¥ 999</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:paragraph -->
                    <p><strong>' . wp_kses_post( __( 'You\'ll Get', 'chuo' ) ) . '</strong></p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"1rem"}}}} -->
                    <div class="wp-block-group" style="margin-top:1rem"><!-- wp:list {"textColor":"highlight"} -->
                    <ul class="has-highlight-color has-text-color"><li>' . wp_kses_post( __( 'Up to 10 accounts', 'chuo' ) ) . '</li><li>' . wp_kses_post( __( 'End-to-end encryption', 'chuo' ) ) . '</li><li>' . wp_kses_post( __( 'Unlimited device sync', 'chuo' ) ) . '</li><li>' . wp_kses_post( __( 'All lifestyle centers', 'chuo' ) ) . '</li><li>' . wp_kses_post( __( 'All finance manager', 'chuo' ) ) . '</li><li>' . wp_kses_post( __( 'Priority support', 'chuo' ) ) . '</li></ul>
                    <!-- /wp:list --></div>
                    <!-- /wp:group -->
                    
                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"textColor":"primary","style":{"border":{"radius":"100px"}},"className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-primary-color has-text-color" href="#" style="border-radius:100px"><strong>' . esc_html__( 'Get Started', 'chuo' ) . '</strong></a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns --></div>
                    <!-- /wp:group --></section>
                    <!-- /wp:group -->',
);
