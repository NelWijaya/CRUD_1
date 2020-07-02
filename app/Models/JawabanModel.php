<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;


class JawabanModel{
    public static function get_data($id){
        $all_data = DB::table('pertanyaan')->where('id','=',$id)->get();
        return $all_data;
    }

    public static function get_jawaban($id){
        $all_jawaban = DB::table('jawaban')->where('id_pertanyaan','=',$id)->get();
        return $all_jawaban;
    }

    public static function save_jawaban($data){
        $new_data = DB::table('jawaban')->insert($data);
        return $new_data;
    }
}
