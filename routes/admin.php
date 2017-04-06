<?php
/**
 * 后台路由
 * Created by PhpStorm.
 * User: chengyu
 * Date: 17/4/6
 * Time: 下午9:36
 */

Route::group(['domain'=>config('sys.sys_admin_domain') ],function (){
    Route::get('/', 'IndexController@index');

});