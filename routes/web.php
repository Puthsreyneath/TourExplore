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

Route::get('/explore', function () {
    return view('explore_page');
});

Route::get('/about_us', function () {
    return view('about_us_page');
});

Route::get('/master', function () {
    return view('layout.master');
});

Route::get('/product_detail', function () {
    return view('product_detail_page');
});

Route::get('/detail', function () {
    return view('detail_page');
});