<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Security-Policy" content="
		script-src 'self' 
		https://apis.google.com 
		https://www.googletagmanager.com 
		https://www.google-analytics.com 
		https://www.gstatic.com 
		https://player.vimeo.com 
		https://f.vimeocdn.com/ 
		https://i.vimeocdn.com/ 
		https://code.jquery.com/ 
		https://cdn.jsdelivr.net/ 
		https://cdnjs.cloudflare.com/ 
		'nonce-gg-pt'
		blob:;
		worker-src 'self' blob:;
	">

	<link rel="shortcut icon" href="{{ asset('data/bg_and_logo/logo.web')}}"/>

	<script src="https://code.jquery.com/jquery-3.6.3.min.js" crossorigin="anonymous"></script>
	<script src="https://player.vimeo.com/api/player.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/hls.js@1.3.4"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
	<script stype="text/javascript" src="{{ asset('lib/js/all.js')}}"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" rel="stylesheet" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" rel="stylesheet" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/solid.min.css" rel="stylesheet" crossorigin="anonymous">

	<link rel="stylesheet" href="{{ asset('/css/main.css') }}">
	<script src="{{ asset('/jquery/main.js') }}"></script>