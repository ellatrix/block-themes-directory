<?php
/**
 *
 * Adds general patterns.
 *
 * @package Categorical
 */

function categorical_register_general_patterns() {

	register_block_pattern(
		'categorical/wide-quote-with-image',
		array(
			'title'         => esc_html__( 'Wide quote with image', 'categorical' ),
			'categories'    => array( 'categorical-general' ),
			'blockTypes'    => array( 'core/quote', 'core/media-text' ),
			'viewportWidth' => 1200,
			'content'       => '<!-- wp:media-text {"mediaPosition":"right","mediaLink":"' . esc_url( get_theme_file_uri( 'assets/images/amelia.jpg' ) ) . '","mediaType":"image","mediaWidth":40,"mediaSizeSlug":"full","imageFill":false,"backgroundColor":"accent","textColor":"bg","className":"is-style-inner-frame"} -->
<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-style-inner-frame has-bg-color has-accent-background-color has-text-color has-background" style="grid-template-columns:auto 40%"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( 'assets/images/amelia.jpg' ) ) . '" alt="" class=""/></figure><div class="wp-block-media-text__content"><!-- wp:quote {"className":"is-style-quotation-marks","fontSize":"large"} -->
<blockquote class="wp-block-quote is-style-quotation-marks has-large-font-size"><p>The most difficult thing is the decision to act, the rest is merely tenacity. The fears are paper tigers. You can do anything you decide to do. You can act to change and control your life; and the procedure, the process is its own reward.</p><cite>Amelia Earhart</cite></blockquote>
<!-- /wp:quote --></div></div>
<!-- /wp:media-text -->'
		)
	);

	register_block_pattern(
		'categorical/wide-cover-with-quote',
		array(
			'title'         => esc_html__( 'Wide cover with quote', 'categorical' ),
			'categories'    => array( 'categorical-general' ),
			'blockTypes'    => array( 'core/quote', 'core/cover' ),
			'viewportWidth' => 1200,
			'content'       => '<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'assets/images/lake-trees.jpg' ) ) . '","dimRatio":80,"gradient":"vertical-transparent-fade-dark","contentPosition":"bottom center","align":"wide"} -->
<div class="wp-block-cover alignwide has-custom-content-position is-position-bottom-center"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient has-vertical-transparent-fade-dark-gradient-background"></span><img class="wp-block-cover__image-background" alt="" src="' . esc_url( get_theme_file_uri( 'assets/images/lake-trees.jpg' ) ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:quote {"className":"is-style-quotation-start","fontSize":"large"} -->
<blockquote class="wp-block-quote is-style-quotation-start has-large-font-size"><p>If you cannot do great things, do small things in a great way.</p><cite>- Napoleon Hill</cite></blockquote>
<!-- /wp:quote --></div></div>
<!-- /wp:cover -->'
		)
	);

	register_block_pattern(
		'categorical/full-cover-with-heading',
		array(
			'title'         => esc_html__( 'Full width cover with heading', 'categorical' ),
			'categories'    => array( 'categorical-general' ),
			'blockTypes'    => array( 'core/cover' ),
			'viewportWidth' => 1200,
			'content'       => '<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'assets/images/cityscape.jpg' ) ) . '","dimRatio":80,"minHeight":700,"gradient":"vertical-transparent-fade-dark","contentPosition":"bottom center","align":"full"} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-center" style="min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient has-vertical-transparent-fade-dark-gradient-background"></span><img class="wp-block-cover__image-background" alt="" src="' . esc_url( get_theme_file_uri( 'assets/images/cityscape.jpg' ) ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","fontSize":"gigantic"} -->
<h2 class="has-text-align-center has-gigantic-font-size">This is a Large Heading within a Cover Block</h2>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->'
		)
	);

	register_block_pattern(
		'categorical/fixed-cover-inverted-text',
		array(
			'title'         => esc_html__( 'Fixed cover and inverted text', 'categorical' ),
			'description'   => esc_html__( 'A full width fixed cover block, preceeded and followed by white text on a dark background.', 'categorical' ),
			'categories'    => array( 'categorical-general' ),
			'blockTypes'    => array( 'core/cover' ),
			'viewportWidth' => 1200,
			'content'       => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"3em","bottom":"3em"},"margin":{"top":"0px"}}},"backgroundColor":"fg","textColor":"bg","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-bg-color has-fg-background-color has-text-color has-background" style="margin-top:0px;padding-top:3em;padding-bottom:3em"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit torquent, metus porta primis dapibus ultrices imperdiet venenatis vivamus elementum, mauris inceptos nec ante nunc platea bibendum. Etiam aliquet fringilla netus natoque nec aliquam ullamcorper commodo, porta libero duis facilisis nunc quis risus donec, placerat nam penatibus nullam ultrices posuere aenean. Torquent ultrices nibh neque scelerisque a varius quisque ad eleifend montes per, quam feugiat vulputate rhoncus tellus sapien et egestas volutpat pellentesque.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Dui interdum potenti lacus consequat non varius fermentum, eget elementum suspendisse ultrices sodales turpis, condimentum morbi augue venenatis malesuada porttitor. Metus pharetra netus malesuada consequat dui erat, at felis vestibulum condimentum varius et, convallis vehicula cum posuere urna. Morbi massa dis mollis sed vehicula leo augue cras parturient habitasse, et torquent duis diam litora aliquam condimentum eget.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'assets/images/cityscape.jpg' ) ) . '","hasParallax":true,"dimRatio":0,"minHeight":700,"isDark":false,"align":"full","className":"is-style-zero-top-margin"} -->
