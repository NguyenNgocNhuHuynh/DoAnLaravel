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
     return view('admin.page.index');
 })->name('home');
// Route::group(['middleware' => 'CheckAdminLogin','prefix' => 'panel'], function() {
//     Route::get('/', function() {return view('admin.page.index');})->name('welcome');
    
//});

// Route::get('login', 'admin\LoginController@getLogin')-> name('getLogin');
// Route::post('login', 'admin\LoginController@postLogin')->name('postLogin');
// Route::resource('category', 'admin\CategoryController');

// Route::resource('user', 'admin\UserController');
// Route::resource('product', 'admin\ProductController');
Route::group(['prefix' => 'panel'], function () {
    Route::get('login', 'admin\LoginController@getLogin')-> name('getLogin');
    Route::post('login', 'admin\LoginController@postLogin')->name('postLogin');
    Route::get('logout','admin\LoginController@getLogout')->name('getLogout');
});
Route::group(['prefix' => 'admin'], function () {
    Route::resource('category', 'admin\CategoryController');
    Route::resource('user', 'admin\UserController');
    Route::resource('product', 'admin\ProductController');
});