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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function __construct()
    {
        //验证是否登录
        $this->middleware('permissions');
    }
    /**
     * @action index 后台首页
     */
    public function index(Request $request)
    {
        if(!Cache::has('mysql_version')){
            $mysql = DB::select('select VERSION() as version');
            Cache::add('mysql_version',$mysql[0]->version,60*24*30);//缓存30天
        }
        return view('admin.index.index',['mysql_version'=>Cache::get('mysql_version')]);
    }
}