<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directory
}
?>
<section class="callback_form">
    <div class="form-wrapper">
        <h2>Отправьте заявку и узнайте цены на нашу продукцию и услуги</h2>
        <?php if ($_SERVER['HTTP_HOST'] == 'elseven') {
            // for local
            echo do_shortcode('[contact-form-7 id="97" title="Отправьте заявку и узнайте цены на нашу продукцию и услуги"]');
        } else {
            echo do_shortcode('[contact-form-7 id="74" title="Отправьте заявку и узнайте цены на нашу продукцию и услуги"]');
        } ?>
    </div>
</section>
