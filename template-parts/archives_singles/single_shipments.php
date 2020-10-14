<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directory
}
?>
<div class="single_shipments wrapper_archive">
    <header class="entry-header">
        <?php
        //        echo is_category('shipments');
        if (is_singular()) :
            the_title('<h1 class="entry-title">', '</h1>');
        else :
            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        endif;

        if ('post' === get_post_type()) :
            ?>
            <span class="entry-date"><?php echo get_the_date(); ?></span>
            <div class="entry-meta">
                <?php
                /*elseven_posted_on();
                elseven_posted_by();*/
                ?>
            </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->

    <?php elseven_post_thumbnail(); ?>

    <?php
    if (is_singular()):
        ?>
        <div class="entry-content">
            <?php
            the_content(
                sprintf(
                    wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                        __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'elseven'),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post(get_the_title())
                )
            );

            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'elseven'),
                    'after' => '</div>',
                )
            );
            ?>
        </div><!-- .entry-content -->
    <?php endif; ?>
</div>