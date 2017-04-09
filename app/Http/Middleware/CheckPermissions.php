<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cache;

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
            return redirect('login');
        }
        //登录超时
        if(!Cache::has(session('user')->user_id)){
            return view('public.jump',['status'=>0,'info'=>'登录超时，请重新登录！','url'=>'loginTimeout']);
        }
        //其它地址登录
        if(cache("$user->user_id") != $request->session()->getId()){
            return view('public.jump',['status'=>0,'info'=>'您的账号在别的地方登录了，请重新登录！','url'=>'login']);
        }
        return $next($request);
    }
}
