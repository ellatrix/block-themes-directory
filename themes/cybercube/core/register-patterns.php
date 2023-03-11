<?php
/* Block Patterns - Removals */
remove_theme_support( 'core-block-patterns' );
add_filter( 'should_load_remote_block_patterns', '__return_false' );

/* Block Patterns - Categories */
register_block_pattern_category( 'page', array( 'label' => _x( 'Page Sections', 'Block Pattern Category', 'cybercube' ) ) );
register_block_pattern_category( 'blog', array( 'label' => _x( 'Blog Sections', 'Block Pattern Category', 'cybercube' ) ) );
register_block_pattern_category( 'header', array( 'label' => _x( 'Headers', 'Block Pattern Category', 'cybercube' ) ) );
register_block_pattern_category( 'footer', array( 'label' => _x( 'Footers', 'Block Pattern Category', 'cybercube' ) ) );

/* Block Patterns - Page Sections */
require get_template_directory() . '/patterns/blog-hero.php';
require get_template_directory() . '/patterns/page-breadcrumb.php';
require get_template_directory() . '/patterns/home-slider.php';
require get_template_directory() . '/patterns/home-about.php';
require get_template_directory() . '/patterns/home-about-2.php';
require get_template_directory() . '/patterns/home-features.php';
require get_template_directory() . '/patterns/home-hero-2.php';
require get_template_directory() . '/patterns/home-pricing.php';
require get_template_directory() . '/patterns/home-team.php';
require get_template_directory() . '/patterns/home-info.php';
require get_template_directory() . '/patterns/home-counter.php';
require get_template_directory() . '/patterns/contact-form.php';
require get_template_directory() . '/patterns/home-client.php';
require get_template_directory() . '/patterns/home-blog.php';
require get_template_directory() . '/patterns/post-section.php';


/* Block Patterns - Header */
require get_template_directory() . '/patterns/header.php';
require get_template_directory() . '/patterns/header-without-button.php';

/* Block Patterns - Footer */
require get_template_directory() . '/patterns/footer.php';
?>