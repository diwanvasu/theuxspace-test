<?php

/**
 * Registers a new post type
 * @uses $wp_post_types Inserts new post type object into the list
 *
 * @param string  Post type key, must not exceed 20 characters
 * @param array|string  See optional args description above.
 * @return object|WP_Error the registered post type object, or an error object
 */
function customPostType() 
{
	$lbl = array(
   		'name'               => __( 'Case Study', 'text-domain' ),
   		'singular_name'      => __( 'Case Study', 'text-domain' ),
   		'add_new'            => _x( 'Add New Case Study', 'text-domain', 'text-domain' ),
   		'add_new_item'       => __( 'Add New Case Study', 'text-domain' ),
   		'edit_item'          => __( 'Edit Case Study', 'text-domain' ),
   		'new_item'           => __( 'New Case Study', 'text-domain' ),
   		'view_item'          => __( 'View Case Study', 'text-domain' ),
   		'search_items'       => __( 'Search Case Study', 'text-domain' ),
   		'not_found'          => __( 'No Case Study found', 'text-domain' ),
   		'not_found_in_trash' => __( 'No Case Study found in Trash', 'text-domain' ),
   		'parent_item_colon'  => __( 'Parent Case Study:', 'text-domain' ),
   		'menu_name'          => __( 'Case Study', 'text-domain' ),
   	);
   
   	$args = array(
   		'labels'              => $lbl,
   		'hierarchical'        => true,
   		'description'         => 'description',
   		'taxonomies'          => array(),
   		'public'              => true,
   		'show_ui'             => true,
   		'show_in_menu'        => true,
   		'show_in_admin_bar'   => true,
   		'menu_position'       => null,
   		'menu_icon'           => 'dashicons-networking',
   		'show_in_nav_menus'   => true,
   		'publicly_queryable'  => true,
   		'exclude_from_search' => false,
   		'has_archive'         => true,
   		'query_var'           => true,
   		'can_export'          => true,
   		'rewrite'             => true,
   		'capability_type'     => 'post',
   		'supports'            => array(
   			'title',
            'thumbnail',
            'page-attributes',
            'excerpt'
   		),
   	);
   
   register_post_type( 'case-study', $args );   
}

add_action( 'init', 'customPostType' );
