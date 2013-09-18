<?php

/*
function custom_post_type_init() {
  	$labels = array(
	    'name' => '',
	    'singular_name' => '',
	    'add_new' => '',
	    'add_new_item' => '',
	    'edit_item' => '',
	    'new_item' => '',
	    'all_items' => '',
	    'view_item' => '',
	    'search_items' => '',
	    'not_found' =>  '',
	    'not_found_in_trash' => '', 
	    'parent_item_colon' => '',
	    'menu_name' => ''
  	);

  	$args = array(
	    'labels' => $labels,
	    'public' => true,
	    'publicly_queryable' => true,
	    'show_ui' => true, 
	    'show_in_menu' => true, 
	    'query_var' => true,
	    'rewrite' => array( 'slug' => 'custom' ),
	    'has_archive' => true, 
    	'hierarchical' => false,
    	'menu_position' => null,
     	'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 
			'trackbacks', 'custom-fields', 'comments', 'revisions', 
			'page-attributes', 'post-formats' 
		)
  	); 

	register_post_type( 'custom', $args );
}
add_action( 'init', 'custom_post_type_init' );
*/