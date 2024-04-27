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
        $igT = $this->umodel->work_data_igT();
        $igF = $this->umodel->work_data_igF();
        return view('work',['igt' => $igT, 'igf' => $igF]);
    }

    public function archive() {
        $igT = $this->umodel->arch_data_igT();
        $igF1 = $this->umodel->arch_data_igF1();
        $igF2 = $this->umodel->arch_data_igF2();
        return view('archive',['igt' => $igT, 'igf1' => $igF1, 'igf2' => $igF2]);

        /*echo "<br>";
        var_dump($igF);
        echo "</br>";*/
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
