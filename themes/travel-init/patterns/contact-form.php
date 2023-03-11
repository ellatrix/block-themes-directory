<?php

/**
 * Title: Contact form 
 * Slug: travel-init/contactform
 * Categories: wensolutions 
 * Description: A description of the pattern
 * Keywords: full site editing,
 */
?>

<!-- wp:group {"className":"contact-from","layout":{"type":"constrained"}} -->
<div class="wp-block-group contact-from"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/hero-banner.jpg","id":427,"dimRatio":60,"minHeight":40,"minHeightUnit":"vw"} -->
<div class="wp-block-cover" style="min-height:40vw"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-427" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/hero-banner.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"fontSize":"4vw"}}} -->
<p class="has-text-align-center" style="font-size:4vw"><?php echo esc_html__( 'Are you ', 'travel-init' ); ?><br><?php echo esc_html__( 'planning', 'travel-init' ); ?><br><?php echo esc_html__( 'something', 'travel-init' ); ?><br><?php echo esc_html__( 'special?', 'travel-init' ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3} -->
<h3><?php echo esc_html__( 'Here you go...', 'travel-init' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:html -->
<div class="form-container" style="max-width: 460px;">
        <div class="travel-init-row input-container">
                <div class="travel-init-col">
                    <div class="inputfield tinit">
                        <input type="text" required="" placeholder="Name">
                    </div>
                </div>

                <div class="travel-init-col email">
                    <div class="inputfield">
                        <input type="text" required="" placeholder="Email">
                   </div>
                </div>

                <div class="travel-init-col phone">
                    <div class="inputfield">
                        <input type="text" required="" placeholder="phone">
                    </div>
                </div>

                <div class="travel-init-col">
                    <div class="inputfield tinit">
                    	<textarea rows="4" cols="60" placeholder="Your project details"></textarea>
                    </div>
                </div>
                <div class="travel-init-col button-submit">
                    <button type="submit"><?php echo esc_html__( 'Send', 'travel-init' ); ?></button>
                </div>
        </div>
    </div>
<!-- /wp:html --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->