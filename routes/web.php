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


Route::get('/{slug}', 'ShopController@category')->name('category');

Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware' => ['auth']], function (){
    Route::get('/', 'DashboardController@dashboard')->name('admin.dashboard');
    Route::resource('/stock', 'StockController', ['as'=>'admin']);
    Route::resource('/event', 'EventController', ['as'=>'admin']);
    Route::resource('/work', 'WorkController', ['as'=>'admin']);

    Route::get('/store', 'StoreController@store')->name('admin.store');
    Route::resource('/category', 'CategoryController', ['as'=>'admin']);
    Route::resource('/product', 'ProductController', ['as'=>'admin']);
    Route::group(['prefix'=>'user_managment', 'namespace' => 'UserManagment'], function () {
       Route::resource('/user', 'UserController', ['as' => 'admin.user_managment']);


    });

});


Route::get('/', 'IndexController@index');
Route::get('/works', 'WorksController@index')->name('works');




//
//Route::get('/kondicionery', function () {
//    return view('kondicionery');
//});
//
//Route::get('/kondicionery/nastennye-split-sistemy', function () {
//    return view('nastennye-split-sistemy');
//});


Route::get('/contacts', function () {
    return view('contacts');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
