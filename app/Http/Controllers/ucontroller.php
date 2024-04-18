<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ucontroller extends Controller
{
    public function index() {
        return view('index');
    }

    public function work(int $page = 0) {
        if ($page != 0) echo $page;
        else return view('work');
    }

    public function archive(int $page = 0) {
        if ($page != 0) echo $page;
        else return view('archive');
    }

    public function vitural() {
        return view('vitural');
    }

    public function aboutme() {
        return view('aboutme');
    }

    public function contact() {
        return view('contact');
    }
}
