<?php 

function nathaliemota_add_styles(){
    wp_enqueue_style ('nathaliemota-style',get_stylesheet_directory_uri() . '/style.css', array(),filemtime(get_stylesheet_directory() . '/style.css'),'all');
}

add_action('wp_enqueue_scripts','nathaliemota_add_styles'); 