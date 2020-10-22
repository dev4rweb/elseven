<?php
defined('ABSPATH') || exit;

/**
 * Add own class in woocommerce/includes/archive-product.php for
 * design shopping cart
 */
add_action('woocommerce_before_main_content', 'elseven_wrapper_archive_product_start', 5);
function elseven_wrapper_archive_product_start()
{
    ?>
    <section class="catalog-section wrapper">
    <?php
}

add_action('woocommerce_sidebar', 'elseven_wrapper_archive_product_end', 25);
function elseven_wrapper_archive_product_end()
{
    ?>
    </section>
    <?php
}

remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

/**
 * Add sidebar-widget for filter by price in  woocommerce/includes/archive-product.php for
 */
add_action('woocommerce_before_shop_loop', 'filtering_by_price', 40);
function filtering_by_price()
{
    if (is_active_sidebar('filter-price')) :
        dynamic_sidebar('filter-price');
    endif;
}

/**
 * Change step in filter because default $step = 10 in  root widget class
 */
add_filter('woocommerce_price_filter_widget_step', 'change_step_filter_price');
function change_step_filter_price($step)
{
    $step = 1;

    return $step;
}