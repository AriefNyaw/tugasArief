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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/', 'mahasiswa1Controller@index'); //Mahasiswa (Route dengan detail satu persatu) 
Route::get('/mhs', 'mahasiswa1Controller@index')->name('mhs.index'); 
Route::get('/mhs/list', 'mahasiswa1Controller@mhs_list')->name('mhs.list'); 
Route::get('/mhs/create', 'mahasiswa1Controller@create'); 
Route::post('/mhs/store', 'mahasiswa1Controller@store'); 
Route::get('/mhs/edit/{nim}', 'mahasiswa1Controller@edit'); 
Route::put('/mhs/update/{mahasiswa:nim}', 'mahasiswa1Controller@update')->name('mhs.update'); 
Route::get('/mhs/delete/{mahasiswa:nim}', 'mahasiswa1Controller@destroy')->name('mhs.delete'); 
//Prodi (Route Framework) 
Route::resource('/prodi', 'prodi1Controller');
