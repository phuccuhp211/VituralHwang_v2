@extends('layouts.base')

@section('title','Contact')

@section('ownlib')
    <link rel="stylesheet" href="{{ url('css/contact.css') }}">
    <script src="{{ url('jquery/contact.js') }}"></script>
@endsection

@section('market')
    <p class="p-market">Contact.</p>
@endsection

@section('content')
	<div class="content-box contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <h1 class="h1-title">I'm Waiting To Connect
                            <div class="straight-line"></div> 
                        </h1>
                        <div class="box-contact">
                            <i class="icon-contact fas fa-envelope"></i>
                            <span class="p-contact" id="gmail">vituralhwang@gmail.com</span>
                            <button class="cp-text">Copy</button>
                            <span class="cpt-rs">Copied !</span>
                        </div>
                        <div class="box-contact">
                            <i class="icon-contact fab fa-facebook"></i>
                            <a class="a-contact" href="https://facebook.com/victor4862" target="blank"><p class="p-contact">facebook.com/victor4862</p></a>
                        </div>
                        <div class="box-contact">
                            <i class="icon-contact fab fa-instagram"></i>
                            <a class="a-contact" href="https://instagram.com/vituralhwang" target="blank"><p class="p-contact">instagram.com/vituralhwang</p></a>
                        </div>
                        <div class="box-contact">
                            <i class="icon-contact fab fa-artstation"></i>
                            <a class="a-contact" href="https://artstation.com/vituralhwang" target="blank"><p class="p-contact">artstation.com/vituralhwang</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
@endsection