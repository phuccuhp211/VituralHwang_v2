$(function() {
    $('.box-ab').each(function() {
        $('.box-ab').first().addClass('sl-view');
        var img = $('.sl-view').find('img').attr('src');
        $('.view-img').attr('src',img);
        $('.view-img-sub').attr('src',img);
        $(this).on('click', function(event) {
            $(this).siblings('.sl-view').removeClass('sl-view');
            $(this).addClass('sl-view');
            img = $(this).find('img').attr('src');
            $('.view-img').attr('src',img);
            $('.view-img-sub').attr('src',img);
        });
    });
})