function initializeHLSVideos(nameSelector) {	
	let videos = document.getElementsByName(nameSelector);
	let autoPlay = (nameSelector == 'vid-auto-play') ? true : false;

	for (let i = 0; i < videos.length; i++) {
		const video = videos[i];
		const source = video.querySelector('source').getAttribute('src');
		let hls = new Hls({
			maxBufferLength: 1,
			maxMaxBufferLength: 2,
			maxBufferSize: 1 * 1024 * 1024,
			startPosition: -1,
			lowLatencyMode: true,
			enableWorker: true,
			capLevelToPlayerSize: true,
		});
		hls.loadSource(source);
		hls.attachMedia(video);

		video.addEventListener('play', function() {
			const currentTime = video.currentTime;
			if (hls.media && hls.media.buffered.length > 0) {
				const bufferStart = hls.media.buffered.start(0);
				const bufferEnd = hls.media.buffered.end(0);
				
				if (bufferEnd - bufferStart < 10) {
					hls.startLoad(currentTime);
				}
			}
		});

		if (autoPlay) {
			video.addEventListener('mouseenter', function(event) {
				event.preventDefault();
				video.play();
			});
			video.addEventListener('mouseleave', function(event) {
				event.preventDefault();
				video.pause();
			});

			video.addEventListener('touchstart', function(event) {
				if (video.paused) {
					video.playsInline = true;
					video.play();
				} else {
					video.pause();
				}
			});
		}
	}
}

function convertData(data) {
	let endContent = false;
	let htmlContent = '';
	
	data.forEach((work) => {
		if (work.id == 1) endContent = true;

		let mediaContent = '';
		work.media.forEach(currentMedia => {
			if (currentMedia.type == 2 && currentMedia.origin != '') mediaContent += `
				<div class="col-6 mb-3">
					<video class="vids-box" name="vid-play" loop controls>
						<source src="${currentMedia.origin}" type="application/x-mpegURL"/>
					</video>
				</div>`;
			else if (currentMedia.thumb != '' && currentMedia.origin == '') mediaContent += `
				<div class="col-6 mb-3">
					<div class="imgs-box">
						<img class="img-thumb" src="${currentMedia.thumb}">
					</div>
				</div>`;
			
			else mediaContent += `
				<div class="col-6 mb-3">
					<video class="vids-box" name="vid-auto-play" muted preload="yes" loop poster="${currentMedia.thumb}">
						<source src="${currentMedia.origin}" type="application/x-mpegURL"/>
					</video>
				</div>`;
		});

		let title = '';
		if (work.islink != '') title = `<h2 class="title-all"><a href="${work.islink}" target="blank">${work.name}</a></h2>`;
		else title = `<h2 class="title-all">${work.name}</h2>`;

		htmlContent += `
			<div class="row mb-5">
				${mediaContent}
				${title}
				<h3 class="title-all">${work.possition}</h3>
				<h5 class="title-all">${work.date}</h5>
				<div class="col-12"><hr class="long-hr"></div>
			</div>
		`;
	});

	return {
		content: htmlContent,
		exist: endContent
	}
}

$(function() {
	if (Hls.isSupported()) {
		initializeHLSVideos('vid-auto-play');
		initializeHLSVideos('vid-play');
	}

	$('.custom-button').on('click', function() {
		$('.alert-box').removeClass('alert-box-hide');
		let currentPage = $(this).data('step');
		$.ajax({
			type: 'POST',
			url: window.location.href,
			data: { goPage: currentPage },
			dataType: 'JSON',
			success: (data) => {
				let html = convertData(data);
				$('.content-box').find('.container').append(html.content);

				initializeHLSVideos('vid-auto-play');
				initializeHLSVideos('vid-play');

				if (html.exist) $('.content-box').find('.container-fluid').remove();
				else {
					let nextPage = currentPage += 1;
					$(this).data('step', nextPage);
					$(this).attr('data-step', nextPage);
				}
				$('.alert-box').addClass('alert-box-hide')
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log('AJAX Error Details:');
				console.log('Status:', textStatus);
				console.log('Error Thrown:', errorThrown);
				console.log('Response Text:', jqXHR.responseText);
				console.log('Full jqXHR Object:', jqXHR);
				$('.alert-box').addClass('alert-box-hide')
			}
		})
	})
})
