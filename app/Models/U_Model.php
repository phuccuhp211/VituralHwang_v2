<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class U_Model extends Model
{
    use HasFactory;

    public static function work_data_igT($page = 1) {
        $prj = DB::table('work')
            ->where([['isgruop', '=', 0]])
            ->orderBy('id','DESC')
            ->offset(($page*3)-3)
            ->limit(3)
            ->get();
        foreach ($prj as $value => $item) {
            $item->media = DB::table('media')
                ->where([['page', '=', 'work'],['group', '=', $item->id]])
                ->get();
        }
        return $prj;
    }
    public static function work_data_igF() {
        $prj = DB::table('work')->where([['isgruop', '=', 1]])->orderBy('id','DESC')->get();
        foreach ($prj as $value => $item) {
            $item->media = DB::table('media')
                ->where([['page', '=', 'work'],['group', '=', $item->id]])
                ->get();
        }
        return $prj;
    }
    public static function arch_data_igT($page = 1) {
        $prj = DB::table('arch')
            ->where([['isgruop', '=', 0]])
            ->orderBy('id','DESC')
            ->offset(($page*3)-3)
            ->limit(3)
            ->get();
        foreach ($prj as $value => $item) {
            $item->media_H = DB::table('media')
                ->where([['page', '=', 'arch'],['type', '=', 1],['group', '=', $item->id]])
                ->first();
            $item->media_V = DB::table('media')
                ->where([['page', '=', 'arch'],['type', '=', 2],['group', '=', $item->id]])
                ->get();
        }
        return $prj;
    }
    public static function arch_data_igF1() {
        $prj = DB::table('media')
            ->where([['group', '=', 0],['page', '=', 'arch'],['tom', '=', 'vid']])
            ->orderBy('id','DESC')
            ->get();
        return $prj;
    }
    public static function arch_data_igF2($page = 1) {
        $prj = DB::table('media')
            ->where([['group', '=', 0],['page', '=', 'arch'],['tom', '=', 'img']])
            ->orderBy('id','DESC')
            ->offset(($page*5)-5)
            ->limit(5)
            ->get();
        return $prj;
    }
}
