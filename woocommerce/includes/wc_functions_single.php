<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}


/**
 * Remove blocks tabs, description and same products from woocommerce/includes/content-single-product.php
 */
//remove_all_filters('woocommerce_after_single_product_summary');
remove_action('woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15);
//remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);


/**
 * Add own class in woocommerce/includes/content-single-product.php for
 * design shopping cart
 */
add_action('woocommerce_before_main_content', 'elseven_wrapper_product_start', 40);
function elseven_wrapper_product_start()
{
    ?>
    <section class="single-section wrapper_archive">
    <?php
}

add_action('woocommerce_after_single_product_summary', 'elseven_wrapper_product_end', 25);
function elseven_wrapper_product_end()
{
    // close class="single-section"
    ?>
    </section>
    <div class="table-content">
        table
    </div>
    <?php
}

/**
 * Add own class wrapper in image container left in woocommerce/includes/content-single-product.php for
 * design shopping cart
 */
add_action('woocommerce_before_single_product_summary', 'elseven_wrapper_product_image_start', 5);
function elseven_wrapper_product_image_start()
{
    ?>
    <div class="img-container">
    <?php
}

add_action('woocommerce_before_single_product_summary', 'elseven_wrapper_product_image_end', 25);
function elseven_wrapper_product_image_end()
{
    ?>
    </div>
    <?php
}

/**
 * Add own class wrapper in cart content container right side in woocommerce/includes/content-single-product.php for
 * design shopping cart
 */
add_action('woocommerce_before_single_product_summary', 'elseven_wrapper_product_entry_start', 30);
function elseven_wrapper_product_entry_start()
{
    ?>
    <div class="cart-content-container">
    <?php
}

add_action('woocommerce_after_single_product_summary', 'elseven_wrapper_product_entry_end', 25);
function elseven_wrapper_product_entry_end()
{
    // cart-content-container
    ?>
    </div>
    <?php
}

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 55);