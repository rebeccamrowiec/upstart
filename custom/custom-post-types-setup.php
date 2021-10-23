<?php
// Add the custom post types here
// Register Custom Post Type
// ie.

function custom_post_type_event() {
	$labels = array(
		'name'                  => _x( 'Events', 'Post Type General Name', 'text_domain' ), //h1 on list view
		'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Events', 'text_domain' ), //name of the side menu menu
		'name_admin_bar'        => __( 'Event', 'text_domain' ), //name in the new drop down menu
		'archives'              => __( 'Events', 'text_domain' ), //when adding the archive to the main menu etc
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Events', 'text_domain' ), //link to all in the side menu
		'add_new_item'          => __( 'Add New Event', 'text_domain' ), //h1 in add new screen
		'add_new'               => __( 'Add New', 'text_domain' ), //add new in side menu
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Event', 'text_domain' ), //h1 in edit screen
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Event', 'text_domain' ), //link in top menu to view the item you are editiig
		'view_items'            => __( 'View Events', 'text_domain' ), // in admin panel when on list view the link to the archive
		'search_items'          => __( 'Search Item', 'text_domain' ), //generic
		'not_found'             => __( 'Not found', 'text_domain' ), //generic
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ), //generic
		'featured_image'        => __( 'Featured Image', 'text_domain' ),  //generic
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ), //generic
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ), //generic
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ), //generic
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ), //generic
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ), //generic
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),


	);
	$args = array(
		'label'                 => __( 'Events', 'text_domain' ),
		'description'           => __( 'Events', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'revisions', 'custom-fields', 'thumbnail', 'excerpt'),
		'show_in_rest' => true,
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 4,
		'menu_icon'             => 'dashicons-tickets-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'rewrite' => array(
			'with_front' => false,
			'slug'=>'events'
    ),
	);
	register_post_type( 'event', $args );

}
add_action( 'init', 'custom_post_type_event', 0 );
?>