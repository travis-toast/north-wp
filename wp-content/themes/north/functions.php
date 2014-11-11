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



	/* 	Clean up head
	================================================ */

    // remove header links
    add_action('init', 'tjnz_head_cleanup');
    function tjnz_head_cleanup() {
        remove_action( 'wp_head', 'feed_links_extra', 3 );                      // Category Feeds
        remove_action( 'wp_head', 'feed_links', 2 );                            // Post and Comment Feeds
        remove_action( 'wp_head', 'rsd_link' );                                 // EditURI link
        remove_action( 'wp_head', 'wlwmanifest_link' );                         // Windows Live Writer
        remove_action( 'wp_head', 'index_rel_link' );                           // index link
        remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );              // previous link
        remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );               // start link
        remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );   // Links for Adjacent Posts
        remove_action( 'wp_head', 'wp_generator' );                             // WP version
        if (!is_admin()) {
            wp_deregister_script('jquery');                                     // De-Register jQuery
            wp_register_script('jquery', '', '', '', true);                     // Register as 'empty', because we manually insert our script in header.php
        }
    }

    // remove WP version from RSS
    add_filter('the_generator', 'tjnz_rss_version');
    function tjnz_rss_version() { return ''; }









	/* 	Featured images
	================================================ */

	add_theme_support( 'post-thumbnails' ); 

	//new sizes
	add_image_size( 'hotspot-thumb', 213, 216, true ); // (cropped)

	add_image_size( 'cgi-image', 960 ); // (cropped)




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