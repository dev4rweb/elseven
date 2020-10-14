<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Sample implementation of the WooCommerce Mini Cart.
 *
 * You can add the WooCommerce Mini Cart to header.php like so ...
 *
<?php
if ( function_exists( 'elseven_woocommerce_header_cart' ) ) {
elseven_woocommerce_header_cart();
}
?>
 */

if ( ! function_exists( 'elseven_woocommerce_cart_link_fragment' ) ) {
    /**
     * Cart Fragments.
     *
     * Ensure cart contents update when products are added to the cart via AJAX.
     *
     * @param array $fragments Fragments to refresh via AJAX.
     * @return array Fragments to refresh via AJAX.
     */
    function elseven_woocommerce_cart_link_fragment( $fragments ) {
        ob_start();
        elseven_woocommerce_cart_link();
        $fragments['a.cart-contents'] = ob_get_clean();

        return $fragments;
    }
}
add_filter( 'woocommerce_add_to_cart_fragments', 'elseven_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'elseven_woocommerce_cart_link' ) ) {
    /**
     * Cart Link.
     *
     * Displayed a link to the cart including the number of items present and the cart total.
     *
     * @return void
     */
    function elseven_woocommerce_cart_link() {
        ?>
        <a class="cart-contents basket_box" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'Посмотреть корзину', 'elseven' ); ?>">
            <?php
            $item_count_text = sprintf(
            /* translators: number of items in the mini cart. */
                _n( '%d ', '%d ', WC()->cart->get_cart_contents_count(), 'elseven' ),
                WC()->cart->get_cart_contents_count()
            );
            ?>
            <span class="basket"></span>
            <span class="count badge"><?php echo WC()->cart->get_cart_contents_count();?></span>
            <span class="amount basket_text">Корзина</span>
        </a>
        <?php
    }
}

if ( ! function_exists( 'elseven_woocommerce_header_cart' ) ) {
    /**
     * Display Header Cart.
     *
     * @return void
     */
    function elseven_woocommerce_header_cart() {
        if ( is_cart() ) {
            $class = 'current-menu-item';
        } else {
            $class = '';
        }
        ?>
        <ul id="site-header-cart" class="site-header-cart">
            <li class="<?php echo esc_attr( $class ); ?>">
                <?php elseven_woocommerce_cart_link(); ?>
            </li>
            <li>
                <?php
                $instance = array(
                    'title' => '',
                );

                the_widget( 'WC_Widget_Cart', $instance );
                ?>
            </li>
        </ul>
        <?php
    }
}
