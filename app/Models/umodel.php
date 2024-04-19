<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class umodel extends Model
{
    use HasFactory;

    public function work_data() {
        $prj = DB::table('work')->orderBy('id','DESC')->get();
        foreach ($prj as $value => $item) {
            $item->media = DB::table('media')
                ->where([['page', '=', 'work'],['group', '=', $item->id]])
                ->get();
        }
        return $prj;
    }
}
