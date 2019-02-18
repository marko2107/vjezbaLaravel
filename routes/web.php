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

Route::get('/filmovi/slovo/{slovo}', function () {
    return view('filmovi.slovo');
});

Route::get('/', function () {
    return view('welcome');
});

Route::resource('filmovi','filmovicontroller');

//Route::resource('filmovi','navigacijacontroller');
