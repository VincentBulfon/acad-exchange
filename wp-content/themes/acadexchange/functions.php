<?php

/** add custom thumbnails **/

add_theme_support( 'post-thumbnails' );

/** register nav menu **/

register_nav_menu('main', 'navigation principale');
register_nav_menu('footer', 'navigation secondaire');


/** register custom post type **/

function ae_register_post_types(){
    register_post_type('services', [
        'label' => 'services',
        'labels' => ['add service' => 'ajouter un service'],
        'description' => 'services disponibles sur le site',
        'menu_position' => 5,
        'menu_icon' => 'dashicons-editor-ul'
    ]);
}

add_action('init', 'ae_register_post_types');