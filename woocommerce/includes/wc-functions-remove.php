<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

// remove woocommerce scripts on unnecessary pages
function woocommerce_de_script() {
    if (function_exists( 'is_woocommerce' )) {
        if (!is_woocommerce() && !is_cart() && !is_checkout() && !is_account_page() ) { // if we're not on a Woocommerce page, dequeue all of these scripts
//            wp_dequeue_script('wc-add-to-cart');
//            wp_dequeue_script('jquery-blockui');
//            wp_dequeue_script('jquery-placeholder');
//            wp_dequeue_script('woocommerce');
//            wp_dequeue_script('jquery-cookie');
//            wp_dequeue_script('wc-cart-fragments');
        }
    }
}
add_action( 'wp_print_scripts', 'woocommerce_de_script', 100 );
add_action( 'wp_enqueue_scripts', 'remove_woocommerce_generator', 99 );
function remove_woocommerce_generator() {
    if (function_exists( 'is_woocommerce' )) {
        if (!is_woocommerce()) { // if we're not on a woo page, remove the generator tag
            remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );
        }
    }
}
// remove woocommerce styles, then add woo styles back in on woo-related pages
function child_manage_woocommerce_css(){
    if (function_exists( 'is_woocommerce' )) {
        if (!is_woocommerce()) { // this adds the styles back on woocommerce pages. If you're using a custom script, you could remove these and enter in the path to your own CSS file (if different from your basic style.css file)
//            wp_dequeue_style('woocommerce-layout');
//            wp_dequeue_style('woocommerce-smallscreen');
//            wp_dequeue_style('woocommerce-general');
        }
    }
}
add_action( 'wp_enqueue_scripts', 'child_manage_woocommerce_css' );