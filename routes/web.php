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

Route::get('/', function () {
    return view('adminlte.table');
});

Route::get('/master', function () {
    return view('adminlte.master');
});

Route::get('/items', function () {
    return view('items.index');
});

Route::get('/data-tables', function () {
    return view('adminlte.table1');
});

Route::get('/pertanyaan', 'AskController@index');
Route::get('/pertanyaan/create', 'AskController@create');
Route::post('/pertanyaan', 'AskController@store');


Route::get('/jawaban/{a}', 'AnsController@index')->name('jawaban.index');
Route::post('/jawaban/{a}', 'AnsController@store');
