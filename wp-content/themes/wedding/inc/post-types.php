<?php
function slider_function() {

$labels = array(
'name'                  => _x( 'Sliders', 'Post Type General Name', 'text_domain' ),
'singular_name'         => _x( 'Slider', 'Post Type Singular Name', 'text_domain' ),
'menu_name'             => __( 'Sliders', 'text_domain' ),
'name_admin_bar'        => __( 'Sliders', 'text_domain' ),
'archives'              => __( 'Item Archives', 'text_domain' ),
'attributes'            => __( 'Item Attributes', 'text_domain' ),
'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
'all_items'             => __( 'All Items', 'text_domain' ),
'add_new_item'          => __( 'Add New Item', 'text_domain' ),
'add_new'               => __( 'Add New', 'text_domain' ),
'new_item'              => __( 'New Item', 'text_domain' ),
'edit_item'             => __( 'Edit Item', 'text_domain' ),
'update_item'           => __( 'Update Item', 'text_domain' ),
'view_item'             => __( 'View Item', 'text_domain' ),
'view_items'            => __( 'View Items', 'text_domain' ),
'search_items'          => __( 'Search Item', 'text_domain' ),
'not_found'             => __( 'Not found', 'text_domain' ),
'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
'featured_image'        => __( 'Featured Image', 'text_domain' ),
'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
'items_list'            => __( 'Items list', 'text_domain' ),
'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
);
$args = array(
'label'                 => __( 'Slider', 'text_domain' ),
'description'           => __( 'Post Type Description', 'text_domain' ),
'labels'                => $labels,
'supports'              => array( 'title', 'thumbnail', 'excerpt' ),
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
'menu_icon' => 'dashicons-update'
);
register_post_type( 'slider', $args );

}
add_action( 'init', 'slider_function', 0 );

/* ABOUT US CUSTOM POST TYPE */

// Register Custom Post Type
function about_post_type() {

    $labels = array(
        'name'                  => _x( 'About Us', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'About Us', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'About Us', 'text_domain' ),
        'name_admin_bar'        => __( 'About Us', 'text_domain' ),
        'archives'              => __( 'About UsArchives', 'text_domain' ),
        'attributes'            => __( 'About UsAttributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent About Us:', 'text_domain' ),
        'all_items'             => __( 'All About Us', 'text_domain' ),
        'add_new_item'          => __( 'Add New About Us', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New About Us', 'text_domain' ),
        'edit_item'             => __( 'Edit About Us', 'text_domain' ),
        'update_item'           => __( 'Update About Us', 'text_domain' ),
        'view_item'             => __( 'View About Us', 'text_domain' ),
        'view_items'            => __( 'View About Us', 'text_domain' ),
        'search_items'          => __( 'Search About Us', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'About Us', 'text_domain' ),
        'description'           => __( 'About Us', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail', 'editor', ),
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
        'menu_icon'             => 'dashicons-id'
    );
    register_post_type( 'about_us', $args );

}
add_action( 'init', 'about_post_type', 0 );