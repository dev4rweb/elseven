<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}


if (!function_exists('get_pr')) {
    /**
     * Debug function print_r
     *
     * @param mixed $var
     * @param boolean $die
     */
    function get_pr($var, $die = true)
    {
        echo '<pre>';
        print_r($var);
        echo '</pre>';
        if ($die) {
            die();
        }
    }
}
if (!function_exists('get_vd')) {
    /**
     * Debug function var_dump
     *
     * @param mixed $var
     * @param boolean $die
     */
    function get_vd($var, $die = true)
    {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
        if ($die) {
            die();
        }
    }
}
if (!function_exists('get_num_ending')) {
    /**
     * Склонения числительных
     *
     * @param $number
     * @param $ending_array
     *
     * @return mixed
     */
    function get_num_ending($number, $ending_array)
    {
        $number = $number % 100;
        if ($number >= 11 && $number <= 19) {
            $ending = $ending_array[2];
        } else {
            $i = $number % 10;
            switch ($i) {
                case (1):
                    $ending = $ending_array[0];
                    break;
                case (2):
                case (3):
                case (4):
                    $ending = $ending_array[1];
                    break;
                default:
                    $ending = $ending_array[2];
            }
        }

        return $ending;
    }
}

if (!function_exists('get_weekday')) {
    /**
     * Получение названия дня недели на русском языке
     *
     * @param $date
     *
     * @return string
     */
    function get_weekday($date)
    {
        $ru_weekdays = array( 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье' );
        $en_weekdays = array( 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday' );
        $ru_months = array( 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь' );
        $en_months = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' );
        $en_date = str_replace($ru_months, $en_months, $date);
        $weekdays = $en_date === $date ? $en_weekdays : $ru_weekdays;
        return $weekdays[ DateTime::createFromFormat( 'M j, Y', $en_date )->format( 'N' )-1 ]." $date"; // PHP 5.3+

        /*
         * echo get_weekday( 'Октябрь 13, 2015' ); // Вторник Октябрь 13, 2015
         * echo get_weekday( 'October 13, 2015' ); // Tuesday October 13, 2015
         *
         * $datetime = DateTime::createFromFormat('YmdHi', '201308131830');
         * echo $datetime->format('D'); // long
         * echo $datetime->format('l'); // short
        */
    }
}

if (!function_exists('get_current_item_nav_menu')) {
    /**
     * Получение названия меню в текущей вкладке
     *
     * @param $loc - id menu or slug
     * for example header_menu
     *
     * @return string
     */

    function get_current_item_nav_menu($loc)
    {
        global $post;
        $name = '';

        $locals = get_nav_menu_locations(); // get all menus

        $menu = wp_get_nav_menu_object($locals[$loc]);

        if ($menu) {

            $items = wp_get_nav_menu_items($menu->term_id);

            foreach ($items as $k => $v) {
                // Check if this menu item links to the current page
                if ($items[$k]->object_id == $post->ID) {
                    $name = $items[$k]->title;
                    break;
                }
            }
        }
        return $name;
    }
}