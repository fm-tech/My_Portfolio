<?php

function portfolio_include_custom_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_template_directory_uri() .'/js/jquery-3.2.1.min.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'portfolio_include_custom_jquery');


/**
 * Enqueue scripts and styles.
 */
function portfolio_scripts() {

    wp_enqueue_style( 'fontawesome-style', get_template_directory_uri() .'/css/font-awesome.min.css');

    wp_enqueue_style( 'portfolio-style', get_stylesheet_uri() );

	wp_enqueue_script( 'scroller-min-js', get_template_directory_uri() . '/js/jquery.scrollex.min.js', array(), '20151215', true );

    wp_enqueue_script( 'jqury-scroll-js', get_template_directory_uri() . '/js/jquery.scrolly.min.js', array(), '20151215', true );
    
	wp_enqueue_script( 'skel-min-js', get_template_directory_uri() . '/js/skel.min.js', array(), '20151215', true );

	wp_enqueue_script( 'util-js', get_template_directory_uri() . '/js/util.js', array(), '20151215', true );

	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(), '20161216', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'portfolio_scripts' );    


function portfolio_features() {
	register_nav_menu('headerMwnuLocation', 'Header Menu');
	add_theme_support('title-tag');
	
}  

add_action('after_setup_theme', 'portfolio_features');

function theme_posts_types() {
	register_post_type('workExperience', array(
		'supports' => array(
					  'title',
					  'editor'
						),
		'rewrite' => array('slug' => 'experience'),
		'has_archive' => true, 
		'public' => true,
		'exclude_from_search' => false,
		'labels' => array(
			'name' => 'Experience',
			'add_new_item' => 'Add New Job',
			'edit_item' => 'Edit Experience'

		),
		'menu_icon' => 'dashicons-media-text'
	));
	register_post_type('skillSet', array(
		'public' => true,
		'labels' => array(
			'name' => 'Skill',
			'add_new_item' => 'Add New Skill',
			'edit_item' => 'Edit Skill'

		),
		'menu_icon' => 'dashicons-pressthis'
	));
}

function show_post($path) {
	$post = get_page_by_path($path);
	$content = apply_filters('the_content', $post->post_content);
	echo $content;
}

add_action('init', 'theme_posts_types');

add_theme_support( 'post-thumbnails' );


?>

