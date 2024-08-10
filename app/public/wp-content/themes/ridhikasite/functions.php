<?php 

//Adding CSS and JS Files

function gt_setup(){
    wp_enqueue_style('google-fonts','//fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap');
    wp_enqueue_style('fontawesome','//kit.fontawesome.com/1c24d8f88a.js');  
    wp_enqueue_style('style',get_stylesheet_uri(),NULL, microtime(),'all');
    wp_enqueue_script("main",get_theme_file_uri('/js/main.js'),NULL, microtime(),true);

}
add_action('wp_enqueue_scripts', 'gt_setup');

function gt_init(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag'); 
    add_theme_support('html5', 
        array('comment-list','comment-form','search-form')
);
}

add_action('after_setup_theme', 'gt_init');
 
function gt_custom_post_type(){
    register_post_type('project',
        array(
            'rewrite' => array('slug' => 'projects'),
            'labels' => array(
                'name' => 'Projects',
                'singular_name' => 'Project',
                'add_new_item' => 'Add New Project',
                'edit_item' => 'Edit Project'
            ),
            'menu-icon' => 'dashicons-clipboard',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail','editor', 'excerpt', 'comments'
                )
             )
            );  
}

add_action('init', 'gt_custom_post_type');
