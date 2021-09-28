$(function() {
    var width_window = $(window).width();                        
    console.log(width_window);

    $(window).on('load', function() {
        $('.fx-1').addClass('fx-on');
        $('.fx-2').addClass('fx-on');
        $('.fx-3').addClass('fx-on');
    });

    $(window).on('load', function() {
        if (width_window <= 440) {
            $('.fx-1').addClass('fx-on');
            $('.fx-2').addClass('fx-on');
            $('.fx-3').addClass('fx-on');
            $('.fx-4').addClass('fx-on');
            $('.fx-5').addClass('fx-on');
            $('.fx-6').addClass('fx-on');
        }
    });
    
    $(window).scroll(function(event){
        vtht = $('html, body').scrollTop();
        console.log(vtht);
        if (vtht >499) {
            $('.fx-4').addClass('fx-on');
            $('.fx-5').addClass('fx-on');
            $('.fx-6').addClass('fx-on');
        }
        if (vtht >1399) {
            $('.fx-7').addClass('fx-on');
            $('.fx-8').addClass('fx-on');
            $('.fx-9').addClass('fx-on');
        }
        if (vtht >2399) {
            $('.fx-10').addClass('fx-on');
            $('.fx-11').addClass('fx-on');
            $('.fx-12').addClass('fx-on');
        }
        if (width_window >= 1600) {
            if (vtht >99) {
                $('.fx-4').addClass('fx-on');
                $('.fx-5').addClass('fx-on');
                $('.fx-6').addClass('fx-on');
            }
            if (vtht >799) {
                $('.fx-7').addClass('fx-on');
                $('.fx-8').addClass('fx-on');
                $('.fx-9').addClass('fx-on');
            }
            if (vtht >1499) {
                $('.fx-10').addClass('fx-on');
                $('.fx-11').addClass('fx-on');
                $('.fx-12').addClass('fx-on');
            }
        }

        if (width_window <= 1400) {
            if (vtht >99) {
                $('.fx-4').addClass('fx-on');
                $('.fx-5').addClass('fx-on');
                $('.fx-6').addClass('fx-on');
            }
            if (vtht >599) {
                $('.fx-7').addClass('fx-on');
                $('.fx-8').addClass('fx-on');
                $('.fx-9').addClass('fx-on');
            }
            if (vtht >1199) {
                $('.fx-10').addClass('fx-on');
                $('.fx-11').addClass('fx-on');
                $('.fx-12').addClass('fx-on');
            }
        }

        if (width_window <= 1280) {
            if (vtht >99) {
                $('.fx-4').addClass('fx-on');
                $('.fx-5').addClass('fx-on');
                $('.fx-6').addClass('fx-on');
            }
            if (vtht >399) {
                $('.fx-7').addClass('fx-on');
                $('.fx-8').addClass('fx-on');
                $('.fx-9').addClass('fx-on');
            }
            if (vtht >899) {
                $('.fx-10').addClass('fx-on');
                $('.fx-11').addClass('fx-on');
                $('.fx-12').addClass('fx-on');
            }
        }

        if (width_window <= 780) {
            if (vtht > 99) {
                $('.fx-7').addClass('fx-on');
                $('.fx-8').addClass('fx-on');
                $('.fx-9').addClass('fx-on');
            }

            if (vtht >399) {
                $('.fx-10').addClass('fx-on');
                $('.fx-11').addClass('fx-on');
                $('.fx-12').addClass('fx-on');
            }
        }
    })

    var h2p = $('.2-pic').height();
    console.log(h2p);
    $('.l-pic').height(h2p);

    var h2p_v2 = $('.2-pic-v2').height();
    console.log(h2p_v2);
    $('.l-pic-v2').height(h2p_v2);

    var h2p_v3 = $('.2-pic-v3').height();
    console.log(h2p_v3);
    $('.l-pic-v3').height(h2p_v3);
    if (width_window <= 575) {$('.l-pic-v3').css('margin','0 0 -15px 0');}
    if (width_window <= 420) {$('.l-pic-v3').css('margin','0 0 -10px 0');}
    if (width_window <= 375) {$('.l-pic-v3').css('margin','0 0 -9px 0');}

    var hvd = $('.main-s-pic').height();
    console.log(hvd);
    $('.s-vid').height(hvd);
        
})