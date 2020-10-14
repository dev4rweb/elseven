<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directory
}
?>
<section class="advantages">
    <div class="wrapper">
        <h2>Наши преимущества</h2>
        <div class="advance_container">

            <?php
            $advance_title_one = carbon_get_theme_option('el_main_page_advance_title_one');
            $advance_title_one = $advance_title_one ? $advance_title_one : 'Широкий ассортимент';

            $advance_text_one = carbon_get_theme_option('el_main_page_advance_ta_one');
            $advance_text_one = $advance_text_one ? $advance_text_one : 'Более 100 видов литых форм, а также сварные формы любого размера из нержавейки, алюминия и углеродистой стали';
            ?>
            <div class="advance_box">
                <div class="image">
                    <div class="icon"
                         style='background: url("<?php echo get_template_directory_uri() ?>/assets/images/icons/ic24-bread.svg") no-repeat;'></div>
                </div>
                <h4><?php echo $advance_title_one; ?></h4>
                <div class="line"></div>
                <p><?php echo $advance_text_one; ?></p>
            </div>

            <?php
            $advance_title_two = carbon_get_theme_option('el_main_page_advance_title_two');
            $advance_title_two = $advance_title_two ? $advance_title_two : 'Уникальность';

            $advance_text_two = carbon_get_theme_option('el_main_page_advance_ta_two');
            $advance_text_two = $advance_text_two ? $advance_text_two : 'Формы с логотипом (буквой) вашей компании. Логотип защитит вашу продукцию от подделки';
            ?>
            <div class="advance_box">
                <div class="image">
                    <div class="icon"
                         style='background: url("<?php echo get_template_directory_uri() ?>/assets/images/icons/ic24-bolt.svg") no-repeat;'></div>
                </div>
                <h4><?php echo $advance_title_two; ?></h4>
                <div class="line"></div>
                <p><?php echo $advance_text_two; ?></p>
            </div>

            <?php
            $advance_title_three = carbon_get_theme_option('el_main_page_advance_title_three');
            $advance_title_three = $advance_title_three ? $advance_title_three : 'Продуктивность';

            $advance_text_three = carbon_get_theme_option('el_main_page_advance_ta_three');
            $advance_text_three = $advance_text_three ? $advance_text_three : 'Сборка в секции по 2,3,4,5,6 и более форм. Позволяют ускорить процесс загрузки и выемки хлеба из печи';
            ?>
            <div class="advance_box">
                <div class="image">
                    <div class="icon"
                         style='background: url("<?php echo get_template_directory_uri() ?>/assets/images/icons/ic24-stopwatch.svg") no-repeat;'></div>
                </div>
                <h4><?php echo $advance_title_three; ?></h4>
                <div class="line"></div>
                <p><?php echo $advance_text_three; ?></p>
            </div>

            <?php
            $advance_title_four = carbon_get_theme_option('el_main_page_advance_title_four');
            $advance_title_four = $advance_title_four ? $advance_title_four : 'Безопасность';

            $advance_text_four = carbon_get_theme_option('el_main_page_advance_ta_four');
            $advance_text_four = $advance_text_four ? $advance_text_four : 'Металлы и сплавы разрешены для пищевого производства';
            ?>
            <div class="advance_box">
                <div class="image">
                    <div class="icon"
                         style='background: url("<?php echo get_template_directory_uri() ?>/assets/images/icons/ic24-verified.svg") no-repeat;'></div>
                </div>
                <h4><?php echo $advance_title_four; ?></h4>
                <div class="line"></div>
                <p><?php echo $advance_text_four; ?></p>
            </div>

            <?php
            $advance_title_five = carbon_get_theme_option('el_main_page_advance_title_five');
            $advance_title_five = $advance_title_five ? $advance_title_five : 'Универсальность';

            $advance_text_five = carbon_get_theme_option('el_main_page_advance_ta_five');
            $advance_text_five = $advance_text_five ? $advance_text_five : 'Подберем формы под габариты Вашей печи';
            ?>
            <div class="advance_box">
                <div class="image">
                    <div class="icon"
                         style='background: url("<?php echo get_template_directory_uri() ?>/assets/images/icons/ic24-extension.svg") no-repeat;'></div>
                </div>
                <h4><?php echo $advance_title_five; ?></h4>
                <div class="line"></div>
                <p><?php echo $advance_text_five; ?></p>
            </div>

            <?php
            $advance_title_six = carbon_get_theme_option('el_main_page_advance_title_six');
            $advance_title_six = $advance_title_six ? $advance_title_six : 'Индивидуальность';

            $advance_text_six = carbon_get_theme_option('el_main_page_advance_ta_six');
            $advance_text_six = $advance_text_six ? $advance_text_six : 'Изготовим литую форму по Вашим размерам, при заказе от 500 шт. Изготовление оснастки за наш счет';
            ?>
            <div class="advance_box">
                <div class="image">
                    <div class="icon"
                         style='background: url("<?php echo get_template_directory_uri() ?>/assets/images/icons/ic24-star-empty.svg") no-repeat;'></div>
                </div>
                <h4><?php echo $advance_title_six; ?></h4>
                <div class="line"></div>
                <p><?php echo $advance_text_six; ?></p>
            </div>

        </div>
    </div>
</section>
