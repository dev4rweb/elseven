<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}


remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
add_action('woocommerce_before_main_content', 'elseven_add_breadcrumbs', 5);
function elseven_add_breadcrumbs()
{
    ?>
    <div class="breadcrumb-single-container">
        <div class="wrapper_archive">
            <div class="breadcrumb">
                <?php woocommerce_breadcrumb(); ?>
            </div>
        </div>
    </div>
    <?php

}

/**
 * Change the breadcrumb separator (Remove default slashes)
 */
add_filter('woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_delimiter');
function wcc_change_breadcrumb_delimiter($defaults)
{
    // Change the breadcrumb delimeter from '/' to '>'
    $defaults['delimiter'] = '';
    return $defaults;
}

/**
 * Add sidebar only in archive-product file
 */
add_action('woocommerce_before_main_content', 'elseven_add_sidebar_only_archive', 40);
function elseven_add_sidebar_only_archive()
{
    if (!is_product()) {
        woocommerce_get_sidebar();
    }
}
