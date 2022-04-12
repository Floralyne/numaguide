<?php

function numaguide_supports()
{
  add_theme_support('title-tag');
}

function numaguide_register_assets()
{
  // wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', []);
  // wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
  //wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', [], false, true);
  // wp_deregister_script('jquery');
  // wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', [], false, true);
  // wp_enqueue_style('bootstrap');
  // wp_enqueue_script('bootstrap');
  wp_register_style('slide', get_template_directory_uri() . '/assets/css/slides_style/slide.css',  []);
  wp_enqueue_style('slide');
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

add_action('admin_print_styles', 'admin_css', 11);

add_action('after_setup_theme', 'numaguide_supports');
add_action('wp_enqueue_scripts', 'numaguide_register_assets');
add_filter('document_title_separator', 'numaguide_title_separator');