<div class="wp-block-cover alignfull is-light has-parallax is-style-zero-top-margin" style="background-image:url(' . esc_url( get_theme_file_uri( 'assets/images/cityscape.jpg' ) ) . ');min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"3em","bottom":"3em"},"margin":{"top":"0px"}}},"backgroundColor":"fg","textColor":"bg","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-bg-color has-fg-background-color has-text-color has-background" style="margin-top:0px;padding-top:3em;padding-bottom:3em"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing, elit porttitor turpis metus augue mus, justo iaculis ad posuere convallis. Neque posuere iaculis eget varius vehicula sed odio sapien mauris, egestas nec imperdiet auctor lacinia consequat inceptos quis magnis, aenean suscipit vivamus sem viverra habitasse non lobortis. Primis mollis ante nunc in diam pulvinar faucibus lacinia interdum erat, risus eros magna malesuada curabitur enim hac aliquam donec taciti, sodales augue auctor natoque nibh libero platea sed a.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Potenti parturient sed ut fermentum porttitor pellentesque imperdiet id per purus mauris, nam venenatis facilisi torquent metus penatibus urna interdum netus. Sapien aenean pulvinar faucibus sollicitudin turpis non, lobortis montes dapibus viverra feugiat vitae, ultricies arcu nec diam proin. Lectus enim sociis ornare torquent in feugiat porttitor netus habitasse, suspendisse maecenas mattis class tempor facilisi ullamcorper.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->'
		)
	);

	register_block_pattern(
		'categorical/wide-columns-fixed-cover',
		array(
			'title'         => esc_html__( 'Wide columns with text and fixed cover', 'categorical' ),
			'categories'    => array( 'categorical-general' ),
			'blockTypes'    => array( 'core/cover', 'core/columns' ),
			'viewportWidth' => 1200,
			'content'       => '<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, euismod mollis aptent varius nascetur proin accumsan, magna platea purus ac felis pellentesque. Aliquam dignissim lacus varius primis scelerisque potenti porttitor lectus, justo laoreet urna odio leo vitae sapien vel, erat duis etiam malesuada quisque enim nulla.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Volutpat torquent nam non platea mi elementum pretium tristique fringilla, porttitor nec libero a montes fusce quisque cras in, velit varius nostra mauris odio erat molestie luctus. Taciti sagittis ante pretium ornare at vitae convallis sed, cubilia cras per primis porttitor dignissim nascetur, class morbi fringilla egestas pellentesque consequat urna.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Nibh aliquam ante nam orci nulla augue sodales, justo eleifend morbi mollis ornare quisque magna sociosqu, ultrices lacus massa inceptos tortor sollicitudin. Orci at penatibus netus senectus feugiat platea sed ante praesent mus, nec diam nascetur massa primis mattis eros inceptos urna vivamus, porttitor quam euismod ullamcorper pretium vulputate fringilla purus egestas.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Vel dis netus habitasse magna id sollicitudin fringilla senectus, molestie suscipit maecenas hendrerit nisi magnis faucibus, blandit eu sociosqu potenti orci nunc sapien. Dis ultricies non primis laoreet purus duis viverra sodales, vel praesent interdum donec fames montes senectus convallis lobortis, porta id sagittis litora porttitor placerat rhoncus.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'assets/images/cars.jpg' ) ) . '","hasParallax":true,"dimRatio":20,"overlayColor":"fg","minHeight":600,"isDark":false} -->
<div class="wp-block-cover is-light has-parallax" style="background-image:url(' . esc_url( get_theme_file_uri( 'assets/images/cars.jpg' ) ) . ');min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-fg-background-color has-background-dim-20 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","textColor":"bg","fontSize":"large"} -->
<h2 class="has-text-align-center has-bg-color has-text-color has-large-font-size">This is a heading over a fixed cover</h2>
<!-- /wp:heading --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->'
		)
	);

}
add_action( 'init', 'categorical_register_general_patterns' );
