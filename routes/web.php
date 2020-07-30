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

// landing
Auth::routes();
Route::get('/', 'LandingController@index')->name('landing');
// end landing

// berita
Route::prefix('berita')->group(function () {
  Route::get('', 'BeritaController@index')->name('index.berita');
  Route::get('create', 'BeritaController@create')->name('create.berita');
  Route::post('create', 'BeritaController@store')->name('create.send.berita');
  Route::get('{berita}', 'BeritaController@show')->name('detail.berita');
});
// end berita
