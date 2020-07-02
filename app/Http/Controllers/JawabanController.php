<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    //
    public function index($pertanyaan_id){
        $kode = JawabanModel::get_data($pertanyaan_id);
        $jawaban = JawabanModel::get_jawaban($pertanyaan_id);
        //dd($kode);
        return view('new.jawaban', compact('kode','jawaban'));
    }

    public function store(Request $request ,$pertanyaan_id){
        $array1 = ["id_pertanyaan"=> $pertanyaan_id];
        $kode = array_merge($request->all(), $array1);
        unset($kode["_token"]);
        $send = JawabanModel::save_jawaban($kode);
        if($send){
            return redirect('/pertanyaan');
        }
    }
}
