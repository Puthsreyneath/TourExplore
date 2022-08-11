<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PlaceController;
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin'])->name('admin.dashboard');

require __DIR__.'/Adminauth.php';

Route::get('/admin/table', function(){
    return view('admin.table');
});
 
Route::controller(LocationController::class)->group(function () {
    Route::get('/admin.location', 'index');
    Route::get('/location.create', 'create');
    Route::post('/location.store', 'store');
    Route::get('/location.edit/{location_id}', 'edit');
    Route::put('/location.update/{location_id}', 'update');
    Route::get('/location.delete/{location_id}', 'destroy');
});

Route::controller(PlaceController::class)->group(function () {
    Route::get('/admin.place', 'index');
    Route::get('/place.create', 'create');
    Route::post('/place.store', 'store');
    Route::get('/place.edit/{place_id}', 'edit');
    Route::put('/place.update/{place_id}', 'update');
    Route::get('/place.delete/{place_id}', 'destroy');
});

Route::get('/', function () {
    return view('home_page');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/explore', function () {
    return view('explore_page');
});

Route::get('/shop', function () {
    return view('shop_page');
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