<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/pushData', 'Barang@store');
Route::get('/getData', 'Barang@getData');
Route::get('/hapusData/{id}', 'Barang@hapus');
Route::get('/getDetail/{id}', 'Barang@getDetail');
Route::post('/updateData', 'Barang@update');
Route::post('/Pertanyaan', 'Pertanyaan@Pertanyaan');
Route::post('/Jawaban', 'Pertanyaan@Jawaban');
Route::post('/UbahAkun', 'Akun@Ubah');
Route::post('/TambahAkun', 'Akun@Tambah');
Route::get('/getUser/{id}', 'Akun@getDetail');
