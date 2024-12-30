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
		'nonce-gg-pt'
		blob:;
		worker-src 'self' blob:;
	">

	<link rel="shortcut icon" href="{{ asset('data/bg_and_logo/logo.web')}}"/>
	
	<script style="text/javascript" src="{{ asset('lib/js/jquery-3.6.3.js')}}"></script>
	<script style="text/javascript" src="{{ asset('lib/js/player.js')}}"></script>
	<script style="text/javascript" src="{{ asset('lib/js/hls.js')}}"></script>
	<script style="text/javascript" src="{{ asset('lib/js/popper.min.js')}}"></script>
	<script style="text/javascript" src="{{ asset('lib/js/bootstrap532.min.js')}}"></script>

	<link href="{{ asset('lib/css/fontawesome.css')}}" rel="stylesheet">
	<link href="{{ asset('lib/css/brands.css')}}" rel="stylesheet">
	<link href="{{ asset('lib/css/solid.css')}}" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('lib/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset('/css/main.css')}}">
	<script stype="text/javascript" src="{{ asset('lib/js/all.js')}}"></script>
	<script stype="text/javascript" src="{{ asset('/jquery/main.js')}}"></script>