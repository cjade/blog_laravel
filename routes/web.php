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
Route::group(['domain'=>config('sys.sys_domain') ],function (){
    //github第三方登录
    Route::get('github', 'UserThirdPartyController@redirectToProvider');
    Route::get('github/callback', 'UserThirdPartyController@handleProviderCallback');
    Route::get('/', function () {
        return view('welcome');
    });
});

