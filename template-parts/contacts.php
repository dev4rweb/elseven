<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>
<section class="page_contacts wrapper_mod">
    <h1><?=get_current_item_nav_menu('header_menu'); ?></h1>
    <div class="contact_block">
        <ul>
            <?php
            $address = carbon_get_theme_option('el_footer_address');
            $address = $address ? $address : 'г. Белгород, ул. Корочанская, д. 41а, офис 305';
            ?>
            <li>
                <a>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ic16-map-blue.svg"
                         alt="image">
                    <p><?php echo $address; ?></p>
                </a>
            </li>
            <?php $work_days = carbon_get_theme_option('el_contact_work_time');
            $work_days = $work_days ? $work_days : 'Понедельник - Пятница: 9:00-18:00';
            ?>
            <li>
                <a>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ic16-time-blue.svg"
                         alt="image">
                    <p>Понедельник - Пятница: 9:00-18:00</p>
                </a>
            </li>
            <?php $phone_number = carbon_get_theme_option('el_header_phone_number');
            $phone_number = $phone_number ? $phone_number : '+7 (495) 186-34-21';
            //get_vd();
            ?>
            <li>
                <a href="tel: +<?php echo preg_replace("/[^0-9]/", '', $phone_number); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ic16-phone-blue.svg"
                         alt="image">
                    <p style="color: #2F80ED;"><?php echo $phone_number ?></p>
                </a>
            </li>
            <?php
            $email = carbon_get_theme_option('el_header_email');
            $email = $email ? $email : 'elseven31@yandex.ru';
            ?>
            <li>
                <a href="mailto: <?php echo $email; ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ic16-email-blue.svg"
                         alt="image">
                    <p style="color: #2F80ED;"><?php echo $email; ?></p>
                </a>
            </li>
            <?php
            $company = carbon_get_theme_option('el_footer_company');
            $company = $company ? $company : 'ООО "ЭЛСЕМЬ"';
            ?>
            <li>
                <p><?php echo $company; ?></p>
            </li>
        </ul>
        <?php
        $photo_id = carbon_get_theme_option('el_contacts_photo');
        // get image from admin panel
        $photo = $photo_id ? wp_get_attachment_image_url($photo_id, 'full')
            : get_template_directory_uri() . '/assets/images/13.jpg';
        ?>
        <img class="right_side" src="<?php echo $photo; ?>" alt="image">
    </div>
</section>
<section class="contacts_map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2533.076835172337!2d36.61513031580757!3d50.58852518528713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41266a479d243365%3A0xde41e8e8d9f00fca!2z0JrQvtGA0L7Rh9Cw0L3RgdC60LDRjyDRg9C7LiwgNDHQkCwg0JHQtdC70LPQvtGA0L7QtCwg0JHQtdC70LPQvtGA0L7QtNGB0LrQsNGPINC-0LHQuy4sINCg0L7RgdGB0LjRjywgMzA4MDA2!5e0!3m2!1sru!2sua!4v1602116304187!5m2!1sru!2sua"
            width="100%" height="520" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
</section>
