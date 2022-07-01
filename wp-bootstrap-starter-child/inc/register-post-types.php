<?php

function single_create_post_type() { 

	register_post_type( 'secao-1', array(
		'labels'      => array( 'name' => 'Post Seção 1', 'singular_name' => 'Post Seção 1', 'all_items' => 'Todos os posts' ),
		'public' 	  => true,
		'has_archive' => true,
		'menu_icon'	  => 'dashicons-admin-page',
		'supports' 	  => array( 'title', 'editor', 'thumbnail', 'revisions', 'author', 'excerpt' ) 
	));

	register_post_type( 'post-example', array(
		'labels'      => array( 'name' => 'Post Exemplo', 'singular_name' => 'Post Exemplo', 'all_items' => 'Todos os posts' ),
		'public' 	  => true,
		'has_archive' => true,
		'menu_icon'	  => 'dashicons-welcome-write-blog',
		'supports' 	  => array( 'title', 'editor',  'revisions', 'author' ) 
	));

	register_post_type( 'eventos', array(
		'labels'      => array( 'name' => 'Eventos', 'singular_name' => 'Evento', 'all_items' => 'Todos os eventos' ),
		'public' 	  => true,
		'has_archive' => true,
		'menu_icon'	  => 'dashicons-welcome-write-blog',
		'supports' 	  => array( 'title', 'editor',  'thumbnail', 'revisions', 'author' ) 
	));
}
add_action( 'init', 'single_create_post_type' );