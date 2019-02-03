<?php

function addCustomMenus() {
  register_nav_menus([
    'header' => 'Header menu',
    'footer' => 'Footer menu'
  ]);
}

add_action('init', 'addCustomMenus');

function addCustomPostTypes() {
  register_post_type('project', [
    'label' => 'Projects',
    'labels' => [
      'name' => 'Projects',
      'singular_name' => 'Project',
      'add_new' => 'Create new',
      'add_new_item' => 'Create new Project',
      'not_found' => 'No Projects found.. 😣'
    ],
    'public' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-art',
    'hierarchical' => true,
    'has_archive' => true,
    'show_in_rest' => true,
    'supports' => [
      'title', 'editor', 'page-attributes', 'thumbnail'
    ]
  ]);
}

add_action('init', 'addCustomPostTypes');
