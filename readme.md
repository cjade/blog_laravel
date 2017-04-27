## Mcoo

![macbook](https://raw.githubusercontent.com/cjade/blog_laravel/master/screen.jpg)


本项目使用 PHP 框架 [Laravel 5.4](https://doc.laravel-china.org/docs/5.4/) 进行开发。 
项目依赖了部分云服务，如图片使用了七牛云储存。（目前必须，暂时没有加入本地存储图片的功能）    
系统后台使用了Vuejs + Element-UI实现前后端分离 


### 博客功能具有以下功能

- 分类管理
- 文章管理
- 标签管理
- 评论管理
- 导航管理
- Redis 缓存
- 好用的 Simplemde Markdown 编辑器

更多功能欢迎大家自己挖掘，或者有好的意见和建议欢迎拍砖。


## 项目概述

* 项目名称：Mcoo
* 项目运行地址：http://mcoo.me

[Mcoo](https://github.com/cjade/blog_laravel) 基于Laravel 5.4 版本开发。

## 目前运行环境

- Nginx 1.8+
- PHP 7.1+
- MySQL 5.7+
- Redis 3.0+

## 部署/安装

需要在系统上安装了基本的PHP运行环境、PHP包管理工具composer、Nodejs进行前端资源打包

### 基础安装

#### 1. 克隆源代码

克隆源代码到本地：

    > git clone https://github.com/cjade/blog_laravel.git

#### 2. 安装扩展包依赖

    > composer install

#### 4. 生成配置文件

    > cp .env.example .env



### 前后台入口

> 如果要开启调试模式，请修改 `.env` 文件， `APP_ENV=local` 和 `APP_DEBUG=true` 。

* 首页地址：http://mcoo.me/
* 管理后台：http://admin.mcoo.com/

默认用户名：test@test.com
密码：111111

至此, 安装完成。




