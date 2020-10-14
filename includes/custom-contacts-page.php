<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

add_action('contacts-page-parts', 'elseven_contacts_parts', 10);
function elseven_contacts_parts()
{
    get_template_part('template-parts/contacts');
}

add_action('contacts-page-parts', 'elseven_contacts_callback_form_parts', 20);
function elseven_contacts_callback_form_parts()
{
    get_template_part('template-parts/form_callback_light');
}