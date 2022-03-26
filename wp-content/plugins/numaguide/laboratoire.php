<?php
/**
 * @package NumaGuide
 * @version 0.1
 */
/*
Plugin Name: NumaGuide
Plugin URI:
Description: The laboratory of test for the Project NumaGuide
Author: Floriviam
Version: 0.1
*/

add_action('wp_footer', 'say_hello');
add_filter('default_content', 'quelques_trucs');

function say_hello(){
    echo('<p>Hellow World</p>');
}

function quelques_trucs() {
    return "Template par défaut";
}