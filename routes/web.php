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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>['web','admin']],function (){
    Route::get('/adminpanel','AdminController@index')->name('adminpanel');
    Route::resource('actor','Admin\ActorController');
    Route::resource('movie','Admin\MovieController');
});
