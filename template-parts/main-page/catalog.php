<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directory
}
?>
<section class="wrapper main_catalog">
    <h2>Каталог продукции</h2>
    <div class="catalog_container">
        <?php
        $prod_categories = get_terms('product_cat', array(
            'orderby' => 'name',
            'order' => 'ASC',
            'hide_empty' => true
        ));

        foreach ($prod_categories as $prod_cat) :
            $cat_thumb_id = get_woocommerce_term_meta($prod_cat->term_id, 'thumbnail_id', true);
            $shop_catalog_img = wp_get_attachment_image_src($cat_thumb_id, 'shop_catalog');
            $term_link = get_term_link($prod_cat, 'product_cat'); ?>

            <a href="<?php echo $term_link; ?>">
                <img src="<?php echo $shop_catalog_img[0]; ?>"
                     alt="<?php echo $prod_cat->name; ?>"/>
                <?php echo $prod_cat->name ?>
                <div></div>
            </a>

        <?php endforeach;
        wp_reset_query();
        ?>
    </div>
</section>
