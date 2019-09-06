<?php

namespace IMAGA\Theme\Posttypes;

/* ========================================== */
/* Brands Post Type */
/* ========================================== */
add_action('init', function() {
  register_post_type('producten', array(
    'label'                 => __('Product', 'imaga'),
    'description'           => __('Producten', 'imaga'),
    'labels'                => array(
      'name'                => _x('Producten', 'Plural name of the post type', 'imaga'),
      'singular_name'       => _x('Product', 'Singular name of the post type', 'imaga'),
    ),
    'supports'              => array('title'),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-cart',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  ));

  register_taxonomy( 'categorie', array( 'producten' ), array(
    'labels'                     => array(
      'name'                     => _x( 'Categorieën', 'Plural name of the taxonomy', 'imaga' ),
      'singular_name'            => _x( 'Categorie', 'Singular name of the taxonomy', 'imaga' ),
    ),
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => false,
    'can_export'                 => true,
    'has_archive'                => true,
  ));
});
