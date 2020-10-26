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
    <section class="single-section">
    <?php
}

add_action('woocommerce_after_single_product_summary', 'elseven_wrapper_product_end', 25);
function elseven_wrapper_product_end()
{
    // close class="single-section"
    ?>
    </section>
    <?php
}

