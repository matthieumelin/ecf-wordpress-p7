<?php

add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

function add_theme_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', ['style']);
    wp_enqueue_style('main', get_template_directory_uri() . '/js/main.js', [], null, true);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

add_filter('show_admin_bar', '__return_false');
