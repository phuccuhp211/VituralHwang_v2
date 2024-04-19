$(function() {
	var vids = document.getElementsByName('vid-play');
	for (var i = 0; i < vids.length; i++) {
		vids[i].addEventListener('mouseenter', function(event) {
			event.preventDefault();
			$(this)[0].play();
		});
		vids[i].addEventListener('mouseleave', function(event) {
			event.preventDefault();
			$(this)[0].pause();
		});
	}
})