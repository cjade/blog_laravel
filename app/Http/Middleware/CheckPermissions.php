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
            return redirect('/login');
        }
        //登录超时
        if(!Cache::has(session('user')->user_id)){
            echo '登录超时';
        }
        //其它地址登录
        if(cache("$user->user_id") != $request->session()->getId()){
            echo '其它地址登录';
        }
        return $next($request);
    }
}
