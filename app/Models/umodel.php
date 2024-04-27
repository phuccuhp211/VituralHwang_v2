<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class umodel extends Model
{
    use HasFactory;

    public function work_data_igT() {
        $prj = DB::table('work')->where([['isgruop', '=', 0]])->orderBy('id','DESC')->get();
        foreach ($prj as $value => $item) {
            $item->media = DB::table('media')
                ->where([['page', '=', 'work'],['group', '=', $item->id]])
                ->get();
        }
        return $prj;
    }
    public function work_data_igF() {
        $prj = DB::table('work')->where([['isgruop', '=', 1]])->orderBy('id','DESC')->get();
        foreach ($prj as $value => $item) {
            $item->media = DB::table('media')
                ->where([['page', '=', 'work'],['group', '=', $item->id]])
                ->get();
        }
        return $prj;
    }
    public function arch_data_igT() {
        $prj = DB::table('arch')->where([['isgruop', '=', 0]])->orderBy('id','DESC')->get();
        foreach ($prj as $value => $item) {
            $item->media_H = DB::table('media')
                ->where([['page', '=', 'arch'],['type', '=', 1],['group', '=', $item->id]])
                ->get();
            $item->media_V = DB::table('media')
                ->where([['page', '=', 'arch'],['type', '=', 2],['group', '=', $item->id]])
                ->get();
        }
        return $prj;
    }
    public function arch_data_igF1() {
        $prj = DB::table('media')
            ->where([['group', '=', 0],['page', '=', 'arch'],['tom', '=', 'vid']])
            ->orderBy('id','DESC')
            ->get();
        return $prj;
    }
    public function arch_data_igF2() {
        $prj = DB::table('media')
            ->where([['group', '=', 0],['page', '=', 'arch'],['tom', '=', 'img']])
            ->orderBy('id','DESC')
            ->get();
        return $prj;
    }
}
