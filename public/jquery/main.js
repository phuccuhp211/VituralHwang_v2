$(function() {
    $('.cp-text').on('click', function() {
        var cp = document.createRange();
        cp.selectNode(document.getElementById("gmail"));
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(cp);
        document.execCommand('copy');
        window.getSelection().removeAllRanges();

        $('.cpt-rs').addClass('cpt-rs-off');
        setTimeout(function () {$('.cpt-rs').removeClass('cpt-rs-off')}, 1000);
    })
})