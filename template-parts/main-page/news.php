<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directory
}
?>
<section class="news wrapper">
    <h2>Новости</h2>
    <div class="news_container">
        <?php
        // параметры по умолчанию
        $posts = get_posts(array(
            'numberposts' => 7,
            'category' => 0,
            'orderby' => 'date',
            'order' => 'DESC',
            'include' => array(),
            'exclude' => array(),
            'meta_key' => '',
            'meta_value' => '',
            'post_type' => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ));

        foreach ($posts as $post) {
            global $post;
            setup_postdata($post);
            // формат вывода the_title() ...
            $test = wp_get_post_categories($post->ID, array('fields' => 'all'));
            if ($test[0]->slug == 'news') {
                $size = 'full';
                $imgUrl = get_the_post_thumbnail_url($post, $size);
                ?>
                <a href="<?php echo the_permalink(); ?>" class="news_cart">
                    <div class="img" style="background-image: url('<?php echo $imgUrl; ?>')"></div>
                    <div>
                        <h4><?php echo the_title(); ?></h4>
                        <p><?php echo get_the_date(); ?></p>
                    </div>
                </a>
                <?php
            }
        }
        wp_reset_postdata(); // сброс


        //    get_pr(get_the_category_list());
        ?>

    </div>
    <a class="all_news" href="<?php echo home_url('/'); ?>category/news/">Все новости</a>
</section>
