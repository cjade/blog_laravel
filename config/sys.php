<?php
/**
 * 网站配置
 * Created by PhpStorm.
 * User: chengyu
 * Date: 17/4/6
 * Time: 下午9:48
 */

return [
    //后台访问域名，不用http://开头
    'sys_admin_domain' => 'admin.blog.com',

    //博客访问域名
    'sys_blog_domain' => [
        'www.blog.com',
        'blog.com'
    ],

    //博客访问域名无前缀
    'sys_blog_nopre_domain' => 'blog.com',

    //分页每页显示条数
    'page'=>'10',
];