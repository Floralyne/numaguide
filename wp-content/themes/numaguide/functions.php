<?php

function numaguide_supports()
{
  add_theme_support('title-tag');
}

function numaguide_register_assets()
{
  wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css', []);
  wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js', ['popper', 'jquery'], false, true);
  wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', [], false, true);
  wp_deregister_script('jquery');
  wp_register_script('jquery', 'https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js', [], false, true);
  wp_enqueue_style('bootstrap');
  wp_enqueue_script('bootstrap');
  wp_register_style('slide', get_template_directory_uri() . '/assets/css/slides_style/slide.css',  []);
  wp_enqueue_style('slide');
  // wp_register_style('formulaire', get_template_directory_uri() . '/assets/css/formulaires.css',  []);
  // wp_enqueue_style('formulaire');
  wp_register_style('page_404', get_template_directory_uri() . '/assets/css/404.css',  []);
  wp_enqueue_style('page_404');
}

function numaguide_title_separator()
{
  return '|';
}

function admin_css()
{
  $admin_handle = 'admin_css';
  $admin_stylesheet = get_template_directory_uri() . '/assets/css/admin.css';

  wp_enqueue_style($admin_handle, $admin_stylesheet);
}

// // Ajout des pages dans la bar de menu administrateur
// function ajout_menu_configuration($wp_admin_bar)
// {
//   $args = array(
//     'id' => 'wp_numaguide',
//     'title' => 'Numaguide',
//     'href' => '/',
//     'meta' => array(
//       'class' => 'wp_config_numaguide',
//       'title' => 'Search WPBeginner Tutorials'
//     )
//   );
//   $wp_admin_bar->add_node($args);


//   $args = array(
//     'id' => 'wp_config_numaguide',
//     'title' => 'Configuration',
//     'href' => get_template_directory_uri() . '/page_config/form_configuration.php',
//     'parent' => 'wp_numaguide',
//     'meta' => array(
//       'class' => 'wp_config_numaguide',
//       'title' => 'Configuration'
//     )
//   );
//   $wp_admin_bar->add_node($args);


//   $args = array(
//     'id' => 'wp_creation_numaguide',
//     'title' => 'Création d\'un guide',
//     'href' => get_template_directory_uri() . '/page_creation/form_creation.php',
//     'parent' => 'wp_numaguide',
//     'meta' => array(
//       'class' => 'wp_creation_numaguide',
//       'title' => 'Création d\'un guide'
//     )
//   );
//   $wp_admin_bar->add_node($args);


//   $args = array(
//     'id' => 'wp_liste_numaguide',
//     'title' => 'Liste des guides',
//     'href' => get_template_directory_uri() . '/page_liste/form_liste.php',
//     'parent' => 'wp_numaguide',
//     'meta' => array(
//       'class' => 'wp_liste_numaguide',
//       'title' => 'Liste des guides'
//     )
//   );
//   $wp_admin_bar->add_node($args);
// }
// add_action('admin_bar_menu', 'ajout_menu_configuration', 999);


add_action('admin_print_styles', 'admin_css', 11);

add_action('after_setup_theme', 'numaguide_supports');
add_action('wp_enqueue_scripts', 'numaguide_register_assets');
add_action('wp_enqueue_styles', 'numaguide_register_assets');
add_filter('document_title_separator', 'numaguide_title_separator');
