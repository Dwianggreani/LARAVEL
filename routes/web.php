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

// Route::get('/', function () {
//     return view('index');
// });



Route::get('/', 'BookController@index');

Route::get('/tambah', 'BookController@create');
Route::post('/tambah', 'BookController@store');   
Route::get('/hapus/{datas}', 'BookController@destroy'); 

Route::get('/edit/{datas}', 'BookController@edit'); 
Route::patch('/edit/{datas}', 'BookController@update');





