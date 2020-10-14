<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

add_action('about-page-parts', 'elseven_about_parts', 10);
function elseven_about_parts()
{
    get_template_part('template-parts/about');
}

add_action('about-page-parts', 'elseven_callback_form_parts', 20);
function elseven_callback_form_parts()
{
    get_template_part('template-parts/form_callback_light');
}