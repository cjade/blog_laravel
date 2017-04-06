<?php
/**
 * Created by PhpStorm.
 * User: chengyu
 * Date: 17/4/6
 * Time: 下午9:11
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * @action index 后台首页
     */
    public function index()
    {
        return view('admin.index.index');
    }
}