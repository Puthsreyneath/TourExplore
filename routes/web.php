<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SearchConreoller;
use App\Http\Controllers\BookingController;

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

// Route::get('/service', function () {
//     return view('service_page');
// });

Route::get('/info', function () {
    return view('detail_info');
});
// Route::get('/book', function () {
//     return view('booking');
// });

Route::get('/product_detail', function () {
    return view('product_detail_page');
});

Route::get('/detail','App\Http\Controllers\PlaceController@getdetailplace');
Route::get('/service','App\Http\Controllers\PlaceController@getplace');

Route::get('booking/create','App\Http\Controllers\BookingController@create');
Route::post('booking','App\Http\Controllers\BookingController@store');
Route::get('booking','App\Http\Controllers\BookingController@gethotel');
Route::get('/transport','App\Http\Controllers\BookingController@transportation');
Route::post('/getstop','App\Http\Controllers\BookingController@getstop');

Route::get('/service/search','App\Http\Controllers\SearchController@search');




