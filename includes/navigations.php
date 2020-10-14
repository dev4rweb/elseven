<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

add_action( 'after_setup_theme', function(){
    register_nav_menus( [
        'header_menu' => 'Меню в шапке',
        'footer_menu' => 'Меню в подвале'
    ] );
} );

function elseven_primary_menu()
{
    wp_nav_menu(
        array(
            'theme_location' => 'header_menu',
            'menu_id' => 'primary-menu',
            'menu_class' => 'my_class',
        )
    );
}