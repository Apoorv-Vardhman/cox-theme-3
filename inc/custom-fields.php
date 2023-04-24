<?php

// Register Custom Post Type carousel
function create_carousel_cpt() {

    $labels = array(
        'name' => _x( 'carousels', 'Post Type General Name', 'textdomain' ),
        'singular_name' => _x( 'carousel', 'Post Type Singular Name', 'textdomain' ),
        'menu_name' => _x( 'carousels', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar' => _x( 'carousel', 'Add New on Toolbar', 'textdomain' ),
        'archives' => __( 'carousel Archives', 'textdomain' ),
        'attributes' => __( 'carousel Attributes', 'textdomain' ),
        'parent_item_colon' => __( 'Parent carousel:', 'textdomain' ),
        'all_items' => __( 'All carousels', 'textdomain' ),
        'add_new_item' => __( 'Add New carousel', 'textdomain' ),
        'add_new' => __( 'Add New', 'textdomain' ),
        'new_item' => __( 'New carousel', 'textdomain' ),
        'edit_item' => __( 'Edit carousel', 'textdomain' ),
        'update_item' => __( 'Update carousel', 'textdomain' ),
        'view_item' => __( 'View carousel', 'textdomain' ),
        'view_items' => __( 'View carousels', 'textdomain' ),
        'search_items' => __( 'Search carousel', 'textdomain' ),
        'not_found' => __( 'Not found', 'textdomain' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
        'featured_image' => __( 'Featured Image', 'textdomain' ),
        'set_featured_image' => __( 'Set featured image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
        'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
        'insert_into_item' => __( 'Insert into carousel', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this carousel', 'textdomain' ),
        'items_list' => __( 'carousels list', 'textdomain' ),
        'items_list_navigation' => __( 'carousels list navigation', 'textdomain' ),
        'filter_items_list' => __( 'Filter carousels list', 'textdomain' ),
    );
    $args = array(
        'label' => __( 'carousel', 'textdomain' ),
        'description' => __( 'cox-carousels with owl crousel', 'textdomain' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-slides',
        'supports' => array('title', 'excerpt', 'thumbnail', 'custom-fields'),
        'taxonomies' => array(),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type( 'carousel', $args );

}
add_action( 'init', 'create_carousel_cpt', 0 );

// Register Custom Post Type testimonial
function create_testimonial_cpt() {

    $labels = array(
        'name' => _x( 'testimonials', 'Post Type General Name', 'textdomain' ),
        'singular_name' => _x( 'testimonial', 'Post Type Singular Name', 'textdomain' ),
        'menu_name' => _x( 'testimonials', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar' => _x( 'testimonial', 'Add New on Toolbar', 'textdomain' ),
        'archives' => __( 'testimonial Archives', 'textdomain' ),
        'attributes' => __( 'testimonial Attributes', 'textdomain' ),
        'parent_item_colon' => __( 'Parent testimonial:', 'textdomain' ),
        'all_items' => __( 'All testimonials', 'textdomain' ),
        'add_new_item' => __( 'Add New testimonial', 'textdomain' ),
        'add_new' => __( 'Add New', 'textdomain' ),
        'new_item' => __( 'New testimonial', 'textdomain' ),
        'edit_item' => __( 'Edit testimonial', 'textdomain' ),
        'update_item' => __( 'Update testimonial', 'textdomain' ),
        'view_item' => __( 'View testimonial', 'textdomain' ),
        'view_items' => __( 'View testimonials', 'textdomain' ),
        'search_items' => __( 'Search testimonial', 'textdomain' ),
        'not_found' => __( 'Not found', 'textdomain' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
        'featured_image' => __( 'Featured Image', 'textdomain' ),
        'set_featured_image' => __( 'Set featured image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
        'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
        'insert_into_item' => __( 'Insert into testimonial', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this testimonial', 'textdomain' ),
        'items_list' => __( 'testimonials list', 'textdomain' ),
        'items_list_navigation' => __( 'testimonials list navigation', 'textdomain' ),
        'filter_items_list' => __( 'Filter testimonials list', 'textdomain' ),
    );
    $args = array(
        'label' => __( 'testimonial', 'textdomain' ),
        'description' => __( 'cox-testimonials with owl crousel', 'textdomain' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-testimonial',
        'supports' => array('title', 'excerpt', 'thumbnail', 'custom-fields'),
        'taxonomies' => array(),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type( 'testimonial', $args );

}
add_action( 'init', 'create_testimonial_cpt', 0 );

function create_home_cards_cpt() {

    $labels = array(
        'name' => _x( 'home_cards', 'Post Type General Name', 'textdomain' ),
        'singular_name' => _x( 'home_card', 'Post Type Singular Name', 'textdomain' ),
        'menu_name' => _x( 'home_cards', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar' => _x( 'home_cards', 'Add New on Toolbar', 'textdomain' ),
        'attributes' => __( 'home_card Attributes', 'textdomain' ),
        'parent_item_colon' => __( 'Parent home_card:', 'textdomain' ),
        'all_items' => __( 'All home_cards', 'textdomain' ),
        'add_new_item' => __( 'Add New home_card', 'textdomain' ),
        'add_new' => __( 'Add New', 'textdomain' ),
        'new_item' => __( 'New home_card', 'textdomain' ),
        'edit_item' => __( 'Edit home_card', 'textdomain' ),
        'update_item' => __( 'Update home_card', 'textdomain' ),
        'view_item' => __( 'View home_card', 'textdomain' ),
        'view_items' => __( 'View home_cards', 'textdomain' ),
        'search_items' => __( 'Search home_card', 'textdomain' ),
        'not_found' => __( 'Not found', 'textdomain' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
        'featured_image' => __( 'Featured Image', 'textdomain' ),
        'set_featured_image' => __( 'Set featured image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
        'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
        'insert_into_item' => __( 'Insert into testimonial', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this home_card', 'textdomain' ),
        'items_list' => __( 'home_card list', 'textdomain' ),
        'items_list_navigation' => __( 'home_card list navigation', 'textdomain' ),
        'filter_items_list' => __( 'Filter home_card list', 'textdomain' ),
    );
    $args = array(
        'label' => __( 'home_card', 'textdomain' ),
        'description' => __( 'cox-home_card', 'textdomain' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-admin-page',
        'supports' => array('title', 'excerpt', 'thumbnail', 'custom-fields'),
        'taxonomies' => array(),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type( 'home_card', $args );

}
add_action( 'init', 'create_home_cards_cpt', 0 );