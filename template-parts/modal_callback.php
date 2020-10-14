<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>
<!--callback dialog start-->
<div id="modalCallback" class="modal">
    <div class="modal-content">
        <span class="close close-modal-callback" id="modalCallbackClose"></span>

        <?php
        if ($_SERVER['HTTP_HOST'] == 'elseven') {
            // for local
            echo do_shortcode('[contact-form-7 id="62" title="Заказать обратный звонок"]');
        } else {
            echo do_shortcode('[contact-form-7 id="59" title="Заказать обратный звонок"]');
        }
        ?>
    </div>
</div>
<div id="modalCallbackResponse" class="modal">
    <div class="modal-content">
        <span class="close close-modal-callback" id="modalCallbackResponseClose"></span>
        <h2>Заявка отправлена!</h2>
        <p id="cfResponse"></p>
    </div>
</div>
<!--callback dialog end-->
