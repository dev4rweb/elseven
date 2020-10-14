<?php

use Carbon_Fields\Carbon_Fields;

add_action('after_setup_theme', 'crb_load');
function crb_load()
{
    load_template(get_template_directory() . '/includes/carbon-fields/vendor/autoload.php');
    Carbon_Fields::boot();
}

add_action('carbon_fields_register_fields', 'elseven_register_custom_fields');
function elseven_register_custom_fields()
{
    require get_template_directory() . '/includes/custom-fields-options/metabox.php';
    require get_template_directory() . '/includes/custom-fields-options/theme-options.php';
}

/*
 * Подключение настроек темы
 */
require get_template_directory() . '/includes/theme-settings.php';

/*
 * Подключение области виджетов
 */
require get_template_directory() . '/includes/widget-areas.php';

/*
 * Подключение скриптов и стилей
 */
require get_template_directory() . '/includes/enqueue-script-style.php';

/*
 * Вспомогательные функции
 */
require get_template_directory() . '/includes/helpers.php';

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom_footer.php';

/**
 * Implement the Custom Main page feature.
 */
require get_template_directory() . '/includes/custom-main-page.php';

/**
 * Implement the Custom About page feature.
 */
require get_template_directory() . '/includes/custom-about-page.php';

/**
 * Implement the Custom Contacts page feature.
 */
require get_template_directory() . '/includes/custom-contacts-page.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/includes/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

require get_template_directory() . '/includes/ajax.php';

require get_template_directory() . '/includes/navigations.php';
/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/includes/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
    require get_template_directory() . '/includes/woocommerce.php';
    require get_template_directory() . '/woocommerce/includes/wc-functions.php';
    require get_template_directory() . '/woocommerce/includes/wc-functions-remove.php';
    require get_template_directory() . '/woocommerce/includes/wc_functions_cart.php';
//    require get_template_directory() . '/woocommerce/cart/mini-cart.php.php';
}
