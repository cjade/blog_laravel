<?php
/**
 * 后台路由
 * Created by PhpStorm.
 * User: chengyu
 * Date: 17/4/6
 * Time: 下午9:36
 */

Route::group(['domain'=>config('sys.sys_admin_domain') ],function (){
    //跳
    Route::get('jump','PublicController@jump');
    //后台首页
    Route::get('/', 'IndexController@index');
    Route::get('index', 'IndexController@index');
    //登录
    Route::any('login', 'LoginController@login');
    //退出登录
    Route::get('logout', 'LoginController@logout');
    //登录超时
    Route::any('loginTimeout', 'LoginController@loginTimeout');
    //极验

    Route::group(['middleware' => ['web','permissions']], function () {
        //管理员列表
        Route::get('admin-user', 'AdminUsersController@index');
        Route::get('admin-getUser', 'AdminUsersController@listUser')->name('admin-user');;
        //删除管理员
        Route::delete('admin-userDel', 'AdminUsersController@del');
    });

});