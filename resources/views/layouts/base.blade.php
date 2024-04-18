<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.lib')
	<title>@yield('title')</title>
	@yield('ownlib')
</head>
<body>
	@include('layouts.navbar')
	@yield('market')
	@yield('content')
	@include('layouts.footer')
</body>
</html>