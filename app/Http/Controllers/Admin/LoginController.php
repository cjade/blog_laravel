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
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

            $input =  $request->all();//获取所以input值
//            return ['status'=>0,'info'=>$input['email']];
            $user = DB::table('users')->where([
                ['user_email','=',$input['email']],
                ['type','=','1']
            ])->first();//type 1 = 管理员
//            dump($user);die;
            if(!$user){
                return ['status'=>0,'info'=>'用户名或者密码错误！!'];
            }
            if(!Hash::check($input['password'], $user->password)){
                return ['status'=>0,'info'=>'用户名或者密码错误！!'];
            }
            if($user->state == 0){
                return ['status'=>0,'info'=>'用户已被封禁，请联系管理员!'];
            }

            //保存数据到数据库
            DB::table('users')->where('user_id','=',$user->user_id)
                ->update(['last_login_ip'=>($request->getClientIp() == '::1') ? '127.0.0.1' : $request->getClientIp(),
                    'last_login_time'=>time(),
                    'login_number'=> $user->login_number +1
                ]);
            session(['user'=>$user]);  //验证通过,并将用户信息存储到session中
            cache([$user->user_id=>$request->session()->getId()],config('sys.online_time'));
            return ['status'=>1,'info'=>'登录成功!'];
//            return view('public.jump',['status'=>1,'info'=>'登录成功！','url'=>'index']);
        }

        return view('admin.login.login');
    }

    /**
     * 登录超时重新登录
     * @action loginTimeout
     * @param Request $request
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function  loginTimeout(Request $request){
        $user = session('user');

        if ($request->isMethod('post')){

            if(Hash::check($request->password, $user->password)){
                //保存数据到数据库
                DB::table('users')->where('user_id','=',$user->user_id)
                    ->update([
                        'last_login_time'=>time(),
                        'login_number'=> $user->login_number +1
                    ]);

                Cache::put($user->user_id, $request->session()->getId(), config('sys.online_time'));
                return view('public.jump',['status'=>1,'info'=>'登录成功！','url'=>'/']);
            }
            return ['status'=>0,'info'=>'密码错误!'];
        }
        return view('admin.login.login_timeout',['user'=>$user]);

    }
    /**
     * @action logout 退出登录
     */
    public function logout(Request $request){
        Cache::forget(session('user')->user_id);
        $request->session()->forget('user');
        return view('public.jump',['status'=>1,'info'=>'退出成功！','url'=>'login']);
    }
}