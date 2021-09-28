$(function() {
    var width_window = $(window).width();                        
    console.log(width_window);

    $(window).on('load', function() {
        $('.fx-1').addClass('fx-on');
        $('.fx-2').addClass('fx-on');
        $('.fx-3').addClass('fx-on');
        $('.fx-4').addClass('fx-on');
    });
    
    if (width_window <= 1280) {
        $('.box-vid').on('click', function (event) {
            if (this.paused) {$(this).trigger('play')}
            else if (this.play) {$(this).trigger('pause')}  
        });
    }
    
    $(window).scroll(function(event){
        vtht = $('html, body').scrollTop();
        console.log(vtht);

        if (vtht >499) {
            $('.fx-5').addClass('fx-on');
            $('.fx-6').addClass('fx-on');
        }

        if (vtht >1099) {
            $('.fx-9').addClass('fx-on');
            $('.fx-10').addClass('fx-on');
            $('.fx-11').addClass('fx-on');
            $('.fx-12').addClass('fx-on');
        }

        if (vtht >2099) {
            $('.fx-13').addClass('fx-on');
            $('.fx-14').addClass('fx-on');
        }

        if (vtht >2699) {
            $('.fx-15').addClass('fx-on');
            $('.fx-16').addClass('fx-on');
        }

        if (width_window <= 1600) {
            if (vtht >499) {
                $('.fx-5').addClass('fx-on');
                $('.fx-6').addClass('fx-on');
            }

            if (vtht >999) {
                $('.fx-9').addClass('fx-on');
                $('.fx-10').addClass('fx-on');
                $('.fx-11').addClass('fx-on');
                $('.fx-12').addClass('fx-on');
            }

            if (vtht >1799) {
                $('.fx-13').addClass('fx-on');
                $('.fx-14').addClass('fx-on');
            }

            if (vtht >2299) {
                $('.fx-15').addClass('fx-on');
                $('.fx-16').addClass('fx-on');
            }
        }

        if (width_window <= 1400) {
            if (vtht >399) {
                $('.fx-5').addClass('fx-on');
                $('.fx-6').addClass('fx-on');
            }

            if (vtht >799) {
                $('.fx-9').addClass('fx-on');
                $('.fx-10').addClass('fx-on');
                $('.fx-11').addClass('fx-on');
                $('.fx-12').addClass('fx-on');
            }

            if (vtht >1599) {
                $('.fx-13').addClass('fx-on');
                $('.fx-14').addClass('fx-on');
            }

            if (vtht >2099) {
                $('.fx-15').addClass('fx-on');
                $('.fx-16').addClass('fx-on');
            }
        }
        if (width_window <= 1280) {
            if (vtht >1) {
                $('.fx-5').addClass('fx-on');
                $('.fx-6').addClass('fx-on');
            }

            if (vtht >299) {
                $('.fx-9').addClass('fx-on');
                $('.fx-10').addClass('fx-on');
                $('.fx-11').addClass('fx-on');
                $('.fx-12').addClass('fx-on');
            }

            if (vtht >899) {
                $('.fx-13').addClass('fx-on');
                $('.fx-14').addClass('fx-on');
            }

            if (vtht >1299) {
                $('.fx-15').addClass('fx-on');
                $('.fx-16').addClass('fx-on');
            }
        }
    })

    var movehover1 = $('.sec-vid-1').hover( hoverVideo1, hideVideo1 );
    function hoverVideo1(e) {$('#video-work-1')[0].play();}
    function hideVideo1(e) {$('#video-work-1')[0].pause();}
    var body1 = $('body');

    var movehover2 = $('.sec-vid-2').hover( hoverVideo2, hideVideo2 );
    function hoverVideo2(e) {$('#video-work-2')[0].play();}
    function hideVideo2(e) {$('#video-work-2')[0].pause();}
    var body2 = $('body');

    var movehover3 = $('.sec-vid-3').hover( hoverVideo3, hideVideo3 );
    function hoverVideo3(e) {$('#video-work-3')[0].play();}
    function hideVideo3(e) {$('#video-work-3')[0].pause();}
    var body3 = $('body');

    var movehover4 = $('.sec-vid-4').hover( hoverVideo4, hideVideo4 );
    function hoverVideo4(e) {$('#video-work-4')[0].play();}
    function hideVideo4(e) {$('#video-work-4')[0].pause();}
    var body4 = $('body');





    var movehover5 = $('.sec-vid-5').hover( hoverVideo5, hideVideo5 );
    function hoverVideo5(e) {$('#video-work-5')[0].play();}
    function hideVideo5(e) {$('#video-work-5')[0].pause();}
    var body5 = $('body');

    var movehover6 = $('.sec-vid-6').hover( hoverVideo6, hideVideo6 );
    function hoverVideo6(e) {$('#video-work-6')[0].play();}
    function hideVideo6(e) {$('#video-work-6')[0].pause();}
    var body6 = $('body');

/*    var movehover7 = $('.sec-vid-7').hover( hoverVideo7, hideVideo7 );
    function hoverVideo7(e) {$('#video-work-7')[0].play();}
    function hideVideo7(e) {$('#video-work-7')[0].pause();}
    var body7 = $('body');

    var movehover8 = $('.sec-vid-8').hover( hoverVideo8, hideVideo8 );
    function hoverVideo8(e) {$('#video-work-8')[0].play();}
    function hideVideo8(e) {$('#video-work-8')[0].pause();}
    var body8 = $('body');*/





    var movehover9 = $('.sec-vid-9').hover( hoverVideo9, hideVideo9 );
    function hoverVideo9(e) {$('#video-work-9')[0].play();}
    function hideVideo9(e) {$('#video-work-9')[0].pause();}
    var body9 = $('body');

    var movehover10 = $('.sec-vid-10').hover( hoverVideo10, hideVideo10 );
    function hoverVideo10(e) {$('#video-work-10')[0].play();}
    function hideVideo10(e) {$('#video-work-10')[0].pause();}
    var body10 = $('body');

    var movehover11 = $('.sec-vid-11').hover( hoverVideo11, hideVideo11 );
    function hoverVideo11(e) {$('#video-work-11')[0].play();}
    function hideVideo11(e) {$('#video-work-11')[0].pause();}
    var body11 = $('body');

    var movehover12 = $('.sec-vid-12').hover( hoverVideo12, hideVideo12 );
    function hoverVideo12(e) {$('#video-work-12')[0].play();}
    function hideVideo12(e) {$('#video-work-12')[0].pause();}
    var body12 = $('body');





    var movehover13 = $('.sec-vid-13').hover( hoverVideo13, hideVideo13 );
    function hoverVideo13(e) {$('#video-work-13')[0].play();}
    function hideVideo13(e) {$('#video-work-13')[0].pause();}
    var body13 = $('body');

    var movehover14 = $('.sec-vid-14').hover( hoverVideo14, hideVideo14 );
    function hoverVideo14(e) {$('#video-work-14')[0].play();}
    function hideVideo14(e) {$('#video-work-14')[0].pause();}
    var body14 = $('body');

    var movehover15 = $('.sec-vid-15').hover( hoverVideo15, hideVideo15 );
    function hoverVideo15(e) {$('#video-work-15')[0].play();}
    function hideVideo15(e) {$('#video-work-15')[0].pause();}
    var body15 = $('body');

    var movehover16 = $('.sec-vid-16').hover( hoverVideo16, hideVideo16 );
    function hoverVideo16(e) {$('#video-work-16')[0].play();}
    function hideVideo16(e) {$('#video-work-16')[0].pause();}
    var body16 = $('body');
})