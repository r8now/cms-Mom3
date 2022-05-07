<?php

/* Registrera meny*/

add_action('init', 'register_my_menus');

function register_my_menus()
{
    register_nav_menus(array('main-menu' => ('Huvudmeny')));
}

//Aktivera utvald bild
add_theme_support('post-thumbnails');

//Custom storlekar
add_image_size('thumbnail', 512, 512, array('center', 'center'));
add_image_size('thumbnail-medium', 256, 256, array('center', 'center'));
add_image_size('thumbnail-small', 256, 256, array('center', 'center'));


//aktivera header-bild
$args =array(
    'default-image' => get_template_directory_uri() . '/images/träd1100-300.jpg', 
'width' =>  1100,
'height' => 300,
'uploads' => true);

add_theme_support('header-bild',$args);

//Ta bort kommentarer från wp-admin
add_action('admin_menu', 'remove_menus');

function remove_menus(){
    remove_menu_page('edit-comments.php');
}

/*Activate Widget area */
add_action('widgets_init', 'slide_widget_init');

function slide_widget_init(){
    register_sidebar(array(
        'name' => 'Slide Widget',
        'id' => 'slide-widget',   
    ));}

    //inställningar för att visa titeln på sidorna
    function skog_features(){
        add_theme_support('title-tag');
    }

    add_action('after_setup_theme','skog_features');