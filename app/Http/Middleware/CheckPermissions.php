<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class CheckPermissions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = session('user');
        //验证是否登录
        if (empty($user)){
            return redirect('jump')->with(['status'=>0,'info'=>'请登录！','url'=>'login']);
        }
        //登录超时
        if(!Cache::has(session('user')->user_id)){
            return redirect('jump')->with(['status'=>0,'info'=>'登录超时，请重新登录！','url'=>'loginTimeout']);
        }
        //其它地址登录
        if(cache("$user->user_id") != $request->session()->getId()){
            return redirect('jump')->with(['status'=>0,'info'=>'您的账号在别的地方登录了，请重新登录！','url'=>'login']);
        }
        if(config('sys.auth_password_check')){
            if(!$this->auth_password_check()){
                return redirect('jump')->with(['status'=>0,'info'=>'登录失效:用户密码已更改!','url'=>'login']);
            }
        }
        return $next($request);
    }
    /**
     * [auth_password_check 动态密码校验]
     * 应用场景：修改密码后，使其它地方登录的账号进行操作时使账号失效
     * @return [type] [description]
     */
    public function auth_password_check(){
        $use = DB::table('users')->where([
            ['user_id','=',session('user')->user_id],
            ['password','=',session('user')->password]
        ])->first();
        if (empty($use)) {
            //注销当前账号
            session('user',null);
            return false;
        }
        return true;
    }
}
