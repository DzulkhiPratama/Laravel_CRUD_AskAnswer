<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class AnsModels
{
    public static function index($a)
    {

        $tny = DB::table('ask')->find($a);
        $ans = DB::table('answer')->where('ask_id', $a)->get();
        $idtny = $a;
        $hasil = [$tny, $ans];
        return $hasil;
    }
    public static function store($data)
    {
        //proses pengurangan data token
        unset($data["_token"]);
        $new_ans = DB::table('answer')->insert($data);
        return $new_ans;
    }
}
