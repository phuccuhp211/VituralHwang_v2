@extends('layouts.base')

@section('title','Work')

@section('ownlib')
    <link rel="stylesheet" href="{{ url('css/work.css') }}">
    <script src="{{ url('jquery/work.js') }}"></script>
@endsection

@section('market')
    <p class="p-market">Work.</p>
@endsection

@section('content')
    <div class="container">
        
    <div class="row"><h1 class="title-ss title-all">Work<div class="straight-line"></div></h1></div>
        @foreach($data as $value => $item)
        <div class="row mb-5">
            @foreach($item->media as $med)
            <div class="col-6 mb-3">
                <video class="w-100 vids-box" style="height: 30vh; background: black;" name="vid-play" muted preload="yes" loop poster="{{$med->thumb}}">
                    <source src="{{$med->origin}}" type="video/mp4"/>
                </video>
            </div>
            @endforeach
            <h2 class="title-all">{{ $item->name }}</h2>
            <h3 class="title-all">{{ $item->possition }}</h3>
            <h5 class="title-all">{{ $item->date }}</h6>
            <div class="col-12"><hr class="long-hr"></div>
        </div>
        @endforeach

    </div>
    	
@endsection