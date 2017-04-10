<?php
/**
 * Created by PhpStorm.
 * User: chengyu
 * Date: 17/4/10
 * Time: 上午11:32
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class PublicController extends Controller
{
    /**
     * 跳转页面
     * @action jump
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function jump()
    {
        return view('public.jump',['status'=>session('url'),'info'=>session('info'),'url'=>session('url')]);
    }
}