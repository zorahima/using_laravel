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

Route::get('contact', function () {
    return view('contact');
});

Route::get('about', function () {
    return view('about');
});

Route::get('percakapan', function () {
    return view('percakapan');
});

Route::get('pesan', function () {
    return view('pesan');
});

Route::post('percakapan/kirim', function () {
    return view('percakapan_kirim');
});