<?php
/**
 * Plugin Name: Case Studies CPT
 * Description: Registers the Case Studies Custom Post Type and Industry & Technology taxonomies.
 * Version: 1.0
 * Author: Antigravity
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Salir si se accede directamente
}

function custom_register_case_studies_and_taxonomies() {

    // 1. Registrar el Custom Post Type: Case Study
    $labels_cpt = array(
        'name'                  => _x( 'Case Studies', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Case Study', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Case Studies', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Case Study', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Case Study', 'textdomain' ),
        'new_item'              => __( 'New Case Study', 'textdomain' ),
        'edit_item'             => __( 'Edit Case Study', 'textdomain' ),
        'view_item'             => __( 'View Case Study', 'textdomain' ),
        'all_items'             => __( 'All Case Studies', 'textdomain' ),
        'search_items'          => __( 'Search Case Studies', 'textdomain' ),
        'not_found'             => __( 'No case studies found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No case studies found in Trash.', 'textdomain' ),
    );

    $args_cpt = array(
        'labels'             => $labels_cpt,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'case-study' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-portfolio',
        'taxonomies'         => array( 'industry', 'technology' ),
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'revisions' ),
        'show_in_rest'       => true, // Habilita Gutenberg
    );

    register_post_type( 'case_study', $args_cpt );

    // 2. Registrar Taxonomía Jerárquica: Industry
    $labels_industry = array(
        'name'              => _x( 'Industries', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Industry', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Industries', 'textdomain' ),
        'all_items'         => __( 'All Industries', 'textdomain' ),
        'parent_item'       => __( 'Parent Industry', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Industry:', 'textdomain' ),
        'edit_item'         => __( 'Edit Industry', 'textdomain' ),
        'update_item'       => __( 'Update Industry', 'textdomain' ),
        'add_new_item'      => __( 'Add New Industry', 'textdomain' ),
        'new_item_name'     => __( 'New Industry Name', 'textdomain' ),
        'menu_name'         => __( 'Industry', 'textdomain' ),
    );

    $args_industry = array(
        'hierarchical'      => true,
        'labels'            => $labels_industry,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'industry' ),
        'show_in_rest'      => true, // Habilita Gutenberg
    );

    register_taxonomy( 'industry', array( 'case_study' ), $args_industry );

    // 3. Registrar Taxonomía Jerárquica: Technology
    $labels_technology = array(
        'name'              => _x( 'Technologies', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Technology', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Technologies', 'textdomain' ),
        'all_items'         => __( 'All Technologies', 'textdomain' ),
        'parent_item'       => __( 'Parent Technology', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Technology:', 'textdomain' ),
        'edit_item'         => __( 'Edit Technology', 'textdomain' ),
        'update_item'       => __( 'Update Technology', 'textdomain' ),
        'add_new_item'      => __( 'Add New Technology', 'textdomain' ),
        'new_item_name'     => __( 'New Technology Name', 'textdomain' ),
        'menu_name'         => __( 'Technology', 'textdomain' ),
    );

    $args_technology = array(
        'hierarchical'      => true,
        'labels'            => $labels_technology,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'technology' ),
        'show_in_rest'      => true, // Habilita Gutenberg
    );

    register_taxonomy( 'technology', array( 'case_study' ), $args_technology );

    // Explicitly bind taxonomies to post type for Gutenberg REST API compatibility
    register_taxonomy_for_object_type( 'industry', 'case_study' );
    register_taxonomy_for_object_type( 'technology', 'case_study' );
}

add_action( 'init', 'custom_register_case_studies_and_taxonomies' );
