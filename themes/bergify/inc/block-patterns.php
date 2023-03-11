<?php

/* Block Patterns - Removals */
remove_theme_support( 'core-block-patterns' );
add_filter( 'should_load_remote_block_patterns', '__return_false' );

/* Block Patterns - Categories */
register_block_pattern_category( 'section', array( 'label' => _x( 'Page Sections', 'Block Pattern Category', 'bergify' ) ) );
register_block_pattern_category( 'blog', array( 'label' => _x( 'Blog Sections', 'Block Pattern Category', 'bergify' ) ) );
register_block_pattern_category( 'header', array( 'label' => _x( 'Headers', 'Block Pattern Category', 'bergify' ) ) );
register_block_pattern_category( 'footer', array( 'label' => _x( 'Footers', 'Block Pattern Category', 'bergify' ) ) );
register_block_pattern_category( 'pages', array( 'label' => _x( 'Pages', 'Block Pattern Category', 'bergify' ) ) );
