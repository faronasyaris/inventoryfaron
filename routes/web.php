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
    return view('welcome');
});

Route::get('/hello', function () {
    echo "Faron Asyari ";
    echo "190313010";
});
Route::get('/data/{data?}', function ($data = "kosong") {
    return "isi parameter =  " . $data;
});
Route::get ('/nama/{nrp}/{nama})', function ($nrp, $nama){
    if (is_numeric($nrp) && ctype_alpha($nama)){
        return $nrp . " - " . $nama;
    }
})-> where ('nama', '[A-Za-z]+');
