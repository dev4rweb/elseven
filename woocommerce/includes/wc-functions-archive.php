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

/**
 * wrapper in  woocommerce/includes/archive-product.php for
 */
add_action('woocommerce_before_shop_loop', 'header_wrapper_archive_product_start', 15);
function header_wrapper_archive_product_start()
{
    ?>
    <div class="header_wrapper_archive">
    <?php
}

add_action('woocommerce_before_shop_loop', 'header_wrapper_archive_product_end', 50);
function header_wrapper_archive_product_end()
{
    ?>
    </div>
    <?php
}

remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
add_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 40);
//remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

/**
 * wrap .woocommerce-ordering for label in  woocommerce/includes/archive-product.php for
 */
add_action('woocommerce_before_shop_loop', 'header_wrapper_woo_ordering_archive_product_start', 25);
function header_wrapper_woo_ordering_archive_product_start()
{
    ?>
    <div class="wrap_woo_ordering">
    <span>Сортировка: </span>
    <?php
}

add_action('woocommerce_before_shop_loop', 'header_wrapper_woo_ordering_archive_product_end', 35);
function header_wrapper_woo_ordering_archive_product_end()
{
    ?>
    </div>
    <?php
}

/**
 * Add sidebar-widget for filter by price in  woocommerce/includes/archive-product.php for
 */
add_action('woocommerce_before_shop_loop', 'filtering_by_price', 20);
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

/**
 * Change order by in selects in head
 */
add_filter('woocommerce_catalog_orderby', 'catalog_ordering_own_args');
function catalog_ordering_own_args($args)
{
    $args = array(
        'menu_order' => __('По алфавиту', 'woocommerce'),
        'popularity' => __( 'По популярности', 'woocommerce' ),
        'price'      => __( 'По увеличению цены', 'woocommerce' ),
        'price-desc' => __( 'По уменьшению цены', 'woocommerce' ),
        'date'       => __( 'По обновлению', 'woocommerce' ),
    );
    return $args;
}