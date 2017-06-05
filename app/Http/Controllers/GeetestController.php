<?php
/**
 * Created by PhpStorm.
 * User: chengyu
 * Date: 17/6/4
 * Time: 下午1:03
 */

namespace App\Http\Controllers;

use GeetestLib;

class GeetestController extends Controller
{
    public function getVerify(){
        //实例化并传入极验id与key值
        $GtSdk = new GeetestLib(config('sys.GEE_ID'), config('sys.GEE_KEY'));
        $user_id = "web";
        $status = $GtSdk->pre_process($user_id);
        $data = array(
            'gtserver'=>$status,
            'user_id'=>$user_id
        );
        session(['geetest'=>$data]);

        echo $GtSdk->get_response_str();
    }
    /**
     * 极验
     * @action geetest
     */
    public function geetest_check($geetest_challenge,$geetest_validate,$geetest_seccode){
        $geetest = session("geetest");
        $GtSdk = new GeetestLib(config('sys.GEE_ID'), config('sys.GEE_KEY'));
        $user_id = $geetest['user_id'];
        if ($geetest['gtserver'] == 1) {
            $result = $GtSdk->success_validate($geetest_challenge, $geetest_validate, $geetest_seccode, $user_id);
            if ($result) {
                return 1;
            } else{
                echo 0;
            }
        }else{
            if ($GtSdk->fail_validate($geetest_challenge, $geetest_validate, $geetest_seccode)) {
                echo 1;
            }else{
                echo 0;
            }
        }
    }
}