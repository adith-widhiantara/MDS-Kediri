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

// santri
Route::prefix('testimoni')->group(function () {
  Route::get('', 'SantriController@index')->name('index.santri');
  Route::get('create', 'SantriController@create')->name('create.santri');
  Route::post('create', 'SantriController@store')->name('create.send.santri');
  Route::get('{santri}', 'SantriController@show')->name('detail.santri');
});
// end santri

// galery
Route::prefix('galeri')->group(function () {
  Route::get('', 'GaleriController@index')->name('index.galeri');
  Route::get('create', 'GaleriController@create')->name('create.galeri');
  Route::post('create', 'GaleriController@store')->name('create.send.galeri');
  Route::get('{galeri}', 'GaleriController@show')->name('detail.galeri');
});
// end galery

// video
Route::prefix('video')->group(function () {
  Route::get('', 'VideoController@index')->name('index.video');
  Route::get('create', 'VideoController@create')->name('create.video');
  Route::post('create', 'VideoController@store')->name('create.send.video');
});
// end video
