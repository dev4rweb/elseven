<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

add_action('categories-page-parts', 'elseven_category_parts', 10);
function elseven_category_parts()
{
    get_template_part('template-parts/categories');
}

add_action('categories-page-parts', 'elseven_category_callback_form', 20);
function elseven_category_callback_form()
{
    get_template_part('template-parts/form_callback');
}

add_action('categories-page-parts', 'elseven_category_advantages', 30);
function elseven_category_advantages()
{
    get_template_part('template-parts/main-page/advantages');
}

add_action('categories-page-parts', 'elseven_category_shipments', 40);
function elseven_category_shipments()
{
    get_template_part('template-parts/main-page/our_shipments');
}