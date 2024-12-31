var isLoading = false;
var existModelsData = true;
var pageGalleriesNumber = 2;
var pageModelsNumber = 2;
var totalHeight = getHeight();
var viewHeight = $(window).height();      
let debounceTimer;

function getHeight() {
	return document.documentElement.scrollHeight;
}

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

function handleScroll() {
    let currentViewHeight = $('html, body').scrollTop();
    if (totalHeight - (currentViewHeight + viewHeight) <= 200 && existModelsData && !isLoading) loadMoreData('models', pageModelsNumber);
}

function loadMoreData(typeOf, pageOf) {
    isLoading = true;
	$('.alert-box').removeClass('alert-box-hide');
    $.ajax({
        type: 'POST',
        url: window.location.href,
        data: { goPage: pageOf, type: typeOf },
        dataType: 'JSON',
        success: (data) => {
            let html = (typeOf == 'models') ? convertDataModels(data) : convertDataGallery(data);

            if (typeOf == 'models') {
                $('.content-box').find('.container').append(html.content);
                if (html.exist) existModelsData = false;
                else pageModelsNumber += 1;
            }

            else if (typeOf == 'galleries') {
                $('.arts-box').append(html.content);
                viewImg(false);
                if (html.exist) $('.arts-box').siblings('.custom-button').remove();
                else pageGalleriesNumber += 1;
            }
            
            $('.alert-box').addClass('alert-box-hide')
            isLoading = false;
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log('AJAX Error Details:');
            console.log('Status:', textStatus);
            console.log('Error Thrown:', errorThrown);
            console.log('Response Text:', jqXHR.responseText);
            console.log('Full jqXHR Object:', jqXHR);
            $('.alert-box').addClass('alert-box-hide')
            isLoading = false;
        }
    })
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
    totalHeight = getHeight();
	viewHeight = $(window).height();
    viewImg();

    $(window).scroll(function(){
		clearTimeout(debounceTimer);
    	debounceTimer = setTimeout(handleScroll, 250);
	})

    $('.custom-button').on('click', function() {
        if (!isLoading) loadMoreData('galleries', pageGalleriesNumber);
	})
})