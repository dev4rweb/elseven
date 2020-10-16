<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}


use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', 'Настройки темы')
    ->set_icon('dashicons-carrot')
    ->add_tab('Шапка', array(
        /*Field::make('image', 'el_header_logo', 'Логотип')
            ->set_width(30),*/
        Field::make('text', 'el_header_site_name', 'Название сайта')
            ->set_attribute('placeholder', 'Производство оборудования для пищевой промышленности')
            ->set_default_value('Производство оборудования для пищевой промышленности')
            ->set_width(70),
        Field::make('text', 'el_header_work_time', 'Время работы')
            ->set_attribute('placeholder', 'Пн-Пт: 9:00-18:00')
            ->set_default_value('Пн-Пт: 9:00-18:00')
            ->set_width(50),
        /*Field::make('text', 'el_header_callback', 'Кнопка обратного звонка')
            ->set_attribute('placeholder', 'Заказать обратный звонок')
            ->set_default_value('Заказать обратный звонок'),*/
    ))
    ->add_tab('Подвал', array(
        Field::make('text', 'el_footer_copyright', 'Копирайт')
            ->set_attribute('placeholder', '© 2015-2020 ЭЛСЕМЬ')
            ->set_default_value('© 2015-2020 ЭЛСЕМЬ')
            ->set_width(70),
    ))
    ->add_tab('Главная страница', array(
        Field::make('textarea', 'el_main_page_heading_title', 'Заголовок сайта')
            ->set_attribute('placeholder',
                'Более <i>100 видов</i> литых хлебных форм от производителя.<br>
Доставка по всей России')
            ->set_default_value('Более <i>100 видов</i> литых хлебных форм от производителя.<br>
Доставка по всей России')
            ->set_rows(3)
            ->set_width(100),
        Field::make('text', 'el_main_page_heading_advantage_one', 'Преимущества 1')
            ->set_attribute('placeholder', 'Собственное производство')
            ->set_width(100),
        Field::make('text', 'el_main_page_heading_advantage_two', 'Преимущества 2')
            ->set_attribute('placeholder', 'Антипригарное покрытие')
            ->set_width(100),
        Field::make('text', 'el_main_page_heading_advantage_three', 'Преимущества 3')
            ->set_attribute('placeholder', 'Индивидуальный подбор форм')
            ->set_width(100),
        Field::make('complex', 'el_main_page_slider', 'Слайдер')
            ->add_fields(array(
                Field::make('image', 'el_main_slider_bg', 'Фото')->set_width(33),
                Field::make('text', 'el_main_slider_title', 'Заголовок')
                    ->set_attribute('placeholder', 'Хлебные формы')
                    ->set_width(33),
                Field::make('text', 'el_main_slider_description', 'Описание')
                    ->set_attribute('placeholder', 'и сопутствующее оборудование для выпекания хлеба')
                    ->set_width(33),
                Field::make('select', 'el_main_slider_category', 'Выбор категории')
                    ->set_options(function () {
                        $categories = array();

                        $taxonomy = 'product_cat';
                        $orderby = 'name';
                        $show_count = 0;      // 1 for yes, 0 for no
                        $pad_counts = 0;      // 1 for yes, 0 for no
                        $hierarchical = 1;      // 1 for yes, 0 for no
                        $title = '';
                        $empty = 0;

                        $args = array(
                            'taxonomy' => $taxonomy,
                            'orderby' => $orderby,
                            'show_count' => $show_count,
                            'pad_counts' => $pad_counts,
                            'hierarchical' => $hierarchical,
                            'title_li' => $title,
                            'hide_empty' => $empty
                        );
                        $all_categories = get_categories($args);
                        foreach ($all_categories as $cat) {
                            if ($cat->category_parent == 0) {
                                // get links and all category
                                $categories[get_term_link($cat->slug, 'product_cat')] = $cat->name;
                            }
                        }
                        return $categories;
                    }),
            )),

        Field::make('html', 'el_main_page_advance_section')
            ->set_html('<h1>БЛОК - Наши преимущества</h1>'),

        Field::make('text', 'el_main_page_advance_title_one', 'Преимущества заголовок 1')
            ->set_attribute('placeholder', 'Широкий ассортимент')
            ->set_default_value('Широкий ассортимент')
            ->set_width(25),
        Field::make('textarea', 'el_main_page_advance_ta_one', 'Преимущества текст 1')
            ->set_attribute('placeholder', 'Более 100 видов литых форм, а также сварные формы любого размера из нержавейки, алюминия и углеродистой стали')
            ->set_default_value('Более 100 видов литых форм, а также сварные формы любого размера из нержавейки, алюминия и углеродистой стали')
            ->set_width(75),

        Field::make('text', 'el_main_page_advance_title_two', 'Преимущества заголовок 2')
            ->set_attribute('placeholder', 'Уникальность')
            ->set_default_value('Уникальность')
            ->set_width(25),
        Field::make('textarea', 'el_main_page_advance_ta_two', 'Преимущества текст 2')
            ->set_attribute('placeholder', 'Формы с логотипом (буквой) вашей компании. Логотип защитит вашу продукцию от подделки')
            ->set_default_value('Формы с логотипом (буквой) вашей компании. Логотип защитит вашу продукцию от подделки')
            ->set_width(75),

        Field::make('text', 'el_main_page_advance_title_three', 'Преимущества заголовок 3')
            ->set_attribute('placeholder', 'Продуктивность')
            ->set_default_value('Продуктивность')
            ->set_width(25),
        Field::make('textarea', 'el_main_page_advance_ta_three', 'Преимущества текст 3')
            ->set_attribute('placeholder', 'Сборка в секции по 2,3,4,5,6 и более форм. Позволяют ускорить процесс загрузки и выемки хлеба из печи')
            ->set_default_value('Сборка в секции по 2,3,4,5,6 и более форм. Позволяют ускорить процесс загрузки и выемки хлеба из печи')
            ->set_width(75),

        Field::make('text', 'el_main_page_advance_title_four', 'Преимущества заголовок 4')
            ->set_attribute('placeholder', 'Безопасность')
            ->set_default_value('Безопасность')
            ->set_width(25),
        Field::make('textarea', 'el_main_page_advance_ta_four', 'Преимущества текст 4')
            ->set_attribute('placeholder', 'Металлы и сплавы разрешены для пищевого производства')
            ->set_default_value('Металлы и сплавы разрешены для пищевого производства')
            ->set_width(75),

        Field::make('text', 'el_main_page_advance_title_five', 'Преимущества заголовок 5')
            ->set_attribute('placeholder', 'Универсальность')
            ->set_default_value('Универсальность')
            ->set_width(25),
        Field::make('textarea', 'el_main_page_advance_ta_five', 'Преимущества текст 5')
            ->set_attribute('placeholder', 'Подберем формы под габариты Вашей печи')
            ->set_default_value('Подберем формы под габариты Вашей печи')
            ->set_width(75),

        Field::make('text', 'el_main_page_advance_title_six', 'Преимущества заголовок 6')
            ->set_attribute('placeholder', 'Индивидуальность')
            ->set_default_value('Индивидуальность')
            ->set_width(25),
        Field::make('textarea', 'el_main_page_advance_ta_six', 'Преимущества текст 6')
            ->set_attribute('placeholder', 'Изготовим литую форму по Вашим размерам, при заказе от 500 шт. Изготовление оснастки за наш счет')
            ->set_default_value('Изготовим литую форму по Вашим размерам, при заказе от 500 шт. Изготовление оснастки за наш счет')
            ->set_width(75),
    ))
    ->add_tab('О компании', array(
        Field::make('image', 'el_about_top_photo', 'Фото верхнего блока')
            ->set_width(25),
        Field::make('rich_text', 'el_about_info', 'Текст верхнего блока')
            ->set_attribute('placeholder', '<b>Элсемь</b> - это производитель качественного оборудования для пищевой промышленности. Мы работаем с 2015 года и предлагаем только качественные товары по приемлемым ценам с доставкой по всей России.')
            ->set_default_value('Элсемь - это производитель качественного оборудования для пищевой промышленности. Мы работаем с 2015 года и предлагаем только качественные товары по приемлемым ценам с доставкой по всей России.')
            ->set_width(75),
        Field::make('rich_text', 'el_about_promise', 'Блок "Мы гарантируем"')
            ->set_attribute('placeholder', '<p><b>Мы гарантируем:</b></p>
                                            <ul>
                                            <li>качественную продукцию;</li>
                                            <li>индивидуальный подбор товаров;</li>
                                            <li>большой ассортимент оборудования для пищевой промышленности;</li>
                                            </ul>                                            
                            ')
            ->set_default_value('<p><b>Мы гарантируем:</b></p>
                                <ul>
                                <li>качественную продукцию;</li>
                                <li>индивидуальный подбор товаров;</li>
                                <li>большой ассортимент оборудования для пищевой промышленности;</li>
                                </ul>
                                ')
            ->set_width(75),
        Field::make('textarea', 'el_about_description', 'Блок описания')
            ->set_attribute('placeholder', 'Элсемь - это производитель качественного оборудования для пищевой промышленности. Мы работаем с 2015 года и предлагаем только качественные товары по приемлемым ценам с доставкой по всей России. Элсемь - это производитель качественного оборудования для пищевой промышленности. Мы работаем с 2015 года и предлагаем только качественные товары по приемлемым ценам с доставкой по всей России.')
            ->set_default_value('Элсемь - это производитель качественного оборудования для пищевой промышленности. Мы работаем с 2015 года и предлагаем только качественные товары по приемлемым ценам с доставкой по всей России. Элсемь - это производитель качественного оборудования для пищевой промышленности. Мы работаем с 2015 года и предлагаем только качественные товары по приемлемым ценам с доставкой по всей России.'),
        Field::make('media_gallery', 'el_about_media_gallery', 'Галерея')
            ->set_type(array('image')),
        Field::make('rich_text', 'el_about_addition', 'Блок дополнительной информации')
            ->set_attribute('placeholder', 'Элсемь - это производитель качественного оборудования для пищевой промышленности. Мы работаем с 2015 года и
        предлагаем только качественные товары по приемлемым ценам с доставкой по всей России. Элсемь - это производитель
        качественного оборудования для пищевой промышленности. Мы работаем с 2015 года и предлагаем только качественные
        товары по приемлемым ценам с доставкой по всей России.')
            ->set_default_value('<p>Элсемь - это производитель качественного оборудования для пищевой промышленности. Мы работаем с 2015 года и
        предлагаем только качественные товары по приемлемым ценам с доставкой по всей России. Элсемь - это производитель
        качественного оборудования для пищевой промышленности. Мы работаем с 2015 года и предлагаем только качественные
        товары по приемлемым ценам с доставкой по всей России.</p>'),
    ))
    ->add_tab('Контакты', array(
        Field::make('image', 'el_contacts_photo', 'Фото'),
        Field::make('text', 'el_footer_address', 'Адрес')
            ->set_attribute('placeholder', 'г. Белгород, ул. Корочанская, д. 41а, офис 305')
            ->set_default_value('г. Белгород, ул. Корочанская, д. 41а, офис 305')
            ->set_width(50),
        Field::make('text', 'el_contact_work_time', 'Время работы')
            ->set_attribute('placeholder', 'Понедельник - Пятница: 9:00-18:00')
            ->set_default_value('Понедельник - Пятница: 9:00-18:00')
            ->set_width(50),
        Field::make('text', 'el_header_phone_number', 'Номер телефона')
            ->set_attribute('placeholder', '+7 (495) 186-34-21')
            ->set_default_value('+7 (495) 186-34-21')
            ->set_width(50),
        Field::make('text', 'el_header_email', 'Email')
            ->set_attribute('placeholder', 'elseven31@yandex.ru')
            ->set_default_value('elseven31@yandex.ru')
            ->set_width(50),
        Field::make('text', 'el_footer_company', 'Название компании')
            ->set_attribute('placeholder', 'ООО "ЭЛСЕМЬ"')
            ->set_default_value('ООО "ЭЛСЕМЬ"')
            ->set_width(50),
    ))
    ->add_tab('Соцсети', array(
        Field::make( 'text', 'el_social_url_instagram', 'Instagram URL' )
            ->set_help_text( 'Enter your Instagram page url' )
            ->set_width(50),
        Field::make( 'text', 'el_social_url_vk', 'VK URL' )
            ->set_help_text( 'Enter your VK profile url' )
            ->set_width(50),
        Field::make( 'text', 'el_social_url_whatsapp', 'Whats App ' )
            ->set_help_text( 'Enter your Whats App' )
            ->set_attribute('placeholder', '794951863421')
            ->set_width(50),
        Field::make( 'text', 'el_social_url_viber', 'Viber' )
            ->set_help_text( 'Enter your Viber' )
            ->set_attribute('placeholder', '794951863421')
            ->set_width(50),
    ));

