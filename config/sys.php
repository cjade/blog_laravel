<?php
/**
 * 网站配置
 * Created by PhpStorm.
 * User: chengyu
 * Date: 17/4/6
 * Time: 下午9:48
 */

return [
    //在线时间
    'online_time' => '60',//分钟
    //是否开启动态密码校验
    'auth_password_check'=>true,
    //程序版本号
    'PROGRAM_VERSION'=>'v1.0.0',
    //框架
    'FRAMEWORK_VERSION' => 'Laravel5.4 ',
    //百度开发API KEY
    'BAIDU_APIKEY'=>'6RugHStc4rBYHikvKizUbQglhyDQ0N5h',
    //后台访问域名，不用http://开头
    'sys_admin_domain' => 'admin.blog.com',

    //博客访问域名
    'sys_domain' => 'www.blog.com',

    //分页每页显示条数
    'page'=>'10',
];