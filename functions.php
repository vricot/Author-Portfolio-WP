<?php 
// adding the CSS and JS files

function angellaricot_setup(){
    wp_enqueue_style('custom-fa', '//use.fontawesome.com/releases/v5.0.6/css/all.css');

    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.min.css');
    
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);

    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/bootstrap/js/bootstrap.min.js', NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'angellaricot_setup');

//adding theme support

function ar_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', 
    array('comment-list', 'comment-form', 'search-form')
    );
}

add_action('after_setup_theme', 'ar_init');

?>