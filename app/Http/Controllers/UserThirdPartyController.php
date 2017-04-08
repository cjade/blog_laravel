<?php
/**
 * 第三方登录
 * Created by PhpStorm.
 * User: chengyu
 * Date: 17/4/8
 * Time: 下午3:40
 */

namespace App\Http\Controllers;
use App\Http\Models\User;
use App\Http\Models\UserThirdParty;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\DB;


class UserThirdPartyController extends Controller
{
    /**
     * 将用户重定向到GitHub认证页面
     */
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }
    /**
     * 从GitHub获取认证用户信息
     */
    public function handleProviderCallback(Request $request)
    {
        $user = Socialite::driver('github')->user();
        $userThirdParty = new UserThirdParty();
        $res = $userThirdParty->where([
            ['third_party_id','=',$user['id']],
            ['third_party_type','=','1']
        ])->first();
        //判断是否第一次登录 不是就写入数据
        if(!$res){
            $users = new User();
            $uemail = $users->where([
                ['user_email','=',$user['email']]])->first();
            //查看有没有账号
            if($uemail){
                $userThirdParty->third_party_id = $user->id;
                $userThirdParty->nickname = $user->nickname;
                $userThirdParty->third_party_email = $user->email;
                $userThirdParty->avatar = $user->avatar;
                $userThirdParty->third_party_type = 1;
                $userThirdParty->user_id = $uemail['user_id'];
                //写进第三方表
                if($userThirdParty->save()){
                    echo '登录成功';
                }
            }else{
                try {
                    DB::beginTransaction();


                    $nic = $users->where([
                        ['nickname', '=', $user->nickname],
                        ['type', '=', '2']
                    ])->first();
                    //查看用户表里有没有该昵称
                    if ($nic) {
                        $user_id = DB::table('users')->insertGetId([
                            'nickname'=> $user->nickname.'_github_'.rand(100000,999999),
                            'avatar' => $user->avatar,
                            'user_email' =>  $user->email,
                            'type' => 2,
                            'last_login_time' => time(),
                            'created_at' => time(),
                            'updated_at' => time(),
                            'last_login_ip' =>($request->getClientIp() == '::1') ? '127.0.0.1' : $request->getClientIp()
                        ]);
                    } else {
                        $user_id = DB::table('users')->insertGetId([
                            'nickname'=> $user->nickname,
                            'avatar' => $user->avatar,
                            'user_email' =>  $user->email,
                            'type' => 2,
                            'last_login_time' => time(),
                            'created_at' => time(),
                            'updated_at' => time(),
                            'last_login_ip' =>($request->getClientIp() == '::1') ? '127.0.0.1' : $request->getClientIp()
                        ]);

                    }
                    $userThirdParty->third_party_id = $user->id;
                    $userThirdParty->nickname = $user->nickname;
                    $userThirdParty->third_party_email = $user->email;
                    $userThirdParty->avatar = $user->avatar;
                    $userThirdParty->third_party_type = 1;
                    $userThirdParty->user_id = $user_id;
                    $userThirdParty->save();//写进第三方表

                    DB::commit();
                    echo '提交成功。';
                }catch (\Exception $exception){
                    DB::rollBack();
                    echo $exception->getMessage();
                }
            }


        }else{

        }

    }
}