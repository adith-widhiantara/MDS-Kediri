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
Route::post('register', 'LandingController@store')->name('register.acc');
// end landing

// berita
Route::prefix('berita')->group(function () {
  Route::get('', 'BeritaController@index')->name('index.berita');
  Route::get('create', 'BeritaController@create')->name('create.berita');
  Route::post('create', 'BeritaController@store')->name('create.send.berita');
  Route::get('mine', 'BeritaController@mine')->name('mine.berita');
  Route::get('allnews', 'BeritaController@allNews')->name('allNews.berita');
  Route::get('allnews/{allnews}', 'BeritaController@allNewsDetail')->name('allNews.detail.berita');
  Route::post('allnews/{allnews}/setuju', 'BeritaController@allNewsDetailStoreSetuju')->name('allNews.store.detail.berita');
  Route::post('allnews/{allnews}/tidak', 'BeritaController@allNewsDetailStoreTidakSetuju')->name('allNews.store.tidakSetuju.detail.berita');
  Route::get('{berita}', 'BeritaController@show')->name('detail.berita');
  Route::get('mine/{berita}', 'BeritaController@mineDetail')->name('mine.detail.berita');
});
// end berita

// santri
Route::prefix('testimoni')->group(function () {
  Route::get('', 'SantriController@index')->name('index.santri');
  Route::get('create', 'SantriController@create')->name('create.santri');
  Route::post('create', 'SantriController@store')->name('create.send.santri');
  Route::get('mine', 'SantriController@mine')->name('mine.santri');
  Route::get('all', 'SantriController@all')->name('all.santri');
  Route::get('all/{all}', 'SantriController@allDetail')->name('all.detail.santri');
  Route::post('all/{all}/setuju', 'SantriController@allDetailStoreSetuju')->name('all.store.detail.santri');
  Route::post('all/{all}/tidak', 'SantriController@allDetailStoreTidakSetuju')->name('all.store.tidakSetuju.detail.santri');
  Route::get('{santri}', 'SantriController@show')->name('detail.santri');
  Route::get('mine/{santri}', 'SantriController@mineDetail')->name('mine.detail.santri');
});
// end santri

// galery
Route::prefix('galeri')->group(function () {
  Route::get('', 'GaleriController@index')->name('index.galeri');
  Route::get('create', 'GaleriController@create')->name('create.galeri');
  Route::post('create', 'GaleriController@store')->name('create.send.galeri');
  Route::get('mine', 'GaleriController@mine')->name('mine.galeri');
  Route::get('all', 'GaleriController@all')->name('allNews.galeri');
  Route::get('all/{all}', 'GaleriController@allDetail')->name('allNews.detail.galeri');
  Route::post('all/{all}/setuju', 'GaleriController@allDetailStoreSetuju')->name('all.store.detail.galeri');
  Route::post('all/{all}/tidak', 'GaleriController@allDetailStoreTidakSetuju')->name('all.store.tidakSetuju.detail.galeri');
  Route::get('{galeri}', 'GaleriController@show')->name('detail.galeri');
  Route::get('mine/{galeri}', 'GaleriController@mineDetail')->name('mine.detail.galeri');
});
// end galery

// video
Route::prefix('video')->group(function () {
  Route::get('', 'VideoController@index')->name('index.video');
  Route::get('create', 'VideoController@create')->name('create.video');
  Route::post('create', 'VideoController@store')->name('create.send.video');
  Route::get('mine', 'VideoController@mine')->name('mine.video');
  Route::get('all', 'VideoController@all')->name('all.video');
  Route::get('all/{all}', 'VideoController@allDetail')->name('all.detail.video');
  Route::post('all/{all}/setuju', 'VideoController@allDetailStoreSetuju')->name('all.store.detail.video');
  Route::post('all/{all}/tidak', 'VideoController@allDetailStoreTidakSetuju')->name('all.store.tidakSetuju.detail.video');
});
// end video

// auth
Route::prefix('myacc')->group(function () {
  Route::get('', 'AuthController@index')->name('index.auth');
});
// end auth
