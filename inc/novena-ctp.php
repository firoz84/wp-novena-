

<?php 


// Register departments Post Type
function deferment_cpt() {

	$labels = array(
		'name'                  => _x( 'Departments', 'Post Type General Name', 'novena' ),
		'singular_name'         => _x( 'Department', 'Post Type Singular Name', 'novena' ),
		'menu_name'             => __( 'Department', 'novena' ),
		'name_admin_bar'        => __( 'Department', 'novena' ),
		'archives'              => __( 'Item Archives', 'novena' ),
		'attributes'            => __( 'Item Attributes', 'novena' ),
		'parent_item_colon'     => __( 'Parent Item:', 'novena' ),
		'all_items'             => __( 'All Items', 'novena' ),
		'add_new_item'          => __( 'Add New Department', 'novena' ),
		'add_new'               => __( 'Add New Department', 'novena' ),
		'new_item'              => __( 'New Item', 'novena' ),
		'edit_item'             => __( 'Edit Item', 'novena' ),
		'update_item'           => __( 'Update Item', 'novena' ),
		'view_item'             => __( 'View Item', 'novena' ),
		'view_items'            => __( 'View Items', 'novena' ),
		'search_items'          => __( 'Search Item', 'novena' ),
		'not_found'             => __( 'Not found', 'novena' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'novena' ),
		'featured_image'        => __( 'Department Image', 'novena' ),
		'set_featured_image'    => __( 'Set Department image', 'novena' ),
		'remove_featured_image' => __( 'Remove featured image', 'novena' ),
		'use_featured_image'    => __( 'Use as featured image', 'novena' ),
		'insert_into_item'      => __( 'Insert into item', 'novena' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'novena' ),
		'items_list'            => __( 'Items list', 'novena' ),
		'items_list_navigation' => __( 'Items list navigation', 'novena' ),
		'filter_items_list'     => __( 'Filter items list', 'novena' ),
	);
	$args = array(
		'label'                 => __( 'Department', 'novena' ),
		'description'           => __( 'department', 'novena' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail','excerpt'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'departments', $args );


	// doctors custom post types

	// Register Custom Post Type


	$labels = array(
		'name'                  => _x( 'Doctors', 'Post Type General Name', 'novena' ),
		'singular_name'         => _x( 'Doctor', 'Post Type Singular Name', 'novena' ),
		'menu_name'             => __( 'doctors', 'novena' ),
		'name_admin_bar'        => __( 'Doctors', 'novena' ),
		'archives'              => __( 'Item Archives', 'novena' ),
		'attributes'            => __( 'Item Attributes', 'novena' ),
		'parent_item_colon'     => __( 'Parent Item:', 'novena' ),
		'all_items'             => __( 'All Items', 'novena' ),
		'add_new_item'          => __( 'Add New Doctor', 'novena' ),
		'add_new'               => __( 'Add New doctor', 'novena' ),
		'new_item'              => __( 'New Doctor', 'novena' ),
		'edit_item'             => __( 'Edit Item', 'novena' ),
		'update_item'           => __( 'Update Item', 'novena' ),
		'view_item'             => __( 'View Item', 'novena' ),
		'view_items'            => __( 'View Items', 'novena' ),
		'search_items'          => __( 'Search Item', 'novena' ),
		'not_found'             => __( 'Not found', 'novena' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'novena' ),
		'featured_image'        => __( 'Doctor Image', 'novena' ),
		'set_featured_image'    => __( 'Set Doctor image', 'novena' ),
		'remove_featured_image' => __( 'Remove featured image', 'novena' ),
		'use_featured_image'    => __( 'Use as featured image', 'novena' ),
		'insert_into_item'      => __( 'Insert into item', 'novena' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'novena' ),
		'items_list'            => __( 'Items list', 'novena' ),
		'items_list_navigation' => __( 'Items list navigation', 'novena' ),
		'filter_items_list'     => __( 'Filter items list', 'novena' ),
	);
	$args = array(
		'label'                 => __( 'Doctor', 'novena' ),
		'description'           => __( 'Doctors', 'novena' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail','excerpt' ),
		
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'doctors', $args );
//catagory // register texomy
	register_taxonomy('catagorise','doctors',array(

		'labels'=>array(
			'name'=>__('catagorise','novena'),
			'singular_name'=>__('catagory', 'novena'),
		),
		'hierarchical' => true,
		'show_admin_column' => true
	));




}
add_action( 'init', 'deferment_cpt', 0 );