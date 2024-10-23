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
    <div class="content-box work">
        <div class="container">
            @foreach($igf as $value => $item)
            <div class="row mb-5">
                @if ($item->name != '')
                    <h1 class="title-ss title-all">{{$item->name}}<div class="straight-line"></div></h1>
                @endif
                <div class="col-12">
                    <div class="l-vids-box">
                        <iframe src="{{$item->media[0]->origin}}" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Videograhper Showreel"></iframe>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="row"><h1 class="title-ss title-all">Work<div class="straight-line"></div></h1></div>
            @foreach($igt as $value => $item)
            <div class="row mb-5">
                @foreach($item->media as $med)
                <div class="col-6 mb-3">
                    @if ($med->thumb == '' && $med->origin != '')
                        <video class="vids-box" controls>
                            <source src="{{$med->origin}}" type="video/mp4"/>
                        </video>
                    @elseif ($med->thumb != '' && $med->origin == '')
                        <div class="imgs-box">
                            <img class="img-thumb" src="{{$med->thumb}}">
                        </div>
                    @else
                        <video class="vids-box" name="vid-play" muted preload="yes" loop poster="{{$med->thumb}}">
                            <source src="{{$med->origin}}" type="video/mp4"/>
                        </video>
                    @endif
                </div>
                @endforeach
                @if ($item->islink != '')
                    <h2 class="title-all"><a href="{{$item->islink}}" target="blank">{{ $item->name }}</a></h2>
                @else
                    <h2 class="title-all">{{ $item->name }}</h2>
                @endif
                <h3 class="title-all">{{ $item->possition }}</h3>
                <h5 class="title-all">{{ $item->date }}</h5>
                <div class="col-12"><hr class="long-hr"></div>
            </div>
            @endforeach
        </div>
    </div>
@endsection