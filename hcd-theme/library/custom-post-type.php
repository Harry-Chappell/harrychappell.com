<?php

/*
* Creating a function to create our CPT
*/
  
function custom_post_type() {
  
	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Projects', 'Post Type General Name', 'hcd-theme' ),
			'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'hcd-theme' ),
			'menu_name'           => __( 'Projects', 'hcd-theme' ),
			'parent_item_colon'   => __( 'Parent Project', 'hcd-theme' ),
			'all_items'           => __( 'All Projects', 'hcd-theme' ),
			'view_item'           => __( 'View Project', 'hcd-theme' ),
			'add_new_item'        => __( 'Add New Project', 'hcd-theme' ),
			'add_new'             => __( 'Add New', 'hcd-theme' ),
			'edit_item'           => __( 'Edit Project', 'hcd-theme' ),
			'update_item'         => __( 'Update Project', 'hcd-theme' ),
			'search_items'        => __( 'Search Project', 'hcd-theme' ),
			'not_found'           => __( 'Not Found', 'hcd-theme' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'hcd-theme' ),
		);
		  
	// Set other options for Custom Post Type
		  
		$args = array(
			'label'               => __( 'projects', 'hcd-theme' ),
			'description'         => __( 'Project news and reviews', 'hcd-theme' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => true,
	  
		);
		  
		// Registering your Custom Post Type
		register_post_type( 'project', $args );
	  
	}
	  
	/* Hook into the 'init' action so that the function
	* Containing our post type registration is not 
	* unnecessarily executed. 
	*/
	  
	add_action( 'init', 'custom_post_type', 0 );

?>
