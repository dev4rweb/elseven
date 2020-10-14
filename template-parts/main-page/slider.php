<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directory
}
?>
<section class="main_slider" id="mainSlider">
    <!-- Slideshow container -->
    <?php
    $image = get_template_directory_uri() . '/assets/images/banner.jpg';
    $ic_arrow = get_template_directory_uri() . '/assets/images/icons/ic-arrow-right.svg';
    $args = carbon_get_theme_option('el_main_page_slider');
    //        $bgimg =  wp_get_attachment_image_url($bg, 'full');
    //        $data = json_decode($bg)->{'el_main_slider_bg'};
    //        get_pr($bg[0]['el_main_slider_title']);
    // get_pr($args[0]['el_main_slider_category']);
    ?>

    <!-- Full-width images with number and caption text -->
    <?php if (count($args) > 0): ?>
        <div class="slideshow-container">
            <?php foreach ($args as $slide) {
                $img = wp_get_attachment_image_url($slide['el_main_slider_bg'], 'full');
                $title = $slide['el_main_slider_title'];
                $description = $slide['el_main_slider_description'];
                $link = $slide['el_main_slider_category'];
                ?>
                <div class="main-slides fade">
                    <div class="bg" style="background-image: url('<?php echo $img; ?>');"></div>
                    <div class="content">
                        <h2><?php echo $title; ?></h2>
                        <h3><?php echo $description; ?></h3>
                        <a href="<?php echo $link; ?>" class="empty-btn">Открыть в каталоге <img
                                    src="<?php echo $ic_arrow ?>" alt="arrow"></a>
                    </div>
                </div>
                <?php
            };
            ?>
            <div class="arrow_box">
                <img src="<?= get_template_directory_uri() . '/assets/images/icons/slider_arrow_right.svg' ?>"
                     alt="arrow"
                     class="arrow-right"
                     onclick="plusSlides(1)">
                <img src="<?= get_template_directory_uri() . '/assets/images/icons/slider_arrow_left.svg' ?>"
                     alt="arrow"
                     class="arrow-left"
                     onclick="plusSlides(-1);">
            </div>
            <br>
            <div style="text-align:center">
                <?php
                if (count($args) > 1):
                for ($i = 0; $i < count($args); $i++) {
                    echo '<span class="dot"></span>';
                }
                endif;
                ?>
            </div>
        </div>

    <?php else: ?>
        <?php $link_to_catalog = home_url('/') . 'shop/'; ?>
        <div class="slideshow-container">
            <div class="main-slides fade">
                <div class="bg" style="background-image: url('<?php echo $image ?>');"></div>
                <div class="content">
                    <h2>Хлебные формы</h2>
                    <h3>и сопутствующее оборудование для выпекания хлеба</h3>
                    <a href="<?php echo $link_to_catalog; ?>" class="empty-btn">Открыть в каталоге <img
                                src="<?php echo $ic_arrow ?>" alt="arrow"></a>
                </div>
            </div>

            <div class="main-slides fade">
                <div class="bg" style="background-image: url('<?php echo $image ?>');"></div>
                <div class="content">
                    <h2>Хлебные формы</h2>
                    <h3>и сопутствующее оборудование для выпекания хлеба</h3>
                    <a href="<?php echo $link_to_catalog; ?>" class="empty-btn">Открыть в каталоге <img
                                src="<?php echo $ic_arrow ?>" alt="arrow"></a>
                </div>
            </div>
            <div class="main-slides fade">
                <div class="bg" style="background-image: url('<?php echo $image ?>');"></div>
                <div class="content">
                    <h2>Хлебные формы</h2>
                    <h3>и сопутствующее оборудование для выпекания хлеба</h3>
                    <a href="<?php echo $link_to_catalog; ?>" class="empty-btn">Открыть в каталоге <img
                                src="<?php echo $ic_arrow ?>" alt="arrow"></a>
                </div>
            </div>
            <br>
            <div class="arrow_box">
                <img src="<?= get_template_directory_uri() . '/assets/images/icons/slider_arrow_right.svg' ?>"
                     alt="arrow"
                     class="arrow-right"
                     onclick="plusSlides(1)">
                <img src="<?= get_template_directory_uri() . '/assets/images/icons/slider_arrow_left.svg' ?>"
                     alt="arrow"
                     class="arrow-left"
                     onclick="plusSlides(-1);">
            </div>
            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>

    <?php endif; ?>

</section>
<script>

</script>
