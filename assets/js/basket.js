/*for basket*/
jQuery(function ($) {
    console.log('DOM fully loaded and parsed basket.js');
    $('.cart-container').on('mouseover', function () {
        $('.widget_shopping_cart_content')
            .css('display', 'block')
            .css('right', '-145px');
        console.log('work');
    });
    $('.cart-container').on('mouseleave', function () {
        $('.widget_shopping_cart_content')
            .css('right', '-700px')
            .css('display', 'none');
        console.log('work');
    });
    $('.remove_from_cart_button').empty();

});