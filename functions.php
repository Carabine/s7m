<?php 
add_filter('show_admin_bar', '__return_false');
add_action('init', 'my_custom_init');
add_action('after_setup_theme', 'square_after_setup');


function square_after_setup() {
	add_theme_support('post-thumbnails');
}


function my_custom_init(){
	add_post_type_support( 'projects', 'custom-fields');
	register_post_type('projects', array(
		'labels'             => array(
			'name'               => 'Portfolio',
			'singular_name'      => 'Portfolio',
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new project',
			'edit_item'          => 'Edit portfolio',
			'new_item'           => 'New project',
			'view_item'          => 'Show portfolio',
			'search_items'       => 'Search portfolio',
			'not_found'          => 'No Portfolio items found',
			'not_found_in_trash' => 'Empty',
			'parent_item_colon'  => '',
			'menu_name'          => 'Portfolio'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 4,
		'supports'           => array('title','editor','author','thumbnail')
	) );
}

?>