<?php
/**
 * User: Haroon
 * Date: 22/09/18
 * Time: 14:06
 */
add_action( 'init', 'create_film_taxonomies', 0 );

// create two taxonomies, genres and writers for the post
function create_film_taxonomies() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Genres', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Genre', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Genres', 'textdomain' ),
        'all_items'         => __( 'All Genres', 'textdomain' ),
        'parent_item'       => __( 'Parent Genre', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Genre:', 'textdomain' ),
        'edit_item'         => __( 'Edit Genre', 'textdomain' ),
        'update_item'       => __( 'Update Genre', 'textdomain' ),
        'add_new_item'      => __( 'Add New Genre', 'textdomain' ),
        'new_item_name'     => __( 'New Genre Name', 'textdomain' ),
        'menu_name'         => __( 'Genre', 'textdomain' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'genre' ),
    );

    register_taxonomy( 'genre', array( 'post' ), $args );

    //Crete Country Form Film Taxonomy
    $labels = array(
        'name'              => _x( 'Country', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Country', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Country', 'textdomain' ),
        'all_items'         => __( 'All Country', 'textdomain' ),
        'parent_item'       => __( 'Country', 'textdomain' ),
        'parent_item_colon' => __( 'Country:', 'textdomain' ),
        'edit_item'         => __( 'Edit Country', 'textdomain' ),
        'update_item'       => __( 'Update Country', 'textdomain' ),
        'add_new_item'      => __( 'Add New Country', 'textdomain' ),
        'new_item_name'     => __( 'New Country Name', 'textdomain' ),
        'menu_name'         => __( 'Country', 'textdomain' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'country' ),
    );

    register_taxonomy( 'country', array( 'post' ), $args );

    /*Create Taxonomy Year for post*/

    $labels = array(
        'name'              => _x( 'Year', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Year', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Year', 'textdomain' ),
        'all_items'         => __( 'All Year', 'textdomain' ),
        'parent_item'       => __( 'Year', 'textdomain' ),
        'parent_item_colon' => __( 'Year:', 'textdomain' ),
        'edit_item'         => __( 'Edit Year', 'textdomain' ),
        'update_item'       => __( 'Update Year', 'textdomain' ),
        'add_new_item'      => __( 'Add New Year', 'textdomain' ),
        'new_item_name'     => __( 'New Year', 'textdomain' ),
        'menu_name'         => __( 'Year', 'textdomain' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'year' ),
    );

    register_taxonomy( 'year', array( 'post' ), $args );

    /*Create Taxonomy Actors for post*/

    $labels = array(
        'name'              => _x( 'Actors', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Actors', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Actors', 'textdomain' ),
        'all_items'         => __( 'All Actors', 'textdomain' ),
        'parent_item'       => __( 'Actors', 'textdomain' ),
        'parent_item_colon' => __( 'Actors:', 'textdomain' ),
        'edit_item'         => __( 'Edit Actors', 'textdomain' ),
        'update_item'       => __( 'Update Actors', 'textdomain' ),
        'add_new_item'      => __( 'Add New Actors', 'textdomain' ),
        'new_item_name'     => __( 'New Actors', 'textdomain' ),
        'menu_name'         => __( 'Actors', 'textdomain' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'actors' ),
    );

    register_taxonomy( 'actors', array( 'post' ), $args );
}

// Add custom text field
