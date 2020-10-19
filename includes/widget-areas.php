<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function elseven_widgets_init() {
    register_sidebar(
        array(
            'name'          => 'Сайдбар',
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'elseven' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );
    register_sidebar(
        array(
            'name'          => 'Сайдбар магазина',
            'id'            => 'sidebar-shop',
            'description'   => esc_html__( 'Add widgets here.', 'elseven' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );
    register_sidebar(
        array(
            'name'          => 'Подвал Контакты',
            'id'            => 'footer-1',
            'description'   => esc_html__( 'Add widgets here.', 'elseven' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );
    register_sidebar(
        array(
            'name'          => 'Подвал Компания',
            'id'            => 'footer-2',
            'description'   => esc_html__( 'Add widgets here.', 'elseven' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );
    register_sidebar(
        array(
            'name'          => 'Подвал Каталог',
            'id'            => 'footer-3',
            'description'   => esc_html__( 'Add widgets here.', 'elseven' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );
    register_sidebar(
        array(
            'name'          => 'Подвал Соцконтакты',
            'id'            => 'footer-4',
            'description'   => esc_html__( 'Add widgets here.', 'elseven' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'elseven_widgets_init' );