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
    return view('auth.login');
});
Route::get('/warehouse', function () {
    return view('warehouse.index');
});
Route::get('/user', function () {
    return view('user.index');
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

Route::get('/inventory/create', function () {
    return view('inventory.create');
});

Route::get('/user/create', function () {
    return view('user.create');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/dispatchments', function () {
    return view('dispatchments.index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
