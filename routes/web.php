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

Route::get('/{any}', function() {
    return view('vueapp');
})->where('any', '.*');

/*Route::get('/', function () {
    return view('welcome');
});

Route::resource('/albums', 'AlbumController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/.well-known/acme-challenge/{certKeys}', 'CertController@challengeResponse');
Route::get('/add-cert', 'CertController@index');
Route::post('/add-cert', 'CertController@store');*/
