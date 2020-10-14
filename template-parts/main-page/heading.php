<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directory
}
?>
<section class="wrapper heading">
    <?php
    $title = carbon_get_theme_option('el_main_page_heading_title');
    $title = $title? $title: 'Более <i>100 видов</i> литых хлебных форм от производителя.<br>
Доставка по всей России';
    ?>
    <h1><?php echo $title; ?></h1>
    <div class="container">

        <?php
        $advantage_one = carbon_get_theme_option('el_main_page_heading_advantage_one');
        $advantage_one = $advantage_one ? $advantage_one : 'Собственное производство';
        ?>
        <p><?php echo $advantage_one; ?></p>

        <?php
        $advantage_two = carbon_get_theme_option('el_main_page_heading_advantage_two');
        $advantage_two = $advantage_two ? $advantage_two : 'Антипригарное покрытие';
        ?>
        <p><?php echo $advantage_two; ?></p>

        <?php
        $advantage_three = carbon_get_theme_option('el_main_page_heading_advantage_three');
        $advantage_three = $advantage_three ? $advantage_three : 'Индивидуальный подбор форм';
        ?>
        <p><?php echo $advantage_three; ?></p>
    </div>
</section>
