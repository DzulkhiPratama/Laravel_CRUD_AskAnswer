<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class AskModels
{
    public static function get_all()
    {
        $ask = DB::table('ask')->get();
        return $ask;
    }
    public static function save($data)
    {
        //proses pengurangan data token
        unset($data["_token"]);
        $new_ask = DB::table('ask')->insert($data);
        return $new_ask;
    }
    public static function find_by_id($a)
    {
        $tny = DB::table('ask')->find($a);
        //$ans = DB::table('answer')->where('ask_id', $a)->get();
        $idtny = $a;
        //$hasil = [$tny, $ans];
        return $tny;
    }
    public static function update($a, $request)
    {
        $ldate = date('Y-m-d H:i:s');

        $asktem = DB::table('ask')
            ->where('id', $a)->update([
                'Tittle' => $request["Tittle"],
                'Content' => $request["Content"],
                'updated_at' => $ldate,
            ]);
        return $asktem;
    }
    public static function deleteat($a)
    {
        $deleteat = DB::table('ask')->where('id', $a)->delete();
        return $deleteat;
    }
}
