<?php

/** add custom thumbnails **/

add_theme_support('post-thumbnails');

/** register nav menu **/

register_nav_menu('main', 'navigation principale');
register_nav_menu('footer', 'navigation secondaire');

/**retrive all menu locations**/
function ae_get_nav_menu($location)
{
    $menu = [];
    $locations = get_nav_menu_locations();
    foreach (wp_get_nav_menu_items($locations[$location]) as $post) {
        $item = new stdClass();
        $item->url = $post->url;
        $item->title = $post->title;
        $item->children = [];

        if (!$post->menu->item_parent) {
            $menu[$post->ID] = $item;
        } else {
            $menu[$item->item_parent]->children[$post->ID] = $item;
        }
    }
    return $menu;
}


/** get image at desired size */
function ae_get_image($field, $size)
{
    $image = get_field($field);
    if (!$image) return;

    $img = new stdClass();
    $img->title = $image['title'];
    $img->src = $image['sizes'][$size];
    $img->width = $image['sizes'][$size . '-width'];
    $img->height = $image['sizes'][$size . '-height'];
    return $img;
}


/**
 * return path for files
 * @param  string $path file or directory you want to go to 
 * @return uri       uri to your file
 */
function ae_get_asset($path){
    return get_stylesheet_directory_uri() . '/' . ltrim($path, '/'); //ltrim escape the specified character one the left
}


/**
 * register a new post type on your wp admin
 * @return wp_post return awordpress post type
 */
function ae_register_custom_post_type()
{
    register_post_type('service', [
        'label' => 'Website service',
        'labels' => ['add_new_item' => 'ajouter un service', 'singular_name' => 'Service'],
        'description' => 'add a service to acad exchange',
        'menu_icon' => 'dashicons-store',
        'public' => true,
        'menu_position' => 5,
    ]);
}

/** add action **/
add_action('init', 'ae_register_custom_post_type');

