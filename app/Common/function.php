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

/**
 * 获取操作系统
 */
if(! function_exists('getOS')){
    function getOS() {
        $os = '';
        $Agent = $_SERVER['HTTP_USER_AGENT'];
        if (preg_match('/win/i', $Agent) && strpos($Agent, '95')) {
            $os = 'Win 95';
        } elseif (preg_match('win 9x', $Agent) && strpos($Agent, '4.90')) {
            $os = 'Win ME';
        } elseif (preg_match('/win/i', $Agent) && preg_match('/98/i', $Agent)) {
            $os = 'Win 98';
        } elseif (preg_match('/win/i', $Agent) && preg_match('/nt 5.0/i', $Agent)) {
            $os = 'Win 2000';
        } elseif (preg_match('/win/i', $Agent) && preg_match('/nt 6.0/i', $Agent)) {
            $os = 'Win Vista';
        } elseif (preg_match('/win/i', $Agent) && preg_match('/nt 6.1/i', $Agent)) {
            $os = 'Win 7';
        } elseif (preg_match('/win/i', $Agent) && preg_match('/nt 5.1/i', $Agent)) {
            $os = 'Win XP';
        } elseif (preg_match('/win/i', $Agent) && preg_match('/nt 6.2/i', $Agent)) {
            $os = 'Win 8';
        } elseif (preg_match('/win/i', $Agent) && preg_match('/nt 6.3/i', $Agent)) {
            $os = 'Win 8.1';
        } elseif (preg_match('/win/i', $Agent) && preg_match('/nt 10/i', $Agent)) {
            $os = 'Win 10';
        } elseif (preg_match('/win/i', $Agent) && preg_match('/nt/i', $Agent)) {
            $os = 'Win NT';
        } elseif (preg_match('/win/i', $Agent) && preg_match('/32/i', $Agent)) {
            $os = 'Win 32';
        } elseif (preg_match('/Mi/i', $Agent)) {
            $os = '小米';
        } elseif (preg_match('/Android/i', $Agent) && preg_match('/LG/i', $Agent)) {
            $os = 'LG';
        } elseif (preg_match('/Android/i', $Agent) && preg_match('/M1/i', $Agent)) {
            $os = '魅族';
        } elseif (preg_match('/Android/i', $Agent) && preg_match('/MX4/i', $Agent)) {
            $os = '魅族4';
        } elseif (preg_match('/Android/i', $Agent) && preg_match('/M3/i', $Agent)) {
            $os = '魅族';
        } elseif (preg_match('/Android/i', $Agent) && preg_match('/M4/i', $Agent)) {
            $os = '魅族';
        } elseif (preg_match('/Android/i', $Agent) && preg_match('/Huawei/i', $Agent)) {
            $os = '华为';
        } elseif (preg_match('/Android/i', $Agent) && preg_match('/HM201/i', $Agent)) {
            $os = '红米';
        } elseif (preg_match('/Android/i', $Agent) && preg_match('/KOT/i', $Agent)) {
            $os = '红米4G版';
        } elseif (preg_match('/Android/i', $Agent) && preg_match('/NX5/i', $Agent)) {
            $os = '努比亚';
        } elseif (preg_match('/Android/i', $Agent) && preg_match('/vivo/i', $Agent)) {
            $os = 'Vivo';
        } elseif (preg_match('/Android/i', $Agent)) {
            $os = 'Android';
        } elseif (preg_match('/linux/i', $Agent)) {
            $os = 'Linux';
        } elseif (preg_match('/unix/i', $Agent)) {
            $os = 'Unix';
        } elseif (preg_match('/iPhone/i', $Agent)) {
            $os = 'iPhone';
        } else if (preg_match('/sun/i', $Agent) && preg_match('/os/i', $Agent)) {
            $os = 'SunOS';
        } elseif (preg_match('/ibm/i', $Agent) && preg_match('/os/i', $Agent)) {
            $os = 'IBM OS/2';
        } elseif (preg_match('/Mac/i', $Agent) && preg_match('/Macintosh/i', $Agent)) {
            $os = 'Mac OS X';
        } elseif (preg_match('/PowerPC/i', $Agent)) {
            $os = 'PowerPC';
        } elseif (preg_match('/AIX/i', $Agent)) {
            $os = 'AIX';
        } elseif (preg_match('/HPUX/i', $Agent)) {
            $os = 'HPUX';
        } elseif (preg_match('/NetBSD/i', $Agent)) {
            $os = 'NetBSD';
        } elseif (preg_match('/BSD/i', $Agent)) {
            $os = 'BSD';
        } elseif (preg_match('/OSF1/i', $Agent)) {
            $os = 'OSF1';
        } elseif (preg_match('/IRIX/i', $Agent)) {
            $os = 'IRIX';
        } elseif (preg_match('/FreeBSD/i', $Agent)) {
            $os = 'FreeBSD';
        } elseif ($os == '') {
            $os = 'Unknown';
        }
        return $os;
    }
}