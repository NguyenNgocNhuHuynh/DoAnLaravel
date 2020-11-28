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
 Route::get('/','user\HomeController@index')->name('home');
 Route::get('admin/index', 'admin\HomeController@index')->name('admin.home');
     

// Route::group(['middleware' => 'CheckAdminLogin','prefix' => 'panel'], function() {
//     Route::get('/', function() {return view('user.page.index');})->name('home');
    
// });

Route::get('login', 'admin\LoginController@getLogin')-> name('getLogin');
Route::post('login', 'admin\LoginController@postLogin')->name('postLogin');
Route::get('logout','admin\LoginController@getLogout')->name('getLogout');
// Route::resource('category', 'admin\CategoryController');
// Route::resource('user', 'admin\UserController');
// Route::resource('product', 'admin\ProductController');

// Route::group(['prefix' => 'panel'], function () {
//     Route::get('login', 'admin\LoginController@getLogin')-> name('getLogin');
//     Route::post('login', 'admin\LoginController@postLogin')->name('postLogin');
//     Route::get('logout','admin\LoginController@getLogout')->name('getLogout');
// });
Route::group(['prefix' => 'admin'], function () {
    Route::resource('category', 'admin\CategoryController');
    Route::resource('user', 'admin\UserController');
    Route::resource('product', 'admin\ProductController');
});
Route::get('single/{id}','user\SingleController@show')->name('show');
Route::get('product/{id}','user\ProductController@show')->name('show_product');
Route::get('cart/{id}','user\CartController@index')->name('cart');

