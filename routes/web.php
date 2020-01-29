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
    return view('admin.index');
});
Route::get('/warehouse', function () {
    return view('warehouse.index');
});
Route::get('/warehouse/create', function () {
    return view('warehouse.create');
});
Route::get('/products', function () {
    return view('products.index');
});
Route::get('/products/create', function () {
    return view('products.create');
});
Route::get('/staff', function () {
    return view('staff.index');
});
Route::get('/staff/create', function () {
    return view('staff.create');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
