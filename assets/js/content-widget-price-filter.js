jQuery(function ($) {
    $("#priceFilterToggle").click(function () {
        $('#priceFilterModal').slideToggle(300);
        $('p .btn-empty').toggleClass('active');
    });

    $("").change(function () {
        alert('change')
    });

    $('span.from').bind('DOMSubtreeModified', function(){
        let value = $('span.from').text();
        value = Number.parseInt(value.substring(1));
        // console.log('changed' + value);
        if (!isNaN(value)) {
            $('#iFilterMin').val(value);
        }
    });

    $('span.to').bind('DOMSubtreeModified', function(){
        let value = $('span.to').text();
        value = Number.parseInt(value.substring(1));
        // console.log('changed' + value);
        if (!isNaN(value)) {
            $('#iFilterMax').val(value);
        }
    });
});