<?php
/**
 * 文章
 * Created by PhpStorm.
 * User: chengyu
 * Date: 17/6/4
 * Time: 下午6:19
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
    /**
     * 文章列表
     * @action index
     */
    public function index(Request $request){   
        if($request->isMethod('post')){
            $listData = DB::table('articles')->get();
            return response()->json($listData);
        }
        return view('admin.articles.index');
    }

    public function index1(){

    }
}
