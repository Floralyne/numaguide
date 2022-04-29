<?php
// Ajout des pages dans la bar de menu administrateur
// Ajout des pages dans la bar de menu administrateur
function ajout_menu_configuration($wp_admin_bar)
{
    $args = array(
        'id' => 'wp_numaguide',
        'title' => 'Numaguide',
        'href' => '/',
        'meta' => array(
            'class' => 'wp_config_numaguide',
            'title' => 'Search WPBeginner Tutorials'
        )
    );
    $wp_admin_bar->add_node($args);


    $args = array(
        'id' => 'wp_config_numaguide',
        'title' => 'Configuration',
        'href' => get_template_directory_uri() . '/page_config/form_configuration.php',
        'parent' => 'wp_numaguide',
        'meta' => array(
            'class' => 'wp_config_numaguide',
            'title' => 'Configuration'
        )
    );
    $wp_admin_bar->add_node($args);


    $args = array(
        'id' => 'wp_creation_numaguide',
        'title' => 'Création d\'un guide',
        'href' => get_template_directory_uri() . '/page_creation/form_creation.php',
        'parent' => 'wp_numaguide',
        'meta' => array(
            'class' => 'wp_creation_numaguide',
            'title' => 'Création d\'un guide'
        )
    );
    $wp_admin_bar->add_node($args);


    $args = array(
        'id' => 'wp_liste_numaguide',
        'title' => 'Liste des guides',
        'href' => get_template_directory_uri() . '/page_liste/form_liste.php',
        'parent' => 'wp_numaguide',
        'meta' => array(
            'class' => 'wp_liste_numaguide',
            'title' => 'Liste des guides'
        )
    );
    $wp_admin_bar->add_node($args);
}
add_action('admin_bar_menu', 'ajout_menu_configuration', 999);
