<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directory
}
?>
<section class="wrapper heading">
    <?php
    $title = carbon_get_theme_option('el_main_page_heading_title');
    $title = $title ? $title : 'Более <i>100 видов</i> литых хлебных форм от производителя.<br>
Доставка по всей России';
    ?>
    <h1><?php echo $title; ?></h1>
    <div class="container">

        <?php
        $advantage_one = carbon_get_theme_option('el_main_page_heading_advantage_one');
        $advantage_two = carbon_get_theme_option('el_main_page_heading_advantage_two');
        $advantage_three = carbon_get_theme_option('el_main_page_heading_advantage_three');

        if (!$advantage_one && !$advantage_two && !$advantage_three) {
            $advantage_one = 'Собственное производство';
            $advantage_two = 'Антипригарное покрытие';
            $advantage_three = 'Индивидуальный подбор форм';
            ?>
            <p><?php echo $advantage_one; ?></p>
            <p><?php echo $advantage_two; ?></p>
            <p><?php echo $advantage_three; ?></p>
            <?php
        } else {
            if ($advantage_one) echo "<p>" . $advantage_one . "</p>";
            if ($advantage_two) echo "<p>" . $advantage_two . "</p>";
            if ($advantage_three) echo "<p>" . $advantage_three . "</p>";
        }
        ?>
    </div>
</section>
