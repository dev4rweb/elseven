jQuery(function ($) {
    $('.search-form input[name="s"]').on('keyup', function () {
        let search = $('.search-form input[name="s"]').val();
        if (search.length < 4) return false;

        $('.search-result-close').css('opacity', '1');

        let data = {
            s: search,
            action: 'search-ajax',
            nonce: search_form.nonce
        };

        $.ajax({
            url: search_form.url,
            data: data,
            type: 'POST',
            dataType: 'json',
            beforeSend: function (xhr) {
                $('.search-result-close').text('Ищем...');
            },
            success: function (data) {
                $('.search-result-close').text('Очистить');
                $('.search-form').css('overflow', 'visible');

                $('.search-form .search-result').html(data.out);
                $('.search-result').addClass('search-result-over');
                console.log(data.out);

            }
        });
    });

    $('.search-result-close').click(function () {
        $('.search-result').removeClass('search-result-over');
        $('.search-result').empty();
        $('.search-form input[name="s"]').val('');
        $('.search-result-close').css('opacity', '0');
    })
});