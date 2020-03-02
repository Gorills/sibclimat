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


Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware' => ['auth']], function (){

    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    Route::resource('/stock', 'StockController', ['as'=>'admin']);
    Route::resource('/event', 'EventController', ['as'=>'admin']);
    Route::resource('/work', 'WorkController', ['as'=>'admin']);

});


Route::get('/', 'IndexController@index');
Route::get('/works', 'WorksController@index')->name('works');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
