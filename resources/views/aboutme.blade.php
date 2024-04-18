@extends('layouts.base')

@section('title','About Me')

@section('ownlib')
    <link rel="stylesheet" href="{{ url('css/aboutme.css') }}">
    <script src="{{ url('jquery/aboutme.js') }}"></script>
@endsection

@section('market')
    <p class="p-market">About Me.</p>
@endsection

@section('content')
	<div class="content-box aboutme">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="p-am">My name is HOANG ANH KY (Vitural Hwang).<br>Visual Artist / Producer / Director</p>
                    <p class="p-am">I make things that relate to "visual creative", more specifically "visual capture" and "visual crafting". Video & Photo-grapher (visual capture) & 3D, video editing (visual crafting).</p>
                    <p class="p-am">Experienced music video producer, directing, 3D generalist. I’m spesialize in visual development, lookdev-lighting. A versatile and adaptable generalist, like a big light source, capable of illuminating a wide area, allowing for greater discovery and exploration in the production process.</p>

                    <div class="row sie">
                        <div class="col-12 position-relative">
                            <hr class="border-2 my-0" style="border-color: white; width: 45%;">
                            <h4 class="h4-sie text-center">SKILL</h4>
                            <hr class="border-2 my-0" style="border-color: white; width: 45%;">
                        </div>
                        <div class="col-6">
                            <h4 class="h4-sie">Software</h4>
                            <ul>
                                <li>Maya, Arnold</li>
                                <li>Blender, Cycles</li>
                                <li>After Effect </li>
                                <li>Substance Painter</li>
                                <li>Zbrush</li>
                                <li>Unreal Engine</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <h4 class="h4-sie">Artistic / Technical Skills</h4>
                            <ul>
                                <li>Visual Development</li>
                                <li>Look Dev - Lighting</li>
                                <li>3D Generalist</li>
                                <li>Video Editing, Compositing</li>
                                <li>Videography/Photography</li>
                                <li>Research & Development</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row sie">
                        <div class="col-6">
                            <h4 class="h4-sie">Interests</h4>
                            <ul>
                                <li>Entrepreneurship</li>
                                <li>Engineering</li>
                                <li>Music producing</li>
                                <li>Science</li>
                                <li>Writing</li>
                                <li>Philosophy</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <h4 class="h4-sie">Education</h4>
                            <ul>
                                <li>Intermediate Electricity at Ly Tu Trong.</li>
                                <li>Advanced Diploma in Multimedia at FPT Arena Multimedia.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection