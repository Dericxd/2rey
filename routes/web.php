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

Route::redirect('/', 'rey');

Auth::routes();

Route::get('rey', 'Web\PageController@rey')->name('rey');
//admin
Route::resource('users', 'Admin\UserController');
Route::resource('histories', 'Admin\HistoryController');
Route::get('descargar', 'Admin\ReportController@pdf')->name('products.pdf');

//Usuarios
Route::resource('categories', 'User\CategoryController');
Route::resource('details',    'User\DetailController');
Route::resource('stores',     'User\StoreController');
Route::resource('products',   'User\ProductController');

Route::resource('moviments',  'User\MovimentController');
