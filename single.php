<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package elseven
 */

get_header();
?>

    <main id="primary" class="site-main">
        <?php
        while (have_posts()) :
            ?>
            <?php
            $category = get_the_category();
            $firstCategory = $category[0]->cat_name;
            $path_to_archive = home_url('/category/') . $category[0]->slug;
            $icon_path = get_template_directory_uri() . "/assets/images/icons/ic15-caret-right.svg";
            ?>
            <div class="breadcrumb-single-container">
                <div class="wrapper_archive">
                    <a href="<?php echo $path_to_archive; ?>" class='breadcrumb'>
                        <p><?php echo $firstCategory; ?>
                            <img src="<?php echo $icon_path; ?>" alt="icon">
                            <span><?php echo get_the_title(); ?></span>
                        </p>
                    </a>

                </div>
            </div>
            <?php
            the_post();
            get_template_part('template-parts/content', get_post_type());

            ?>
            <div class="navigation_container wrapper_archive">
                <?php
                $ic_left = get_template_directory_uri() . '/assets/images/icons/ic24-chevron-left.svg';
                $ic_right = get_template_directory_uri() . '/assets/images/icons/ic24-chevron-right.svg';
                $ic_center = get_template_directory_uri() . '/assets/images/icons/ic24-view-boxes.svg';
                $center_word = 'Все новости';
                if ($firstCategory == 'Наши отгрузки') {
                    $center_word = 'Все отгрузки';
                }
                the_post_navigation(
                    array(
                        'prev_text' => '<span class="nav-title"><img src="' . $ic_left . '" alt="icon"></span>' . '<span class="nav-subtitle">' . esc_html__('Предыдущая новость', 'elseven') . '</span>',
                        'next_text' => '<span class="nav-subtitle">' . esc_html__('Следующая новость', 'elseven') . '</span> <span class="nav-title"><img src="' . $ic_right . '" alt="icon"></span>',
                    )
                );
                ?>
                <a href="<?php echo $path_to_archive; ?>" class="center_btn"><img src="<?php echo $ic_center; ?>"
                                                                                  alt="icon"><?php echo $center_word; ?></a>
            </div>
        <?php

            // If comments are open or we have at least one comment, load up the comment template.
            /*			if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;*/

        endwhile; // End of the loop.
        ?>
        <?php get_template_part('template-parts/form_callback_light'); ?>
    </main><!-- #main -->

<?php
//get_sidebar();
get_footer();
