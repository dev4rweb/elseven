<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function elseven_styles()
{
    wp_enqueue_style('elseven-style', get_stylesheet_uri(), array(), _S_VERSION);
    //wp_enqueue_style('fontawesome-styles', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), null, 'all');
    //wp_enqueue_style('google-font-styles', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), null, 'all');
    //wp_enqueue_style('font-awesome-styles', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), null, 'all');
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/assets/scss/main.css', array(), null, 'all');

    // remove styles from plugin WooCommerce Quantity Increment
    wp_dequeue_style( 'wcqib-css' );
}

add_action('wp_enqueue_scripts', 'elseven_styles');

function elseven_scripts()
{
    wp_enqueue_script('elseven-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true);
    wp_enqueue_script('ajax-search', get_template_directory_uri() . '/assets/js/ajax-search.js', array('jquery'), null, true);
    wp_localize_script('ajax-search', 'search_form', array(
       'url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('search-nonce')
    ));
    wp_enqueue_script('elseven-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), null, true);
    wp_enqueue_script('elseven-header-search', get_template_directory_uri() . '/assets/js/header-search.js', array('jquery'), null, true);
    wp_enqueue_script('elseven-modal-forms', get_template_directory_uri() . '/assets/js/modal_contact_forms7.js', array('jquery'), null, true);
    wp_enqueue_script('elseven-basket', get_template_directory_uri() . '/assets/js/basket.js', array('jquery'), null, true);
    wp_enqueue_script('elseven-slider', get_template_directory_uri() . '/assets/js/swipe-slider.js', array('jquery'), null, true);
    wp_enqueue_script('elseven-shopping-cart', get_template_directory_uri() . '/assets/js/shopping_cart.js', array('jquery'), null, true);
    wp_enqueue_script('elseven-price-filter', get_template_directory_uri() . '/assets/js/content-widget-price-filter.js', array('jquery'), null, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }


}
add_action('wp_enqueue_scripts', 'elseven_scripts', 10);