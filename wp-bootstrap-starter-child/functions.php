<?php

//files
require get_template_directory() . '/../wp-bootstrap-starter-child/inc/single-files.php';

//register post ACF
require get_template_directory() . '/../wp-bootstrap-starter-child/inc/register-post-types.php';
require get_template_directory() . '/../wp-bootstrap-starter-child/inc/register-create-pages.php';

//single functions
require get_template_directory() . '/../wp-bootstrap-starter-child/inc/single-functions.php';

function contato_init() {
    $args = array(
        'public' => true,
        'label'  => 'Entre em Contato',
        'show_in_rest'       => true, 
        'menu_icon'           => 'dashicons',
        'menu_icon'           => 'dashicons-admin-page',
        'taxonomies'          => array( 'category' ),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
    );
    register_post_type('contato', $args );
}
add_action( 'init', 'contato_init' );

function testimonials_init() {
    $args = array(
        'public' => true,
        'label'  => 'Depoimentos',
        'show_in_rest'       => true, 
        'menu_icon'           => 'dashicons',
        'menu_icon'           => 'dashicons-admin-page',
        'taxonomies'          => array( 'category' ),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
    );
    register_post_type('testimonials', $args );
}
add_action( 'init', 'testimonials_init' );

function about_init() {
    $args = array(
        'public' => true,
        'label'  => 'Sobre Nós',
        'show_in_rest'       => true, 
        'menu_icon'           => 'dashicons',
        'menu_icon'           => 'dashicons-admin-page',
        'taxonomies'          => array( 'category' ),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
    );
    register_post_type('about', $args );
}
add_action( 'init', 'about_init' );

function social_init() {
    $args = array(
        'public' => true,
        'label'  => 'Redes Sociais',
        'show_in_rest'       => true, 
        'menu_icon'           => 'dashicons',
        'menu_icon'           => 'dashicons-admin-page',
        'taxonomies'          => array( 'category' ),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
    );
    register_post_type('social', $args );
}
add_action( 'init', 'social_init' );