$(function() {
    var width_window = $(window).width();                        
    console.log(width_window);

    $(window).on('load', function() {
        $('.fx-1').addClass('fx-on');
        $('.fx-2').addClass('fx-on');
        $('.fx-3').addClass('fx-on');
        $('.fx-4').addClass('fx-on');
        $('.fx-5').addClass('fx-on');
    });

    if (width_window <= 1279) {
        $('.box-vid').on('click', function (event) {
            if (this.paused) {$(this).trigger('play')}
            else if (this.play) {$(this).trigger('pause')}  
        });

    }
	
	$(window).scroll(function(event){
		vtht = $('html, body').scrollTop();
		console.log(vtht);

		if (vtht >1899) {
			$('.fx-6').addClass('fx-on');
			$('.fx-7').addClass('fx-on');
			$('.fx-8').addClass('fx-on');
			$('.fx-9').addClass('fx-on');
		}

		if (vtht >2999) {
			$('.fx-10').addClass('fx-on');
			$('.fx-11').addClass('fx-on');
			$('.fx-12').addClass('fx-on');
			$('.fx-13').addClass('fx-on');
		}

        if (width_window >= 1600) {
            if (vtht >1699) {
                $('.fx-6').addClass('fx-on');
                $('.fx-7').addClass('fx-on');
                $('.fx-8').addClass('fx-on');
                $('.fx-9').addClass('fx-on');
            }

            if (vtht >2599) {
                $('.fx-10').addClass('fx-on');
                $('.fx-11').addClass('fx-on');
                $('.fx-12').addClass('fx-on');
                $('.fx-13').addClass('fx-on');
            }
        }

        if (width_window <= 1400) {
            if (vtht >1299) {
                $('.fx-6').addClass('fx-on');
                $('.fx-7').addClass('fx-on');
                $('.fx-8').addClass('fx-on');
                $('.fx-9').addClass('fx-on');
            }

            if (vtht >1999) {
                $('.fx-10').addClass('fx-on');
                $('.fx-11').addClass('fx-on');
                $('.fx-12').addClass('fx-on');
                $('.fx-13').addClass('fx-on');
            }
        }

        if (width_window <= 1280) {
            if (vtht > 299) {
                $('.fx-6').addClass('fx-on');
                $('.fx-7').addClass('fx-on');
                $('.fx-8').addClass('fx-on');
                $('.fx-9').addClass('fx-on');
            }

            if (vtht >799) {
                $('.fx-10').addClass('fx-on');
                $('.fx-11').addClass('fx-on');
                $('.fx-12').addClass('fx-on');
                $('.fx-13').addClass('fx-on');
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

    var movehover7 = $('.sec-vid-7').hover( hoverVideo7, hideVideo7 );
    function hoverVideo7(e) {$('#video-work-7')[0].play();}
    function hideVideo7(e) {$('#video-work-7')[0].pause();}
    var body7 = $('body');

    var movehover8 = $('.sec-vid-8').hover( hoverVideo8, hideVideo8 );
    function hoverVideo8(e) {$('#video-work-8')[0].play();}
    function hideVideo8(e) {$('#video-work-8')[0].pause();}
    var body8 = $('body');

    var mainvid_height = $('.v-f-vid').height();
    mainvid_height += 220;
    $('.main-vid').height(mainvid_height);
})