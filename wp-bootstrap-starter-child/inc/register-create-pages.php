<?php

function single_create_page() {

    if( function_exists('acf_add_options_page') ) {	
        acf_add_options_page( 
            array( 
                'page_title' => 'Banner', 
                'menu_title' => 'Banner', 
                'menu_slug'  => 'banner', 
                'capability' => 'edit_posts', 
                'position'   => '23,1', 
                'redirect'   => false, 
                'icon_url'   => 'dashicons-format-image',
        ));

        acf_add_options_page( 
            array( 
                'page_title' => 'Seção 1', 
                'menu_title' => 'Seção 1', 
                'menu_slug'  => 'secao_1', 
                'capability' => 'edit_posts', 
                'position'   => '23,2', 
                'redirect'   => false, 
                'icon_url'   => 'dashicons-admin-page',
        ));

        acf_add_options_page( 
            array( 
                'page_title' => 'Seção 2', 
                'menu_title' => 'Seção 2', 
                'menu_slug'  => 'secao_2', 
                'capability' => 'edit_posts', 
                'position'   => '23,3', 
                'redirect'   => false, 
                'icon_url'   => 'dashicons-admin-page',
        ));

        acf_add_options_page( 
            array( 
                'page_title' => 'Seção 3', 
                'menu_title' => 'Seção 3', 
                'menu_slug'  => 'secao_3', 
                'capability' => 'edit_posts', 
                'position'   => '23,4', 
                'redirect'   => false, 
                'icon_url'   => 'dashicons-admin-page',
        ));

        acf_add_options_page( 
            array( 
                'page_title' => 'Informações Gerais', 
                'menu_title' => 'Informações Gerais', 
                'menu_slug'  => 'informacoes_gerais', 
                'capability' => 'edit_posts', 
                'position'   => '23,5', 
                'redirect'   => false, 
                'icon_url'   => 'dashicons-admin-page',
        ));
    }
}
add_action( 'init', 'single_create_page' );