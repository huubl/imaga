<?php

namespace IMAGA\Theme\Posts;

add_action( 'init', __NAMESPACE__ . '\\create_post_type_employees' );
add_action( 'init', __NAMESPACE__ . '\\create_taxonomies_skills' );

/**
 * Employees Post Type
 */
function create_post_type_employees() {

  $labels = array(
    'name'                  => _x( 'Employees', 'Employees General Name', 'imaga' ),
    'singular_name'         => _x( 'Employee', 'Employee Singular Name', 'imaga' ),
  );

  $args = array(
    'label'                 => __( 'Employees', 'imaga' ),
    'description'           => __( 'Employees of IMAGA', 'imaga' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', ),
    'taxonomies'            => array( 'skills' ), // Add taxonomies
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 70, // 5 - below posts, 15 - below links, 20 - below pages, 25 - below comments, 60 below first seperator, 65 - below plugins, 70 - below users, 75 - below tools, 80 - below settings, 100 - below second seperator
    'menu_icon'             => 'dashicons-businessman',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',// or 'post'. Change when needed.
  );

  // Registering the post type
  register_post_type( 'employees', $args );
}

/*
 * Skills Taxonomy for Employees
 */
function create_taxonomies_skills() {

  $labels = array(
    'name'                       => _x( 'Skills', 'Skills General Name', 'imaga' ),
    'singular_name'              => _x( 'Skill', 'Skill Singular Name', 'imaga' ),
  );

  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => false,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => false,
  );

  // Registering the taxonomy
  register_taxonomy( 'skills', array( 'employees' ), $args );
}


/**
 * Employees Post Type
 */
function create_post_type_cases() {

  $labels = array(
    'name'                  => _x( 'Cases', 'Employees General Name', 'imaga' ),
    'singular_name'         => _x( 'Case', 'Employee Singular Name', 'imaga' ),
  );

  $args = array(
    'label'                 => __( 'Cases', 'imaga' ),
    'description'           => __( 'Cases/Success Stories of IMAGA clients', 'imaga' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', ),
    'taxonomies'            => array( 'skills' ), // Add taxonomies
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5, // 5 - below posts, 15 - below links, 20 - below pages, 25 - below comments, 60 below first seperator, 65 - below plugins, 70 - below users, 75 - below tools, 80 - below settings, 100 - below second seperator
    'menu_icon'             => 'dashicons-analytics',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',// or 'post'. Change when needed.
  );

  // Registering the post type
  register_post_type( 'cases', $args );
}
?>
