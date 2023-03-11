<?php
return array(
			'title'         => __( 'Title, image and 2 columns', 'alara' ),
			'categories'    => array( 'alara-recipes' ),
			'keywords'		=> array( 'recipe', 'food' ),
			'viewportWidth' => 1440,
			'content'       => '<!-- wp:group {"backgroundColor":"white"} -->
<div class="wp-block-group has-white-background-color has-background"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center" id="kedgeree">Kedgeree</h2>
<!-- /wp:heading -->

<!-- wp:image {"align":"center"} -->
<div class="wp-block-image"><figure class="aligncenter"><img src="' . esc_url( ALARA_TEMPLATE_DIR_URI ) . '/assets/images/kedgeree.jpg" alt=""/></figure></div>
<!-- /wp:image -->

<!-- wp:spacer {"height":16} -->
<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"isStackedOnMobile":false} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3} -->
<h3 id="ingredients">Ingredients</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-line"} -->
<ul class="is-style-line"><li>1/2 pound boiled fish</li><li>1/4 pound boiled rice</li><li>2 eggs</li><li>2 ounce butter</li><li>salt, to taste</li><li>cayenne pepper, to taste</li><li>nutmeg, to taste</li></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"1px","backgroundColor":"primary"} -->
<div class="wp-block-column has-primary-background-color has-background" style="flex-basis:1px"></div>
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
