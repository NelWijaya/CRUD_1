<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    //
    public function index(){
        $data = PertanyaanModel::get_all();
        //dd($data);
        return view('new.pertanyaan', compact('data'));
    }

    public function create(){
        return view('new.pertanyaan_form');
    }

    public function insert(Request $request){
        //dd($request->all());
        $data_insert = $request->all();
        unset($data_insert["_token"]);
        $send = PertanyaanModel::save_data($data_insert);
        if($send){
            return redirect('/pertanyaan');
        }
    }
}
