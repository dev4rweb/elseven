<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>

<section class="categories wrapper_archive">
    <h1>Каталог продукции</h1>
    <div class="catalog">
        <?=WC_Shortcodes::product_categories(10); ?>
    </div>
</section>
