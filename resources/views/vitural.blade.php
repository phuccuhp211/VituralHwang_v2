@extends('layouts.base')

@section('title','Vitural Light')

@section('ownlib')
    <link rel="stylesheet" href="{{ url('css/vitural.css') }}">
    <script src="{{ url('jquery/vitural.js') }}"></script>
@endsection

@section('market')
    <p class="p-market">Vituralight.</p>
@endsection

@section('content')
    <script src="https://player.vimeo.com/api/player.js"></script>
	<div class="content-box vitural">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="h1-title title-all">Vituralight
                        <div class="straight-line"></div> 
                    </h1>
                    <h3 class="h3-title  title-all">Welcome to the evolution!</h3>
                    <div style="margin: 30px 0;">
                        <p class="p-vir">
                            Vituralight is designed to <strong>simplify today’s complex lighting visualization workflows</strong>, empowering users with interactivity, speed and power over lighting visualization for pre-production, production, product visualization and <strong>so on !</strong>
                        </p>
                    </div>

                    <div class="col-12 box-vid-embeded">
                        <div style="padding:56.25% 0 0 0;position:relative;">
                            <iframe src="https://player.vimeo.com/video/803831957?h=09afa84297&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Vituralight 2023 ShowReel"></iframe>
                        </div>
                    </div>

                    <p class="p-vir p-vir-str">
                        Efficiency <br>
                        Less time-consuming <br>
                        More space to work <br>
                        More value added!
                    </p>

                    <div style="margin: 50px 0;">
                        <p class="p-vir">
                            Having worked as a director myself, I am familiar with the challenges involved in light-mapping projects. Typically, I would need to employ a team of technicians to set up and test the lighting until it is work, which can be quite expensive. Additionally, this cost does not include the final setup and programming required.
                        </p>
                        <p class="p-vir">
                            Also as an entrepreneur and producer, I have to assume risks and the scenario above is just a procedure of how it is done, and I haven’t even addressed the challenge and risk factors*.
                        </p>
                        <p class="p-vir">
                            That whole process was a lot to take in, so mostly they had chosen not to use light-mapping, and <strong>we’re here to change that.</strong>
                        </p>
                    </div>

                    <div style="margin: 50px 0;">
                        <p class="p-vir">
                            Vituralight has been used through 5 projects and has proven its practicality.<br>
                            This project has been noticed by the following Visual Artists and Directors:<br>
                            + <strong>Robin Mahieux, Vicky Dang</strong> (Artist, Founder of Fromanother.love)<br>
                            + <strong>Ray Lavers</strong> (Cinematographer / Filmmaker)<br>
                            + <strong>Nguyen PB Huy</strong> (Media Producer, South East Entertainment)<br>
                            + <strong>Vsoul</strong> (Artist, from Hustlang)<br>
                            + And other Arists, Directors.
                        </p> 
                    </div>
                        
                    <div style="margin: 50px 0;">
                        <p class="p-vir"><strong>Why you should use Vituralight</strong></p>
                        <p class="p-vir p-sm-mg">
                            <strong>Mobility</strong> - Based on our extensive experience, we will help determine whether Virtualight is the right fit for your needs. If it is, we will provide full support in adjusting the program to ensure that it aligns with your specific requirements and vision.
                        </p>
                        <p class="p-vir p-sm-mg">
                            <strong>Easy to use</strong> - Normally, the lights have to be pre-set and controlled by technicians, but we solve that with just a keyboard and a basic instruction sheet and everyone can also experience it very simply. 
                        </p>       
                        <p class="p-vir p-sm-mg">
                            <strong>Empowering</strong> - This gives you everything you need right at your fingertips so you can spend less time hopping around with “technical issues” and more time for your creativity to thrive.
                        </p>   
                    </div>
                </div>

                <div class="col-12">
                    <div id="mobile-carousel" class="carousel slide d-sm-block d-xl-none d-lg-none d-md-none" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('data/img/vituralight/circuit1.png') }}" class="d-block w-100" alt="Circuit 1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('data/img/vituralight/circuit2.png') }}" class="d-block w-100" alt="Circuit 2">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('data/img/vituralight/circuit3.png') }}" class="d-block w-100" alt="Circuit 3">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#mobile-carousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#mobile-carousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <div class="d-none d-xl-block d-lg-block d-md-block">
                        <div class="row">
                            <div class="col-4">
                                <div class="imgs-box">
                                    <img src="{{ asset('data/img/vituralight/circuit1.png') }}" alt="Circuit 1" class="img-thumb">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="imgs-box">
                                    <img src="{{ asset('data/img/vituralight/circuit2.png') }}" alt="Circuit 2" class="img-thumb">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="imgs-box">
                                    <img src="{{ asset('data/img/vituralight/circuit3.png') }}" alt="Circuit 3" class="img-thumb">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12" style="margin: 50px 0 0;">
                    <div class="col-12 box-vid-embeded">
                        <div style="padding:56.25% 0 0 0;position:relative;">
                            <iframe src="https://player.vimeo.com/video/1042582675?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="E2-E4 2021 Demo"></iframe>
                        </div>
                    </div>

                    <div class="col-12 box-vid-embeded" style="margin: 25px 0 0;">
                        <div style="padding:42.5% 0 0 0;position:relative;">
                            <iframe src="https://player.vimeo.com/video/1041562060?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Vituralight_Ver1.0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection