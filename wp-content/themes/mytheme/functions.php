<?php

/**************************************
 * Add JS
 ***************************************/
function mytheme_enqueue_scripts()
{
  wp_enqueue_style('mytheme-style', get_stylesheet_uri(), []);
  wp_enqueue_script('mytheme-js', get_theme_file_uri('/js/main.js'));
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');


/**************************************
 * Register Menus
 ***************************************/
function mytheme_menus()
{
  register_nav_menus(
    [
      'primary-menu' => 'Primary Menu',
    ]
  );
}
add_action('init', 'mytheme_menus');

/**************************************
 * Theme support
 ***************************************/
function my_theme_setup()
{
  add_theme_support('post-thumbnails');
  add_theme_support('featured-content');
  add_theme_support('post-formats', array('aside', 'gallery'));
}

add_action('after_setup_theme', 'my_theme_setup');


/**************************************
 * Favicon
 ***************************************/
function add_site_favicon()
{
  echo '<link rel="shortcut icon" type="image/x-icon" href="' . get_template_directory_uri() . '/images/favicon.ico" />';
}
add_action('wp_head', 'add_site_favicon');

/**************************************
 * Project Post Type
 ***************************************/
function register_projects_cpt()
{
  $plural = "Projects";
  $singular = "Project";

  $labels = array(
    'name' => __("{$plural}"),
    'menu_name' => __("{$plural}"),
    'singular_name' => __("{$singular}"),
    'add_new_item' => __("Add New {$singular}"),
    'edit_item' => __("Edit {$singular}"),
    'new_item' => __("New {$singular}"),
    'view_item' => __("View {$singular}"),
    'search_items' => __("Search {$plural}"),
    'not_found' => __("No {$plural} found"),
    'not_found_in_trash' => __("No {$plural} found in Trash"),
  );
  $args = array(
    'labels' => $labels,
    'supports' => array('title', 'revisions', 'editor', 'thumbnail'),
    'rewrite' => array('slug' => 'projects', 'with_front' => true),
    'capability_type' => 'post',
    'menu_position' => 20, // after Pages
    'menu_icon' => 'dashicons-admin-multisite',
    'public' => true,
    'hierarchical' => true,
    'query_var' => true,
  );
  register_post_type('projects', $args);
}


/***************************************************************
 * Project Taxonomy
 ***************************************************************/
function create_projects_taxonomy()
{
  $plural = "Project Types";
  $singular = "Project Type";

  $labels = array(
    'name' => _x("{$plural}", 'taxonomy general name'),
    'singular_name' => _x("{$singular}", 'taxonomy singular name'),
    'search_items' => __("Search {$plural}"),
    'all_items' => __("All {$plural}"),
    'parent_item' => __("Parent {$singular}"),
    'parent_item_colon' => __("Parent {$singular}:"),
    'edit_item' => __("Edit {$singular}"),
    'update_item' => __("Update {$singular}"),
    'add_new_item' => __("Add New {$singular}"),
    'new_item_name' => __("New {$singular} Name"),
    'featured_image' => __("{$singular} Image"),
    'set_featured_image' => __("Upload {$singular} Image"),
    'remove_featured_image' => __("Remove {$singular} Images"),
    'menu_name' => __("{$plural}"),
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'hierarchical' => true,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => false
  );
  register_taxonomy('project_type_category', 'projects', $args);
}

function create_technologies_taxonomy()
{
  $plural = "Technologies";
  $singular = "Technology";

  $labels = array(
    'name' => _x("{$plural}", 'taxonomy general name'),
    'singular_name' => _x("{$singular}", 'taxonomy singular name'),
    'search_items' => __("Search {$plural}"),
    'all_items' => __("All {$plural}"),
    'parent_item' => __("Parent {$singular}"),
    'parent_item_colon' => __("Parent {$singular}:"),
    'edit_item' => __("Edit {$singular}"),
    'update_item' => __("Update {$singular}"),
    'add_new_item' => __("Add New {$singular}"),
    'new_item_name' => __("New {$singular} Name"),
    'featured_image' => __("{$singular} Image"),
    'set_featured_image' => __("Upload {$singular} Image"),
    'remove_featured_image' => __("Remove {$singular} Images"),
    'menu_name' => __("{$plural}"),
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'hierarchical' => true,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => false
  );
  register_taxonomy('technology_category', 'projects', $args);
}

add_action('init', 'register_projects_cpt');
add_action('init', 'create_projects_taxonomy', 0);
add_action('init', 'create_technologies_taxonomy', 0);