<?php
/**
 * Created by PhpStorm.
 * User: chengyu
 * Date: 17/4/8
 * Time: 下午1:30
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
class LoginController extends Controller
{
    /**
     * @action login 登录
     * User: chengyu
     * DateTime: 2017-04-08 下午1:31
     */
    public function login(Request $request)
    {
        if($request->isMethod('post')){

        }
        return view('admin.login.login');
    }
}