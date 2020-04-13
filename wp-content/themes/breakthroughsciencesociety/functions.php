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
        'show_in_rest' => true,
        'taxonomies' => array('topics', 'category', 'post_tag' ),
        'rewrite' => array('slug' => 'archive', 'pages' => true, 'delete_with_user'=>false),
    );
    register_post_type('archive', $archiveArgs);

    // News
    $newsArgs = array(
        'labels' => array(
            'name' => 'News',
            'singular_name' => 'News',
            'add_new' => 'Add News',
            'add_new_item' => 'Add New',
            'edit_item' => "Edit News",
            ),
        'description' => "Mews",
        'public' => true,
        'hierarchical' => true,
        'exclude_from_search' => false,
        'show_in_menu' => true,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-admin-site-alt3',
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', ‘revisions’, ‘trackbacks’, ‘excerpt’, ‘page-attributes’, 'comments', 'post-formats'),
        'show_in_rest' => true,
        'taxonomies' => array('category', 'topics', 'post_tag'),
        'rewrite' => array('slug' => 'news', 'pages' => true, 'delete_with_user'=>false),
    );
    register_post_type('news', $newsArgs);

}
add_action( 'init', 'custom_post_types' );    


function custom_taxonomy()
{
        //Category taxonm


}


add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
add_post_type_support( 'archive', 'editor' );

?>
