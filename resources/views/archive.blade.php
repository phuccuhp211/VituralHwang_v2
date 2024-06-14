@extends('layouts.base')

@section('title','Archive')

@section('ownlib')
    <link rel="stylesheet" href="{{ url('css/archive.css') }}">
    <script src="{{ url('jquery/archive.js') }}"></script>
@endsection

@section('market')
    <p class="p-market">Works Archive.</p>
@endsection

@section('content')
    <div class="content-box archive">
        <div class="container">
            <div class="row"><h1 class="title-ss title-all">Art Work<div class="straight-line"></div></h1></div>
            <div class="row mb-5">
                @foreach($igf1 as $value => $item)
                <div class="art-vid">
                    <iframe class="ratio" src="{{$item->origin}}" allow="fullscreen; picture-in-picture" allowfullscreen></iframe>
                </div>
                @endforeach
            </div>
            <div class="straight-line my-4 mx-auto"></div>
            <div class="row mb-5">
                <div class="col-12">
                    <div class="view-box mb-3">
                        <img src="" class="view-img" alt="">
                        <img src="" class="view-img-sub" alt="">
                    </div>
                </div>
                <div class="arts-box">
                    @foreach($igf2 as $value => $item)
                        <div class="box-ab">
                            <img src="{{$item->origin}}" alt="">
                        </div>
                    @endforeach
                </div>
                    
            </div>
            
            <div class="row mb-5"><h1 class="title-ss title-all">Photograph<div class="straight-line"></div></h1></div>
            @foreach($igt as $value => $item)
            <div class="row mb-5">
                @if($value % 2 == 0) 
                <div class="col-5 bl-l">
                    <div class="box-l d-flex align-items-center">
                        @if($item->model != "nan")
                        <img class="model-img" src="{{$item->media_H[0]->origin}}">
                        <p class="model-name">Model: {{$item->model}}</p>
                        @else
                        <iframe class="ratio" src="https://player.vimeo.com/video/621475308?h=1a75f752aa" allow="fullscreen; picture-in-picture" allowfullscreen title="timelapsebanner"></iframe>
                        @endif
                    </div>
                </div>
                @endif
                
                <div class="col-7 d-flex flex-wrap align-content-between">
                    @foreach($item->media_V as $med)

                    @if($med->tom == "img")
                    <div class="col-12 box-s">
                        <img class="model-img" src="{{$med->origin}}" alt="">
                    </div>
                    @endif

                    @if($med->tom == "vid")
                    <div class="col-12 box-s">
                        <iframe class="ratio" src="{{$med->origin}}" allow="fullscreen; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    @endif

                    @endforeach  
                </div>

                @if($value % 2 != 0) 
                <div class="col-5 bl-r">
                    <div class="box-l d-flex align-items-center">
                        @if($item->model != "nan")
                        <img class="model-img" src="{{$item->media_H[0]->origin}}">
                        <p class="model-name">Model: {{$item->model}}</p>
                        @else
                        <iframe class="ratio" src="https://player.vimeo.com/video/621475308?h=1a75f752aa" allow="fullscreen; picture-in-picture" allowfullscreen title="timelapsebanner"></iframe>
                        @endif
                    </div>
                </div>
                @endif
            </div>
            @endforeach  
        </div>
    </div>
@endsection