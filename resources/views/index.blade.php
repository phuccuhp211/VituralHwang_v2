@extends('layouts.base')

@section('title','Vitural Hwang')

@section('ownlib')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <script src="{{ asset('jquery/index.js') }}"></script>
@endsection

@section('market')
	<p class="p-market">Welcome.</p>
@endsection

@section('content')
	<video class="vid-bg" loop preload autoplay muted importance="high">
        <source src="{{ asset('data/bg_and_logo/vituralhwang_finnal_banner.mp4')}}" type="video/mp4"/>
    </video>
@endsection