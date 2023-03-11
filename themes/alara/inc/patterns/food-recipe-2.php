<?php
return array(
			'title'         => __( '2 columns with image and title', 'alara' ),
			'categories'    => array( 'alara-recipes' ),
			'keywords'		=> array( 'recipe', 'food' ),
			'viewportWidth' => 1440,
			'content'       => '<!-- wp:group {"backgroundColor":"white"} -->
<div class="wp-block-group has-white-background-color has-background"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image -->
<figure class="wp-block-image"><img src="' . esc_url( ALARA_TEMPLATE_DIR_URI ) . '/assets/images/kedgeree.jpg" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading -->
<h2 id="kedgeree">Kedgeree</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size">A HEART WARMING RECIPE AT ANY TIME</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><strong>SERVES</strong> 2</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><strong>COOKING TIME</strong> 1 hour</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><strong>DIFFICULTY</strong> fairly easy</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"isStackedOnMobile":false} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3} -->
<h3 id="ingredients">Ingredients</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-line"} -->
<ul class="is-style-line"><li>1/2 pound boiled fish</li><li>1/4 pound boiled rice</li><li>2 eggs</li><li>2 ounce butter</li><li>salt, to taste</li><li>cayenne pepper, to taste</li><li>nutmeg, to taste</li></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3} -->
<h3 id="directions">Directions</h3>
<!-- /wp:heading -->

<!-- wp:list {"ordered":true} -->
<ol><li>Boil the eggs hard, break the fish into small pieces, chop the white of egg and grate the yolks.</li><li>When the boiled rice is dry, melt the butter in a stew-pan and add the rice, fish, white of egg, cayenne pepper, grated nutmeg, and salt.</li><li>Mix well and serve on a hot dish, with the grated yolks sprinkled over.</li></ol>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);
