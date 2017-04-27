<?php
/**
 * 后台管理员
 * Created by PhpStorm.
 * User: chengyu
 * Date: 17/4/6
 * Time: 下午9:53
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminUsersController extends Controller
{
    /**
     * @action index 管理员列表页
     */
    public function index()
    {
        return view('admin.adminUser.index');
    }

    /**
     * 获取管理员数据
     * @action listUser
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function listUser(Request $request)
    {
        $rows = intval($request->rows) > 0 ? $request->rows : 10;
        $listData = DB::table('users')->where('type',1)->paginate($rows);;
        return response()->json($listData);
    }

    /**
     * @return string
     */
    public function del(Request $request)
    {
        if (empty(intval($request->id))) {
            return response()->json(['status' => '0', 'info' => 'ID不能为空']);
        }
        if(session('user')->user_id == $request->id){
            return response()->json(['status' => 'error', 'info' => '不能删除自己!']);
        }
        $result = DB::table('users')->where('user_id',$request->id)->delete();
        if($result){
            return response()->json(['status' => 'success','info' => '删除成功!']);
        }else{
            return response()->json(['status' => 'error','info' => '删除失败!']);
        }

    }
}