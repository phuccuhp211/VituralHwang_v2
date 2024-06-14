<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\U_Model;
use Illuminate\Support\Facades\Artisan;

class U_Controller extends Controller
{
    private $data = [];

    function __construct() {
        $list = [];
        foreach (Route::getRoutes()->getRoutes() as $route) {
            $action = $route->getAction();
            if (array_key_exists('as', $action)) {
                $list[] = $action['as'];
            }
        }
        $name = 'user';
        $filter = array_filter($list, function($rname) use ($name) {
            return strpos($rname, $name) !== false;
        });
        unset($filter[array_search('user.home', $filter)]);
        foreach ($filter as $value => $item) {
            if ($item == Route::currentRouteName()) unset($filter[$value]);
        }
        $refarr = [
            'user.works' => 'Work',
            'user.archives' => 'Archive',
            'user.vitural' => 'Vituralight',
            'user.aboutme' => 'About Me',
            'user.contact' => 'Contact'
        ];
        foreach ($filter as $rname) {
            if (array_key_exists($rname, $refarr)) $this->data['navs'][$rname] = $refarr[$rname];
            else $this->data['navs'][$rname] = null;
        }
    }

    public function index() {
        return view('index', $this->data);
    }

    public function work() {
        $this->data['igt'] = U_Model::work_data_igT();
        $this->data['igf'] = U_Model::work_data_igF();
        return view('work', $this->data);
    }

    public function archive() {
        $this->data['igt'] = U_Model::arch_data_igT();
        $this->data['igf1'] = U_Model::arch_data_igF1();
        $this->data['igf2'] = U_Model::arch_data_igF2();
        return view('archive', $this->data);
    }

    public function vitural() {
        return view('vitural', $this->data);
    }

    public function aboutme() {
        return view('aboutme', $this->data);
    }

    public function contact() {
        return view('contact', $this->data);
    }
}
