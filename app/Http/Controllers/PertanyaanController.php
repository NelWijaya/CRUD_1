<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use Symfony\Component\HttpFoundation\RequestStack;

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

    public function edit($id){
        $new_data = PertanyaanModel::get_data($id);
        return view('new.pertanyaan_edited', compact('new_data'));
    }

    public function edited($id, Request $request){
        $new_data = PertanyaanModel::edit_data($id, $request->all());
        return redirect('/pertanyaan');
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

    public function delete($id){
        PertanyaanModel::delete_data($id);
        PertanyaanModel::delete_jawaban($id);
        return redirect('/pertanyaan');
    }
}
