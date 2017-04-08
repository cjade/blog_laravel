<?php
/**
 * 后台首页
 * Created by PhpStorm.
 * User: chengyu
 * Date: 17/4/6
 * Time: 下午9:11
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * @action index 后台首页
     */
    public function index()
    {
        $bool = Cache::add('key2','val2',60);
//        $val = Cache::pull('key2');
        var_dump($bool);
//        return view('admin.layouts.app');
        return view('admin.index.index');
    }
}