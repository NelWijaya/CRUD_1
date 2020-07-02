<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;


class PertanyaanModel{
    public static function get_all(){
        $all_data = DB::table('pertanyaan')->get();
        return $all_data;
    }

    public static function save_data($data){
        $new_data = DB::table('pertanyaan')->insert($data);
        return $new_data;
    }
}
