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
use Illuminate\Support\Facades\Redis;

class IndexController extends Controller
{
    /**
     * @action index 后台首页
     */
    public function index()
    {
        $users = DB::select('select * from users where active = ?', [1]);
//        $bool = Cache::add('key2','val2',60);
//        Redis::expire('key2',60);//设置过期时间10秒
        $val = Cache::get('key2');
        var_dump($val);
//        return view('admin.layouts.app');
        return view('admin.index.index');
    }
}