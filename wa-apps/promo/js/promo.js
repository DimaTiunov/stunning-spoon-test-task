$(function () {
    $('#promo-search').on('input', function () {
        $.get('list/?q=' + $(this).val(), function (response) {
            var $list = $('#promo-list').empty();

            $.each(response.data, function (i, r) {
                $list.append(
                    '<div class="redemption">' +
                        '<h3><a href="' + r.id + '/">' + r.note + '</a></h3>' +
                        '<span class="code">' + r.code + '</span>' +
                        '<span class="discount">' + r.discount + ' руб.</span>' +
                    '</div>'
                );
            });
        }, 'json');
    });
});
