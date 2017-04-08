<?php
/**
 * Created by PhpStorm.
 * User: chengyu
 * Date: 17/4/6
 * Time: 下午9:58
 */

/**
 * @action PeriodTime 时间段
 */
function PeriodTime(){
    $h =  date('H');
    if($h<5){
        $hello = '凌晨好';
    }elseif ($h<8){
        $hello = '早晨好';
    }elseif($h<11){
        $hello = '上午好';
    }elseif($h<13){
        $hello = '中午好';
    }elseif($h<16){
        $hello = '下午好';
    }elseif($h<19){
        $hello = '傍晚好';
    }else{
        $hello = '晚上好';
    }

    return $hello;
}

/**
 * @action address 获取地址
 */
function address(){
    $apiKey = config('sys.BAIDU_APIKEY');
    $content = file_get_contents("http://api.map.baidu.com/location/ip?ak=$apiKey&coor=bd09ll");
//    echo address()->content->address; //
    return json_decode($content);
}