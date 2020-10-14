<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

add_action('main-page-parts', 'elseven_heading_part', 10);
function elseven_heading_part()
{
    get_template_part('template-parts/main-page/heading');
}

add_action('main-page-parts', 'elseven_slider_part', 20);
function elseven_slider_part()
{
    get_template_part('template-parts/main-page/slider');
}

add_action('main-page-parts', 'elseven_catalog_part', 30);
function elseven_catalog_part() {
    get_template_part('template-parts/main-page/catalog');
}

add_action('main-page-parts', 'elseven_callback_form_part', 40);
function elseven_callback_form_part() {
    get_template_part('template-parts/form_callback');
}

add_action('main-page-parts', 'elseven_advantages_part', 50);
function elseven_advantages_part() {
    get_template_part('template-parts/main-page/advantages');
}

add_action('main-page-parts', 'elseven_our_shipments_part', 60);
function elseven_our_shipments_part() {
    get_template_part('template-parts/main-page/our_shipments');
}

add_action('main-page-parts', 'elseven_news_part', 70);
function elseven_news_part() {
    get_template_part('template-parts/main-page/news');
}