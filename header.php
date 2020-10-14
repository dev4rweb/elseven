<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package elseven
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <header>
        <?php do_action('header_parts') ?>
        <div class="wrapper top_header">
            <?php
//            $logo_id = carbon_get_theme_option('el_header_logo');
            // get image from admin panel
            $logo = get_template_directory_uri() . '/assets/images/logo.png' ;
            $site_name = carbon_get_theme_option('el_header_site_name');
            $site_name = $site_name ? $site_name : 'Производство оборудования для пищевой промышленности';
            //get_bloginfo('name')
            ?>
            <a href="<?php echo home_url('/'); ?>" class="logo"><img src="<?php echo $logo; ?>" alt="logo">
                <i><?php echo $site_name ?></i></a>
            <div class="menu-icon" onclick="openNav()">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="contacts">
                <div class="work-time_call-back">
                    <?php
                    $work_time = carbon_get_theme_option('el_header_work_time');
                    $work_time = $work_time ? $work_time : 'Пн-Пт: 9:00-18:00';
                    ?>
                    <span class="work_time"><?php echo $work_time ?></span>
                    <?php
                    $callback =  'Заказать обратный звонок';
                    ?>
                    <button class="callback" id="modalCallbackOpen"><i class="long_text"><?php echo $callback ?></i><i class="short_text">Обратный звонок</i></button>
                </div>
                <div class="phone_email">
                    <?php $phone_number = carbon_get_theme_option('el_header_phone_number');
                    $phone_number = $phone_number ? $phone_number : '+7 (495) 186-34-21';
                    //get_vd();
                    ?>
                    <a href="tel: +<?php echo preg_replace("/[^0-9]/", '', $phone_number); ?>"
                       class="phone_number"><?php echo $phone_number ?></a>
                    <?php
                    $email = carbon_get_theme_option('el_header_email');
                    $email = $email ? $email : 'elseven31@yandex.ru';
                    ?>
                    <a href="mailto: <?php echo $email; ?>" class="email"><?php echo $email; ?></a>
                </div>
                <div class="search_basket">
                    <div class="search" id="iSearch">
                        <div class="search-button" id="headerSearch"></div>
                        <div class="search-form" id="searchForm">
                            <form method="post" action="<?php esc_url(home_url('/')); ?>">
                                <input type="text" name="s" placeholder="Поиск по каталогу..."
                                       value="<?php get_search_query(); ?> ">
                                <input type="submit" value="Найти">
                                <span class="close" id="closeSearchForm"></span>
                            </form>
                            <div class="search-result-close">Очистить</div>
                            <div class="search-result"></div>
                        </div>
                    </div>
                    <div class="cart-container site-header-cart">
                        <?php elseven_woocommerce_cart_link() ?>
                        <div class="widget_shopping_cart_content">
                            <div class="basket_title">
                                <span id="basketContentClose">&times;</span>
                                <h3>Корзина</h3>
                            </div>
                            <?php the_widget('WC_Widget_Cart', 'title="title"'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="nav" id="headerNav">
            <span class="menu-icon-close" onclick="closeNav()"></span>
            <?php elseven_primary_menu(); ?>
        </nav>
    </header>