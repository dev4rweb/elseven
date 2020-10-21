<?php
defined( 'ABSPATH' ) || exit;

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