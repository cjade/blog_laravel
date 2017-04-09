<?php
/**
 * Created by PhpStorm.
 * User: chengyu
 * Date: 17/4/9
 * Time: 下午3:15
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class AdminUsers extends Controller
{
    public function index(){
        echo bcrypt('111111');//加密
    }
}