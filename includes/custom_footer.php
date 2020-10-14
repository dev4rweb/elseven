<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
add_action('el_modal_callback', 'elseven_modal_callback', 10);
function elseven_modal_callback()
{
    get_template_part('template-parts/modal_callback');
}