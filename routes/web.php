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
Route::get('/create', 'EssaiController@create')->name('ajouter');
Route::post('/create', 'EssaiController@store')->name('store');
Route::get('/essai','EssaiController@index')->name('index');

Route::get('/edit','EssaiController@edit')->name('modifier');
Route::patch('/update','EssaiController@update')->name('mise_jour');
Route::delete('/delete','EssaiController@destroy')->name('supprimer');


Route::get('/', function () {
    return view('welcome');
});
