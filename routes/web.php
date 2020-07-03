<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('master');
});

Route::get('/pertanyaan', 'PertanyaanController@index');
Route::post('/pertanyaan', 'PertanyaanController@insert');
Route::delete('/pertanyaan/{id}', 'PertanyaanController@delete');
Route::put('/pertanyaan/{id}', 'PertanyaanController@edited');

Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::get('/pertanyaan/edited/{id}', 'PertanyaanController@edit');

Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index');
Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@store');


