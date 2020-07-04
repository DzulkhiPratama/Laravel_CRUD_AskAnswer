<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'AskController@index');

Route::get('/pertanyaan', 'AskController@index'); //menampilkan list pertanyaan
Route::get('/pertanyaan/create', 'AskController@create'); //form membuat tanya
Route::post('/pertanyaan', 'AskController@store'); //menyimpan tanya

//Route::get('/pertanyaan/{a}', 'AnsController@index')->name('jawaban.index'); //menampilkan info tanya, dan jawaban2 dari tanya

Route::post('/jawaban/{a}', 'AnsController@store'); //menuliskan jawaban dari tanya

Route::get('/pertanyaan/{a}/edit', 'AskController@edit'); //masuk ke form update tanya
Route::put('/pertanyaan/{a}', 'AskController@update'); //route menangkap array update tanya, kembali ke pertanyaan dgn id


Route::get('/pertanyaan/{a}', 'AnsController@index')->name('tanya_at.index'); //dipake untuk masuk keketerngan tanya,
//ingin kembali lagi ke info pertanyaan, setelah update tanya di proses

Route::delete('/pertanyaan/{a}', 'AskController@destroy');//menghapus pertanyaan
