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
  wp_register_style('slide', get_template_directory_uri() . '/assets/css/slides.css',  []);
  wp_enqueue_style('slide');
  wp_register_style('page_404', get_template_directory_uri() . '/assets/css/404.css',  []);
  wp_enqueue_style('page_404');
}

function numaguide_title_separator()
{
  return '|';
}

add_action('after_setup_theme', 'numaguide_supports');
add_action('wp_enqueue_scripts', 'numaguide_register_assets');
add_action('wp_enqueue_styles', 'numaguide_register_assets');
add_filter('document_title_separator', 'numaguide_title_separator');

/*add_action( 'numaguide.message', 'numaguide_msg_load_template_part' );

function numaguide_msg_load_template_part()
{
    if ( ! function_exists( 'numaguide_load_template_part' ) ) {

        // Show debug info for those who can do something about it.
        if ( current_user_can( 'manage_option' ) ) {
            print '<p class="error">Function plugin_frontend_message() not found.</p>';
        }
        return;
    }

    print numaguide_load_template_part();
}*/

function numaguide_supprimer_p( $content ) {
  remove_filter( 'the_content', 'wpautop' );
  remove_filter( 'the_excerpt', 'wpautop' );
  return $content;
}
add_filter( 'the_content', 'numaguide_supprimer_p', 0 );