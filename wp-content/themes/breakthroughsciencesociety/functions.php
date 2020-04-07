<?php

// LOAD CSS JS
function load_CSS_JS(){
    wp_register_style( 'style', get_template_directory_uri().'/assets/css/style.css', array(), false, all ); //Style.css
    wp_register_script( 'script', get_template_directory_uri().'/assets/js/script.js', array(), false, true ); //Scritp.JS

    wp_enqueue_style('style');
    wp_enqueue_script('script');
}
add_action('wp_enqueue_scripts', 'load_CSS_JS');

// Custom Post Types
function custom_post_types() {
    // Archive
    $archiveArgs = array(
        'labels' => array(
            'name' => 'Archive',
            'singular_name' => 'Archive',
            'add_new' => 'New item in Archive',
            'add_new_item' => 'Add New item in Archive',
            'edit_item' => "Edit itm in Archive",
            ),
        'description' => "Breakthrough Science Society Archive",
        'public' => true,
        'hierarchical' => true,
        'exclude_from_search' => false,
        'show_in_menu' => true,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-admin-site-alt3',
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail',‘revisions’, ‘trackbacks’, ‘excerpt’, ‘page-attributes’, 'comments', 'post-formats'),
        'rewrite' => array('slug' => 'archive', 'pages' => true, 'delete_with_user'=>false),
    );
    register_post_type('archive', $archiveArgs);

    // Whae
    $xxx = array(
        'labels' => array(
            'name' => 'xxx',
            'singular_name' => 'xxx',
            'add_new' => 'xxx',
            'add_new_item' => 'xxx',
            'edit_item' => "xxx",
            ),
        'description' => "Breakthrough Science Society Archive",
        'public' => true,
        'hierarchical' => true,
        'exclude_from_search' => false,
        'show_in_menu' => true,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-admin-site-alt3',
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail',‘revisions’, ‘trackbacks’, ‘excerpt’, ‘page-attributes’, 'comments', 'post-formats'),
        'rewrite' => array('slug' => 'xxx', 'pages' => true, 'delete_with_user'=>false),
    );
    register_post_type('xxx', $xxx);

}
add_action( 'init', 'custom_post_types' );    


?>