function convertDataModels(data) {
	let endContent = false;
	let htmlContent = '';
	
	data.forEach((model) => {
		if (model.id == 1) endContent = true;

		let verticalMedia = '';
		model.media_V.forEach(currentMedia => {
			if (currentMedia.tom == 'img') verticalMedia += `
				<div class="col-12 box-s">
                    <img class="model-img" src="${currentMedia.origin}" alt="">
                </div>`;
			else if (currentMedia.tom == 'vid') verticalMedia += `
				<div class="col-12 box-s">
                    <iframe class="ratio" src="${currentMedia.origin}" allow="fullscreen; picture-in-picture" allowfullscreen></iframe>
                </div>`;
		});

        let leftMedia = '';
        let rightMedia = '';
        let modelImg = '';

        if (model.model != 'nan') modelImg = `
            <div class="col-5 bl-l">
                <div class="box-l d-flex align-items-center">
                    <img class="model-img" src="${model.media_H.origin}">
                    <p class="model-name">Model: ${model.model}</p>
                </div>
            </div>
        `; 
        else modelImg = `
            <div class="col-5 bl-l">
                <div class="box-l d-flex align-items-center">
                    <iframe class="ratio" src="https://player.vimeo.com/video/621475308?h=1a75f752aa" allow="fullscreen; picture-in-picture" allowfullscreen title="timelapsebanner"></iframe>
                </div>
            </div>
        `; 

        if (model.id % 2 == 0) leftMedia = modelImg;
        else rightMedia = modelImg;
                

		htmlContent += `
			<div class="row mb-5">
                ${leftMedia}
                <div class="col-7 d-flex flex-wrap align-content-between">
                    ${verticalMedia}
                </div>
                ${rightMedia}
            </div>
		`;
	});

	return {
		content: htmlContent,
		exist: endContent
	}
}

function convertDataGallery(data) {
	let endContent = false;
	let htmlContent = '';
	
	data.forEach((img) => {
        if (img.id == 51) endContent = true;
		htmlContent += `
			<div class="box-ab">
                <img src="${img.origin}" alt="">
            </div>
		`;
	});

	return {
		content: htmlContent,
		exist: endContent
	}
}

function viewImg(fresh = true) {
    $('.box-ab').each(function() {
        if (fresh) $('.box-ab').first().addClass('sl-view');
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
}

$(function() {
    viewImg();

    $('.custom-button').on('click', function() {
		$('.alert-box').removeClass('alert-box-hide');
		let currentPage = $(this).data('step');
        let typeMedia = $(this).data('type');
		$.ajax({
			type: 'POST',
			url: window.location.href,
			data: { goPage: currentPage, type: typeMedia },
			dataType: 'JSON',
			success: (data) => {
                let html = (typeMedia == 'models') ? convertDataModels(data) : convertDataGallery(data);

                if (typeMedia == 'models') {
                    $('.content-box').find('.container').append(html.content);
                    if (html.exist) $('.content-box').find('.container-fluid').remove();
                    else {
                        let nextPage = currentPage += 1;
                        $(this).data('step', nextPage);
                        $(this).attr('data-step', nextPage);
                    }
                }

                else if (typeMedia == 'galleries') {
                    $('.arts-box').append(html.content);
                    viewImg(false);
                    if (html.exist) $('.arts-box').siblings('.custom-button').remove();
                    else {
                        let nextPage = currentPage += 1;
                        $(this).data('step', nextPage);
                        $(this).attr('data-step', nextPage);
                    }
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