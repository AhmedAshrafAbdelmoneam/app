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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('products','ProductsController');

Route::get('/orcid', function () {
    return view('orcid');
});
Route::get('auth/orcid', 'Auth\OrcidController@redirectToOrcid');
Route::get('auth/orcid/callback', 'Auth\OrcidController@handleFacebookCallback');