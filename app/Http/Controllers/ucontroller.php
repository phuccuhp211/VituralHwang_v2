<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\umodel;

class ucontroller extends Controller
{
    private $umodel;
    function __construct() {
        $this->umodel = new umodel();
    }

    public function index() {
        return view('index');
    }

    public function work() {
        $data = $this->umodel->work_data();
        return view('work',['data' => $data]);
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
