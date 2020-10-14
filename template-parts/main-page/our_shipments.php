<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directory
}
?>
<section class="our_shipments wrapper">
    <h2>Наши отгрузки</h2>
    <div class="shipments_container">
        <?php
//        get_vd(count(get_posts()));
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
//
        foreach ($posts as $post) {
            setup_postdata($post);
            // формат вывода the_title() ...
            $shipment = wp_get_post_categories($post->ID, array('fields' => 'all'));
            if ($shipment[0]->slug == 'shipments') {
                $size = 'full';
                $imgUrl = get_the_post_thumbnail_url($post, $size);
//                get_pr($imgUrl);
                ?>
                <div class="shipment_cart">
                    <div class="ship_box">
                        <div class="img" style="background-image: url('<?php echo $imgUrl; ?>')"></div>
                        <div class="wrap_text">
                            <h4><?php echo the_title(); ?></h4>
                            <p><?php echo get_the_date(); ?></p>
                        </div>
                    </div>
                    <div class="ship-middle">
                        <a href="<?php echo the_permalink(); ?>">Посмотреть отгрузку</a>
                    </div>
                </div>

                <?php
            }
        }
        wp_reset_postdata(); // сброс


//            get_pr(get_the_category_list());
        ?>

    </div>
    <a class="all_shipments" href="<?php echo home_url('/'); ?>category/shipments/">Все отгрузки</a>
</section>
<hr>
