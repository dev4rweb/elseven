<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>
<section class="about wrapper_mod">
    <h1><?= get_current_item_nav_menu('header_menu'); ?></h1>
    <div class="about_info">
        <?php
        $top_photo_id = carbon_get_theme_option('el_about_top_photo');
        $top_photo = $top_photo_id ? wp_get_attachment_image_url($top_photo_id, 'full')
            : get_template_directory_uri() . '/assets/images/1.jpg';
        ?>
        <img src="<?= $top_photo; ?>" alt="img">

        <?php
        $top_text_default = '<b>Элсемь</b> - это производитель качественного оборудования для пищевой промышленности. Мы работаем с 2015 года и предлагаем только качественные товары по приемлемым ценам с доставкой по всей России.';
        $top_text = carbon_get_theme_option('el_about_info');
        $top_text = $top_text ? $top_text : $top_text_default;
        ?>
        <p><?= $top_text; ?></p>
    </div>
    <?php
    $promise_text_default = '<b>Мы гарантируем:</b><br>
                            <ul>
                                <li>качественную продукцию;</li>
                                <li>индивидуальный подбор товаров;</li>
                                <li>большой ассортимент оборудования для пищевой промышленности;</li>
                            </ul>';
    $promise_text = carbon_get_theme_option('el_about_promise');
    $promise_text = $promise_text ? $promise_text : $promise_text_default;
    ?>
    <div class="promise_box"><?= $promise_text; ?></div>
    <?php
    $desc_text_default = 'Элсемь - это производитель качественного оборудования для пищевой промышленности. Мы работаем с 2015 года и
                                предлагаем только качественные товары по приемлемым ценам с доставкой по всей России. Элсемь - это производитель
                                качественного оборудования для пищевой промышленности. Мы работаем с 2015 года и предлагаем только качественные
                                товары по приемлемым ценам с доставкой по всей России.';
    $desc_text = carbon_get_theme_option('el_about_description');
    $desc_text = $desc_text ? $desc_text : $desc_text_default;
    ?>
    <p><?= $desc_text_default; ?></p>

    <div class="image_container">
        <?php
        $gallery_default = array(
            '/assets/images/9.jpg', '/assets/images/10.jpg', '/assets/images/11.jpg', '/assets/images/12.jpg'
        );
        $gallery_id = carbon_get_theme_option('el_about_media_gallery');
        if ($gallery_id) {
            foreach ($gallery_id as $image_id) {
                $image = wp_get_attachment_image_url($image_id, 'full');
                echo('<img src="' . $image . '" alt="img">');
            }
        } else {
            foreach ($gallery_default as $image_def) {
                $image_path = get_template_directory_uri() . $image_def;
                echo '<img src="' . $image_path . '" alt="img">';
            }
        }
        ?>
    </div>

    <?php
    $add_text_default = '<p>Элсемь - это производитель качественного оборудования для пищевой промышленности. Мы работаем с 2015 года и
        предлагаем только качественные товары по приемлемым ценам с доставкой по всей России. Элсемь - это производитель
        качественного оборудования для пищевой промышленности. Мы работаем с 2015 года и предлагаем только качественные
        товары по приемлемым ценам с доставкой по всей России.</p>';
    $add_text = carbon_get_theme_option('el_about_addition');
    $add_text = $add_text ? $add_text : $add_text_default;
    ?>
    <div class="additional-text"><?=$add_text; ?></div>
</section>
