<?php
defined('ABSPATH') || exit;
/**
 * Add own class wrapper in image container left in woocommerce/includes/content-single-product.php for
 * design shopping cart
 */
/*add_action('woocommerce_before_single_product_summary', 'elseven_wrapper_product_image_start', 5);
function elseven_wrapper_product_image_start()
{
    */?><!--
    <div class="wrapper_archive">
        <div class="img-container">
    <?php
/*}

add_action('woocommerce_before_single_product_summary', 'elseven_wrapper_product_image_end', 25);
function elseven_wrapper_product_image_end()
{
    */?>
        </div>
    --><?php
/*}*/

/**
 * Add own class wrapper in cart content container right side in woocommerce/includes/content-single-product.php for
 * design shopping cart
 */
/*add_action('woocommerce_before_single_product_summary', 'elseven_wrapper_product_entry_start', 30);
function elseven_wrapper_product_entry_start()
{
    */?><!--
        <div class="cart-content-container">
    <?php
/*}

add_action('woocommerce_after_single_product_summary', 'elseven_wrapper_product_entry_end', 25);
function elseven_wrapper_product_entry_end()
{
    // cart-content-container
    */?>
        </div>
    </div>
    --><?php
/*}*/

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
//remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
//remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
//remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
//remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50);
//remove_action('woocommerce_single_product_summary', 'WC_Structured_Data::generate_product_data()', 60);

add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 55);
