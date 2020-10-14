<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'elseven'); ?></a>
    <header id="masthead" class="site-header">
        <div class="site-branding">
            <?php
            the_custom_logo();
            if (is_front_page() && is_home()) :
                ?>
                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                          rel="home"><?php bloginfo('name'); ?></a></h1>
            <?php
            else :
                ?>
                <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                         rel="home"><?php bloginfo('name'); ?></a></p>
            <?php
            endif;
            $elseven_description = get_bloginfo('description', 'display');
            if ($elseven_description || is_customize_preview()) :
                ?>
                <p class="site-description"><?php echo $elseven_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    ?></p>
            <?php endif; ?>
        </div><!-- .site-branding -->

        <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu"
                    aria-expanded="false"><?php esc_html_e('Primary Menu', 'elseven'); ?></button>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id' => 'primary-menu',
                )
            );
            ?>
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->


    <!--custom header-->
    <?php
    /**
     * Sample implementation of the Custom Header feature
     *
     * You can add an optional custom header image to header.php like so ...
     *
    <?php the_header_image_tag(); ?>
     *
     * @link https://developer.wordpress.org/themes/functionality/custom-headers/
     *
     * @package elseven
     */

    /**
     * Set up the WordPress core custom header feature.
     *
     * @uses elseven_header_style()
     */
    function elseven_custom_header_setup() {
        add_theme_support(
            'custom-header',
            apply_filters(
                'elseven_custom_header_args',
                array(
                    'default-image'      => '',
                    'default-text-color' => '000000',
                    'width'              => 1000,
                    'height'             => 250,
                    'flex-height'        => true,
                    'wp-head-callback'   => 'elseven_header_style',
                )
            )
        );
    }
    add_action( 'after_setup_theme', 'elseven_custom_header_setup' );

    if ( ! function_exists( 'elseven_header_style' ) ) :
    /**
     * Styles the header image and text displayed on the blog.
     *
     * @see elseven_custom_header_setup().
     */
    function elseven_header_style() {
    $header_text_color = get_header_textcolor();

    /*
     * If no custom options for text are set, let's bail.
     * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
     */
    if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
        return;
    }

    // If we get this far, we have custom styles. Let's do this.
    ?>
    <style type="text/css">
        <?php
        // Has the text been hidden?
        if ( ! display_header_text() ) :
            ?>
        .site-title,
        .site-description {
            position: absolute;
            clip: rect(1px, 1px, 1px, 1px);
        }
        <?php
        // If the user has set a custom color for the text use that.
    else :
        ?>
        .site-title a,
        .site-description {
            color: #<?php echo esc_attr( $header_text_color ); ?>;
        }
        <?php endif; ?>
    </style>
<?php
}
endif;