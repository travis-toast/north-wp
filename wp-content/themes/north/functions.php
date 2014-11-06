<?php

	/* 	Load jQuery
	================================================ */	

	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	

	/* 	Clean up the <head>
	================================================ */	
	
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    
    
    
	/* 	Side bar
	================================================ */

    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }



	/* 	Featured images
	================================================ */

	add_theme_support( 'post-thumbnails' ); 




	/* 	Custom post types
	================================================ */

	function my_custom_post_hotspot() {
	  $labels = array(
	    'name'               => _x( 'Hot Spots', 'post type general name' ),
	    'singular_name'      => _x( 'Hot Spot', 'post type singular name' ),
	    'add_new'            => _x( 'Add New', 'book' ),
	    'add_new_item'       => __( 'Add New Hot Spot' ),
	    'edit_item'          => __( 'Edit Hot Spot' ),
	    'new_item'           => __( 'New Hot Spot' ),
	    'all_items'          => __( 'All Hot Spots' ),
	    'view_item'          => __( 'View Hot Spot' ),
	    'search_items'       => __( 'Search Hot Spots' ),
	    'not_found'          => __( 'No Hot Spots found' ),
	    'not_found_in_trash' => __( 'No Hot Spots found in the Trash' ), 
	    'parent_item_colon'  => '',
	    'menu_name'          => 'Hot Spots',
	  );
	  $args = array(
	    'labels'        => $labels,
	    'description'   => 'Holds our Hot Spots and Hot Spot specific data',
	    'public'        => true,
	    'menu_position' => 5,
	    'supports'      => array( 'title', 'thumbnail', 'excerpt' ),
	    'has_archive'   => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true

	  );
	  register_post_type( 'hotspot', $args ); 
	}
	add_action( 'init', 'my_custom_post_hotspot' );





?>