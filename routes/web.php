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

Route::get('/', 'User\ProductAppController@index')->name('/');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>'auth:web'],function(){

    Route::resource('/product','Admin\ProductManage');
    Route::resource('/category','Admin\CategoryManage');
    Route::resource('/user','Admin\UserController');
    Route::get('/product/deleteGallery/{id}','Admin\ProductManage@deleteGallery')->name('product.delete.gallery');
    Route::resource('/profile','Admin\ProfileController');
    Route::resource('/product/variant','Admin\VariantController');
    // 
});
Route::group(['prefix'=>'/'],function(){
    Route::resource('productApp','User\ProductAppController');
    Route::resource('search','User\SearchController');
    Route::resource('categoryList','User\CategoryListController');
    Route::resource('cart','User\CartController');
    Route::resource('buy','User\BuyController');
});

