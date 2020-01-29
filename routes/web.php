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

Route::get('/inventory/create', function () {
    return view('inventory.create');
});

Route::get('/user/create', function () {
    return view('user.create');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
