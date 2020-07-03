<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;


class PertanyaanModel{
    public static function get_all(){
        $all_data = DB::table('pertanyaan')
                    ->get();
        return $all_data;
    }

    public static function get_data($id){
        $all_data = DB::table('pertanyaan')
                    ->where('id',$id)
                    ->first();
        return $all_data;
    }


    public static function save_data($data){
        $new_data = DB::table('pertanyaan')
                    ->insert($data);
        return $new_data;
    }

    public static function delete_data($id){
        $new_data = DB::table('pertanyaan')
                    ->where('id', $id)
                    ->delete();
        return $new_data;
    }

    public static function delete_jawaban($id){
        $new_data = DB::table('jawaban')
                    ->where('id_pertanyaan', $id)
                    ->delete();
        return $new_data;
    }

    public static function edit_data($id, $request){
        $new_data = DB::table('pertanyaan')
                    ->where('id', $id)
                    ->update([
                        'judul' => $request["judul"],
                        'isi' => $request["isi"]
                    ]);
        return $new_data;
    }
}
