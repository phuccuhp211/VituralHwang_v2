$(function() {
	$('.button-dd-mn').on('click', function(event) {
    	$('.box-dd-mn').addClass('box-mn-show');
    	$('.mn-main').addClass('hide-mn-main');
     return false;
    });
    $('.button-hide-mn').on('click', function(event) {
    	$('.box-dd-mn').removeClass('box-mn-show');
    	$('.mn-main').removeClass('hide-mn-main');
     return false;
    });
})