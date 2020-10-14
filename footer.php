<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package elseven
 */

?>

<footer id="colophon" class="site-footer">
    <div class="wrapper footer">
        <div class="social-box">
            <?php if (is_active_sidebar('footer-4')) : ?>
                <?php dynamic_sidebar('footer-4'); ?>
            <?php endif; ?>

            <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-footer.png"
                 alt="logo">
            <div class="social-container">
                <?php
                $instagram_url = carbon_get_theme_option('el_social_url_instagram');
                if ($instagram_url): ?>
                    <a href="<?= $instagram_url; ?>"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/instagram.svg"
                                alt="instagram" width="32" height="32"></a>
                <?php endif; ?>

                <?php
                $vk_url = carbon_get_theme_option('el_social_url_vk');
                if ($vk_url): ?>
                    <a href="<?= $vk_url; ?>>"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/vk.svg"
                                alt="vk"
                                width="32" height="32"></a>
                <?php endif; ?>

                <?php
                $whats_app_url = carbon_get_theme_option('el_social_url_whatsapp');
                if ($whats_app_url): ?>
                    <a href="whatsapp://send?phone=<?= $whats_app_url; ?>"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/whatsapp.svg"
                                alt="whatsapp" width="32" height="32"></a>
                <?php endif; ?>

                <?php
                $viber_url = carbon_get_theme_option('el_social_url_viber');
                if ($viber_url): ?>
                    <a href="viber://chat/?number=%B<?= $viber_url; ?>"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/viber.svg"
                                alt="viber" width="32" height="32"></a>
                <?php endif; ?>
            </div>
            <?php
            $copyright = carbon_get_theme_option('el_footer_copyright');
            $copyright = $copyright ? $copyright : '© 2015-2020 ЭЛСЕМЬ';
            ?>
            <p class="copyright"><?php echo $copyright ?></p>
        </div>
        <div class="catalog">
            <?php if (is_active_sidebar('footer-3')) : ?>
                <?php dynamic_sidebar('footer-3'); ?>
            <?php endif; ?>
        </div>
        <div class="company">
            <?php if (is_active_sidebar('footer-2')) : ?>
                <?php dynamic_sidebar('footer-2'); ?>
            <?php endif; ?>
        </div>
        <div class="footer-contacts">
            <?php if (is_active_sidebar('footer-1')) : ?>
                <?php dynamic_sidebar('footer-1'); ?>
            <?php endif; ?>
            <h4>Контакты</h4>
            <ul>
                <?php
                $address = carbon_get_theme_option('el_footer_address');
                $address = $address ? $address : 'г. Белгород, ул. Корочанская, д. 41а, офис 305';
                ?>
                <li><a><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ic16-map.svg"
                            alt="map"><?php echo $address; ?></a></li>

                <?php $phone_number = carbon_get_theme_option('el_header_phone_number');
                $phone_number = $phone_number ? $phone_number : '+7 (495) 186-34-21';
                //get_vd();
                ?>
                <li><a href="tel: +<?php echo preg_replace("/[^0-9]/", '', $phone_number); ?>"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ic16-phone.svg"
                                alt="phone"><?php echo $phone_number ?></a></li>

                <?php
                $email = carbon_get_theme_option('el_header_email');
                $email = $email ? $email : 'elseven31@yandex.ru';
                ?>
                <li><a href="mailto: <?php echo $email; ?>"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ic16-email.svg"
                                alt="email"><?php echo $email; ?></a></li>

                <?php
                $company = carbon_get_theme_option('el_footer_company');
                $company = $company ? $company : 'ООО "ЭЛСЕМЬ"';
                ?>
                <li><a><?php echo $company; ?></a></li>
            </ul>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->
<?php do_action('el_modal_callback'); ?>

<?php wp_footer(); ?>
<script>

</script>
</body>
</html>
