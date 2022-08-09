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

Route::get('/', function () {
    return view('home_page');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/master', function () {
    return view('layout.master');
});
Route::get('/service', function () {
    return view('service_page');
});
Route::get('/detail', function () {
    return view('detail_info');
});
Route::get('/book', function () {
    return view('booking');
});
